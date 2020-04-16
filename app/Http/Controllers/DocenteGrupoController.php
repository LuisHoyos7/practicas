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
        $docentes = Docente::pluck('nombres', 'id');

        $grupos = Grupo::pluck('nombre', 'id');

        $docente_grupo = DocenteGrupo::findOrFail($id);

        return view('docentes-grupos.edit',compact('docente_grupo', 'docentes', 'grupos'));

    }

  
    public function update(Request $request, $id)
    {
        $docentes_grupos = DocenteGrupo::findOrFail($id);

        $docentes_grupos->update($request->all());

        return redirect()->route('docentes-grupos.index');
    }

   
    public function destroy($id)
    {
        $docentegrupo = DocenteGrupo::findOrFail($id);
    
        $docentegrupo->delete();

        return redirect()->route('docentes-grupos.index');

    }
}
