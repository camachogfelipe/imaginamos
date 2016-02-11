<?php

////////////////////////////////
//@autor: Jose David Betancur
//jose.betancourt@imaginamos.com.co    
//Agencia: imaginamos.com
//Bogotá, Colombia, 2013
////////////////////////////////

class Cms_factores_model extends CI_Model {

  function __construct() {
    parent::__construct();
  }

  //----------------------  Carga todos los registros

  function getRecords() {
    $query = $this->db->get("factores");
    return $query->result();
  } 

  //----------------------  Carga un registro segun id

  function getRecord() {
    $query = $this->db->query("SELECT * FROM factores WHERE id = " . $this->uri->segment(3));
    return $query->result();
  }

  //----------------------  Actualiza registro

  function update_record($id, $factores) {

    $this->db->where('id', $id);
    $this->db->update('factores', $factores);

    return true;
  }

  //----------------------  Agrega nuevo registro

  function add_record($factores) {

    $this->db->insert("factores", $factores);

    return true;
  }

  //----------------------  Elimina registro

  function delete_record() {
    $this->db->where("id", $this->uri->segment(3));
    $this->db->delete("factores");
    return true;
  } 

}