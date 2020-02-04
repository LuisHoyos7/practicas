<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sede extends Model
{
    public $timestamps = false;
    protected $table = 'public.sedes';
    protected $primaryKey = 'id';
    protected $guarded = ['id'];
    protected $fillable = 
    [

    'nombre',
    
    ];
}
