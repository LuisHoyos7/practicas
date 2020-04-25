<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PreguntaRespuesta;
use App\FormatoPractica;
use App\EncabezadoFormato;

class PreguntaRespuestaController extends Controller
{
    
    public function index()
    {
        
    }

    public function create()
    {
        
    }

    
    public function store(Request $request)
    {
        
       $encabezado_formatos = EncabezadoFormato::create($request->all());

        foreach($request->opcionpregunta_id as $pregunta=>$respuesta)
        {
            $estudiante_id = auth()->user()->estudiante->id;
        
            
            $data = 
            [
                'pregunta_id'           => $pregunta,
                'opcionpregunta_id'     => $respuesta['respuesta'],
                'estudiante_id'         => $estudiante_id,
                'formato_id'            => $request->formato_id,
                'descripcion'           => @$respuesta['descripcion']
            ];

            PreguntaRespuesta::insert($data);
        }

        foreach($request->observaciones as $pregunta=>$observacion)
        {
           $dataUpdate =
           [
                  'pregunta_id'           => $pregunta,
                  'observaciones'         => $observacion['observacion']

           ];
     
          PreguntaRespuesta::where('pregunta_id', $pregunta)->where('estudiante_id',$estudiante_id)->update($dataUpdate);
           
        }

        toastr()->success('formato diligenciado con exito');

        if($request->formato_id == 1 || $request->formato_id == 2 )
        {
        return redirect()->route('formatos_index',1);
        }

        if($request->formato_id == 2 || $request->formato_id == 3 )
        {
        return redirect()->route('formatos_index',2);
        }


  
    }

    
    public function show($id)
    {
        
    }

   
    public function edit($id)
    {
        
    }

    public function update(Request $request, $id)
    {
        
    }
   
    public function destroy($id)
    {
        $pregunta_respuesta = PreguntaRespuesta::where('formato_id', $id)
            ->where('estudiante_id', auth()->user()->estudiante->id)->delete();

        return back();
    }
}
