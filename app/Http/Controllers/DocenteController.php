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
        $docentes = Docente::all();

        return view('docentes.index', compact('docentes'));
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

        $user->attachRole('administrador');
      

        $docenteData = 
        [
            'user_id'                       => $user->id,
            'tipoidentificacion'            => $request->tipoidentificacion,
            'titulo'                        => $request->titulo,
            'tipodocente_id'                => $request->tipodocente_id,
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
        
    }

    
    public function update(Request $request, $id)
    {
        
    }

    
    public function destroy($id)
    {
        
    }
}
