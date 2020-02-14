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

        $formato = FormatoPractica::find($request->formato_id);

        $formato->update(['diligenciado' => 'true']);

        toastr()->success('formato diligenciado con exito');

        return redirect()->route('formatos_index');
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
