<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\FormatoPractica;
use App\PracticaPedagogica;
use App\Practica;

class FormatoPracticaController extends Controller
{
     
    public function index(Practica $practica)
    {
        $formatos = $practica->formatos;
        
        return view('formatos_practicas.index', compact('formatos'));
    }

   
    public function create()
    {
        
    }

   
    public function store(Request $request)
    {
        
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
