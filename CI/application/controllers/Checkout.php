<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Checkout extends CI_Controller {

    function __construct() { 
        parent::__construct(); 
        $this->load->model('Carrito_model'); 
    }

    
    public function cambiaCheck(){
        $pag=$this->load->view("checkout",[],TRUE);

		$this->load->view("plantilla",[
			'cuerpo'=>$pag]);

			
	
    }

    public function checkout($id){


		$pag=$this->load->view("checkout",[
			'pedido'=>$this->Carrito_model->add_pedido($id),
		],TRUE);

		$this->load->view("plantilla",[
			'cuerpo'=>$pag]);

			
	}

}