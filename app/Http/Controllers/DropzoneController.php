<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PracticaPedagogica;
use App\Producto;

class DropzoneController extends Controller
{
     public function dropzone(Request $request)
    {
        $idPracticaPedagogica = Producto::find($request->idProducto);
        
        $id2 = $idPracticaPedagogica->practica_pedagogicas_id;

        $id = $request->idProducto;

        return view('dropzone-view', compact('id', 'id2'));
    }
    
    /**
     * Image Upload Code
     *
     * @return void
     */
    public function dropzoneStore(Request $request)
    {
        $image = $request->file('file');
   
        $imageName = $request->id.rand(0,500000000000).'.'.$image->extension();

        $image->move(storage_path('/app/public/'),$imageName);
   
        return response()->json(['success'=>$imageName]);
    }
}
