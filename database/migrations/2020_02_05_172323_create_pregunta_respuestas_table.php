<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePreguntaRespuestasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pregunta_respuestas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('pregunta_id');
            $table->integer('opcionpregunta_id');
            $table->integer('estudiante_id');
            $table->foreign('opcionpregunta_id')->references('id')->on('opcion_preguntas');
            $table->foreign('pregunta_id')->references('id')->on('preguntas');
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
        Schema::dropIfExists('pregunta_respuestas');
    }
}
