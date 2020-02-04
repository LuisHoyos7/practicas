<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class Sender extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
	 
    public function __construct($datos)
    {
		$this->vista=empty($datos['vista'])?'emails.vacio':$datos['vista'];
		$this->asunto=empty($datos['asunto'])?'TaxTool':$datos['asunto'];
		$this->adjuntos=empty($datos['adjuntos'])?array():$datos['adjuntos'];
		// $this->texto=empty($datos['texto'])?'':$datos['texto'];
		
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $mensaje=$this->view($this->vista)->subject($this->asunto);
		
			if(!empty($this->adjuntos)){
				
				if(is_array($this->adjuntos)){
					foreach($this->adjuntos as $f){
				$mensaje->attach($f,['as'=>basename($f),'mime' => 'application/pdf']); 
			    }
				}else{
					$mensaje->attach($this->adjuntos,['as'=>basename($this->adjuntos),'mime' => 'application/pdf']); 
				}
			}
		return $mensaje;
    }
}
