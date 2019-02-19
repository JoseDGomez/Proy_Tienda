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
    
}