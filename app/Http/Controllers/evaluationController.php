<?php

namespace App\Http\Controllers;

use MercurySeries\Flashy\Flashy;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\passePartout;
use App\models\epreuve;
use App\models\evaluation;


class evaluationController extends Controller
{

    //--Charger la page evaluation
    public function evaluation(){
        $utilisateur=auth()->user();
        if(auth()->guest()){
            Flashy::error('Connectez vous');
            return \redirect()->route('home');
        }
            if ($utilisateur->type=="enseignant") {

                 $classe_mat=DB::table('matieres')
                 ->select('nom','classe')
                 ->whereCompte($utilisateur->id)
                 ->get();

                 $epreuve=DB::table('epreuves')
                 ->where([
                     ['compte',$utilisateur->id],
                     ])
                 ->orderBy('updated_at','desc')
                 ->get();

                 $prof=DB::table('comptes')
                 ->select('id','nom','prenom')
                 ->where([
                     ['type','enseignant'],
                     ['id','<>',$utilisateur->id]
                     ])
                 ->get();

                 $evaluation=DB::table('evaluations')
                 ->join('epreuves','epreuves.id','=','evaluations.epreuve')
                 ->select('evaluations.id','evaluations.compte','evaluations.libelle','evaluations.statut','evaluations.class_mat',
                 'epreuves.editeur','epreuves.matiere','epreuves.reponse','epreuves.epreuve','epreuves.dure')
                 ->where([
                    ['evaluations.compte',$utilisateur->id],
                    ])
                ->orderBy('evaluations.updated_at','desc')
                ->get();
               // return $evaluation;
            }

     //Changement déetats
     $createForm=true;
     $createEpreuve=false;
      return view('index/evaluation',compact('utilisateur','classe_mat','createForm','createEpreuve','epreuve','prof','evaluation'));
    }


    //--generateur d'epreuve
    public function generateur(passePartout $request){
        $utilisateur=auth()->user();
          if (auth()->guest()) {
              Flashy::error('Connectez vous');
              return \redirect()->route('home');
          }

          $matiere_classe=\explode('->',$request->matiere);
          $libelle=$request->libelle;
          $dure=$request->dure;
          $nbre_k=$request->nbre_kuestion;



          //Changement déetats
          $createForm=false;
          $createEpreuve=true;
          //dd($matiere.$libelle.$dure.$nbre_K);
          return view('index/evaluation',compact('utilisateur','createForm','createEpreuve','libelle','dure','nbre_k','matiere_classe'));
    }

     //--Enregistrer epreuve
    public function enregistrer(passePartout $request){
        if (auth()->guest()) {
            Flashy::error('Connectez vous');
            return \redirect()->route('home');
        }
        $utilisateur=auth()->user();
        $reponse='';
        $fichier= $request->file('fichier');
        $fichierCheminPublic = '/public/epreuve/';
        $nomFichier=time().$fichier->getClientOriginalName();
        $stockage=$fichier->storeAs($fichierCheminPublic,$nomFichier);
        $nom=$utilisateur->nom.' '.$utilisateur->prenom;

        for ($i=0; $i <$request->nbre ; $i++) {
            $reponse=$reponse.$_POST["kcm$i"].'.';
        }

        $eval=epreuve::create([
            'compte'=>$utilisateur->id,
            'editeur'=>$nom,
            'matiere'=>$request->matiere,
            'classe'=>$request->classe,
            'epreuve'=>$nomFichier,
            'reponse'=>$reponse,
            'libelle'=>$request->libelle,
            'dure'=>$request->dure,
        ]);

        if ($eval && $stockage) {
            Flashy::success('épreuve crée avec succès');
            return redirect()->route('evaluation_path');
        } else {
            Flashy::success('échec de');
            return redirect()->route('evaluation_path');
        }
    }

    //--Envoyer epreuve
    public function envoyerEpreuve(passePartout $request){
        if (auth()->guest()) {
            Flashy::error('Connectez vous');
            return \redirect()->route('home');
        }

        $prof_id_nom=explode('-',$request->path_prof);


        $test_Dispo_Epreuve=epreuve::where([
            ['epreuve',$request->nomEpreuve],
            ['compte',$prof_id_nom[0]],
            ])
            ->get();
        if ( sizeOf($test_Dispo_Epreuve)==1) {
            Flashy::error('l\'enseignant '.$request->nom. 'a déjà à sa disposition cette epreuve');
            return redirect()->route('evaluation_path');
        }




        $replikeur=epreuve::find($request->idEpreuve);
        $replikeur=$replikeur->replicate();
        $replikeur->compte=$prof_id_nom[0];
        $replikeur->classe='';
        $resultat=$replikeur->save();
        if ($resultat) {
            Flashy::success('Fichier envoyé avec succès');
            return redirect()->route('evaluation_path');
        } else {
            Flashy::error('échec!!');
            return redirect()->route('evaluation_path');
        }

    }

    //--supprimer epreuve
    public function supprimerEpreuve(passePartout $request){
        if (auth()->guest()) {
            Flashy::error('Connectez vous');
            return \redirect()->route('home');
        }
        $id=$_GET["path_directori"];
        $epreuveSup=DB::table('epreuves')
        ->whereId($id)
        ->delete();

        if ($epreuveSup) {
            Flashy::success('épreuve supprimé');
            return redirect()->route('evaluation_path');
        } else {
            Flashy::error('erreur de suppression');
            return redirect()->route('evaluation_path');
        }
     }


     //--Créer l'évaluation dune classe
     public function evaluerClasse(){
        if (auth()->guest()) {
            Flashy::error('Connectez vous');
            return \redirect()->route('home');
        }
        $utilisateur=auth()->user();


        $evaluation=DB::table('epreuves')
        ->whereId($_GET["path_directori"])
        ->get();

        $classe_mat=DB::table('matieres')
        ->select('nom','classe')
        ->whereCompte($utilisateur->id)
        ->get();

        $test=false;
        $test1=true;
          return view('index/epreuve',compact('utilisateur','evaluation','classe_mat','test','test1'));
     }


     //--enregistrer une evaluation
     public function enregistrerEvalution(passePartout $request){
        if (auth()->guest()) {
            Flashy::error('Connectez vous');
            return \redirect()->route('home');
        }
        $utilisateur=auth()->user();

        DB::table('epreuves')
        ->whereId($request->idEpreuve)
        ->update([
                 'libelle'=>$request->libelle,
                 'dure'=>$request->dure,
        ]);


if ($request->compteur>0) {
    $matiere='';
    for ($i=0; $i <$request->compteur ; $i++) {
        if (!empty($_POST["classe$i"])) {
            $classe_mat=explode('->',$_POST["classe$i"]);
            $env=evaluation::where([
                ['libelle',$request->libelle],
                ['compte',$utilisateur->id],
                ['class_mat',$_POST["classe$i"] ],
                ['epreuve',$request->idEpreuve],
            ])
            ->get();


            if (sizeOf($env)!=0) {
                $test=true;
                $decomp=explode('->',$_POST["classe$i"]);
               $matiere=$matiere.$decomp[0].' en '.$decomp[1];
            } else {
                $test=false;
                $evaluation=evaluation::create([
                    'compte'=>$utilisateur->id,
                    'epreuve'=>$request->idEpreuve,
                    'class_mat'=>$_POST["classe$i"],
                    'libelle'=>$request->libelle,
                ]);
            }



        }
    }

    if ($test) {
        Flashy::error('detection déexistance!! l\'évaluation de '.$matiere.' existe deja');
        return redirect()->route('evaluation_path');
    }

    if($evaluation){
        Flashy::success('évaluation enregistrée ,');
        return redirect()->route('evaluation_path');
    } else {
        Flashy::error('erreur de suppression');
        return redirect()->route('evaluation_path');
    }

}
else {
    Flashy::error('veuillez selectionner une classe');
    return back();
}


     }



    // supprimer une evaluation
     public function supprimerEvaluation(passePartout $request){
        if (auth()->guest()) {
            Flashy::error('Connectez vous');
            return \redirect()->route('home');
        }


        $id=$_GET["path_direc"];
        $evaluation=DB::table('evaluations')
        ->whereId($id)
        ->delete();

        if ($evaluation) {
            Flashy::success('évaluation supprimé');
            return redirect()->route('evaluation_path');
        } else {
            Flashy::error('erreur de supp ression');
            return redirect()->route('evaluation_path');
        }
     }


     //--modifier une evaluation
     public function modifierEvaluation(){


        if (auth()->guest()) {
            Flashy::error('Connectez vous');
            return \redirect()->route('home');
        }
        $utilisateur=auth()->user();


        $modif_evaluation=DB::table('evaluations')
        ->join('epreuves','epreuves.id','=','evaluations.epreuve')
        ->where([
            ['evaluations.id',$_GET["path_directrieRetry"] ]

            ])
        ->get();

        $classe_mat=DB::table('matieres')
        ->select('nom','classe')
        ->whereCompte($utilisateur->id)
        ->get();

        $test=true;
        $test1=false;

          return view('index/epreuve',compact('utilisateur','test','test1','modif_evaluation','classe_mat'));

     }
}
