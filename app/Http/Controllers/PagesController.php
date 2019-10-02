<?php

namespace App\Http\Controllers;

use App\models\Appel;
use App\models\blog;
use App\models\cahier;
use App\models\vote as AppVote;
use MercurySeries\Flashy\Flashy;

class PagesController extends Controller
{

    public function ouvrirIndex(){

        return view('index/index');
    }

    public function ouvrirApropos(){
        return view('index/Apropos');
    }
    public function ouvrirEvenement(){
        return view('index/evenement');
    }

    public function ouvrircoursfc(){
        return view('index/coursfc');
    }

    public function ouvrircoursfi(){
        return view('index/coursfi');
    }

    public function ouvrircoursligne(){
        return view('index/coursligne');
    }

    public function deconnexion(){
        auth()->logout();
        return redirect()->route('home');
    }



    public function ouvrirConnex(){



        if (auth()->guest()) {
        Flashy::success('Connectez vouz');
        return redirect()->route('home');
        }

        $utilisateur=auth()->user();


        $maxVote=AppVote::max('voix');
        $premier=AppVote::join('matricules','matricules.id','=','votes.matricule')
        ->whereVoix($maxVote)->get();

        $utilisateur=auth()->user();

        if ($utilisateur->type==null) {
            $nbrcour=cahier::join('matieres','matieres.id','=','cahiers.matiere')
            ->whereClasse($utilisateur->classe)
            ->count();

            $nbrpres=Appel::join('matieres','matieres.id','=','appels.matiere')
            ->join('matricules','matricules.id','=','appels.matricule')
            ->where([
                ['matieres.classe',$utilisateur->classe],
                ['matricules.matricule',$utilisateur->matricule]
                ])
            ->count();
           if($nbrcour==0){
            $nbrcour=1;

           }
            $presence=($nbrpres/$nbrcour)*100;
        }




        return view('index/profil',compact('utilisateur','premier','presence'));
    }

    public function parametre(){



        if (auth()->guest()) {
        Flashy::success('Connectez vouz');
        return redirect()->route('home');
        }
        $utilisateur=auth()->user();
        return view('index/parametre',compact('utilisateur'));
    }


    public function ouvrirNote(){



        if (auth()->guest()) {
            Flashy::success('Connectez vouz');
            return redirect()->route('home');
          }
          $utilisateur=auth()->user();
        return view('index/note',compact('utilisateur'));
    }

    public function ouvrirBlog(){
        if (auth()->guest()) {
            Flashy::success('Connectez vouz');
            return redirect()->route('home');
            }
            $utilisateur=auth()->user();

            $reponse=blog::orderBy('created_at','desc')->get();
        return view('index/blog',compact('utilisateur','reponse'));
    }

    public function ouvrirVote(){
        if (auth()->guest()) {
            Flashy::success('Connectez vouz');
            return redirect()->route('home');
            }
            $utilisateur=auth()->user();
        return view('index/vote',compact('utilisateur'));
    }

    public function ouvrirEmploi(){
        if (auth()->guest()) {
            Flashy::success('Connectez vouz');
            return redirect()->route('home');
            }
            $utilisateur=auth()->user();
        return view('index/emploi',compact('utilisateur'));
    }

    public function ouvrirDiscipline(){
        if (auth()->guest()) {
            Flashy::success('Connectez vouz');
            return redirect()->route('home');
            }
            $utilisateur=auth()->user();
        return view('index/discipline',compact('utilisateur'));
    }

    public function ouvrirInbox(){

        if (auth()->guest()) {
            Flashy::success('Connectez vouz');
            return redirect()->route('home');
            }
            $utilisateur=auth()->user();
        return view('index/inbox',compact('utilisateur'));
    }

    public function ouvrirGestEmploi(){

        if (auth()->guest()) {
            Flashy::success('Connectez vouz');
            return redirect()->route('home');
            }
            $utilisateur=auth()->user();
        return view('index/gestEmploi',compact('utilisateur'));
    }


}
