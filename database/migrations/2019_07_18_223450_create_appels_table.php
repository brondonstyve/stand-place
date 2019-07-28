<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAppelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('appels', function (Blueprint $table) {
            $table->integer('compte')->index()->unsigned();
            $table->string('nom_prof',50);
            $table->integer('matiere')->index()->unsigned();
            $table->integer('absence')->nullable()->default(0);
            $table->timestamps();
            $table->foreign('compte')->references('id')->on('comptes')->onDelete('cascade');
            $table->foreign('matiere')->references('id')->on('matieres')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('appels');
    }
}
