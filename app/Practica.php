<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Practica extends Model
{
    public $timestamps = false;
    protected $table = 'public.practicas';
    protected $primaryKey = 'id';
    protected $guarded = ['id'];
    protected $fillable = 
    [

    'nombre',
    
    ];

    public function formatos()
    {
        return $this->hasMany('App\FormatoPractica', 'practica_id');
    }
}
