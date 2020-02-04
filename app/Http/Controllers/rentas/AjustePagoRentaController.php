<?php

namespace App\Http\Controllers\rentas;

use App\ContribuyenteGeneral;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AjustePagoRentaController extends Controller{

    public function __construct(){
        $this->middleware(['auth','role:administrador']);
    }

    public function create(ContribuyenteGeneral $contribuyentegeneral, Request $request){

        // if(!empty($request->ajuste_id)){
        //     $ajuste_ipu = Ajuste::find($request->ajuste_id);
        //     $detalle_ajuste = DetalleAjusteIpu::where('id_ajusteipu', $ajuste_ipu->id)->get();
        // }

        // $tipo_ajuste = TipoAjuste::pluck('nombre', 'id');
        // $causal_ajuste = CausalAjuste::pluck('nombre','id');
        // $documento_soporte = DocumentoSoporte::pluck('nombre_archivo_adjunto','id');

        return view('rentas.ajustepago.create', compact('contribuyentegeneral'));
    }

    public function store(ContribuyenteGeneral $contribuyentegeneral, Request $request){

        dd($contribuyentegeneral);
    }

}
