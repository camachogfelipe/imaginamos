<?php

////////////////////////////////
//@autor: Brayan Acebo
//brayan.acebo@imaginamos.co
//Agencia: imaginamos.com
//Bogotá, Colombia, 2012
////////////////////////////////

class Submenu_model extends CI_Model {

    function getRecords($idmenu) {
        $query = $this->db->query("SELECT * FROM cms_submenu WHERE submenu_idmenu = " . $idmenu);
        return $query->result();
    }

    function getRecord() {
        $query = $this->db->query("SELECT * FROM cms_submenu WHERE submenu_id = " . $this->uri->segment(3));
        return $query->result();
    }
    
    function getMenu($idmenu) {
        $query = $this->db->query("SELECT * FROM cms_menu WHERE menu_id = " . $idmenu);
        return $query->result();
    }

    function update_record($id, $submenu) {

        $this->db->where("submenu_id", $id);
        $this->db->update("cms_submenu", $submenu);
        return true;
    }

    function add_record($submenu) {
        $this->db->insert("cms_submenu", $submenu);
        return true;
    }
    
    function delete_record() {
        $this->db->where("submenu_id",$this->uri->segment(3));
        $this->db->delete("cms_submenu");
        return true;
    }
    

}

