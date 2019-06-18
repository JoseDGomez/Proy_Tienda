<?php

class carrito_model extends CI_Model {

    function __construct() {
        parent::__construct();
        $this->load->database();
        $this->load->library('cart');
    }

    function add_pedido($id_usuario) {
        $this->db->where("idUsuario", $id_usuario);

        $query = $this->db->get('Usuario');
        $datos_usuario = $query->row();


        $data = [
            "Estado" => "PP",
            "Fecha" => date('Y-m-d'),
            "Dni" => $datos_usuario->DNI,
            "Direccion" => $datos_usuario->Direccion,
            "CP" => $datos_usuario->CP,
            "Provincia" => $datos_usuario->Provincia,
            "Apellidos" => $datos_usuario->Apellido,
            "Nombre" => $datos_usuario->Nombre,
            "Usuario_idUsuario" => $id_usuario
        ];

        $this->db->insert("Pedido", $data);

        $this->add_linea_pedido();
    }

    function add_linea_pedido() {
        $id_pedido = $this->db->query("select idPedido from pedido where idPedido= (select MAX(idPedido) from pedido)")->row();

        foreach ($this->cart->contents() as $producto) {
            $data = [
                "Pedido_idPedido" => $id_pedido->idPedido,
                "Nom_Producto" => $producto["name"],
                "Cantidad" => $producto["qty"],
                "Precio" => $producto["price"],
                "Total" => ($producto["price"]*$producto["qty"])

            ];
            $this->db->insert("linea_pedido", $data);
        }
    }

  

}
