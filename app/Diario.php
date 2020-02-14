<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Diario extends Model
{
    public $timestamps = false;
    protected $table = 'public.diarios';
    protected $primaryKey = 'id';
    protected $guarded = ['id'];
    protected $fillable = 
    [
    
    'item',
    'analisis',
    'fecha',
    'practica_id'

     ];

     public function practica()
    {
        return $this->belongsTo(Practica::class);
    }
}
