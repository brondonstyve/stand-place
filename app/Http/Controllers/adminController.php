<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use MercurySeries\Flashy\Flashy;

class adminController extends Controller
{
    public function index(){
        try {
            DB::connection()->getPdo();
        } catch (\Throwable $th) {
            return view('errors/errorbd');
        }

        if(auth()->guest()){
          Flashy::error('connectez vous!!');
          return redirect()->route('home');
        }
        $utilisateur = auth()->user();

         return  view('administration/accueil',compact('utilisateur'));
    }


}
