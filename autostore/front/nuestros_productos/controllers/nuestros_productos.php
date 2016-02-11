<?php

/**
 * @autor Elbert Tous
 * @email elbert.tous@imaginamos.com
 * @company Imaginamos S.A.S | Todos los derechos reservados
 * @date 3-050050
 */
class Nuestros_productos extends Front_Controller {

    public function __construct() {
        parent::__construct();
		$this->session->set_userdata(array('current_page',  strtolower(__CLASS__))); 
		$this->_data['current_page'] = $this->session->userdata('current_page'); 
        
   
    }

    public function index() {
        $this->productos_catgoria();
        //return $this->build();
    }

    public function productos_catgoria($id="", $per = 1, $val = 6) {
       
        $productos = new Producto();
        
        if(is_numeric($this->_post('radioCategoria'))){
           $id = $this->_post('radioCategoria');  
            $this->_data['cat_select'] = $this->_post('radioCategoria');   
        }
       if(is_numeric($this->_post('radioMarca'))){
          $marca = new marca(); 
          $marca->join_related('modelo')->get_by_id($this->_post('radioMarca')); 
          foreach ($marca as $modelo) {
              if(is_numeric($this->_post('radioModelo'))){
                 if($modelo->modelo_id === $this->_post('radioModelo')){ 
                   $productos->where_related('modelo','id',$this->_post('radioModelo'));  
                   $this->_data['modelo_select'] = $this->_post('radioModelo');
                   break;
                 }
              }else{
                  $productos->or_where_related('modelo','id',$modelo->modelo_id);    
              }
          }   
           $this->_data['marca_select'] = $modelo->id; 
        }else{
            if(is_numeric($this->_post('radioModelo'))){
             $productos->where_related('modelo','id',$this->_post('radioModelo'));  
             $this->_data['modelo_select'] = $this->_post('radioModelo'); 
           }    
        }
       
        
        if($id!=""){
           $this->_data['productos'] = $productos->join_related('imagen')->where("categoria_id",$id)->or_where_related('categoria', 'categoria_id', $id)->group_by('id')->get();
      //     $this->_data['marca_select'] = $this->_post('radioCategoria');
        }else{
           $this->_data['productos'] = $productos->join_related('imagen')->group_by('id')->get();
        }
        //config paginator


  
        
        
        
        return $this->build();
    }

}

?>