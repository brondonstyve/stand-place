<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class paiementController extends Controller
{
    public function validerPaiement(){
        return view('index/paiement');
    }
}
