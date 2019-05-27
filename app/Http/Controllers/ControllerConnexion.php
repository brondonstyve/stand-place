<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use MercurySeries\Flashy\Flashy;
use App\Http\Requests\ConnexionRequest;
use Illuminate\Support\Facades\Auth;
use App\models\Compte;

class ControllerConnexion extends Controller
{

    public function index()
    {
        return view('index/compSign');
    }

    public function show(ConnexionRequest $request)
    {

        $connect=Auth::attempt(['email' => $request->email, 'password' => $request->mdp]);

        if ($connect) {
            $utilisteur=auth()->user();
            Flashy::success('Bienvenu '.$utilisteur->prenom);
            return redirect()->route('profil_path');
        }else{
            Flashy::error('Erreur de connexion. vérifiez vos identifiants');
            return back();
        }

    }



}
