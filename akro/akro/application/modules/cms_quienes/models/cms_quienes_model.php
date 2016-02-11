<?php

////////////////////////////////
//@autor: Jose David Betancur
//jose.betancourt@imaginamos.com.co    
//Agencia: imaginamos.com
//Bogotá, Colombia, 2013
////////////////////////////////

class Cms_quienes_model extends CI_Model {
    

    function __construct() {
        parent::__construct();
    }

    //----------------------  Carga todos los registros

    function getRecords() {
        $this->db->where('id','1');
        $query = $this->db->get("quienes");
        return $query->result();
    }

    //----------------------  Actualiza registro

    function update_record($id, $quienes) {
        
        $this->db->where('id','1');
        $this->db->update('quienes',$quienes);
        
        return true;
    }
    
}