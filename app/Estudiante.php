<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estudiante extends Model
{
   
    protected $table = 'public.estudiantes';
    protected $fillable = 
    [
    
    'user_id',
    'tipoidentificacion',
    'semestre',
    'practica',
    'ciudad',
    'sede',
    'modalidad',
    'programa'

     ];

     public function Usuario()
     {
         return $this->belongsTo(User::class, 'user_id');
     }

     public function practicasPedagogicas()
     {
         return $this->hasMany(PracticaPedagogica::class, 'estudiante_id');
     }
 
    
}
