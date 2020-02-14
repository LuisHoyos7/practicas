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
    'diligenciado',

     ];

     public function preguntas()
    {
        return $this->hasMany('App\Pregunta', 'formato_id');
    }
     
    
}
