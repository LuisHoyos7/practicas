<?php

namespace App\Http\Controllers\rentas;

use App\CuentaBancaria;
use App\Http\Controllers\Controller;
use App\LotePagoRenta;
use App\TipoRegistroPago;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LotePagoRentaController extends Controller{

    public function __construct(){
        $this->middleware(['auth','role:administrador']);
    }

    public function index(Request $request){

        if($request->rownumber == null){
            $request->rownumber=10;
        }

        $lotepagos = LotePagoRenta::orderbyDesc('id')->latest()->paginate($request->rownumber);

        return view('rentas.lotepago.index',compact('lotepagos'));
    }

    public function create(){

        $tipo_registro   = TipoRegistroPago::pluck('nombre','id');
        $cuenta_bancaria = CuentaBancaria::all();

        return view('rentas.lotepago.create', compact('tipo_registro', 'cuenta_bancaria'));
    }

    public function store(Request $request){

        if( $request->id_tiporegistro == 1){
            $this->asobancaria2001($request);
        }elseif($request->id_tiporegistro == 2){
            $this->manual($request);
        }elseif($request->id_tiporegistro == 3 ){
            $this->manual($request);
        }

        return redirect()->route('lotepagorentas.index');
    }

    public function show(LotePagoRenta $lotepagorenta){

        return  view('rentas.lotepago.detalle',compact('lotepagorenta'));
    }

    public function asobancaria2001($request){

        $data = $request->all();
        $data['cantidadpagos'] = 0;
        $data['cantidadpagosaplicados'] = 0;
        $data['valorpagos'] = 0;
        $data['valorpagosaplicados'] = 0;
        $data['aplicado']= false;
        $data['fechaaplicacion'] = null;

        $lote_pago = LotePagoRenta::create($data);

        $files = $request->file('file');
        $destinationPath = $_SERVER['DOCUMENT_ROOT'].'/file/'; // upload path
        $profilefile =  "archivo_lote_pago_renta_" . date('Ymd') . "." . $files->getClientOriginalExtension();
        $files->move($destinationPath, $profilefile);
        $insert['file'] = "$profilefile";
        $asobancaria = array();
        $numero_registro = '';
        $fila = 1;
            if (($gestor = fopen($destinationPath.$profilefile, "r")) !== FALSE)
            {
                while (($datos = fgetcsv($gestor, 1000, ",")) !== FALSE)
                {

                    $longitud = strlen($datos[0]);
                    $codigo = substr ($datos[0] , 0 , 2 );
                    echo $codigo.'<br>';

                    if ($codigo == '06') {
                        $tipo_registro = 3;
                        $numero_recibo = substr ($datos[0] , 35 , 15);
                        $numero_recibo_ordenado = ltrim($numero_recibo, 0);

                    $registro = $datos[0];
                    $numero_registro.=$numero_recibo_ordenado.',';

                    /*$asobancaria[] = array('id_lotepago'=>$lote_pago->id,
                                     'id_tiporegistro'=>$tipo_registro,
                                     'registro'=>$numero_recibo_ordenado);*/

                    }
                }
                fclose($gestor);

                $numero_registro = rtrim($numero_registro,',');
                $id_lote = DB::select('select sp_lotepago_renta_asobancaria2001(?,?,?,?,?)',array($request->id_cuentabancaria,$request->id_tiporegistro,$lote_pago->id ,$request->fecharecaudo,$numero_registro));
                DB::select('select sp_act_lotepago_renta(?)', array($id_lote[0]->sp_lotepago_renta_asobancaria2001));

                toastr()->success('¡Lote Pago Cargado Correctamente!');

            }else{
                toastr()->error('¡Lote Pago No Cargado Correctamente!');
            }
    }

    public function manual($request){

        $detalles_lotes = implode(",", $request->detalle);

        $id_lote = DB::select('select sp_lotepago_renta(?,?,?::timestamp,?)',array($request->id_cuentabancaria,$request->id_tiporegistro, $request->fecharecaudo,$detalles_lotes));

        DB::select('select sp_act_lotepago_renta(?)', array($id_lote[0]->sp_lotepago_renta));

        toastr()->success('¡Lote Pago Cargado Correctamente!');
    }

}
