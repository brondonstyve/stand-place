<?php

namespace App\Http\Controllers;

use App\Http\Requests\passePartout;
use App\models\blog;
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
        $reponse=blog::paginate(9);
        return view('administration/blog',compact('utilisateur','reponse'));
    }

    public function ajouterBlog(passePartout $request){
        if ($request->ajax()) {
            $reponse=blog::create([
                'titre'=>$request->titre,
                'description'=>$request->desc,
            ]);
        }
    }

    public function supBlog(passePartout $request){
        if ($request->ajax()) {
            $reponse=blog::destroy($request->id);
            if($reponse){
                return response('suppression effectué avec succés');
            }else{
                return response('erreur');
            }
        }
    }
}


