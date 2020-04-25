<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PracticaPedagogica;
use App\Practica;
use App\PreguntaRespuesta;
use App\EncabezadoFormato;
use App\Pregunta;
use App\FormatoPractica;
use DB;

class FormatoPracticaController extends Controller
{
     
    public function index(Practica $practica)
    {
        $estudiante_id= auth()->user()->estudiante->id;

        $formatos = $practica->formatos;

        $validar1 = PreguntaRespuesta::where('formato_id', 1)->where('estudiante_id', $estudiante_id)->count();

        $validar2 = PreguntaRespuesta::where('formato_id', 2)->where('estudiante_id', $estudiante_id)->count();

        return view('formatos_practicas.index', compact('formatos', 'validar1','validar2'));
    }

   
    public function create()
    {
        
    }

   
    public function store(Request $request)
    {
        
    }


    public function imprimirPdf(FormatoPractica $formatopractica, Request $request)
    {
    
        $respuestas = DB::table('preguntas as p')
            ->join('pregunta_respuestas as pr', 'p.id', '=', 'pr.pregunta_id')
            ->where('pr.estudiante_id', $request->estudiante_id)
            ->where('pr.formato_id', $formatopractica->id)
            ->select('p.nombre', 'pr.descripcion', 'pr.observaciones')
            ->get();


        $encabezado_formatos = EncabezadoFormato::where('formato_id',$formatopractica->id)
            ->where('estudiante_id',$request->estudiante_id)->get();


        $pdf = \PDF::loadView('formatos_practicas.pdf', compact('respuestas', 'encabezado_formatos', 'preguntas'));

        return $pdf->download('formato.pdf');
    }

  
    public function edit($id)
    {
        
    }


    public function update(Request $request, $id)
    {
        
    }

   
    public function destroy($id)
    {
        
    }
}
