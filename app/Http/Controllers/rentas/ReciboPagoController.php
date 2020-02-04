<?php

namespace App\Http\Controllers\rentas;

use App\Http\Controllers\Controller;
use App\ReciboPagoRenta;
use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ReciboPagoController extends Controller{

    public function index(Request $request){
        echo "hola recibo pago"; exit();
    }

    public function create(){
        //
    }

    public function store(Request $request){

    }

    public function show(ReciboPagoRenta $recibopagorenta){

        // Revisar la configuracion del codigo de barras ean
        $values = array(3,$recibopagorenta->numero,$recibopagorenta->valornetopago,$recibopagorenta->fechalimitepago);
        $sql = 'select sf_obtener_codigobarras_ean128(?,?,?,?)';
        $codigobarras = DB::select($sql,$values);

        $codigobarras = $codigobarras[0]->sf_obtener_codigobarras_ean128;

        $barcode = str_replace('(','',$codigobarras);
        $barcode = str_replace(')','',$barcode);

        $pdf = PDF::loadView('reportes.RENTAS.reciborentas', compact('recibopagorenta','codigobarras','barcode'));
        $pdf->setPaper('A4','portrait');
        return $pdf->stream('RECIBO RENTAS VARIAS.pdf');

    }

    public function edit(ReciboPagoRenta $reciboPago){
        //
    }

    public function update(Request $request, ReciboPagoRenta $reciboPago){

    }

    public function detalleRecibo(ReciboPagoRenta $recibopagorenta){

        return  view('rentas.contribuyentegeneral.detalle_recibo',compact('recibopagorenta'));
    }

}
