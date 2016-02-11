<?php

////////////////////////////////
//@autor: Brayan Acebo
//brayan.acebo@imaginamos.co
//Agencia: imaginamos.com
//Bogotá, Colombia, 2012
////////////////////////////////

class Menu_model extends CI_Model {

    function getRecords() {
        $query = $this->db->get("cms_menu");
        return $query->result();
    }

    function getRecord() {
        $query = $this->db->query("SELECT * FROM cms_menu WHERE menu_id = " . $this->uri->segment(3));
        return $query->result();
    }

    function update_record($id, $menu) {

        $this->db->where("menu_id", $id);
        $this->db->update("cms_menu", $menu);
        return true;
    }

    function add_record($menu) {
        $this->db->insert("cms_menu", $menu);
        return true;
    }
    
    function delete_record() {
        $this->db->where("menu_id",$this->uri->segment(3));
        $this->db->delete("cms_menu");
        return true;
    }
    
    function getAllIcons() {
        $query = $this->db->get("cms_icons");
        return $query->result();
    }

}

