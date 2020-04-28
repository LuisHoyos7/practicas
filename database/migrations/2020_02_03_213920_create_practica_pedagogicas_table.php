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
            $table->unsignedBigInteger('estudiante_id');
            $table->unsignedBigInteger('semestre_id');
            $table->unsignedBigInteger('docente_id');
            $table->unsignedBigInteger('colegio_id');
            $table->boolean('diario_finalizado')->default(false);
            $table->boolean('producto_finalizado')->default(false);
            $table->boolean('finalizada')->default(false);
            $table->foreign('practica_id')->references('id')->on('practicas');
            $table->foreign('docente_id')->references('id')->on('docentes');
            $table->foreign('colegio_id')->references('id')->on('colegios');
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
