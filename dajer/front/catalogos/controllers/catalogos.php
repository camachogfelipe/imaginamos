<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 *
 * @author Andres Felipe Solarte
 */
class catalogos extends Front_Controller {

    public function __construct() {
        parent::__construct();
    }

    // ----------------------------------------------------------------------

    public function index() {
        $categorias = new categoria(); 
        $this->_data['categorias'] = $categorias->join_related('imagen')->where('categoria_id',NULL)->order_by('id','asc')->get(); 
        return $this->build('catalogos');
    }
    
    public function info($id_cat) {
        if($id_cat!=""){
        $catalogos = new catalogo(); 
        $this->_data['catalogos'] = $catalogos->join_related('imagen')->where('categoria_id',$id_cat)->get(); 
            
        }
        return $this->build('catalogo-info');
    }
    

    // ----------------------------------------------------------------------
   
}
