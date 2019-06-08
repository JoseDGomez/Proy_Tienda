<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Producto_model extends CI_Model{
    public function __construct(){
        $this->load->database();
    }


    function get_Detalles($id){
        $query = $this->db->get_where('productos', array('idProductos' => $id));
        return $query -> result();
    }

}