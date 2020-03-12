<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMassagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('massages', function (Blueprint $table) {
            $table->bigIncrements('id')->autoIncrement();
            $table->unsignedBigInteger('id_technique');
            $table->string('nom');
            $table->float('prix',6,2);
            $table->longText('resume');
            $table->string('image');
            $table->longText('produits');
            $table->longText('description');
            $table->longText('bienfaits');
            $table->longText('allergies');
            $table->timestamps();

            $table->foreign('id_technique')->references('id')->on('techniques');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('massages');
    }
}
