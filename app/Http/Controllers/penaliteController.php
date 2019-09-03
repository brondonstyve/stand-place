<?php

namespace App\Http\Controllers;

use App\Http\Requests\passePartout;
use App\models\classe;
use App\models\Paiement;
use Carbon\Carbon;
use DateTime;
use Illuminate\Http\Request;
use MercurySeries\Flashy\Flashy;

class penaliteController extends Controller
{
    public function penalite(){
        if (auth()->guest()) {
            Flashy::error('connectez vous!!');
            return redirect()->route('home');
        }
        $utilisateur = auth()->user();

        $classe=classe::join('filieres','filieres.id','=','classes.filiere')
                    ->select('classes.id','classes.filiere','classes.niveau',
                             'classes.code_classe as code_classe','filieres.nom','filieres.code as code_f')
                    ->orderBy('classes.updated_at','desc')
                    ->paginate(5);

        return view('administration/penalite',compact('utilisateur','classe'));
    }


    //
    public function listePenalite(passePartout $request){
            $classe=decrypt($_GET["path"]);
            $reponse=Paiement::whereClasse($classe)
            ->select('matricule','libelle','montant','date','date_limite')
            ->distinct()
            ->get();

            for ($i=0; $i < sizeOf($reponse) ; $i++) {
                $date_paiement=strtotime($reponse[$i]->date);
                dump($date_paiement);
                $date_limite=strtotime($reponse[$i]->date_limite);
                dump($date_limite);

                dump($res=($date_limite-$date_paiement)/604800);

            }
            dd();

        }







}
