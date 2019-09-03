<?php

namespace App\Http\Controllers;

use App\Http\Requests\passePartout;
use App\models\classe;
use App\models\Compte;
use App\models\Matricule;
use Illuminate\Http\Request;
use MercurySeries\Flashy\Flashy;

class etudiantController extends Controller
{
    //etudiant

public function etudiant(){
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

    return view('administration/etudiant',compact('utilisateur','classe'));
}
//
public function listeEtudiant(passePartout $request){
    if ($request->ajax()) {
        $reponse=Matricule::whereClasse($request->classe)
        ->get();
        return response($reponse);
    }

}
//
public function rechercherEtudiant(passePartout $request){
    if ($request->ajax()) {
        $reponse=Matricule::whereMatricule($request->matricule)->first();
        return response($reponse);
    }
}
//
public function modifierEtudiant(passePartout $request){
    if($request->ajax()){
        $reponse=Matricule::whereMatricule($request->matricule)
        ->update([
            'nom'=>$request->nom,
            'prenom'=>$request->prenom,
            'sexe'=>$request->sexe,
            'naissance'=>$request->date
        ]);
        return $reponse;
    }
}

//supp etudiant
public function supprimerEtudiant(passePartout $request){
    if($request->ajax()){
        $reponse=Matricule::whereMatricule($request->matricule)->delete();
        return response($reponse);
    }
}

//transfert etudiant
public function transfererEtudiant(passePartout $request){
    if ($request->ajax()) {
        $reponse1=Matricule::whereMatricule($request->matricule)
        ->update([
            'classe'=>$request->classetransfert,
        ]);

        $reponse2=Compte::whereMatricule($request->matricule)
        ->update([
            'classe'=>$request->classetransfert,
        ]);

        return response($reponse1);
    }
}
}
