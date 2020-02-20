<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PreguntaRespuesta;
use App\FormatoPractica;

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
      
        
        foreach($request->opcionpregunta_id as $pregunta=>$respuesta)
        {
            $estudiante_id = auth()->user()->estudiante->id;
        
            
            $data = 
            [
                'pregunta_id'           => $pregunta,
                'opcionpregunta_id'     => $respuesta['respuesta'],
                'estudiante_id'         => $estudiante_id,
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

        $formato = FormatoPractica::find($request->formato_id);

        $formato->update(['diligenciado' => 'true']);

        toastr()->success('formato diligenciado con exito');

        return redirect()->route('formatos_index',$request->formato_id);
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
        
    }
}
