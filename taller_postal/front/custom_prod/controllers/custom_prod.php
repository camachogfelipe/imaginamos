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
	
	public function guarda_color($id = 'a'){
		$this->load->library('session');
		$this->session->set_userdata('color',$id);
		
	}

       public function info($categoria = '', $id="",$per = 1) {
      
            if($id!=""){
                
                $tool_tips = new tool_tip(); 
                $this->_data['tool_tips_stiker'] = $tool_tips->get_by_campo('stiker de cierre'); 
                
                $tool_tips = new tool_tip(); 
                $this->_data['tool_tips_color_sobre'] = $tool_tips->get_by_campo('color sobre'); 
                
                $tool_tips = new tool_tip(); 
                $this->_data['tool_tips_cantida_sobre'] = $tool_tips->get_by_campo('cantidad de sobre'); 
                
                $tool_tips = new tool_tip(); 
                $this->_data['tool_tips_dorso'] = $tool_tips->get_by_campo('imprecion dorso'); 
                
                $tool_tips = new tool_tip(); 
                $this->_data['tool_tips_diseno'] = $tool_tips->get_by_campo('color diseño'); 
                
                $tool_tips = new tool_tip(); 
                $this->_data['tool_tips_color'] = $tool_tips->get_by_campo('color papel'); 
                
                $tool_tips = new tool_tip(); 
                $this->_data['tool_tips_cantidad'] = $tool_tips->get_by_campo('cantidad'); 
                
                $catalogos = new paleta(); 
                $this->_data['catalogos_diseno'] = $catalogos->get_by_campo('colores diseño'); 
                
                $catalogos = new paleta(); 
                $this->_data['catalogos_sobre'] = $catalogos->get_by_campo('colores sobres'); 
                
                
                $producto = new producto(); 
                $this->_data['productos'] = $producto->join_related('categoria')->order_by('id')->join_related('disenador')->get_by_id($id);
                
                $productov = new producto(); 
                $this->_data['producto_venta'] = $productov->join_related('venta',NULL,TRUE,'INNER JOIN')->order_by('id','ASC')->get_by_id($id);
                
                $sobre = new sobre();
                $this->_data['sobres'] = $sobre->join_related('categoria_sobre')->order_by('id')->where_related('categoria_sobre','categoria_id',$producto->categoria_id)->get();
                
                $papels = new categoria_papel();
                $this->_data['papels'] = $papels->join_related('categoria')->join_related('papel')->group_by("id")->get(); 
                
                $cantidad = new categoria_cantidad(); 
                $this->_data['cantidades'] = $cantidad->join_related('categoria')->join_related('cantidad')->group_by("categoria_id")->get(); 
           
                $visiblidad = new configuracion(); 
                $this->_data['view_config'] = $visiblidad->get_by_producto_id($id); 
                
              
			  
			  
		//return $this->build();
                
				
            }else{
                redirect('home/errors');
            }
			
			    $pages=6; //Número de registros mostrados por
                $this->_data['menu'] = array();
                $this->_data['ruta'] = base_url()."custom_prod/info/"; 
                $cat = new categoria(); 
                $cat->get_by_id($categoria );
                $linea = new linea(); 
                $linea->get_by_id($cat->linea_id);
                $this->_data['section'] = $linea->titulo;
				
                $this->_data['sesion'] = $this->session->userdata('color');
                $this->_data['miga'] = array("Tienda" =>  base_url().'tienda', ucfirst(mb_strtolower($linea->titulo))  =>  base_url().'tienda/linea/'.$linea->id,$cat->titulo => base_url().'tienda/categoria/'.$categoria);
		
				
            return $this->build();
	}

        
        public function color_papel($papel_id = "") {
              $papels = new color_papel();
              $papels->join_related('color')->join_related('papel')->group_by('id')->where('papel_id',$papel_id)->get(); 
              $html = "<option>Selecciona</option>"; 
              foreach ($papels as $papel) {
                  $html.= "<option value=\"".$papel->color_titulo."\">".$papel->color_titulo."</option>"; 
              }
              echo $html;               
        }
		
        
        public function color_sobre($sobre_id = "") {
              $papels = new color_sobre();
              $papels->join_related('color')->join_related('sobre')->group_by('id')->where('sobre_id',$sobre_id)->get(); 
              $html = "<option>Selecciona</option>"; 
              foreach ($papels as $papel) {
                  $html.= "<option value=\"".$papel->color_titulo."\">".$papel->color_titulo."</option>"; 
              }
              echo $html;               
        }

       
        
        

}
?>