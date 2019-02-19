<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inicio extends CI_Controller {

	function __construct() {
        parent::__construct();
        $this->load->model("Destacado");
    }

	public function index()
	{	
		
		$pag=$this->load->view("destacado",[
			'destacado'=>$this->Destacado->get_Destacado(),
			'categoria'=>$this->Destacado->get_Categoria()
		],TRUE);

		$this->load->view("plantilla",[
			'cuerpo'=>$pag]);

				
	}


}