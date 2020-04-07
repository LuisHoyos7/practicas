<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Colegio extends Model
{
    protected $table = 'colegios';
    protected $fillable = 
    [
    
    'nombre_colegio',
    'nombre_representante',
    'contacto',
    'direccion',


     ];
}
