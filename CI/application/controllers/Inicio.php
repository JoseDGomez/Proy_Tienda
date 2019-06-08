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

	public function muestraCategoria($cat, $offset=0){


	$data=$this->Destacado->get_ProductoCat($cat);	
	$config['full_tag_open'] 	= '<div class="pagging text-center"><nav><ul class="pagination">';
	$config['full_tag_close'] 	= '</ul></nav></div>';
	$config['num_tag_open'] 	= '<li class="page-item"><span class="page-link">';
	$config['num_tag_close'] 	= '</span></li>';
	$config['cur_tag_open'] 	= '<li class="page-item active"><span class="page-link">';
	$config['cur_tag_close'] 	= '<span class="sr-only">(current)</span></span></li>';
	$config['next_tag_open'] 	= '<li class="page-item"><span class="page-link">';
	$config['next_tagl_close'] 	= '<span aria-hidden="true">&raquo;</span></span></li>';
	$config['prev_tag_open'] 	= '<li class="page-item"><span class="page-link">';
	$config['prev_tagl_close'] 	= '</span></li>';
	$config['first_tag_open'] 	= '<li class="page-item"><span class="page-link">';
	$config['first_tagl_close'] = '</span></li>';
	$config['last_tag_open'] 	= '<li class="page-item"><span class="page-link">';
	$config['last_tagl_close'] 	= '</span></li>';

	$config['base_url']=site_url('Inicio/muestraCategoria/'.$cat);
	$config['per_page']=5;
	$config['total_rows']=count($data);
	
	$this->pagination->initialize($config);
	$page=$this->Destacado->getPaginate_producto($cat,$config['per_page'],$offset);	

		$pag=$this->load->view("productos",[
			'producto'=>$page,
			'categoria'=>$this->Destacado->get_Categoria()
		],TRUE);

		$this->load->view("plantilla",[
			'cuerpo'=>$pag]);
	}

	

}