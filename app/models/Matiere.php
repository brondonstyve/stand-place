<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Matiere extends Model

{
    public $timestamps=false;

    protected $fillable=['nom','semestre','niveau','nombre_heure','vote','compte','classe','coef'];
}
