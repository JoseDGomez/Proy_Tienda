<?php defined('BASEPATH') OR exit('No direct script access allowed');

class PdfController extends CI_Controller {

public function index(){

$data = array();
// $data_user['users'] = $this->db->get('tbl_user')->result();

$this->load->view('vistapdf',$data);

$html = $this->output->get_output();

$this->load->library('pdf');

$this->dompdf->loadHtml($html);

$this->dompdf->setPaper('A4', 'landscape');

$this->dompdf->render();

$this->dompdf->stream("welcome.pdf", array("Attachment"=>0));
$this->cart->destroy();  

    }
} 