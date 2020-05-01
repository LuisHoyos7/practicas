<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $table = 'productos';

    protected $fillable = 
    [

    'titulo',
    'practica_pedagogicas_id',
    'antecedentes',
    'problema',
    'justificacion',
    'marco_teorico',
    'objetivos',
    'marco_metodologico',
    'bibliografia',
    'observaciones'
    
    ];
}
