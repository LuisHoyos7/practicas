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
        $docentes = Docente::all();
 
        $arr = array();

        foreach($docentes as $docente)
        { 
          
            $data = User::where('id', $docente->user_id)->pluck('first_name','id');

            foreach($data as $d)
            {
                $data2 = $d;

                array_push($arr, $data2);
            }

        }
      

        $grupos = Grupo::pluck('nombre', 'id');

    

        return view('docentes-grupos.create', compact('arr', 'grupos'));

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
