<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Docente extends Model
{
    protected $table = 'docentes';
    protected $fillable = 
    [
    
    'user_id',
    'tipoidentificacion',
    'titulo',
    'tipodocente_id'

     ];

     public function Usuario()
     {
         return $this->belongsTo(User::class, 'user_id');
     }
}
