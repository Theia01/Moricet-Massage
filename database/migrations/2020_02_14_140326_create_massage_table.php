<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMassageTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('massage', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string("nom");
            $table->string("nom_url");
            $table->float("prix",6,2);
            $table->longText("resume");
            $table->string("image");
            $table->longText("produits");
            $table->longText("description");
            $table->longText("bienfaits");
            $table->longText("allergies");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('massage');
    }
}
