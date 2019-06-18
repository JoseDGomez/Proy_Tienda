<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class register extends CI_Controller{


    public function index(){

        
        $this->load->library('form_validation');
        $reglas = [
            ['field' => 'nombre','label' => 'Nombre','rules' => 'required'],
            array(
                'field' => 'apellido',
                'label' => 'Apellido',
                'rules' => 'required'
            ),
            array(
                'field' => 'email',
                'label' => 'Email',
                'rules' => 'required'
            ),
            array(
                'field' => 'direccion',
                'label' => 'Dirección',
                'rules' => 'required'
            ),
            array(
                'field' => 'cp',
                'label' => 'Código Postal',
                'rules' => 'required'
            ),
            array(
                'field' => 'dni',
                'label' => 'DNI',
                'rules' => 'required'
            ),
            array(
                'field' => 'nombre_usuario',
                'label' => 'Nombre Usuario',
                'rules' => 'required'
            ),
            array(
                'field' => 'pass',
                'label' => 'Contraseña',
                'rules' => 'required'
            ),
            array(
                'field' => 'provincia',
                'label' => 'Provincia',
                'rules' => 'required'
            )
        ];
        $this->form_validation->set_rules($reglas);
        if ($this->form_validation->run() == FALSE) {
            $this->load->model('Provincias_model');
             $this->load->view('plantilla', [
                "cuerpo"=>$this->load->view("login",['provincias'=>$this->Provincias_model->get_provincia()],TRUE)
                ]);
             }else{
                 $this->load->model("usuario_model");
                 $this->usuario_model->Nuevo([
                     "Nombre"=>$this->input->post("nombre"),
                     "Apellido"=>$this->input->post("apellido"),
                     "Correo"=>$this->input->post("email"),
                     "Direccion"=>$this->input->post("direccion"),
                     "CP"=>$this->input->post("cp"),
                     "Provincia"=>$this->input->post("provincia"),
                     "DNI"=>$this->input->post("dni"),
                     "Nombre_Usuario"=>$this->input->post("nombre_usuario"),
                     "Contrasena"=>$this->input->post("pass")]);
                  
            }   
        }

    }


