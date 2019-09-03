<?php

namespace App\Http\Controllers;

use App\Http\Requests\passePartout;
use App\models\classe;
use App\models\Compte;
use App\models\Matiere;
use Illuminate\Http\Request;
use MercurySeries\Flashy\Flashy;

class matiereController extends Controller
{
    public function matiere(passePartout $request){
        if (auth()->guest()) {
            Flashy::error('connectez vous!!');
            return redirect()->route('home');
        }

        $utilisateur=auth()->user();

        $classe=classe::join('filieres','filieres.id','=','classes.filiere')
                    ->select('classes.id','classes.filiere','classes.niveau',
                             'classes.code_classe as code_classe','filieres.nom','filieres.code as code_f')
                    ->orderBy('classes.updated_at','desc')
                    ->paginate(5);

        $prof=Compte::whereType('enseignant')
        ->select('nom','prenom','id')
        ->get();

        $rep=classe::get('nom_classe');

        return view('administration/matiere',compact('utilisateur','classe','prof','rep'));
    }

    public function enregistrer_matiere(passePartout $request){
        if (auth()->guest()) {
            Flashy::error('connectez vous!!');
            return redirect()->route('home');
        }
        if ($request->ajax()) {

            $reponse=Matiere::Where([
                ['compte',$request->prof],
                ['nom',$request->matiere],
                ['classe',$request->classe]
            ])
            ->get();
            if (sizeOf($reponse)>0) {
                return response('cette matière est deja enregistrée pour cette classe');
            } else {
                $reponse=Matiere::create([
                    'compte'=>$request->prof,
                    'nom'=>$request->matiere,
                    'classe'=>$request->classe,
                    'nombre_heure'=>$request->nbheure,
                    'coef'=>$request->coef,
                ]);
                return response('matière enregistrée avec succes');
            }



        }

    }


    //

    public function liste_matiere(passePartout $request){

        if (auth()->guest()) {
            Flashy::error('connectez vous!!');
            return redirect()->route('home');
        }
        if ($request->ajax()) {
            $reponse=Matiere::join('comptes','comptes.id','=','matieres.compte')
            ->where([
                ['matieres.classe',$request->classe]
            ])
            ->select('matieres.id','comptes.nom as nomProf','matieres.nom as nommatiere','matieres.classe','matieres.coef','matieres.nombre_heure')
            ->get();
            return response($reponse);
        }
    }

    public function modifier_matiere(passePartout $request){
        if (auth()->guest()) {
            Flashy::error('connectez vous!!');
            return redirect()->route('home');
        }
        if ($request->ajax()) {
            $reponse=Matiere::whereId($request->id)
            ->update([
                'compte'=>$request->prof,
                'nom'=>$request->matiere,
                'classe'=>$request->classe,
                'nombre_heure'=>$request->nbheure,
                'coef'=>$request->coef,
            ]);

            if($reponse){
                return response($reponse);
            }
        }
    }

    public function rechercher_matiere(passePartout $request){
        if (auth()->guest()) {
            Flashy::error('connectez vous!!');
            return redirect()->route('home');
        }
        if ($request->ajax()) {
            $reponse=Matiere::join('comptes','comptes.id','=','matieres.compte')
            ->select('comptes.nom as nom_prof','comptes.id','comptes.prenom','matieres.classe','matieres.nom','matieres.coef','matieres.nombre_heure')
            ->find($request->id);
            return response($reponse);
        }
    }


    public function supprimer_matiere(passePartout $request){
        if($request->ajax()){
            $reponse=Matiere::destroy($request->id);
            if($reponse){
                return response('suppression effecté avec succèss');
            }
        }
    }
}
