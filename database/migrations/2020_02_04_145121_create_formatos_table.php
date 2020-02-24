<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFormatosTable extends Migration
{
    
    public function up()
    {
        Schema::create('formatos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('practica_id');
            $table->string('nombre');
            $table->boolean('diligenciado');
            $table->string('objetivo');
            $table->foreign('practica_id')->references('id')->on('practicas');
            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('formatos');
    }
}
