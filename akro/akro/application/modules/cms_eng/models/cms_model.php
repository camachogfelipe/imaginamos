<?php

////////////////////////////////
//@autor: Brayan Acebo
//brayan.acebo@imaginamos.co
//Agencia: imaginamos.com
//Bogotá, Colombia, 2012
///////////////////////////////

class Cms_model extends CI_Model {

    //-------------------------- Validando login

    function validate($data) {
        $this->db->where('email_user ', $data['email_user ']);
        $this->db->where('password_user', md5($data['password']));
        $query = $this->db->get('cms_user');
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return false;
        }
    }

    //-------------------------- Cargar menu index de forma ascendente

    function menuIndex() {
        $this->db->order_by('pos', 'asc');
        $query = $this->db->get('cms_menu');
        return $query->result();
    }

    //-------------------------- Cargar submenu index de forma ascendente

    function subMenuIndex() {
        $this->db->order_by('pos', 'asc');
        $query = $this->db->get('cms_submenu');
        return $query->result();
    }

    //-------------------------- Buscar si existe el correo indicado por el usuario

    function getpass($email) {
        $this->db->where('email_user', $email);
        $q = $this->db->get('cms_user');
        if ($q->num_rows() > 0) {
            return $q->result();
        } else {
            return false;
        }
    }

    //--------------------------  Actualiza la contraseña actual con formato md5

    function updatepass($data, $id) {
        $this->db->where('id_user', $id);
        $this->db->update('cms_user', $data);
    }

    //-------------------------- Cargar usuario por id
    
    function getOne($id) {
        $this->db->where('id_user', $id);
        $q = $this->db->get('cms_user');
        if ($q->num_rows() > 0) {
            return $q->result();
        } else {
            return false;
        }
    }
    
    
    //-------------------------- Cambiar orden del menu
    
    function changeOrden($id, $changed) {
        $this->db->where('menu_id', $id);
        $this->db->update('cms_menu',$changed);
        return true;
    }

}

