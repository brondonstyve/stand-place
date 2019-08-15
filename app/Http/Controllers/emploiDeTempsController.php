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

        try {
            DB::connection()->getPdo();
          } catch (\Throwable $th) {
           return view('errors/errorbd');
          }

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

        $jour_dispo=disponibilite::where([
            ['compte',$utilisateur->id],
        ])
        ->get();


       $test=true;
        return view('index/emploi',compact('resultat','resultatprof','test','passe','jour_dispo','nombre','utilisateur','niveau','filiere','init','classe','remplisseur','classe'));



    }


    public function disponibilite(){


        try {
            DB::connection()->getPdo();
          } catch (\Throwable $th) {
           return view('errors/errorbd');
          }

          $utilisateur=auth()->user();
          $passe=false;
        if (auth()->guest()) {
            Flashy::success('Connectez vouz');
            return redirect()->route('home');
            }


//remplisseur de disponibilités
            $jour_dispo=disponibilite::where([
            ['compte',$utilisateur->id],
            ])
           ->get();

           $resultat_final=false;
           $taille_tab=0;
            $jour = array('LUNDI','MARDI','MERCREDI','JEUDI','VENDREDI','SAMEDI' );
//s'il n'était pas dispo

            if (sizeOf($jour_dispo)==0) {

                for ($i=0; $i <sizeOf($jour) ; $i++) {
                    if ($jour[$i]=='MERCREDI' || $jour[$i]=='SAMEDI') {
                        for ($u=1; $u <3 ; $u++) {
                            if (isset($_POST["$jour[$i]tranche$u"])) {
                                $resultat_final= disponibilite::create([
                                        'compte'=>$utilisateur->id,
                                        'jour'=>$_POST["nom_jour$i"],
                                        'tranche'=>$_POST["$jour[$i]tranche$u"],
                                        ]);
                                    echo $jour[$i].' '.$u.'existe pas<br>';
                            }
                        }
                    } else {
                        for ($u=1; $u <4 ; $u++) {
                            if (isset($_POST["$jour[$i]tranche$u"])) {
                                $resultat_final= disponibilite::create([
                                        'compte'=>$utilisateur->id,
                                        'jour'=>$_POST["nom_jour$i"],
                                        'tranche'=>$_POST["$jour[$i]tranche$u"],
                                        ]);
                                    echo $jour[$i].' '.$u.'existe pas<br>';
                            }
                        }
                    }


                }

                if ($resultat_final) {
                    Flashy::success('disponibilité mis à jour avec succès');
                    return redirect()->route('disponibilite_edt_path');

                }
            }
//s'il est dispo
            else

            {
                $suppression='';

                for ($i=0; $i <sizeOf($jour) ; $i++) {
//jours court:mercredi et samedi

                    if ($jour[$i]=='MERCREDI' || $jour[$i]=='SAMEDI') {
                        for ($u=1; $u <3 ; $u++) {
                            if (isset($_POST["$jour[$i]tranche$u"])) {
                                for ($insert_inteligent=0; $insert_inteligent <sizeOf($jour_dispo) ; $insert_inteligent++) {
                                    $exist_pas=false;
                                    if ($_POST["nom_jour$i"]==$jour_dispo[$insert_inteligent]->jour) {
                                        if ($jour_dispo[$insert_inteligent]->tranche==$_POST["$jour[$i]tranche$u"]) {
//existe';
                                        $suppression=$suppression.$jour[$i].'-'.$u.'-';
                                         break;
                                        }else {
                                            $exist_pas=true;
                                         }

                                    }else {
                                        $exist_pas=true;
                                    }
                                    $suppression=$suppression.$jour[$i].'-'.$u.'-';
                                }

                                if ($exist_pas) {
                                    disponibilite::create([
                                        'compte'=>$utilisateur->id,
                                        'jour'=>$_POST["nom_jour$i"],
                                        'tranche'=>$_POST["$jour[$i]tranche$u"],
                                        ]);

//'existe pas;
                                }
                            }
                        }
                    }else{
                        for ($u=1; $u <4 ; $u++) {
                            if (isset($_POST["$jour[$i]tranche$u"])) {
                                for ($insert_inteligent=0; $insert_inteligent <sizeOf($jour_dispo) ; $insert_inteligent++) {
                                    $exist_pas=false;
                                    if ($_POST["nom_jour$i"]==$jour_dispo[$insert_inteligent]->jour) {
                                        if ($jour_dispo[$insert_inteligent]->tranche==$_POST["$jour[$i]tranche$u"]) {
//existe';
                                        $suppression=$suppression.$jour[$i].'-'.$u.'-';
                                         break;
                                        }else {
                                            $exist_pas=true;
                                         }

                                    }else {
                                        $exist_pas=true;
                                    }
                                    $suppression=$suppression.$jour[$i].'-'.$u.'-';
                                }

                                if ($exist_pas) {
                                    disponibilite::create([
                                        'compte'=>$utilisateur->id,
                                        'jour'=>$_POST["nom_jour$i"],
                                        'tranche'=>$_POST["$jour[$i]tranche$u"],
                                        ]);

//'existe pas;
                                }
                            }
                        }
                    }


                }


//debut de la mise a jour

                $tab_supp=explode('-',$suppression);
                $taille_tab=(int) (sizeOf($tab_supp)/2);
                $jour_supp=array();
                $tranche_supp=array();
                $inc=0;
                for ($tab=0; $tab <sizeOf($tab_supp)-1 ; $tab=$tab+2) {
                    $jour_supp[$inc]=$tab_supp[$tab];
                    $tranche_supp[$inc]=$tab_supp[$tab+1];
                    $inc++;
                }


            }
//recuperation des id actifs
            $id_supp=array();
            $compte_sup=array();
            $supp_final=array();
            for ($i=0; $i <$taille_tab ; $i++) {
                $suppresseur=DB::table('disponibilites')
                ->select('id')
                ->where([
                    ['jour',$jour_supp[$i]],
                    ['tranche',$tranche_supp[$i]],
                    ['compte',$utilisateur->id]
                ])
                ->get();
                $id_supp[$i]= $suppresseur[0]->id;
            }

                $suppresseur=DB::table('disponibilites')
                ->select('compte')
                ->distinct()
                ->where([
                    ['compte','<>',$utilisateur->id]
                ])
                ->get();

                foreach ($suppresseur as $key => $value) {
                    $compte_sup[$key]=$value->compte;
                }

//dd($id_supp);
//suppression des id inactifs


//recuperation des personne pouvant être supprimés
            $resultat_final=DB::table('disponibilites')
            ->select('id','compte')
            ->whereNotIn('id',$id_supp,'and','compte',$compte_sup)
            ->get();


//recuperation des comptes a supprimer
             foreach ($resultat_final as $key => $value) {
                 if ($value->compte==$utilisateur->id) {
                    $supp_final[$key]=$value->id;
                 }

             }

//suppression en cour
             $resultat_final=DB::table('disponibilites')
            ->whereIn('id',$supp_final)
            ->delete();

//notifications

            if ($resultat_final) {
                Flashy::success('disponibilité mis à jour avec succès');
                return redirect()->route('disponibilite_edt_path');
            } else {
                Flashy::success('disponibilité mis à jour avec succès');
                return redirect()->route('disponibilite_edt_path');
            }


    }

    public function remplir(insererNoteRequest $request){

        try {
            DB::connection()->getPdo();
          } catch (\Throwable $th) {
           return view('errors/errorbd');
          }


        $utilisateur=auth()->user();
        if (auth()->guest()) {
            Flashy::success('Connectez vouz');
            return redirect()->route('home');
            }

//recupération des disponibilités
            $remplisseur=DB::table('disponibilites')
                 ->join('comptes','comptes.id','=','disponibilites.compte')
                 ->select('disponibilites.compte','disponibilites.jour','tranche')
                 ->where([
                     ['disponibilites.compte',$utilisateur->id  ],

                     ])
                 ->get();

//recuperation des classe par compte
        $classe=DB::table('comptes')
        ->select('comptes.classe')
        ->distinct()
        ->where([
            ['type',null],
            ['classe','<>','null']
        ])
        ->get();


        $testeurEmpl=DB::table('emploi_de_temps')
        ->join('disponibilites','disponibilites.id','=','emploi_de_temps.disponibilite')
        ->select('emploi_de_temps.jour','emploi_de_temps.classe','emploi_de_temps.matiere',
        'emploi_de_temps.tranche','emploi_de_temps.compte','disponibilites.id','disponibilites.jour',
        'disponibilites.tranche')
        ->where([
            ['classe','<>',$request->classe],
            ])
        ->get();
//return $testeurEmpl;
        $test=false;
        $testeur='';

        $matiere=DB::table('matieres')
        ->join('comptes','comptes.id','=','matieres.compte')
        ->select('matieres.nom','comptes.nom as nom_prof','matieres.compte','matieres.classe')
        ->where([
            ['matieres.classe',$request->classe],
            ])
        ->get();

  //return $matiere;
        $disponibilite=DB::table('disponibilites')
        ->join('comptes','comptes.id','=','disponibilites.compte')
        ->select('disponibilites.jour','disponibilites.compte','disponibilites.tranche','disponibilites.id')
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
        return view('index/emploi',compact('resultat','resultatprof','test','testeur','passe','testeurEmpl','nombre','disponibilite','matiere','utilisateur','niveau','filiere','init','classe','remplisseur','classe'));


    }

    public function sauvegarder(insererNoteRequest $request){

//return $_POST["MERCREDImatiere0"];


try {
    DB::connection()->getPdo();
  } catch (\Throwable $th) {
   return view('errors/errorbd');
  }

        $utilisateur=auth()->user();
        if (auth()->guest()) {
            Flashy::success('Connectez vouz');
            return redirect()->route('home');
            }



            emploiDeTemp::whereClasse($request->classe)->delete();

            $jour = array('LUNDI','MARDI','MERCREDI','JEUDI','VENDREDI','SAMEDI' );
            // echo $_POST["$jour[0]matiere0"]."<br>".$_POST["$jour[0]matiere1"]."<br>".$_POST["$jour[0]matiere2"]."<br>" ;
            //$aexplo=explode(".",$_POST["$jour[5]matiere1"]);
            //return $aexplo[1];
            $newEDT=false;
             for ($i=0; $i <6 ; $i++) {
                 if(($jour[$i]=='MERCREDI') || ($jour[$i]=='SAMEDI')){
                    for ($a=0; $a <2 ; $a++) {
                    $aexplo=explode(".",$_POST["$jour[$i]matiere$a"]);
                    if (sizeOf($aexplo)<=1) {

                    } else {
                        $newEDT=emploiDeTemp::create([

                            'disponibilite'=>$aexplo[1],
                            'classe'=>$request->classe,
                            'jour'=>$jour[$i],
                            'compte'=>$aexplo[2],
                            'matiere'=>$aexplo[3],
                            'tranche'=>$aexplo[0],

                     ]);
                    }
                }}
                 else {
                    for ($a=0; $a <3 ; $a++) {
                        $aexplo=explode(".",$_POST["$jour[$i]matiere$a"]);
                        if (sizeOf($aexplo)<=1) {

                        } else {
                            $newEDT=emploiDeTemp::create([

                            'disponibilite'=>$aexplo[1],
                            'classe'=>$request->classe,
                            'jour'=>$jour[$i],
                            'compte'=>$aexplo[2],
                            'matiere'=>$aexplo[3],
                            'tranche'=>$aexplo[0],

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
        Flashy::success('Emploi de temps enregistré avec succès');
        return redirect()->route('generer_edt_path',compact('resultat','passe','nombre','utilisateur','niveau','filiere','init','classe','remplisseur','classe'));
            }else {
        Flashy::success('Emploi de temps vidé avec succès');
        return redirect()->route('generer_edt_path',compact('resultat','passe','nombre','utilisateur','niveau','filiere','init','classe','remplisseur','classe'));

                }

    }
}
