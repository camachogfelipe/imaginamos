<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 *
 * @author Elbert Tous Ballesteros
 */
class Productos extends Front_Controller {
       
    public function __construct() {
        parent::__construct();
        $this->load->library('pagination');
 
        $categorias_menu = new categoria();
        $this->_data['menu_cat'] = $categorias_menu->join_related('imagen')->where('categoria_id',NULL)->order_by('titulo', 'desc')->get();
       
        $this->_data['current_cat'] ="";
        $this->_data['current_s_cat']="";
    }

    // ----------------------------------------------------------------------

    public function index() {
        return $this->subcategorias(2);
    }
    
    public function categorias() {
        $categorias = new categoria(); 
        $this->_data['menu_cat'] = $categorias->join_related('imagen')->where('categoria_id',NULL)->get();
        return $this->build('categorias');  
    }
   
    public function subcategorias($id_categoria = NULL,$per = 1) {
        $val = 6; 
        
        $this->_data['current_cat'] = $id_categoria;
        $this->_data['current_s_cat'] = ""; 
        $categorias = new categoria(); 
        $this->_data['subcategorias'] = $categorias->join_related('imagen')->join_related('categoria_basic')->limit(($val*$per),$val*($per-1))->where('categoria_id <>','')->order_by("titulo", "asc")->get_by_categoria_id($id_categoria);
    
        //config paginator
        $this->_data['base_url'] = base_url()."productos/subcategorias/".$id_categoria."/";
        $categorias1 = new categoria(); 
        $categorias1->join_related('imagen')->join_related('categoria_basic')->where('categoria_id <>','')->get_by_categoria_id($id_categoria);
        $this->_data['num_pages'] = ceil($categorias1->result_count() / 6);
        $this->_data['primero'] = $this->_data['base_url'];
        $this->_data['ultimo'] = $this->_data['base_url'].$this->_data['num_pages'];
        if($per<$this->_data['num_pages']){
          $this->_data['sig'] = $this->_data['base_url'].($per+1);
        }else{
          $this->_data['sig'] = false;
        }
         if($per>1){
           $this->_data['ant'] = $this->_data['base_url'].($per-1);
         }else{
            $this->_data['ant'] = false;  
         }
        $this->_data['cur'] = $per;

        
        if($id_categoria == 2){
          $fondo = new fondo_cafe();
          $this->_data['fondo_cafe'] = $fondo->join_related('imagen')->get();
          $barner_cafe = new barner_cafe();  
          $this->_data['barner_cafe'] = $barner_cafe->join_related('imagen')->get();   
          return $this->build('subcategorias_cafe');
        }else{
          return $this->build('subcategorias');  
        }
    }
    
    public function list_productos($id_categoria="", $per = 1) {
       $val = 6; 
       
        $categorias = new categoria(); 
        $categorias->get_by_id($id_categoria);
        $this->_data['current_cat'] = $categorias->categoria_id;
        $this->_data['current_s_cat'] = $id_categoria; 
        $productos = new producto(); 
        $this->_data['productos'] = $productos->join_related('categoria')->limit(($val*$per),$val*($per-1))->get_by_categoria_id($id_categoria)->order_by("titulo", "asc");
       
        
        //config paginator
        $this->_data['base_url'] = base_url()."productos/list_productos/".$id_categoria."/";
        $productos1 = new producto(); 
        $productos1->join_related('categoria')->get_by_categoria_id($id_categoria); 
        $this->_data['num_pages'] = ceil($productos1->result_count() / 6);
        $this->_data['primero'] = $this->_data['base_url'];
        $this->_data['ultimo'] = $this->_data['base_url'].$this->_data['num_pages'];
        if($per<$this->_data['num_pages']){
          $this->_data['sig'] = $this->_data['base_url'].($per+1);
        }else{
          $this->_data['sig'] = false;
        }
         if($per>1){
           $this->_data['ant'] = $this->_data['base_url'].($per-1);
         }else{
            $this->_data['ant'] = false;  
         }
        $this->_data['cur'] = $per;

      if($this->_data['current_cat'] == 2){
          $fondo = new fondo_cafe();
          $this->_data['fondo_cafe'] = $fondo->join_related('imagen')->get();
          $barner_cafe = new barner_cafe();  
          $this->_data['barner_cafe'] = $barner_cafe->join_related('imagen')->get();  
          return $this->build('producto-cafe');
      }else 
        return $this->build ('productos');  
    }
    
    public function info($id_producto) {
       $productos = new producto(); 
       $this->_data['producto_info'] = $productos->join_related('categoria')->get_by_id($id_producto); 
     
        return $this->build('producto-info');
    }
    
    
    

    // ----------------------------------------------------------------------
   
}
