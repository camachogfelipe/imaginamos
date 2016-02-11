<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 *
 * @author Andres Felipe Solarte
 */
class Empresa extends Front_Controller {

    public function __construct() {
        parent::__construct();
    }

    // ----------------------------------------------------------------------

    public function index() {
//      $this->set_title('Bienvenidos a ' . SITENAME, true);
      $this->loadTitlesInfo();
      $this->loadArticlesInfo();
      return $this->build();
    }
    
    private function loadTitlesInfo(){
      $this->load->model(CMSPREFIX."home/nuestra_compania");
      $modelCompania = new Nuestra_Compania();
      $modelCompania->get();
      $this->_data["titulos"] = $modelCompania->all_to_array();
    }
    
    private function loadArticlesInfo(){
      if (array_key_exists("titulos", $this->_data)){
        
        $this->_data["articulos"] = array();
        $this->_data["certificaciones"] = array();
        $this->load->model(CMSPREFIX."home/nuestra_compania_articulo");
        $modelCompaniaArticulo = new Nuestra_Compania_Articulo();
        
        foreach ($this->_data["titulos"] as $titulo){
          switch ($titulo["id"]){
            case 6:
              array_push($this->_data["certificaciones"], $modelCompaniaArticulo->where("cms_nuestra_compania_id",$titulo["id"])->limit(4)->get()->all_to_array());
            break;
            default:
              array_push($this->_data["articulos"], $modelCompaniaArticulo->get_where(array("cms_nuestra_compania_id"=>$titulo["id"]))->limit(1)->to_array());
            break;
          }
        }
      }
    }

    // ----------------------------------------------------------------------
   
}
