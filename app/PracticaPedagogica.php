<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PracticaPedagogica extends Model
{
  
    protected $table = 'practica_pedagogicas';
    
    protected $fillable = 
    [

    'semestre_id',
    'practica_id',
    'estudiante_id',
    'docente_id',
    'colegio_id',
    
     ];

     public function practica()
    {
        return $this->belongsTo(Practica::class);
    }

    public function semestre()
    {
        return $this->belongsTo('App\Semestre');
    }

    public function formatos()
    {
        return $this->hasMany('App\FormatoPractica', 'practicapedagogica_id');
    }

}
