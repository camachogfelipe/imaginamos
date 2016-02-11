<?php

    /**
     * @autor Elbert Tous
     * @email elbert.tous@imaginamos.com
     * @company Imaginamos S.A.S | Todos los derechos reservados
     * @date 5-050050
     */

class Carrito extends Front_Controller {

	public function __construct() {
		parent::__construct();
                $this->_data['current_page'] = strtolower(__CLASS__);
	}

	public function index() {
             $this->_data['enviado'] = false; 
            return $this->build();
	}
        
        public function eliminar() {
            $datos = array();
            $data = array(
                'rowid' => $this->_get('rowid'),
                'qty' => 0
            );
            $this->cart->update($data);
            redirect("carrito"); 
        }
        
        public function obj($class = "", $related_one = "",$related_two = "", $id = "") {
            $pro = new $class(); 
            return $pro->join_related($related_one)->join_related($related_two)->get_by_id($id);
        }
     
        public function add_to_cart() {
           $data = array(); 
            
           $producto_id = is_numeric($this->_post('producto_id'))?$this->_post('producto_id'):0; // id producto
           $cantidad_cat_id = is_numeric($this->_post('cantidad_producto_id'))?$this->_post('cantidad_producto_id'):0; //id cantidad_categoria
           $papel_cat_id = is_numeric($this->_post('papel_producto_id'))?$this->_post('papel_producto_id'):0; //id papel_categoria
           $color_papel_id = is_numeric($this->_post('color_papel'))?$this->_post('color_papel'):0; //id color_papel
           //--- valores
           $precio_diseno = is_double($this->_post('ck-req'))?$this->_post('ck-req'):0; //valor precio
           $color_diseno = !is_null($this->_post('color_diseno'))?$this->_post('color_diseno'):""; //texto
           $precio_dorso = is_double($this->_post('precio_dorso'))?$this->_post('precio_dorso'):0;  //valor precio
           $valor_envio = $this->_post('valor_envio');  //valor precio
           
           $papel_sobre_id = is_numeric($this->_post('papel_sobre_id'))?$this->_post('papel_sobre_id'):0; //id papel_sobre
           $cantidad_sobre_id = is_numeric($this->_post('cantidad_sobre_id'))?$this->_post('cantidad_sobre_id'):0; //id cantidad_sobre 
           $color_sobre_id = is_numeric($this->_post('color_sobre_id'))?$this->_post('color_sobre_id'):0; //id color_sobre        
           $sobre_id = is_numeric($this->_post('sobre_id'))?$this->_post('sobre_id'):0; //id sobre
           $mejase = $this->_post('mensaje'); // mensaje
           
            
            $papel_pro = $this->obj('categoria_papel', 'categoria', 'papel', $papel_cat_id); 
            $color_papel_pro = $this->obj('color_papel', 'color', 'papel', $color_papel_id);
            $papel_sobre_pro = $this->obj('sobre_papel','sobre','papel',$papel_sobre_id); 
            $color_sobre_pro = $this->obj('color_sobre','sobre','color',$color_sobre_id);
            $producto = new producto(); 
            $producto->get_by_id($producto_id); 
            
            $precio_pro = ($papel_pro->precio+$producto->precio+$precio_diseno+$precio_dorso)*$cantidad_cat_id; 
            $precio_sobre_pro = ($papel_sobre_pro->precio)*$cantidad_sobre_id; 
            
            $color = $producto->get_color('imagen','color','color_id');  
            
            if($producto->exists()){
                
                $data = array(
                   'id' => $producto_id,
                   'cantidad' => $cantidad_cat_id,
                   'qty' => 1,
                   'rowId' => md5(uniqid(trim(time().$producto_id), false)), 
                   'imagen' => $color->imagen_parh,
                   'papel' => $papel_pro->papel_titulo,
                   'precio_papel' => $papel_pro->precio,
                   'color_papel' => $color_papel_pro->color_titulo,
                   'precio_diseno' => $precio_diseno,
                   'color_diseno' => $color_diseno,
                   'precio_dorso' => $precio_dorso,
                   'precio_envio' => $valor_envio,
                   'mensaje' => $mejase,
                   'sobre_id' => $sobre_id,
                   'papel_sobre' => $papel_sobre_pro->papel_titulo,
                   'precio_papel_sobre' => $papel_sobre_pro->precio,
                   'color_sobre' => $color_sobre_pro->color_titulo,
                   'qty_sobre' => $cantidad_sobre_id,
                   'precio_producto' => $precio_pro,
                   'precio_sobre' => $precio_sobre_pro,
                   'price' => $precio_pro+$precio_sobre_pro,
                   'precio_envio' => $valor_envio,  
                   'name' => $producto->tiutlo,
                   'descripcion' => $producto->texto,
                   'price_iva' => ($precio_pro+$precio_sobre_pro) * 0.16, 
               );
               if ($this->cart->insert($data)) {
                    $ok = true;
                    $msg = "Producto agregado con exito...!";
                    $np = $this->cart->total_items();  
               }
            } else {
                redirect(str_replace(base_url(), "",getenv('HTTP_REFERER')),'location',404); 
            }
            $this->_data['enviado'] = $ok; 
            
            return $this->build(); 
            
        }


}
?>