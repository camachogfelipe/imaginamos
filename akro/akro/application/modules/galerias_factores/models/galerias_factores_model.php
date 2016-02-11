<?php

////////////////////////////////
//@autor: Jose David Betancur
//jose.betancourt@imaginamos.com.co    
//Agencia: imaginamos.com
//Bogotá, Colombia, 2013
////////////////////////////////

class Galerias_factores_model extends CI_Model {
    
    function __construct() {
        parent::__construct();
    }

    //----------------------  Carga todos los registros

    function getRecords($idp) {
        $this->db->where('factores_id',$idp);
        $query = $this->db->get("galerias_factores");
        return $query->result();
    }
    
       function getPro($idp) {
        $this->db->where('id_galerias',$idp);
        $query = $this->db->get("galerias_factores");
        return $query->result();
    }

    //----------------------  Carga un registro segun id

    function getRecord() {
        $query = $this->db->query("SELECT * FROM galerias_factores WHERE id_galerias = " . $this->uri->segment(3));
        return $query->result();
    }

    //----------------------  Actualiza registro

    function update_record($id, $galerias_factores) {
        
        $this->db->where('id_galerias',$id);
        $this->db->update('galerias_factores',$galerias_factores);
        
        return true;
    }

    //----------------------  Agrega nuevo registro

    function add_record($galerias_factores) {                
        
        $this->db->insert("galerias_factores", $galerias_factores);
        
        return true;
    }

    //----------------------  Elimina registro

    function delete_record() {
            $this->db->where("id_galerias", $this->uri->segment(4));
            $this->db->delete("galerias_factores");
            return true;
        
    }
}