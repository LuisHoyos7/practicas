<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PreguntaRespuesta extends Model
{
    public $timestamps = false;
    protected $table = 'public.pregunta_respuestas';
    protected $primaryKey = 'id';
    protected $guarded = ['id'];
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
 