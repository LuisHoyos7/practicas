<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Colegio;
class ColegioController extends Controller
{
    
    public function index()
    {
        $colegios = Colegio::all();

        return view('colegios.index', compact('colegios'));
    }

   
    public function create()
    {
        return view('colegios.create');
    }

    
    public function store(Request $request)
    {
      
        $file =   $request->file('imagen');

        $nombre = $request->nombre_colegio.'.jpg';

        $file->move('uploads', $nombre);

        $colegio = Colegio::create($request->all());

        toastr()->success('institucion creada con exito');

        return redirect()->route('colegios.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $colegio = Colegio::find($id);
    
        return view('colegios.show', compact('colegio'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $colegio = Colegio::findOrFail($id);

        return view('colegios.edit', compact('colegio'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $colegio = Colegio::findOrFail($id);

        $colegio->update($request->all());

        toastr()->warning('institucion modificada con exito');

        return redirect()->route('colegios.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Colegio $colegio)
    {
        $colegio->delete();

        toastr()->success('Institucion Eliminada con exito');

        return redirect()->route('colegios.index');
    }
}
