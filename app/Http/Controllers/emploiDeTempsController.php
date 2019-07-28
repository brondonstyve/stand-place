<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Matiere;
use App\models\disponibilite;
use App\Http\Requests\insererNoteRequest;
use Illuminate\Support\Facades\DB;
use MercurySeries\Flashy\Flashy;


class emploiDeTempsController extends Controller
{


    public function genererEDT(){

        $utilisateur=auth()->user();
        if (auth()->guest()) {
            Flashy::success('Connectez vouz');
            return redirect()->route('home');
            }

            $passe=false;
            $remplisseur=DB::table('disponibilites')
            ->join('comptes','comptes.id','=','disponibilites.compte')
            ->select('comptes.nom','disponibilites.jour')
            ->where([
                ['disponibilites.compte',$utilisateur->id  ],

                ])
            ->get();




        $classe=DB::table('comptes')
        ->select('comptes.classe')
        ->distinct()
        ->where([
            ['type',null],
            ['classe','<>','null']
        ])
        ->get();
        return view('index/emploi',compact('resultat','passe','nombre','utilisateur','niveau','filiere','init','classe','remplisseur','classe'));



    }


    public function disponibilite(){
        if (auth()->guest()) {
            Flashy::success('Connectez vouz');
            return redirect()->route('home');
            }

            $utilisateur=auth()->user();
            $passe=false;


            disponibilite::whereCompte($utilisateur->id)->delete();

                for ($i=1; $i <7 ; $i++) {
                    if (isset($_POST["jour$i"])) {
                        disponibilite::create([
                            'compte'=>$utilisateur->id,
                            "jour"=>$_POST["jour$i"],
                            ]);
                    }
                 }

                 $remplisseur=DB::table('disponibilites')
                 ->join('comptes','comptes.id','=','disponibilites.compte')
                 ->select('comptes.nom','disponibilites.jour')
                 ->where([
                     ['disponibilites.compte',$utilisateur->id  ],

                     ])
                 ->get();


            $niveau=$utilisateur->niveau;
        $filiere=$utilisateur->filiere;
        $resultat=Matiere::whereClasse($filiere.$niveau)->get();
        $nombre=Matiere::whereClasse($filiere.$niveau)->count();
        if ($filiere=='sr') {
            $init=0;
        } else {
            if ($filiere=='se') {
                $init=1;
            } else {
                $init=2;
            }

        }

        $classe=DB::table('comptes')
        ->select('comptes.classe')
        ->distinct()
        ->where([
            ['type',null],
            ['classe','<>','null']
        ])
        ->get();
        //dd($nombre);

        return view('index/emploi',compact('resultat','passe','nombre','utilisateur','niveau','filiere','init','classe','remplisseur'));

    }

    public function remplir(insererNoteRequest $request){

        $utilisateur=auth()->user();
        if (auth()->guest()) {
            Flashy::success('Connectez vouz');
            return redirect()->route('home');
            }


            $remplisseur=DB::table('disponibilites')
                 ->join('comptes','comptes.id','=','disponibilites.compte')
                 ->select('comptes.nom','disponibilites.jour')
                 ->where([
                     ['disponibilites.compte',$utilisateur->id  ],

                     ])
                 ->get();

        $classe=DB::table('comptes')
        ->select('comptes.classe')
        ->distinct()
        ->where([
            ['type',null],
            ['classe','<>','null']
        ])
        ->get();

        $emploiTemp=DB::table('matieres')
        ->join('comptes','comptes.id','=','matieres.compte')
        ->select('matieres.nom','comptes.nom as nom_prof')
        ->where([
            ['matieres.classe',$request->classe],
            ])
        ->orWhere([
            ['matieres.nom','']
            ])
        ->get();

        $statute=DB::table('disponibilites')
        ->join('comptes','comptes.id','=','disponibilites.compte')
        ->distinct()
        ->select('jour')
        ->where([
            ['disponibilites.compte',$utilisateur->id]
        ])
        ->get();

return $statute;

        $passe=true;
        return view('index/emploi',compact('resultat','passe','nombre','emploiTemp','utilisateur','niveau','filiere','init','classe','remplisseur','classe'));


    }

    public function sauvegarder(insererNoteRequest $request){
        $utilisateur=auth()->user();
        if (auth()->guest()) {
            Flashy::success('Connectez vouz');
            return redirect()->route('home');
            }

             echo $request->LUNDImatiere0."<br>".$request->LUNDImatiere1."<br>".$request->LUNDImatiere2."<br>" ;
             echo $request->MARDImatiere0."<br>".$request->MARDImatiere1."<br>".$request->MARDImatiere2."<br>" ;
    }
}
