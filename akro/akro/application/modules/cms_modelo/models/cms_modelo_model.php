<?php

////////////////////////////////
//@autor: Jose David Betancur
//jose.betancourt@imaginamos.com.co    
//Agencia: imaginamos.com
//Bogotá, Colombia, 2013
////////////////////////////////

class Cms_modelo_model extends CI_Model {
    

    function __construct() {
        parent::__construct();
    }

    //----------------------  Carga todos los registros

    function getRecords() {
        $this->db->where('id','2');
        $query = $this->db->get("quienes");
        return $query->result();
    }

    //----------------------  Actualiza registro

    function update_record($modelo) {
        
        $this->db->where('id','2');
        $this->db->update('quienes',$modelo);
        
        return true;
    }
    
}