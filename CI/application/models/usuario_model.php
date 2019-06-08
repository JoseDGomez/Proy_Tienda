<?php 

    class usuario_model extends CI_Model{

        function __construct() {
            parent::__construct();
            $this->load->database();
        }

        function Nuevo($datos_usuario){
            $this->db->insert("usuario", $datos_usuario);
           }

        

        }
