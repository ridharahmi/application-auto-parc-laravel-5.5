<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePapiersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('papiers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('code');
            $table->string('mantant');
            $table->string('categorie');
            $table->integer('matricule')->unsigned();
            $table->foreign('matricule')->references('id')->on('vehicules');
            $table->string('datepaiement');
            $table->string('dateechance');
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
        Schema::dropIfExists('papiers');
    }
}
