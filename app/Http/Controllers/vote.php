<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Matiere;
use App\models\Compte;
use MercurySeries\Flashy\Flashy;
use App\Http\Requests\voteValider;
use Illuminate\Support\Facades\Auth;

class vote extends Controller
{

    public function membreVotes(){

        $utilisateur=auth()->user();
        $niveau=$utilisateur->niveau;
        $maxVote=Matiere::max('vote');
        $premier=Matiere::whereVote($maxVote)->get();
        $liste=Matiere::orderBy('vote','desc')->get();
        $filiere=$utilisateur->filiere;
        if (auth()->guest()) {
            Flashy::success('Connectez vouz');
            return redirect()->route('home');
            }
            $resultat=Matiere::whereNiveau($niveau)->get();
            $nombre=Matiere::whereNiveau($niveau)->count();
            return view('index/vote',compact('resultat','nombre','utilisateur','premier','liste'));


    }

    public function voteEnvoi(voteValider $request){
        $utilisateur=auth()->user();
        $id=$request->id;
        $niveau=$utilisateur->niveau;
        $nbreVote=$request->nbreVote;
        $vote=Matiere::find($id)->update(['vote'=>$nbreVote+1]);
        $maxVote=Matiere::max('vote');
        $premier=Matiere::whereVote($maxVote)->get();
        $liste=Matiere::orderBy('vote','desc')->get();
        $nombre=Matiere::whereNiveau($niveau)->count();

         if ($vote) {
             $vote_statut=auth()->user()->update(['vote_statut'=>true]);
             Flashy::success('Vote realisé avec succes');
             return redirect()->route('vote_path',compact('premier','utilisateur','liste','nombre'));
         } else {
            Flashy::error('Erreur générée pendant le processus de vote');
            return back();
         }

    }


}
