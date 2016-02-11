<?php

////////////////////////////////
//@autor: Jose David Betancur
//jose.betancourt@imaginamos.com.co
//Agencia: imaginamos.com
//Bogotá, Colombia, 2013
////////////////////////////////

class Site_model extends CI_Model {

  //------------------------------ Carga de contenidos para home

  function getSliderMain() {
    $query = $this->db->get("slider");
    return $query->result();
  }

  ////////////////////////////////////////////////////////////////////////

}