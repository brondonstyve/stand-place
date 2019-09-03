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
        Schema::create('matieres', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('compte')->unsigned()->default(null);
            $table->string('nom',50);
            $table->integer('semestre')->nullable();;
            $table->string('classe',4);
            $table->integer('nombre_heure');
            $table->date('periode')->nullable();
            $table->integer('vote')->nullable();;
            $table->integer('niveau')->nullable();;
            $table->integer('coef');
            $table->foreign('compte')->references('id')->on('comptes')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('matieres');
    }
}
