<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Auth\Authenticatable as basicAuthenticatable;

class Compte extends Model implements Authenticatable
{

    use basicAuthenticatable;


    public $timestamps=true;
    protected $fillable=['matricule','nom','prenom','filiere','niveau','classe','email','mot_de_passe','téléphone','ville' ,'photo','vote_statut'];

   /**
     * Get the password for the user.
     *
     * @return string
     */
    public function getAuthPassword()
    {
        return $this->mot_de_passe;

    }
}
