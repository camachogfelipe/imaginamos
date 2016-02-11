<?php


class Contacto_model extends CI_Model {  

    function __construct() {
        parent::__construct();        
    }

    //----------------------  Carga todos los registros

    function getRecords() {
        $query = $this->db->get("contacto");
        return $query->result();
    }

    //----------------------  Carga un registro segun id

    function getRecord() {
        $query = $this->db->get("contacto");
        return $query->result();
    }

    //----------------------  Actualiza registro

    function update_record($contacto) {                
        
            $this->db->update("contacto", $contacto);
            return true;
        
    }

}

