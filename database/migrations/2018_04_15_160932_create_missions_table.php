<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMissionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('missions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('code')->unique();
            $table->string('type');
            $table->integer('vihicule_id')->unsigned();
            $table->foreign('vihicule_id')->references('id')->on('vehicules');
            $table->integer('chaffeur_id')->unsigned();
            $table->foreign('chaffeur_id')->references('id')->on('chauffeurs');
            $table->string('datedepart');
            $table->string('dateretour');
            $table->string('kmdepart');
            $table->string('kmretour');
            $table->string('ville');
            $table->string('kmville');
            $table->string('nmbonus');
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
        Schema::dropIfExists('missions');
    }
}
