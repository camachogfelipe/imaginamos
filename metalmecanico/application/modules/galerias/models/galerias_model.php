<?php

////////////////////////////////
//@autor: Jose David Betancur
//jose.betancourt@imaginamos.com.co    
//Agencia: imaginamos.com
//Bogotá, Colombia, 2013
////////////////////////////////

class Galerias_model extends CI_Model {
    
    function __construct() {
        parent::__construct();
    }

    //----------------------  Carga todos los registros

    function getRecords($idp) {
        $this->db->where('proyectos_id',$idp);
        $query = $this->db->get("galerias");
        return $query->result();
    }

    //----------------------  Carga un registro segun id

    function getRecord() {
        $query = $this->db->query("SELECT * FROM galerias WHERE id_galerias = " . $this->uri->segment(3));
        return $query->result();
    }

    //----------------------  Actualiza registro

    function update_record($id, $galerias) {
        
        $this->db->where('id_galerias',$id);
        $this->db->update('galerias',$galerias);
        
        return true;
    }

    //----------------------  Agrega nuevo registro

    function add_record($galerias) {                
        
        $this->db->insert("galerias", $galerias);
        
        return true;
    }

    //----------------------  Elimina registro

    function delete_record() {
            $this->db->where("id_galerias", $this->uri->segment(3));
            $this->db->delete("galerias");
            return true;
        
    }
}