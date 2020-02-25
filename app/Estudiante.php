<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estudiante extends Model
{
<<<<<<< HEAD
  
=======
   
    protected $table = 'public.estudiantes';
>>>>>>> 0f709616ff823902afd599e1a3a1e2adc7ec322d
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
