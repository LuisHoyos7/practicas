<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\FormatoPractica;
use App\Pregunta;

class PreguntaController extends Controller
{

    public function index(Formatopractica $formatopractica)
    {
     
        $preguntas = $formatopractica->preguntas;

        return view('preguntas.index',compact('preguntas','formatopractica'));
    }


    public function create(FormatoPractica $formatopractica)
    {
        $preguntas = $formatopractica->preguntas->sortBy('id');
        
        return view('preguntas.create',compact('preguntas','formatopractica'));
    }

}
