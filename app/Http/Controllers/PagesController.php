<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use MercurySeries\Flashy\Flashy;

class PagesController extends Controller
{

    public function ouvrirIndex(){
        return view('index/index');
    }

    public function signin(){
        return view('index/signin');
    }



    public function ouvrirApropos(){
        return view('index/Apropos');
    }

    public function test(){
        return view('index/test');
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
        return view('index/profil',compact('utilisateur'));
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
        return view('index/blog',compact('utilisateur'));
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
