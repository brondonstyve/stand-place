<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use MercurySeries\Flashy\Flashy;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\passePartout;


class evaluationController extends Controller
{
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
            }
     //Changement déetats
     $createForm=true;
     $createEpreuve=false;
      return view('index/evaluation',compact('utilisateur','classe_mat','createForm','createEpreuve'));
    }

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

    public function enregistreur(){

//
    }
}
