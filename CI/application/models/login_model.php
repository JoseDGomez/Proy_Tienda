<?php

class login_model extends CI_Model {

    function __construct() {
        parent::__construct();
        $this->load->database();
    }

    function loginok($nombre_usuario, $contra) {

        $this->db->where("nombre_usuario", $nombre_usuario);
        $this->db->where("contrasena", $contra);

        $query = $this->db->get('usuario');
        if ($query->num_rows() > 0) {
            $this->login_model->add_usuario_session($query->row());
            return true;
        } else {
            return false;
        }
    }

    function add_usuario_session($query) {
        $newdata = array(
            'nombre_usuario' => $query->nombre_usuario,
            'pass' => $query->contrasena,
            'dentro' => TRUE
        );
        $this->session->set_userdata($newdata);
    }

    function cerrar_session() {
        $this->session->sess_destroy();
    }

    function esta_dentro() {
        return $this->session->userdata("dentro");
    }

}
