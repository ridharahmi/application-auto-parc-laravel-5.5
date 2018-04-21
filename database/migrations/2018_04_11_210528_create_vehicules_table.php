<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVehiculesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehicules', function (Blueprint $table) {
            $table->increments('id');
            $table->string('matricule')->unique();
            $table->string('modele');
            $table->string('marque');
            $table->string('affectation');
            $table->string('carte');
            $table->string('type');
            $table->string('valeur');
            $table->string('etat');
            $table->string('date');
            $table->string('kilometrage');
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
        Schema::dropIfExists('vehicules');
    }
}
