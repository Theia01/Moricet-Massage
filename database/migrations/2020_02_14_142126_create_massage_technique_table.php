<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMassageTechniqueTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('massage_technique', function (Blueprint $table) {
            $table->unsignedBigInteger('id_massage');
            $table->unsignedBigInteger('id_technique');
            
            $table->foreign('id_massage')->references('id')->on('massage');
            $table->foreign('id_technique')->references('id')->on('technique');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('massage_technique');
    }
}
