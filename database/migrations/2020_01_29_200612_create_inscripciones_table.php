<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInscripcionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inscripciones', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombres');
            $table->string('apellidos');
            $table->string('celular');
            $table->string('direccion');
            $table->string('correo')->unique();
            $table->integer('identificacion');
            $table->string('ciudad');
            $table->string('tipoidentificacion');
            $table->string('semestre');
            $table->string('modalidad');
            $table->string('practica');
            $table->boolean('inscrito');
            $table->string('sede');
            $table->string('programa');
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
        Schema::dropIfExists('inscripciones');
    }
}
