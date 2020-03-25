<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoDocente extends Model
{
    protected $table = 'tipo_docentes';
   
    protected $fillable = 
    [

    'nombre',
    
     ];
}
