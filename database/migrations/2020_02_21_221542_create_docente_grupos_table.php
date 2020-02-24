<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDocenteGruposTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('docente_grupos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('docente_id');
            $table->integer('grupo_id');
            $table->timestamp('fecha');
            $table->foreign('docente_id')->references('id')->on('docentes');
            $table->foreign('grupo_id')->references('id')->on('grupos');
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
        Schema::dropIfExists('docente_grupos');
    }
}
