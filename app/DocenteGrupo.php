<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DocenteGrupo extends Model
{
     protected $table = 'docente_grupos';
    protected $fillable = 
    [

    'docente_id',
    'grupo_id',
    'fecha',

     ];
}
