<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class PanelUsuario extends CI_Controller {

    function __construct() { 
        parent::__construct(); 
        $this->load->model('panelUsuario_model'); 
        
    }


    public function index() {
      

        $this->load->model('Provincias_model'); 
        $this->load->library('form_validation');
        $config = array(
            array(
                'field' => 'direccion',
                'label' => 'Dirección',
                'rules' => 'required'
            ),
            array(
                'field' => 'provincia',
                'label' => 'Provincia',
                'rules' => 'required'
            ),

            array(
                'field' => 'tlf',
                'label' => 'Telefono',
                'rules' => 'required'
            )
        );

        $this->form_validation->set_rules($config);
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('plantilla', [
                "cuerpo"=>$this->load->view("panelusuario", [
                    'provincias'=>$this->Provincias_model->get_provincia(),
                    'allpedidos' => $this->panelUsuario_model->get_pedidos()
                    
                ]
                ,TRUE) 
             ]);
            
            
        } else {
             $this->load->model('panelUsuario_model');
             $data = array(
                'Telefono' => $this->input->post("tlf"),
                'Direccion' => $this->input->post("direccion"),
                'Provincia' => $this->input->post("provincia")
        );
            if ($this->panelUsuario_model->cambiaDatos($data)) {
                $this->session->update();


               
            } else {
                redirect('Inicio');
            }
        }
    }
    
    
  

    public function borraPedido($id){
        $data = array(
            'Estado' => 'A'
    );    
    $this->panelUsuario_model->borra_pedido($id, $data);
    redirect('PanelUsuario');
    }
    
    public function enviarCorreo(){
     //Load email library

     $this->load->library('email');
     $this->load->model('usuario_model');
     $correo = $this->input->post("email");
     $this->email->initialize(array(
       'protocol' => 'smtp',
       'smtp_host' => 'smtp.sendgrid.net',
       'smtp_user' => 'jotadegc',
       'smtp_pass' => 'btrHChy9M8W9cit',
       'smtp_port' => 587,
       'crlf' => "\r\n",
       'newline' => "\r\n"
     ));
     $usuario = $this->usuario_model->get_Usuario($correo);
     if ($usuario != null){
     foreach ($usuario as $value){
         $id = $value->idUsuario;
         $token = sha1($value->DNI);
         var_dump($token);
     $this->email->from('practicajosedavidgomez@gmail.com', 'Electro');
     $this->email->to($this->input->post("email"));
     $this->email->subject('Email Test');
     $this->email->message(site_url('PanelUsuario/cambiaPassword/'.$id.'/'.$token));
     
     $this->email->send();
     }
    }
    //  echo $this->email->print_debugger();
     redirect("Login");
    }

    public function cambiaEnviaEmail(){
        
        $pag=$this->load->view("password",[],TRUE);

		$this->load->view("plantilla",[
			'cuerpo'=>$pag]);

    }
    public function cambiaPassword($id, $token){
        $pag=$this->load->view("restartpassword",['id'=>$id, 'token'=>$token],TRUE);
		$this->load->view("plantilla",[
			'cuerpo'=>$pag]);
    }
    public function updatePassword($id, $token){
        $this->load->model('usuario_model');
        $usuario = $this->usuario_model->get_UsuarioById($id);
        foreach ($usuario as $value){
        $dni = $value->DNI;
        $token1 = sha1($dni);    
        $this->load->library('form_validation');
        $config = array(
            array(
                'field' => 'pass1',
                'label' => 'Contraseña nueva',
                'rules' => 'required'
            ),
            array(
                'field' => 'pass2',
                'label' => 'Repetir contraseña',
                'rules' => 'required'
            )
        );
        $this->form_validation->set_rules($config);
        if ($this->form_validation->run() == FALSE || $this->input->post('pass1')!=$this->input->post('pass2') || $token != $token1) {
            $this->load->view('plantilla', [
                "cuerpo"=>$this->load->view("restartpassword", ['id'=>$id, 'token'=>$token],TRUE) 
             ]);
            //  var_dump($this->input->post('pass1'), $this->input->post('pass2'), $id, $token); die;
            }else{
                $pass = $this->input->post("pass1");
                $this->usuario_model->update_Password($id, $pass);
            }
        }
    }

    public function cambiaBaja(){
        $pag=$this->load->view("confirmacion",[
		],TRUE);

		$this->load->view("plantilla",[
			'cuerpo'=>$pag]);

    }

    public function bajaUsuario(){
        $this->panelUsuario_model->baja_Usuario();
        $this->panelUsuario_model->baja_PedidosUsuario();
        $this->session->sess_destroy();
        redirect("Inicio");
    }
}