<?php

namespace App\Http\Controllers; 

use Illuminate\Http\Request;
use App\Docente;
use App\TipoDocente;
use App\User;
class DocenteController extends Controller
{
   
    public function index()
    {
        
        if( auth()->user()->hasRole('docente'))
        {
            $docentes = Docente::where('id', auth()->user()->docente->id)->get();

            return view('docentes.index', compact('docentes'));
        }else 
        {
             $docentes = Docente::all();

            return view('docentes.index', compact('docentes'));
        }
       
    }

   
    public function create()
    {
        $tipo_docentes = TipoDocente::pluck('nombre', 'id');

        return view('docentes.create', compact('tipo_docentes'));
    }

   
    public function store(Request $request)
    {
         $userData = 
        [
            'identificacion'    => $request->identificacion,
            'first_name'        => $request->first_name,
            'last_name'         => $request->last_name,
            'telefono'          => $request->celular,
            'direccion'         => $request->direccion,
            'email'             => $request->correo,
            'password' => bcrypt($request->identificacion)
        ];

        $user = User::create($userData);

        $user->attachRole('docente');
      

        $docenteData = 
        [
            'user_id'                       => $user->id,
            'tipoidentificacion'            => $request->tipoidentificacion,
            'titulo'                        => $request->titulo,
            'tipodocente_id'                => $request->tipodocente_id,
            'nombres'                       => $request->first_name.' '.$request->last_name
        ];
      
        $docente = Docente::create($docenteData);

        toastr()->success('Docente creado con exito');

        return redirect()->route('docentes.index');

    }

    
    public function show($id)
    {
        
    }

    
    public function edit($id)
    {
        $docente = Docente::find($id); 

        $usuario = User::find($docente->user_id);

        $tipo_docentes = TipoDocente::pluck('nombre', 'id');

        return view('docentes.edit', compact('docente', 'tipo_docentes', 'usuario'));
    }

    public function update(Request $request, $id)
    {

         $userData = 
        [
            'identificacion'    => $request->identificacion,
            'first_name'        => $request->first_name,
            'last_name'         => $request->last_name,
            'telefono'          => $request->celular,
            'direccion'         => $request->direccion,
            'email'             => $request->correo,
            'password' => bcrypt($request->identificacion)
        ];
        $user = User::find($request->user_id);

        $user->update($userData);
      
        $docenteData = 
        [
            'user_id'                       => $user->id,
            'tipoidentificacion'            => $request->tipoidentificacion,
            'titulo'                        => $request->titulo,
            'tipodocente_id'                => $request->tipodocente_id,
            'nombres'                       => $request->first_name.' '.$request->last_name
        ];
      
        $docente = Docente::find($id);

        $docente->update($docenteData);

        toastr()->success('Docente actualizado con exito');

        return redirect()->route('docentes.index');
        
    }

    
    public function destroy(Docente $docente)
    {
    
        $docente->delete();

        $user = User::find($docente->user_id);

        $user->delete();

        toastr()->warning('Docente Eliminado con exito con exito');

        return redirect()->route('docentes.index');

    }
}
