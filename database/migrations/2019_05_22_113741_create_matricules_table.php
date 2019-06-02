<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMatriculesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('matricules', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('matricule',20);
            $table->string('nom',50);
            $table->string('prenom',50)->nullable();
            $table->string('filiere',10);
            $table->integer('niveau');
            $table->string('annee_accademique',20);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('matricules');
    }
}
