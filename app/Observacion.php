<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Observacion extends Model
{
    public $timestamps = false;
    protected $table = 'public.observaciones';
    protected $primaryKey = 'id';
    protected $guarded = ['id'];
    protected $fillable = 
    [
        
    'pregunta_id',
    'nombre'
    
    ];
}
