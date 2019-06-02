<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\gl1Matiere;
use App\models\EDT;
use MercurySeries\Flashy\Flashy;


class emploiDeTempsController extends Controller
{


    public function genererEDT(){

        $utilisateur=auth()->user();
        if (auth()->guest()) {
            Flashy::success('Connectez vouz');
            return redirect()->route('home');
            }
        $niveau=$utilisateur->niveau;
        $filiere=$utilisateur->filiere;
        $resultat=gl1Matiere::whereNiveau($niveau)->get();
        $nombre=gl1Matiere::whereNiveau($niveau)->count();
        if ($filiere=='sr') {
            $init=0;
        } else {
            if ($filiere=='se') {
                $init=1;
            } else {
                $init=2;
            }

        }
        //dd($nombre);

        return view('index/emploi',compact('resultat','nombre','utilisateur','niveau','filiere','init'));



    }
}
