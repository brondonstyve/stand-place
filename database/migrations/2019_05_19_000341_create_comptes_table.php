<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateComptesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comptes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('matricule',50);
            $table->string('nom',50);
            $table->string('prenom',50)->nullable();
            $table->string('filiere',10);
            $table->integer('niveau');
            $table->string('classe',5);
            $table->string('email',50);
            $table->string('mot_de_passe');
            $table->string('téléphone',10)->nullable();
            $table->string('ville',50)->nullable();
            $table->string('photo')->nullable();
            $table->boolean('vote_statut')->default(false);
            $table->string('type',30)->nullable();
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
        Schema::dropIfExists('comptes');
    }
}
