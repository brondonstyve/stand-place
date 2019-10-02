<?php

namespace App\Http\Controllers;

use App\Http\Requests\passePartout;
use App\models\Compte;
use Illuminate\Http\Request;
use MercurySeries\Flashy\Flashy;

class messageController extends Controller
{
    public function message(){
        if (auth()->guest()) {
            Flashy::error('connectez vous');
            return redirect()->route('home');
        }
        $utilisateur=auth()->user();

        return view('index/message',compact('utilisateur'));
    }

    public function rechercherEmail(passePartout $request){
        if ($request->ajax()) {
            $reponse=Compte::where('email','like',$request->email.'%')->select('id','email','photo')->get();
            return response($reponse);
        }
    }
}
