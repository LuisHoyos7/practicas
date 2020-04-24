<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('practica_pedagogicas_id');
            $table->string('titulo');
            $table->string('problema');
            $table->string('antecedentes');
            $table->string('justitifcacion');
            $table->string('marco_teorico');
            $table->string('objetivos');
            $table->string('marco_metodologico');
            $table->string('bibliografia');
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
        Schema::dropIfExists('productos');
    }
}
