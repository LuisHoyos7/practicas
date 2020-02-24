<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePracticaPedagogicasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('practica_pedagogicas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('practica_id');
            $table->unsignedBigIntege('estudiante_id');
            $table->unsignedBigIntege('semestre_id');
            $table->foreign('practica_id')->references('id')->on('practicas');
            $table->foreign('semestre_id')->references('id')->on('semestres');
            $table->foreign('estudiante_id')->references('id')->on('estudiantes');
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
        Schema::dropIfExists('practica_pedagogicas');
    }
}
