<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class emploiDeTemp extends Model
{
    protected $fillable=['classe','jour','matiere','compte','tranche'];
}
