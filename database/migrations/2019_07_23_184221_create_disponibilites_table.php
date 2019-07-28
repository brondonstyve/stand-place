<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDisponibilitesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('disponibilites', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('compte')->index()->unsigned();
            $table->string('jour');
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
        Schema::dropIfExists('disponibilites');
    }
}
