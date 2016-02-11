<?php

////////////////////////////////
//@autor: Didier Neira
//didier.neira@imaginamos.com.co
//Agencia: imaginamos.com
//Bogotá, Colombia, 2013
////////////////////////////////

class Site_model extends CI_Model {

  
  function getSlider() {
    $query = $this->db->get("slider");
    return $query->result();
  }
  function getDestacados() {
    $query = $this->db->get("destacados");
    return $query->result();
  }
  
  function getQuienes() {
    $query = $this->db->get("quienes");
    return $query->result();
  }
  
  function getInternaQuienes($id) {
    $this->db->where("id", $id);
    $query = $this->db->get("quienes");
    return $query->result();
  }
  
  function getAlcances() {
    $query = $this->db->get("alcance");
    return $query->result();
  }
  
  function getAlcance($id) {
    $this->db->where("id", $id);
    $query = $this->db->get("alcance");
    return $query->result();
  }
  
  function getProyectos() {
    $query = $this->db->get("proyectos");
    return $query->result();
  }
  
  function getProyecto($id) {
    $this->db->where("id", $id);
    $query = $this->db->get("proyectos");
    return $query->result();
  }
  
  function getImagenesProyecto($id) {
    $this->db->where("proyectos_id", $id);
    $query = $this->db->get("galerias");
    return $query->result();
  }
  
  function getClientes() {
    $query = $this->db->get("clientes");
    return $query->result();
  }
  
  function getNoticias() {
		$this->db->order_by("id", "desc");
    $query = $this->db->get("noticias");
    return $query->result();
  }
  
  function getContacto() {
    $query = $this->db->get("contacto");
    return $query->result();
  }
  
  
}
