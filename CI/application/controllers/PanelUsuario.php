<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class PanelUsuario extends CI_Controller {

    function __construct() { 
        parent::__construct(); 
        $this->load->model('Producto_model'); 
    }
    
    public function abrePanel(){


		$pag=$this->load->view("panelusuario",[],TRUE);

		$this->load->view("plantilla",[
			'cuerpo'=>$pag]);

			
	}

	
}