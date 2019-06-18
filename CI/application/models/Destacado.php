<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Destacado extends CI_Model{
    public function __construct(){
        $this->load->database();
    }
    public function get_Destacado(){
        $query = $this->db->get_where('productos', array('Destacado' => 1, 'Visible' => 1));
        return $query -> result();
    }

    public function get_Categoria(){
        $query = $this->db->get_where('categoria', array('Visible' => 1));
        return $query -> result();
    }
    function get_producto_id($id){
        $this->db->where("idProductos",$id);
        
        $query=$this->db->get('productos');   
        return $query->row();
    }

    function get_ProductoCat($cat){
        $query = $this->db->get_where('productos', array('Categoria_idCategoria' => $cat, 'Visible' => 1));
        return $query -> result();
    }

    public function getPaginate_producto($cat,$limit,$offset){
		$query = $this->db->get_where('productos', array('Categoria_idCategoria' => $cat, 'Visible'=> 1),$limit,$offset);
        
		return $query->result();
	}

    public function get_DestacadoPag($limit,$offset){
        $query = $this->db->get_where('productos', array('Destacado' => 1, 'Visible' => 1),$limit,$offset);
        return $query -> result();
    }
}