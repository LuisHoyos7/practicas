<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Estudiante;
use App\User;

class EstudianteController extends Controller
{
    
    public function index()
    {
       if(auth()->user()->hasRole('administrador'))
       {
       
        $estudiantes = Estudiante::all();
        return view ('estudiantes.index',compact('estudiantes'));
    
       }else
        $estudiantes = Estudiante::where('user_id', auth()->user()->id)->get();
        return view ('estudiantes.index',compact('estudiantes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Estudiante $estudiante)
    {
        return view('estudiantes.edit', compact ('estudiante'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Estudiante $estudiante)
    {
    
        $dataUser = 
        [
            'first_name'        => $request->first_name,
            'last_name'         => $request->last_name,
            'email'             => $request->correo,
            'direccion'         => $request->direccion,
            'telefono'          => $request->celular,
            'identificacion'    => $request->identificacion,
        ];

        $user = User::findOrFail($estudiante->user_id);
        
        $user->update($dataUser);

        $dataStudent = 
        [
            'tipoidentificacon'     => $request->tipoidentificacion,
            'semestre'              => $request->semestre,
            'sede'                  => $request->sede,
            'practica'              => $request->practica,
            'modalidad'             => $request->modalidad,
            'programa'              => $request->programa,
            'ciudad'                => $request->ciudad,
        ];

        $estudiante = Estudiante::findOrFail($estudiante->id);

        $estudiante->update($dataStudent);

        toastr()->success('Estudiante Modificado con Exito');

        return redirect()->route('estudiantes.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
