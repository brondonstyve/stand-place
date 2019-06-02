<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGl1MatieresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gl1_matieres', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nom',50);
            $table->string('nom_prof',50);
            $table->integer('semestre');
            $table->string('classe',4);
            $table->integer('nombre_heure');
            $table->date('periode');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('gl1_matieres');
    }
}
