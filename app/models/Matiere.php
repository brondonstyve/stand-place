<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Matiere extends Model

{
    public $timestamps=false;

    protected $fillable=['nom','nom_prof','semestre','niveau','nombre_heure','vote'];
}
