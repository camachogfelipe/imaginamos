<?php

    /**
     * @autor Elbert Tous
     * @email elbert.tous@imaginamos.com
     * @company Imaginamos S.A.S | Todos los derechos reservados
     * @date 5-050050
     */

                        

class Custom_prod extends Front_Controller {

	public function __construct() {
		parent::__construct();
                $this->_data['current_page'] = strtolower(__CLASS__);  
	}

       public function info($id="") {
      
            if($id!=""){
                $producto = new producto(); 
                $this->_data['productos'] = $producto->join_related('categoria')->order_by('id')->join_related('disenador')->get_by_id($id);
                
                $productov = new producto(); 
                $this->_data['producto_venta'] = $productov->join_related('venta',NULL,TRUE,'INNER JOIN')->order_by('id','ASC')->get_by_id($id);
                
                $sobre = new sobre();
                $this->_data['sobres'] = $sobre->join_related('categoria')->order_by('id')->where('cms_categoria.categoria_id',$producto->categoria_id)->get();
                
                $papels = new categoria_papel();
                $this->_data['papels'] = $papels->join_related('categoria')->join_related('papel')->group_by("id")->get(); 
                
                $cantidad = new categoria_cantidad(); 
                $this->_data['cantidades'] = $cantidad->join_related('categoria')->join_related('cantidad')->group_by("categoria_id")->get(); 
           
                $visiblidad = new configuracion(); 
                $this->_data['view_config'] = $visiblidad->get_by_producto_id($id); 
                
            }else{
                redirect('home/errors');
            }
            return $this->build();
	}
        
        public function color_papel($papel_id = "") {
              $papels = new color_papel();
              $papels->join_related('color')->join_related('papel')->group_by('id')->where('papel_id',$papel_id)->get(); 
              $html = "<option>Selecciona</option>"; 
              foreach ($papels as $papel) {
                  $html.= "<option value=\"".$papel->color_id."\">".$papel->color_titulo."</option>"; 
              }
              echo $html;               
        }
        
        public function color_sobre($sobre_id = "") {
              $papels = new color_sobre();
              $papels->join_related('color')->join_related('sobre')->group_by('id')->where('sobre_id',$sobre_id)->get(); 
              $html = "<option>Selecciona</option>"; 
              foreach ($papels as $papel) {
                  $html.= "<option value=\"".$papel->color_id."\">".$papel->color_titulo."</option>"; 
              }
              echo $html;               
        }

       
        
        

}
?>