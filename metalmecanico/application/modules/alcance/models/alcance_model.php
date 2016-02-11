<?php

////////////////////////////////
//@autor: Jose David Betancur
//jose.betancourt@imaginamos.com.co    
//Agencia: imaginamos.com
//Bogotá, Colombia, 2013
////////////////////////////////

class Alcance_model extends CI_Model {
    

    function __construct() {
        parent::__construct();
    }

    //----------------------  Carga todos los registros

    function getRecords() {
        $query = $this->db->get("alcance");
        return $query->result();
    }

    //----------------------  Carga un registro segun id

    function getRecord() {
        $query = $this->db->query("SELECT * FROM alcance WHERE id = " . $this->uri->segment(3));
        return $query->result();
    }

    //----------------------  Actualiza registro

    function update_record($id, $alcance) {               
        
        $this->db->where('id',$id);
        $this->db->update('alcance',$alcance);
        
        return true;
    }

    //----------------------  Agrega nuevo registro

    function add_record($alcance) {
        
        $this->db->insert("alcance", $alcance);
        
        return true;
    }

    //----------------------  Elimina registro

    function delete_record() {
            $this->db->where("id", $this->uri->segment(3));
            $this->db->delete("alcance");
            return true;
        
    }
}