<?php

defined('BASEPATH') OR exit('No direct script access allowed');

//include FCPATH.'/vendor/autoload.php';

class carrito extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->library('cart');
    }

    public function index() {


        $this->load->view('plantilla', [
            "cuerpo" => $this->load->view("carrito", "", TRUE
            )
        ]);
    }

    public function add_producto($id) {


        $this->load->model('Destacado');
        $result = $this->Destacado->get_producto_id($id);


        $data = [
            'id' => $id,
            'qty' => $this->input->post("cantidad"),
            'price' => $result->Precio_Venta,
            'name' => $result->Nombre,
            'img' => $result->Imagen
        ];
        
        $this->cart->insert($data);

        redirect("Inicio");
    }

    function destroy(){
        $this->cart->destroy();
        redirect('Carrito');
    }

    function remove($rowid) {

        // Check id value.
        if ($id==="all"){
        // Destroy data which store in session.
        $this->cart->destroy();
        }else{
        // Destroy selected id in session.
        $data = array(
        'rowid' => $rowid,
        'qty' => 0
        );
        // Update cart data, after cancel.
        $this->cart->update($data);
        }
        
        // This will show cancel data in cart.
        redirect('Carrito');
        }

    public function compra() {
        $this->load->model('producto_model');
        $this->load->view('plantilla', [
            "cuerpo" => $this->load->view("checkout", "", TRUE
            )
        ]);
    }

    public function realizar_compra() {
        $this->load->library("email");
         $this->load->model('Pdf_model');
       $this->load->model('Carrito');
      $this->Carrito_model->add_pedido($this->session->userdata("usuario_id"));
      
     

     $pdf=new Pagina_PDF();
     $pdf->AddPage("L");
     
     $pdf->ponerNombre();
     $header=["cantidad","nombre", "precio","subtotal"];
     $pdf->FancyTable($header, $this->Carrito_model->get_pedido());
    $pdf->Output("F");
    $this->email->from('segundodaw2019@gmail.com', 'Kevin');
        $this->email->to("kevinastroo@gmail.com");
        $this->email->subject("Bienvenido a Comic&Push");
        //poner la vista y hacer el load view
         $this -> email -> attach ( 'doc.pdf' ,  'inline' );
        $this->email->message("bb");
       
        //poner hash
        $this->email->send();
     

        
//$pdf->Output("D", "", true);
       
    
    }

}
