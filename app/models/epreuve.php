<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class epreuve extends Model
{
    protected $fillable=['compte','editeur','matiere','classe','epreuve','reponse','dure','libelle','statut','id_matiere'];
}
