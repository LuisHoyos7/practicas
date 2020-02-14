<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Practica; 
use App\Diario;
use App\PracticaPedagogica;

class DiarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        $practica = Practica::find($request->idPractica);
    
        return view('diarios.index', compact('practica'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $practicas_pedagogicas = PracticaPedagogica::find($request->idPractica);

        return view('diarios.create', compact('request','practicas_pedagogicas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $diario = Diario::create($request->all());
    
        toastr()->success('Diario Registrado con Exito');

        return redirect()
            ->route('diarios.index',['idPractica' => $diario->practica_id]);
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
    public function edit(Diario $diario)
    {

        $practica = $diario->practica;

        $practicas_pedagogicas = PracticaPedagogica::find($diario->practica_id);

        return view('diarios.edit', compact('practica','diario','practicas_pedagogicas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Diario $diario)
    {
        $request['practica_id'] = $diario->practica_id;

        $diario->update($request->all());
    
        toastr()->success('registro Actualizado  con Exito');

        return redirect()
            ->route('diarios.index',['idPractica' => $diario->practica_id]);
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
