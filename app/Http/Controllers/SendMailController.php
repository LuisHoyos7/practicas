<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\Sender;
use Mail;

class SendMailController extends Controller
{
    
	public function sendMail($destinatario,$asunto,$vista=null,$adjuntos=null)
    {
    	Mail::to($destinatario)->send(new Sender(array('asunto'=>$asunto,
		                                               'vista'=>$vista,
													   'adjuntos'=>$adjuntos
													   )));
		if (Mail::failures()) {
			return array('estado'=>false,'errores'=>Mail::failures());
        }else{
			return array('estado'=>true);
		}
    }
	
}