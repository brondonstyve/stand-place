<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePaiementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('paiements', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('matricule')->nullable();
            $table->string('nom',50);
            $table->string('prenom',50)->nullable();
            $table->string('filiere',10);
            $table->integer('niveau');
            $table->string('sexe',10);
            $table->string('email',50);
            $table->string('adresse',100)->nullable();
            $table->string('pays',25);
            $table->string('ville',50);
            $table->string('numero',15);
            $table->integer('preinscription')->nullable();
            $table->integer('tranche1')->nullable();
            $table->integer('tranche2')->nullable();
            $table->integer('tranche3')->nullable();
            $table->integer('tranche4')->nullable();
            $table->string('numero_carte',25);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('paiements');
    }
}
