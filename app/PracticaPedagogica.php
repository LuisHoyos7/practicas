<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PracticaPedagogica extends Model
{
    public $timestamps = false;
    protected $table = 'public.practica_pedagogicas';
    protected $primaryKey = 'id';
    protected $guarded = ['id'];
    protected $fillable = 
    [

    'semestre_id',
    'practica_id',
    'estudiante_id',
    
     ];

     public function practica()
    {
        return $this->belongsTo(Practica::class);
    }

    public function semestre()
    {
        return $this->belongsTo('App\Semestre');
    }

    public function formatos()
    {
        return $this->hasMany('App\FormatoPractica', 'practicapedagogica_id');
    }

}
