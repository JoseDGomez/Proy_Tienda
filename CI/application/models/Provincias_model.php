<?php

class Provincias_model extends CI_Model { 
    function __construct() { 
        parent::__construct(); 
        $this->load->database();
    } 
    //get job positions from the db 
    public function get_provincia() { 
        $this->db->select('cod, nombre');
        $this->db->from('tbl_provincias');
        $query = $this->db->get()->result_array(); 
 

        /*$provincia = array(); 
        foreach($query as $r) { 
            $provincia[$r['cod']] = $r['nombre']; 
        } 
        $provincia[''] = 'Provincia'; 
        return $provincia;*/
        return $this->ToIdxArray($query, 'cod', 'nombre', 'Selecciona una provincia'); 
    } 

    public function ToIdxArray($rs, $idx, $valor, $default=NULL) {
        $arr=[];
        if ($default !== NULL){
            $arr['']=$default;

        }

        foreach($rs as $row) { 
            $arr[$row[$idx]] = $row[$valor]; 
        } 
        return $arr;
        
    }
}