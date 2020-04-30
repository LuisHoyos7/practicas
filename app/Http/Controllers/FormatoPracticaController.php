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

        $validar3 = PreguntaRespuesta::where('formato_id', 3)->where('estudiante_id', $estudiante_id)->count();

        $validar4 = PreguntaRespuesta::where('formato_id', 4)->where('estudiante_id', $estudiante_id)->count();

        $validar5 = PreguntaRespuesta::where('formato_id', 5)->where('estudiante_id', $estudiante_id)->count();

        $validar6 = PreguntaRespuesta::where('formato_id', 6)->where('estudiante_id', $estudiante_id)->count();

        $validar7 = PreguntaRespuesta::where('formato_id', 7)->where('estudiante_id', $estudiante_id)->count();

        $validar8 = PreguntaRespuesta::where('formato_id', 8)->where('estudiante_id', $estudiante_id)->count();

        return view('formatos_practicas.index', compact('formatos', 'validar1','validar2','validar3', 'validar4','validar5','validar6','validar7','validar8'));
    }

   
    public function create()
    {
        
    }

   
    public function store(Request $request)
    {
        
    }


    public function imprimirPdf(FormatoPractica $formatopractica, Request $request)
    {
        if($formatopractica->id == 1 )
        {
            $respuestas = DB::table('preguntas as p')
            ->join('pregunta_respuestas as pr', 'p.id', '=', 'pr.pregunta_id')
            ->where('pr.estudiante_id', $request->estudiante_id)
            ->where('pr.formato_id', $formatopractica->id)
            ->select('p.nombre', 'pr.descripcion', 'pr.observaciones')
            ->get();

        $formato_id = $formatopractica->id;

        $encabezado_formatos = EncabezadoFormato::where('formato_id',$formatopractica->id)
            ->where('estudiante_id',$request->estudiante_id)->get();


        $pdf = \PDF::loadView('formatos_practicas.pdf', compact('respuestas', 'encabezado_formatos', 'preguntas','formato_id'))->setPaper('a4', 'landscape');

        return $pdf->download('formato.pdf');

        }else 
        {
           $respuestas = DB::table('preguntas as p')
            ->join('pregunta_respuestas as pr', 'p.id', '=', 'pr.pregunta_id')
            ->join('opcion_preguntas as op', 'pr.opcionpregunta_id', '=', 'op.id')
            ->where('pr.estudiante_id', $request->estudiante_id)
            ->where('pr.formato_id', $formatopractica->id)
            ->select('p.nombre', 'op.nombre', 'pr.observaciones')
            ->get();

        $encabezado_formatos = EncabezadoFormato::where('formato_id',$formatopractica->id)
            ->where('estudiante_id',$request->estudiante_id)->get();


        $pdf = \PDF::loadView('formatos_practicas.pdf', compact('respuestas', 'encabezado_formatos', 'preguntas'))->setPaper('a4', 'landscape');

        return $pdf->download('formato.pdf');

    
        }
    
        
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
