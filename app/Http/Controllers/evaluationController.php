<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class evaluationController extends Controller
{
    public function evaluation(){
        $utilisateur=auth()->user();
      return view('index/evaluation',compact('utilisateur'));
    }
}
