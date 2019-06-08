<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Producto extends CI_Controller {

    function __construct() { 
        parent::__construct(); 
        $this->load->model('Producto_model'); 
    }
    
    public function muestraProducto($id){


		$pag=$this->load->view("producto_detalles",[
			'producto'=>$this->Producto_model->get_Detalles($id),
		],TRUE);

		$this->load->view("plantilla",[
			'cuerpo'=>$pag]);

			
	}

	
}