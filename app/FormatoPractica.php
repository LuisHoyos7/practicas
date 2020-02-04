<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FormatoPractica extends Model
{

    public $timestamps = false;
    protected $table = 'public.formatos';
    protected $primaryKey = 'id';
    protected $guarded = ['id'];
    protected $fillable = 
    [
    
    'practica_id',
    'nombre',

     ];
    
}
