<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\noteRequest;
use App\models\Appel;
use App\models\cahier;
use MercurySeries\Flashy\Flashy;

class appelctController extends Controller
{
    public function afficher(){

        try {
            DB::connection()->getPdo();
          } catch (\Throwable $th) {
           return view('errors/errorbd');
          }

        if (auth()->guest()) {
            Flashy::success('Connectez vouz');
            return redirect()->route('home');
            }
         $utilisateur=auth()->user();

         $classe=DB::table('matieres')
         ->join('comptes','comptes.id','=','matieres.compte')
         ->select('matieres.nom','matieres.classe','matieres.semestre','matieres.compte','matieres.id','comptes.filiere','comptes.niveau')
         ->whereCompte($utilisateur->id)
         ->get();


        $ouverture=false;
        $absence=false;

            return view ('index/appelCt',compact('utilisateur','note','nombre','classe','nombreclasse','ouverture','absence'));


    }

    public function remplirAbsence(noteRequest $request){

        try {
            DB::connection()->getPdo();
          } catch (\Throwable $th) {
           return view('errors/errorbd');
          }

        $utilisateur=auth()->user();

         $id=$request->id;
         $classe=$request->classe;
         $class=$request->classe;




//return $remplisseurc;


         $classe=DB::table('matieres')
            ->join('comptes','comptes.id','=','matieres.compte')
            ->select('matieres.nom','matieres.classe','matieres.semestre','matieres.compte','matieres.id','comptes.filiere','comptes.niveau')
            ->whereCompte($utilisateur->id)
            ->get();

            $remplisseur=DB::table('appels')
            ->join('comptes','comptes.id','=','appels.compte')
            ->join('matieres','appels.matiere','=','matieres.id')
            ->select('matieres.nom','comptes.nom as nom_prof',DB::raw('sum(absence) as abs'),'comptes.nom as nomE','comptes.prenom','comptes.classe')
            ->groupBy('appels.compte','appels.matiere')
            ->where([
                ['appels.matiere',$id  ],
                ['comptes.classe',$class],

                ])
            ->get();

            $remplisseurCahier=DB::table('cahiers')
            ->join('comptes','comptes.id','=','cahiers.compte')
            ->join('matieres','cahiers.matiere','=','matieres.id')
            ->select('matieres.nom','matieres.classe','cahiers.libelle','cahiers.created_at')
            ->where([
                ['cahiers.matiere',$id  ],
                ['cahiers.compte',$utilisateur->id],

                ])
            ->get();

            //return $remplisseurCahier;



            $liste=DB::table('comptes')
            ->where([

                ['comptes.classe',$request->classe]
                ])
                ->get();

            $listec=DB::table('comptes','appels')
            ->where([
                ['comptes.classe',$request->classe]
                ])
            ->count();


            $ouverture=true;
            $absence=true;
            return view('index/appelCt',compact('utilisateur','absence','class','note','nombre','classe','nombreclasse','liste','listec','ouverture','id','remplisseur','remplisseurCahier'));

    }

    public function insererAbsence(){


        try {
            DB::connection()->getPdo();
          } catch (\Throwable $th) {
           return view('errors/errorbd');
          }

          if ($_POST["id_matiere0"]=='') {
            Flashy::success('Veuillez remplir le cahier de texte');
            return back();
          }


        $a=0;

        $utilisateur=auth()->user();


          $classe=DB::table('matieres')
          ->join('comptes','comptes.id','=','matieres.compte')
          ->select('matieres.nom','matieres.classe','matieres.semestre','matieres.compte','matieres.id','comptes.filiere','comptes.niveau')
          ->whereCompte($utilisateur->id)
          ->get();


         $ouverture=false;
         $absence=false;
         $nom=$utilisateur->nom;

        while ($a < $_POST['compteur']) {


            if (isset($_POST["absence$a"])) {
                $enregistrement=Appel::create([
                    'compte'=>$_POST["id_compte$a"],
                    'matiere'=>$_POST["id_matiere$a"],
                    'nom_prof'=>$nom,
                    'absence'=>$_POST["absence$a"],

                  ]);
            } else {
                $enregistrement=true;
            }
            $a++;
        }

        $enregistrement1=cahier::create([
            'compte'=>$utilisateur->id,
            'matiere'=>$_POST["id_matiere0"],
            'libelle'=>$_POST["libelle"],

          ]);

          if ($enregistrement && $enregistrement1) {
              Flashy::success('L\'appel a été correctement enregistrées');
              return  redirect()->route('appel_ct_path',compact('utilisateur','absence','note','nombre','classe','nombreclasse','ouverture'));
          } else {
              Flashy::success('Erreur d\'enregistrement');
              return  redirect()->route('appel_ct_path',compact('utilisateur','absence','note','nombre','classe','nombreclasse','ouverture'));
          }


    }


}
