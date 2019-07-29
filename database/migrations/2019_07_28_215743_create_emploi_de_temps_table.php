<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmploiDeTempsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('emploi_de_temps', function (Blueprint $table) {
            $table->string('classe',5);
            $table->string('jour',10);
            $table->integer('compte')->index()->unsigned()->default(7);
            $table->string('matiere',30);
            $table->tinyInteger('tranche')->default(0);
            $table->foreign('compte')->references('id')->on('comptes')->onDelete('cascade');
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
        Schema::dropIfExists('emploi_de_temps');
    }
}
