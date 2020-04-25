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

        $validar = Diario::where('practica_pedagogicas_id',$request->idPracticaPedagogica)->count();
    
        $practica_pedagogicas = PracticaPedagogica::find($request->idPracticaPedagogica);
  
        return view('diarios.index', compact('practica_pedagogicas', 'validar'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $practicas_pedagogicas = PracticaPedagogica::find($request->idPracticaPedagogicas);

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
            ->route('diarios.index',['idPracticaPedagogica' => $diario->practica_pedagogicas_id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function imprimirPdf(Diario $diario)
    {
        $diario = Diario::find($diario->id);

        $practica = PracticaPedagogica::find($diario->practica_pedagogicas_id);

        $pdf = \PDF::loadView('diarios.pdf', compact('diario', 'practica'));

        return $pdf->download('diario.pdf'); 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Diario $diario)
    {

        $diario = Diario::find($diario->id);

        $practicas_pedagogicas = PracticaPedagogica::find($diario->practica_pedagogicas_id);

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
        $request['practica_pedagogicas_id'] = $diario->practica_pedagogicas_id;

        $diario->update($request->all());
    
        toastr()->success('registro Actualizado  con Exito');

        return redirect()
            ->route('diarios.index',['idPracticaPedagogica' => $diario->practica_pedagogicas_id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Diario $diario)
    {
        $diario->delete();
        return redirect()
            ->route('diarios.index',['idPracticaPedagogica' => $diario->practica_pedagogicas_id]);
    }
}
