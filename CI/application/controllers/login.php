<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class login extends CI_Controller {

    function __construct() { 
        parent::__construct(); 
        $this->load->model('Provincias_model'); 
    }
    


    public function index() {
        
      
        
        $this->load->library('form_validation');
        $config = array(
            array(
                'field' => 'nombre_usuario_inicio',
                'label' => 'Nombre Usuario',
                'rules' => 'required'
            ),
            array(
                'field' => 'pass_inicio',
                'label' => 'Contraseña',
                'rules' => 'required'
            )
        );

        $this->form_validation->set_rules($config);
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('plantilla', [
                "cuerpo"=>$this->load->view("login", [
                    'provincias'=>$this->Provincias_model->get_provincia()
                ]
                ,TRUE) 
             ]);
      
            
        } else {
             $this->load->model('login_model');
            if ($this->login_model->loginok(
                    $this->input->post('nombre_usuario_inicio'), $this->input->post('pass_inicio'))) {



                redirect('Inicio');
            } else {
                echo "falso";
            }
        }
    }
    
    
    public function cerrar_sesion(){
        $this->load->model('login_model');
        $this->login_model->cerrar_session();
        redirect('Inicio');
    } 


}
