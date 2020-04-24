<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEncabezadoFormatosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('encabezado_formatos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('estudiante_id');
            $table->unsignedBigInteger('formato_id');
            $table->string('nombre')->nullable();
            $table->string('contexto')->nullable();
            $table->string('ubicacion')->nullable();
            $table->string('barrio')->nullable();
            $table->string('tiempoobservacion')->nullable();
            $table->string('institucion')->nullable();
            $table->date('fecha');
            $table->foreign('estudiante_id')->references('id')->on('estudiantes');
            $table->foreign('formato_id')->references('id')->on('formatos');
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
        Schema::dropIfExists('encabezado_formatos');
    }
}
