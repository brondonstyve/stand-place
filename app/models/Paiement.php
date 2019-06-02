<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Paiement extends Model
{
    public $timestamps=true;
    protected $fillable=['matricule','nom','prenom','filiere','niveau','sexe','email','adresse','pays','ville','numero','preinscription',
    'tranche1','tranche2','tranche3','tranche4','numero_carte','filiere','niveau'];
}
