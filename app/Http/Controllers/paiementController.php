<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Http\Requests\infosPayementRequest;
use App\models\Paiement;
use App\models\Matricule;
use App\Http\Requests\PaiementRequest;
use App\Http\Requests\paiementSuiteRequest;
use MercurySeries\Flashy\Flashy;
use Illuminate\Support\Facades\Auth;

class paiementController extends Controller
{
    public function Paiement(infosPayementRequest $request){



        $t4=null;
        if ($request->niv==1) {
            $preinscrip=76000;
            $t1=176000;
            $t2=100000;
            $t3=100000;
            $total=$preinscrip+$t1+$t2=$t3;
        }
        else{
            if ($request->niv==2) {
                $preinscrip=80000;
                $t1=190000;
                $t2=15000;
                $t3=150000;
                $total=$preinscrip+$t1+$t2=$t3;
            }
            else {
                $preinscrip=90000;
                $t1=250000;
                $t2=200000;
                $t3=190000;
                $t4=100000;
                $total=$preinscrip+$t1+$t2=$t3+$t4;
            }

        }

        $filiere=$request->filiere;
        $niveau=$request->niv;
        $classe=$request->filiere.$request->niv;
        $nom=$request->nom;
        $prenom=$request->prenom;
        $sexe=$request->sexe;
        $pays=$request->pays;
        $adresse=$request->adresse;
        $ville=$request->ville;
        $numero=$request->number;
        $email=$request->email;
        $test=false;
        return view('index/paiement',compact('test','niveau','filiere','classe','nom','prenom','sexe','pays','adresse','ville','numero','email','preinscrip','t1','t2','t3','t4','total'));

    }

    public function validerPaiement(PaiementRequest $request){




        $t4=null;
        if ($request->niv==1) {
            $preinscrip=76000;
            $t1=176000;
            $t2=100000;
            $t3=100000;
            $total=$preinscrip+$t1+$t2=$t3;
        }
        else{
            if ($request->niv==2) {
                $preinscrip=80000;
                $t1=190000;
                $t2=15000;
                $t3=150000;
                $total=$preinscrip+$t1+$t2=$t3;
            }
            else {
                $preinscrip=90000;
                $t1=250000;
                $t2=200000;
                $t3=190000;
                $t4=100000;
                $total=$preinscrip+$t1+$t2=$t3+$t4;
            }

        }
        $nom=$request->nom;
        $prenom=$request->prenom;
        $sexe=$request->sexe;
        $pays=$request->pays;
        $adresse=$request->adresse;
        $ville=$request->ville;
        $numero=$request->number;
        $email=$request->email;
        $preinscription=$request->pre;
        $tranche1=$request->tranche1;
        $tranche2=$request->tranche2;
        $tranche3=$request->tranche3;
        $tranche4=$request->tranche4;
        $numero_carte=$request->num_carte;
        $filiere=$request->filiere;
        $niveau=$request->niv;
        $date=date('Y');
        $dates=$date+1;

        if ($preinscription==null) {
            Flashy::error('erreur!Cochez la case a payer.au moins les préinscriptions');
            return view('index/paiement',compact('niveau','filiere','classe','nom','prenom','sexe','pays','adresse','ville','numero','email','preinscrip','t1','t2','t3','t4','total'));
        }

        else {

            $id= Paiement::create(
                [
                    'nom'=>$nom,
                    'prenom'=>$prenom,
                    'filiere'=>$filiere,
                    'niveau'=>$niveau,
                    'sexe'=>$sexe,
                    'email'=>$email,
                    'adresse'=>$adresse,
                    'pays'=>$pays,
                    'ville'=>$ville,
                    'numero'=>$numero,
                    'preinscription'=>$preinscription,
                    'tranche1'=>$tranche1,
                    'tranche2'=>$tranche2,
                    'tranche3'=>$tranche3,
                    'tranche4'=>$tranche4,
                    'numero_carte'=>$numero_carte,

                ]
                );
                $identifiant=$id->id;
                $matricule=$filiere.'_'.$date.'_'.$dates.'_'.$identifiant;
                $post = Paiement::where('id', $identifiant)->update(['matricule'=>$matricule]);
                if ($post) {
                    $insert= Matricule::create(
                        [
                            'matricule'=>$matricule,
                            'nom'=>$nom,
                            'prenom'=>$prenom,
                            'filiere'=>$filiere,
                            'niveau'=>$niveau,
                            'annee_accademique'=>$date.'-'.$dates

                        ]
                        );
                    Flashy::success('Inscription réalisé avec succes. votre matricule est :'.$matricule);
                    return redirect()->route('home');
                }
                else {
                    dd('echec');
                }


        }

    }

    public function suite_Paiement(paiementSuiteRequest $request){





        $matricule=$request->matricule;
        $recherche=Paiement::whereMatricule($matricule)->first();

        if ($recherche==null) {
            Flashy::error('Le matricule entré n\'existe pas');
            return back();
        }
        else {


        $nom=$recherche->nom;
        $prenom=$recherche->prenom;
        $sexe=$recherche->sexe;
        $pays=$recherche->pays;
        $adresse=$recherche->adresse;
        $ville=$recherche->ville;
        $numero=$recherche->numero;
        $email=$recherche->email;
        $preinscription=$recherche->preinscription;
        $tranche1=$recherche->tranche1;
        $tranche2=$recherche->tranche2;
        $tranche3=$recherche->tranche3;
        $tranche4=$recherche->tranche4;
        $numero_carte=$recherche->numero_carte;
        $filiere=$recherche->filiere;
        $niveau=$recherche->niveau;
        $classe=$filiere.$niveau;
        $test=true;
        $matri=$recherche->matricule;

        if ($preinscription!=null) { $grise='checked disabled'; }else{ $grise='checked'; }
        if ($tranche1!=null) { $griset1='checked disabled'; }else{ $griset1='checked'; }
        if ($tranche2!=null) { $griset2='checked disabled'; }else{ $griset2='checked'; }
        if ($tranche3!=null) { $griset3='checked disabled'; }else{ $griset3='checked'; }
        if ($tranche4!=null) { $griset4='checked disabled'; }else{ $griset4='checked'; }

        $t4=null;
        if ($niveau==1) {
            $preinscrip=76000;
            $t1=176000;
            $t2=100000;
            $t3=100000;
            $total=$preinscrip+$t1+$t2=$t3;
        }
        else{
            if ($niveau==2) {
                $preinscrip=80000;
                $t1=190000;
                $t2=15000;
                $t3=150000;
                $total=$preinscrip+$t1+$t2=$t3;
            }
            else {
                $preinscrip=90000;
                $t1=250000;
                $t2=200000;
                $t3=190000;
                $t4=100000;
                $total=$preinscrip+$t1+$t2=$t3+$t4;
            }

        }


        return view('index/paiement',compact('grisebouton','grise','griset1','griset2','griset3','griset4','matri','test','niveau','filiere','classe','nom','prenom','sexe','pays','adresse','ville','numero','email','preinscrip','t1','t2','t3','t4','total'));
    }
}

     public function validerSuitePaiement(paiementSuiteRequest $request){



        $matricule=$request->matricule;
        $recherche=Paiement::whereMatricule($matricule)->first();


        $preinscription=$recherche->preinscription;
        $tranche1=$recherche->tranche1;
        $tranche2=$recherche->tranche2;
        $tranche3=$recherche->tranche3;
        $tranche4=$recherche->tranche4;
        $paiementp=''; $paiementt1=''; $paiementt2=''; $paiementt3=''; $paiementt4='';
        if ($preinscription!=null) {  }else{  $paiementp=Paiement::whereMatricule($matricule)->update(['preinscription'=>$request->pre,] ); }
        if ($tranche1!=null) {  }else{  $paiementt1=Paiement::whereMatricule($matricule)->update(['tranche1'=>$request->tranche1,] ); }
        if ($tranche2!=null) {  }else{  $paiementt2=Paiement::whereMatricule($matricule)->update(['tranche2'=>$request->tranche2,] ); }
        if ($tranche3!=null) {  }else{  $paiementt3=Paiement::whereMatricule($matricule)->update(['tranche3'=>$request->tranche3,] ); }
        if ($tranche4!=null) {  }else{  $paiementt4=Paiement::whereMatricule($matricule)->update(['tranche4'=>$request->tranche4,] ); }




        if ($paiementp || $paiementt1 || $paiementt2 || $paiementt3 || $paiementt4) {
            Flashy::success('Payement éffectué avec success');
            return redirect()->route('home');
        }

     }

}

