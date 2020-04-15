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

     public function docente()
    {
        return $this->belongsTo('App\Docente', 'docente_id');
    }

     public function grupo()
    {
        return $this->belongsTo('App\Grupo', 'grupo_id');
    }
}
