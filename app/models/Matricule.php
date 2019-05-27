<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Matricule extends Model
{
    public $timestamp=true;
    protected $fillable=['matricule','nom','prenom','classe','annee_scolaire'];

}
