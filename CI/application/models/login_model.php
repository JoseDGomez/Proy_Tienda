<?php

class login_model extends CI_Model {

    function __construct() {
        parent::__construct();
        $this->load->database();
    }

    function loginok($nombre_usuario, $contra) {

        $this->db->where("Nombre_Usuario", $nombre_usuario);
        $this->db->where("Estado", "A");
        $this->db->where("Contrasena", $contra);

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
            'id' => $query->idUsuario,
            'nombre_usuario' => $query->Nombre_Usuario,
            'pass' => $query->Contrasena,
            'nombre' => $query->Nombre,
            'apellido' => $query->Apellido,
            'dni' => $query->DNI,
            'direccion' => $query->Direccion,
            'cp' => $query->CP,
            'provincia' => $query->Provincia,
            'correo' => $query->Correo,
            'telefono' => $query->Telefono,
            'tipo' => $query->Tipo,
            'tipo' => $query->Estado,
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
