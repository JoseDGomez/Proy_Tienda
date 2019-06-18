<?php 

    class usuario_model extends CI_Model{

        function __construct() {
            parent::__construct();
            $this->load->database();
        }

        function Nuevo($datos_usuario){
            $this->db->insert("usuario", $datos_usuario);
           }

           public function get_Usuario($correo){
            $query = $this->db->get_where('usuario', array('Correo' => $correo));
            if($query == null){
            return false;
        } else{
            return $query -> result();
        }
            

        }

        public function get_UsuarioById($id){
            $query = $this->db->get_where('usuario', array('idUsuario' => $id));
            if($query == null){
            return false;
        } else{
            return $query -> result();
        }
            

        }

        public function update_Password($id, $pass){
        $this->db->set('Contrasena', $pass);
        $this->db->where('idUsuario', $id);
        $this->db->update('usuario');
        }

      
        }

        
