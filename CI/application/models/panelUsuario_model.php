<?php

class panelUsuario_model extends CI_Model {

    function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function cambiaDatos($data){
        $id = $this->session->userdata("id");

       
         $this->db->update('usuario', $data, "idUsuario=" . $id);
    }

    public function get_pedidos()
    {
        $this->db->select('*');
        $this->db->order_by('idPedido','DESC');
        $this->db->where('Usuario_idUsuario', $this->session->userdata("id"));
        $query = $this->db->get('pedido');
        return $query->result();
    }
    public function borra_pedido($id,$data){
        $this->db->update('pedido', $data, "idPedido=" . $id);

    }

    public function baja_Usuario(){
        $this->db->set('Estado', "B");
        $this->db->where('idUsuario', $this->session->userdata("id"));
        $this->db->update('usuario');
        }
    
    public function baja_PedidosUsuario(){
        $this->db->set('Estado', "A");
        $this->db->where('Usuario_idUsuario', $this->session->userdata("id"));
        $this->db->where('Estado', "PP");
        $this->db->update('pedido');
    }    
}