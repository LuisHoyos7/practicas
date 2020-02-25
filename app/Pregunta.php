<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pregunta extends Model
{
    
    protected $table = 'preguntas';

    protected $fillable = 
    [

    'nombre',
    
    ];

    public function opcionesPreguntas()
    {
        return $this->hasMany('App\OpcionPregunta', 'pregunta_id');
    }

    public function preguntaRespuesta()
    {
        return $this->hasOne('App\PreguntaRespuesta', 'pregunta_id');
    }

    public function observaciones()
    {
        return $this->hasMany('App\Observacion','pregunta_id');
    }
}
