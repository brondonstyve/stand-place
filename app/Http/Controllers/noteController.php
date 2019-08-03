<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use MercurySeries\Flashy\Flashy;
use Illuminate\Http\Request;
use App\Http\Requests\noteRequest;
use App\Http\Requests\insererNoteRequest;
use App\models\note;
use App\models\Compte;
use App\models\Matiere;


class noteController extends Controller
{
    public function afficherNote(){




        if (auth()->guest()) {
            Flashy::success('Connectez vouz');
            return redirect()->route('home');
            }

            $utilisateur=auth()->user();
            $note=DB::table('notes')
            ->join('comptes','comptes.id','=','notes.compte')
            ->join('matieres','notes.matiere','=','matieres.id')
            ->select('comptes.nom as nom_prof','matieres.nom','matieres.coef','notes.CC','notes.SN','notes.final')
            ->where('notes.compte',$utilisateur->id)
            ->get();

            $nombre=DB::table('notes')
            ->join('comptes','comptes.id','=','notes.compte')
            ->join('matieres','notes.matiere','=','matieres.id')
            ->select('comptes.nom as nom_prof','matieres.nom','matieres.coef','notes.CC','notes.SN','notes.final')
            ->where('notes.compte',$utilisateur->id)
            ->count();


            $classe=DB::table('matieres')
            ->join('comptes','comptes.id','=','matieres.compte')
            ->select('matieres.nom','matieres.classe','matieres.semestre','matieres.compte','matieres.id','comptes.filiere','comptes.niveau')
            ->whereCompte($utilisateur->id)
            ->get();


           $ouverture=false;
            return view('index/note',compact('utilisateur','note','nombre','classe','nombreclasse','ouverture'));

    }
/*
    $liste=DB::table('notes')
            ->join('comptes','comptes.id','=','notes.compte')
            ->join('matieres','notes.matiere','=','matieres.id')
            ->select('matieres.nom','comptes.nom as nom_prof','notes.CC','notes.SN','comptes.nom','comptes.prenom','comptes.classe')
            ->where([
                ['notes.matiere',$id],
                ['comptes.classe',$classe],
                ])
            ->get();

            $listec=DB::table('notes')
            ->join('comptes','comptes.id','=','notes.compte')
            ->join('matieres','notes.matiere','=','matieres.id')
            ->select('matieres.nom','comptes.nom as nom_prof','notes.CC','notes.SN','comptes.nom','comptes.prenom','comptes.classe')
            ->where([
                ['notes.matiere',$id],
                ['comptes.classe',$classe],
                ])
            ->count();
            */

    public function remplirNotes(noteRequest $request){



        $utilisateur=auth()->user();

         $id=$request->id;
         $classe=$request->classe;


         $remplisseur=DB::table('notes')
            ->join('comptes','comptes.id','=','notes.compte')
            ->join('matieres','notes.matiere','=','matieres.id')
            ->select('matieres.nom','comptes.nom as nom_prof','notes.CC','notes.SN','notes.final','comptes.nom','comptes.prenom','comptes.classe')
            ->where([
                ['notes.matiere',$id],
                ['comptes.classe',$classe],
                ])
            ->get();

            $remplisseurc=DB::table('notes')
            ->join('comptes','comptes.id','=','notes.compte')
            ->join('matieres','notes.matiere','=','matieres.id')
            ->select('matieres.nom','comptes.nom as nom_prof','notes.CC','notes.SN','comptes.nom','comptes.prenom','comptes.classe')
            ->where([
                ['notes.matiere',$id],
                ['comptes.classe',$classe],
                ])
            ->count();




         $classe=DB::table('matieres')
            ->join('comptes','comptes.id','=','matieres.compte')
            ->select('matieres.nom','matieres.classe','matieres.semestre','matieres.compte','matieres.id','comptes.filiere','comptes.niveau')
            ->whereCompte($utilisateur->id)
            ->get();







            $liste=DB::table('comptes')
            ->where([

                ['comptes.classe',$request->classe]
                ])
                ->get();

            $listec=DB::table('comptes','notes')
            ->where([
                ['comptes.classe',$request->classe]
                ])
            ->count();



            $ouverture=true;
            return view('index/note',compact('utilisateur','note','nombre','classe','nombreclasse','liste','listec','ouverture','id','remplisseur'));

    }

    public function insererNotes(insererNoteRequest $request){




      $a=0;

      $utilisateur=auth()->user();
        $note=DB::table('notes')
        ->join('comptes','comptes.id','=','notes.compte')
        ->join('matieres','notes.matiere','=','matieres.id')
        ->select('comptes.nom as nom_prof','matieres.nom','matieres.coef','notes.CC','notes.SN','notes.final','notes.compte','notes.matiere')
        ->where('notes.compte',$utilisateur->id)
        ->get();

        $nombre=DB::table('notes')
        ->join('comptes','comptes.id','=','notes.compte')
        ->join('matieres','notes.matiere','=','matieres.id')
        ->select('comptes.nom as nom_prof','matieres.nom','matieres.coef','notes.CC','notes.SN','notes.final','notes.compte','notes.matiere')
        ->where('notes.compte',$utilisateur->id)
        ->count();


        $classe=DB::table('matieres')
        ->join('comptes','comptes.id','=','matieres.compte')
        ->select('matieres.nom','matieres.classe','matieres.semestre','matieres.compte','matieres.id','comptes.filiere','comptes.niveau')
        ->whereCompte($utilisateur->id)
        ->get();


       $ouverture=false;

      while ($a < $request->compteur) {
          $final=($_POST["cc$a"]*30/100)+($_POST["sn$a"]*70/100);

          note::whereCompteAndMatiere($_POST["id_compte$a"],$_POST["id_matiere$a"])->delete();


          $enregistrement=note::create([
            'compte'=>$_POST["id_compte$a"],
            'matiere'=>$_POST["id_matiere$a"],
            'CC'=>$_POST["cc$a"],
            'SN'=>$_POST["sn$a"],
            'final'=>$final,
          ]);
          $a++;
      }

        if ($enregistrement) {
            Flashy::success('Les notes ont été correctement enregistrées');
            return  redirect()->route('note_path',compact('utilisateur','note','nombre','classe','nombreclasse','ouverture'));
        } else {
            Flashy::success('Erreur d\'enregistrement');
            return  redirect()->route('note_path',compact('utilisateur','note','nombre','classe','nombreclasse','ouverture'));
        }




    }
}
