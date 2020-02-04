<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Estudiante;
use App\Semestre;
use App\Practica;
use App\PracticaPedagogica;

class PracticaPedagogicaController extends Controller
{
   

    public function index(Estudiante $estudiante)
    {
       
        $practica_pedagogicas = auth()->user()->estudiante->practicasPedagogicas;
       
        return view('practicas.index', compact('practica_pedagogicas'));
    }

    public function create()
    {
        $estudiante = auth()->user()->estudiante;

        $semestres = Semestre::pluck('nombre', 'id'); 

        $practicas = Practica::pluck('nombre','id');

        return view('practicas.create',compact('semestres','practicas','estudiante'));
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
