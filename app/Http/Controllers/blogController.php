<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use MercurySeries\Flashy\Flashy;

class blogController extends Controller
{
    public function accueiBlog(){
        if (auth()->guest()) {
            Flashy::error('connectez vous!!');
            return redirect()->route('home');
        }

        $utilisateur=\auth()->user();
        return view('administration/blog',compact('utilisateur'));
    }
}
