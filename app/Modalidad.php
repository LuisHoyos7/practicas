<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Modalidad extends Model
{
    public $timestamps = false;
    protected $table = 'public.modalidades';
    protected $primaryKey = 'id';
    protected $guarded = ['id'];
    protected $fillable = 
    [

    'nombre',
    
     ];
}
