<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DocenteGrupo;
use App\Docente;
use App\Grupo; 
use App\user; 
use Illuminate\Support\Arr;
class DocenteGrupoController extends Controller
{
    
    public function index()
    {
        $docente_grupos = DocenteGrupo::all();

        return view('docentes-grupos.index', compact('docente_grupos'));
    }

   
    public function create()
    {
        $docentes = Docente::pluck('nombres', 'id');

        $grupos = Grupo::pluck('nombre', 'id');

        return view('docentes-grupos.create', compact('docentes', 'grupos'));

    }

   
    public function store(Request $request)
    {
       DocenteGrupo::create($request->all());

       return redirect()->route('docentes-grupos.index');
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
