<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inscripcion extends Model
{
    
    protected $fillable = 
    [

    'nombres',
    'apellidos',
    'celular',
    'direccion',
    'correo',
    'identificacion',
    'tipoidentificacion',
    'semestre',
    'practica',
    'ciudad',
    'sede',
    'modalidad',
    'estado',
    'programa'

     ];
    
}
