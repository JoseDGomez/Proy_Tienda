<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Checkout extends CI_Controller {

    function __construct() { 
        parent::__construct(); 
        $this->load->model('Carrito_model'); 
    }

    
    public function cambiaCheck(){
        $this->load->model('Provincias_model');
        $pag=$this->load->view("checkout",['provincias'=>$this->Provincias_model->get_provincia()],TRUE);

		$this->load->view("plantilla",[
			'cuerpo'=>$pag]);

			
	
    }

    public function checkout($id){

        $this->load->model('Provincias_model');
		$pag=$this->load->view("checkout",[
            'pedido'=>$this->Carrito_model->add_pedido($id),
            'provincias'=>$this->Provincias_model->get_provincia()
		],TRUE);

		$this->load->view("plantilla",[
            'cuerpo'=>$pag]);
        $this->load->model('Producto_model');
        $this->Producto_model->update_Producto(); 
     
		redirect("Checkout/pedidoRealizado");
	}

    public function pedidoRealizado(){
    $this->load->library('email');    
    $mesg = $this->load->view('vistapdf','',true);   
    
    $correo = $this->session->userdata("correo");
    $this->email->initialize(array(
       'protocol' => 'smtp',
       'smtp_host' => 'smtp.sendgrid.net',
       'smtp_user' => 'jotadegc',
       'smtp_pass' => 'btrHChy9M8W9cit',
       'smtp_port' => 587,
       'crlf' => "\r\n",
       'newline' => "\r\n",
       'charset'=>'utf-8',
       'wordwrap'=> TRUE,
       'mailtype' => 'html'
     ));
     $this->email->from('practicajosedavidgomez@gmail.com', 'Electro');
     $this->email->to($correo);
     $this->email->subject('Tu pedido');
     $this->email->message($mesg);
     $this->email->send();
    //  var_dump($mesg, $correo); die;
        $pag=$this->load->view("pedidorealizado",[],TRUE);

		$this->load->view("plantilla",[
			'cuerpo'=>$pag]);

    }

}