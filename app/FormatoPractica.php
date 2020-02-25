<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FormatoPractica extends Model
{

    protected $fillable = 
    [
    
    'practica_id',
    'nombre',
    'diligenciado',

     ];

     public function preguntas()
    {
        return $this->hasMany('App\Pregunta', 'formato_id');
    }
     
    
}
