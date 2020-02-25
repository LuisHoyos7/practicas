<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PreguntaRespuesta extends Model
{

    protected $table = 'pregunta_respuestas';
   
    protected $fillable = 
    [

    'opcionpregunta_id',
    'pregunta_id',
    'estudiante_id'
    
    ];

    public function opcionPregunta()
     {
         return $this->belongsTo(OpcionPregunta::class, 'opcionpregunta_id');
     }
}
 