<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Diario extends Model
{
    
    protected $fillable = 
    [
    
    'item',
    'analisis',
    'fecha',
    'practica_pedagogicas_id',
    'observaciones'

     ];

     public function practica()
    {
        return $this->belongsTo(Practica::class);
    }
}
