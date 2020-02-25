<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoIdentificacion extends Model
{
  
    protected $table = 'tipo_identificaciones';
   
    protected $fillable = 
    [

    'nombre',
    
     ];
}
