<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDiariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void 
     */
    public function up()
    {
        Schema::create('diarios', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('practica_pedagogicas_id');
            $table->timestamp('fecha');
            $table->string('analisis');
            $table->foreign('practica_pedagogicas_id')->references('id')->on('practica_pedagogicas');
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
        Schema::dropIfExists('diarios');
    }
}
