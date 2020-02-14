<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTechniqueTarifTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('technique_tarif', function (Blueprint $table) {
            $table->unsignedBigInteger('id_technique');
            $table->unsignedBigInteger('id_tarif');

            $table->foreign('id_technique')->references('id')->on('technique');
            $table->foreign('id_tarif')->references('id')->on('tarif');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('technique_tarif');
    }
}
