<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inscripcion extends Model
{
    
    public $timestamps = false;
    protected $table = 'public.inscripciones';
    protected $primaryKey = 'id';
    protected $guarded = ['id'];
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
