<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class disciplineController extends Controller
{
    public function Discipline(){



        $utilisateur=auth()->user();
        $remplisseur=DB::table('appels')
        ->join('comptes','comptes.id','=','appels.compte')
        ->where([
            ['appels.compte',$utilisateur->id  ],

            ])
        ->sum('absence');

        $liste=DB::table('appels')
            ->join('matieres','appels.matiere','=','matieres.id')
            ->select('matieres.nom','appels.nom_prof','absence','appels.created_at')
            ->where([
                ['appels.compte',$utilisateur->id  ],
                    ])
            ->simplePaginate(5);

        //dd($liste);

      return view('index/discipline',compact('utilisateur','remplisseur','liste'));
    }
}
