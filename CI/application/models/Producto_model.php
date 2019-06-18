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

    

    function update_Producto(){
        foreach ($this->cart->contents() as $items){
        $cant = (int)$items["qty"];
        $this->db->set('Stock', 'Stock'.'-'.$cant, FALSE);
        $this->db->where('idProductos', $items["id"]);
        // var_dump($cant); die();
        $this->db->update('productos');
        
        }
    }
}