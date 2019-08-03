<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Matiere;
use App\models\disponibilite;
use App\models\emploiDeTemp;
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


            $resultat=DB::table('emploi_de_temps')
            ->join('comptes','comptes.id','=','emploi_de_temps.compte')
            ->select('emploi_de_temps.classe','emploi_de_temps.jour','emploi_de_temps.matiere',
                     'emploi_de_temps.tranche','emploi_de_temps.compte','emploi_de_temps.created_at','comptes.nom')
            ->where([
                ['emploi_de_temps.classe',$utilisateur->classe]
                ])
            ->orderBy('emploi_de_temps.jour')
            ->get();

            //return $resultat;


            $resultatprof=DB::table('emploi_de_temps')
            ->join('comptes','comptes.id','=','emploi_de_temps.compte')
            ->select('emploi_de_temps.classe','emploi_de_temps.jour','emploi_de_temps.matiere',
                     'emploi_de_temps.tranche','emploi_de_temps.compte')
            ->where([
                ['emploi_de_temps.compte',$utilisateur->id]
                ])
            ->get();

            //return $resultatprof;


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
        return view('index/emploi',compact('resultat','resultatprof','passe','nombre','utilisateur','niveau','filiere','init','classe','remplisseur','classe'));



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


        $resultatprof=DB::table('emploi_de_temps')
->join('comptes','comptes.id','=','emploi_de_temps.compte')
->select('emploi_de_temps.classe','emploi_de_temps.jour','emploi_de_temps.matiere',
         'emploi_de_temps.tranche','emploi_de_temps.compte')
->where([
    ['emploi_de_temps.compte',$utilisateur->id]
    ])
->get();

        return view('index/emploi',compact('resultat','resultatprof','passe','nombre','utilisateur','niveau','filiere','init','classe','remplisseur'));

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


        $testeurEmpl=DB::table('emploi_de_temps')
        ->select('jour','classe','matiere','tranche','compte')
        ->where([
            ['classe','<>',$request->classe],
            ])
        ->get();
  //return $testeurEmpl;
        $test=false;
        $testeur='';

        $emploiTemp=DB::table('matieres')
        ->join('comptes','comptes.id','=','matieres.compte')
        ->select('matieres.nom','comptes.nom as nom_prof','matieres.compte','matieres.classe')
        ->where([
            ['matieres.classe',$request->classe],
            ])
        ->get();

//return $emploiTemp;
        $disponibilite=DB::table('disponibilites')
        ->join('comptes','comptes.id','=','disponibilites.compte')
        ->select('jour','compte')
        ->get();

//return $disponibilite;

$resultatprof=DB::table('emploi_de_temps')
->join('comptes','comptes.id','=','emploi_de_temps.compte')
->select('emploi_de_temps.classe','emploi_de_temps.jour','emploi_de_temps.matiere',
         'emploi_de_temps.tranche','emploi_de_temps.compte')
->where([
    ['emploi_de_temps.compte',$utilisateur->id]
    ])
->get();

        $passe=true;
        return view('index/emploi',compact('resultat','resultatprof','test','testeur','passe','testeurEmpl','nombre','disponibilite','emploiTemp','utilisateur','niveau','filiere','init','classe','remplisseur','classe'));


    }

    public function sauvegarder(insererNoteRequest $request){





        $utilisateur=auth()->user();
        if (auth()->guest()) {
            Flashy::success('Connectez vouz');
            return redirect()->route('home');
            }



            emploiDeTemp::whereClasse($request->classe)->delete();

            $jour = array('LUNDI','MARDI','MERCREDI','JEUDI','VENDREDI','SAMEDI' );
            // echo $_POST["$jour[0]matiere0"]."<br>".$_POST["$jour[0]matiere1"]."<br>".$_POST["$jour[0]matiere2"]."<br>" ;
            //$aexplo=explode("-",$_POST["$jour[5]matiere1"]);
            //return $aexplo[1];
            $newEDT=false;
             for ($i=0; $i <6 ; $i++) {
                 if(($jour[$i]=='MERCREDI') || ($jour[$i]=='SAMEDI')){
                    for ($a=0; $a <2 ; $a++) {
                    $aexplo=explode("-",$_POST["$jour[$i]matiere$a"]);
                    if (sizeOf($aexplo)<=1) {

                    } else {
                        $newEDT=emploiDeTemp::create([

                            'classe'=>$request->classe,
                            'jour'=>$jour[$i],
                            'compte'=>$aexplo[0],
                            'matiere'=>$aexplo[1],
                            'tranche'=>$a+1,

                     ]);
                    }
                }}
                 else {
                    for ($a=0; $a <3 ; $a++) {
                        $aexplo=explode("-",$_POST["$jour[$i]matiere$a"]);
                        if (sizeOf($aexplo)<=1) {

                        } else {
                            $newEDT=emploiDeTemp::create([

                                'classe'=>$request->classe,
                                'jour'=>$jour[$i],
                                'compte'=>$aexplo[0],
                                'matiere'=>$aexplo[1],
                                'tranche'=>$a+1,

                         ]);
                        }


                    }
                 }


            }

            if($newEDT){
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
        Flashy::error('Emploi de temps enregistré avec succès');
        return redirect()->route('generer_edt_path',compact('resultat','passe','nombre','utilisateur','niveau','filiere','init','classe','remplisseur','classe'));
            }else {
        Flashy::error('Emploi de temps vidé avec succès');
        return redirect()->route('generer_edt_path',compact('resultat','passe','nombre','utilisateur','niveau','filiere','init','classe','remplisseur','classe'));

                }

    }
}
