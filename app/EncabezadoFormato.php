<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EncabezadoFormato extends Model
{
    protected $table = 'encabezado_formatos';
    protected $fillable = 
    [
    
    'estudiante_id',
    'formato_id',
    'barrio',
    'institucion',
    'fecha',
    'nombre',
    'tiempoobservacion',
    'ubicacion'

     ];
}
