<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Estudiante;
use App\Semestre;
use App\Practica;
use App\Docente; 
use App\Colegio;
use App\PracticaPedagogica;

class PracticaPedagogicaController extends Controller
{
   

    public function index(Estudiante $estudiante)
    {
       if(auth()->user()->hasRole('administrador'))
       {
       
        $practica_pedagogicas = PracticaPedagogica::all();
        
        return view ('practicas.index',compact('practica_pedagogicas'));
    
       }

       if(auth()->user()->hasRole('estudiante'))
        {
        $validar1 = auth()->user()->estudiante->practicasPedagogicas->where('finalizada', false)->count();
       
        $validar2 = PracticaPedagogica::where('estudiante_id',auth()->user()->estudiante->id)->count();

        $practica_pedagogicas = auth()->user()->estudiante->practicasPedagogicas;
       
        return view('practicas.index', compact('practica_pedagogicas', 'validar1', 'validar2'));
       }

       if(auth()->user()->hasRole('docente'))
       {
         $user_id = auth()->user()->docente->id;

         $practica_pedagogicas = PracticaPedagogica::where('docente_id', $user_id)
            ->where('finalizada', false)->get();

         return view('practicas.index', compact('practica_pedagogicas'));
       }
        
    }

    public function create()
    {
        $estudiante = auth()->user()->estudiante;

        $semestres = Semestre::pluck('nombre', 'id'); 

        $practicas = Practica::pluck('nombre','id');

        $docentes = Docente::pluck('nombres', 'id'); 

        $instituciones = Colegio::pluck('nombre_colegio', 'id'); 

        return view('practicas.create',compact('semestres','practicas','estudiante','docentes','instituciones'));
    }

 
    public function store(Request $request)
    {
      
        PracticaPedagogica::create($request->all());

        toastr()->success('practica registrada con exito');

        return redirect()->route('practicas.index');
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
