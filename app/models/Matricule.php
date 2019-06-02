<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Matricule extends Model
{
    public $timestamps=false;
    protected $fillable=['matricule','nom','prenom','filiere','niveau','annee_accademique'];

}
