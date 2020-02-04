<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\SendMailController;
// use Barryvdh\DomPDF\PDF as DomPDFPDF;
// use PDF;
use Barryvdh\DomPDF\Facade as PDF;
use Barryvdh\Snappy\Facades\SnappyPdf as snappyPDF;
// use DB;
use Illuminate\Support\Facades\DB;
use App\LotePagoIpu;
use Illuminate\Support\Facades\View;

class EjemploController extends Controller
{


	public function  pdf(){

		$dd = LotePagoIpu::find(139);
		dd($dd->tipoRegistro);
		// $pdf = PDF::loadView('reportes.ica.reciboobligacionicacuota');
		// $pdf->setPaper('legal','portrait');
        // return $pdf->stream('RECIBO PREDIAL.pdf');

    }

	public function enviarMail(){

		$m= new SendMailController();
		$adjunto=public_path().'/pdf/pdf_file.pdf';
		$adjunto1=public_path().'/pdf/pdf_file1.pdf';
		$adjunto2=public_path().'/pdf/pdf_file2.pdf';
		$adjunto3=public_path().'/pdf/pdf_file3.pdf';

		$ad=array($adjunto,$adjunto1,$adjunto2,$adjunto3);
		// $destinatario,$asunto,$vista=null,$adjuntos=null or array ,
		if($m->sendMail('ddaicardy@gmail.com','ESTO ES UN ASUNTO 2222','emails.pagina',$ad)){
			echo 'mando';
		}else{
			echo 'error';
		}

    }

    public function subir( Request $request ){
        // print_r($request->file());

        echo $request->file('csv')->save('upload/lotepago.csv');
    }

    public function form(){

        $codigo = DB::select('select sf_obtener_codigobarras_ean128(?,?,?,?)', [1,
        '201900000007',
        2181994,
        '2019-12-31'
        ]);

        echo json_encode($codigo);
        exit();
        return view('reportes.subirform');
    }

    public function revocarAcuerdo(Request $request){
        dd($request);
    }


}
