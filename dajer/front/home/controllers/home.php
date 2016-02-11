<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 *
 * @author Andres Felipe Solarte
 */
class Home extends Front_Controller {

    public function __construct() {
        parent::__construct();
    }

    // ----------------------------------------------------------------------

    public function index() {
      $barner = new barner(); 
      $this->_data['barners'] = $barner->join_related('imagen')->get();
      $bienvenida = new bienvenida(); 
      $this->_data['bienvenida'] = $bienvenida->join_related('imagen')->limit(1)->get();
      $destacados = new destacado(); 
      $this->_data['destacados'] = $destacados->join_related('imagen')->limit(2)->get();
      $destacados_slider = new destacado_slider(); 
      $this->_data['destacados_slider'] = $destacados_slider->join_related('imagen')->limit(5)->get();
      $categorias = new categoria(); 
      $this->_data['categorias'] = $categorias->join_related('imagen')->where('categoria_id',NULL)->order_by('id','asc')->get(); 
      return $this->build();
    }
    


    // ----------------------------------------------------------------------
   
}
