<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMaintenancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('maintenances', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('matricule')->unsigned();
            $table->foreign('matricule')->references('id')->on('vehicules');
            $table->string('type');
            $table->string('date');
            $table->string('cout');
            $table->string('kmveh');
            $table->integer('for_id')->unsigned();
            $table->foreign('for_id')->references('id')->on('fournisseurs');
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
        Schema::dropIfExists('maintenances');
    }
}
