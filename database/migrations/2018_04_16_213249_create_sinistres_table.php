<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSinistresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sinistres', function (Blueprint $table) {
            $table->increments('id');
            $table->string('code')->unique();
            $table->string('date');
            $table->string('mantdep');
            $table->string('mantremb');
            $table->integer('chaffeur_id')->unsigned();
            $table->foreign('chaffeur_id')->references('id')->on('chauffeurs');
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
        Schema::dropIfExists('sinistres');
    }
}
