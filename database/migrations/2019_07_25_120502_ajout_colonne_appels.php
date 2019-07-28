<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AjoutColonneAppels extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('appels', function (Blueprint $table) {
            $table->string('nom_prof',50)->after('matiere');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('appels', function (Blueprint $table) {
            $table->dropColumn('nom_prof');
        });
    }
}
