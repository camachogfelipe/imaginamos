<?php

    /**
     * @autor Elbert Tous
     * @email elbert.tous@imaginamos.com
     * @company Imaginamos S.A.S | Todos los derechos reservados
     * @date 2-050049
     */

                        

class Carrito extends Front_Controller {

	public function __construct() {
		parent::__construct();
	}

	public function index() {
            $this->_data['email_send'] = $this->session->userdata('enviado');
            $this->session->set_userdata(array('enviado'=>false));
            $destino = new destino(); 
            $this->_data['destinos'] = $destino->order_by('lugar')->get();
            $this->load->library('cart');
            $empresa = new empresa();
            $this->_data['empresa'] = $empresa->get(); 
		return $this->build();
	}
        
        public function buildajax($view, $data = array()) {
           
            return $this->template->set_layout('../../front/home/views/layouts/beoro_ajax')->build($view, $data);
        }
        
        public function get_val_destino($id = "") {
            $destino = new destino(); 
            $destino->order_by('lugar')->get_by_id($id);
            $this->session->set_userdata(array('destino_id'=>$destino->id, 'valor_destino'=>$destino->valor, 'lugar_destino'=>$destino->lugar));
            if($destino->exists())
              echo $destino->valor;
            else
              echo 0;
        }
        
        public function validate_key($key) {
             $venta = new venta(); 
             $venta->get_by_referencia($key);
             if($venta->exists()){
                 return true; 
             }else{
                 return false;
             }
                     
        }
        
        public function pagar() {
            $destino_id = $this->session->userdata('destino_id');
            $destino_name = $this->session->userdata('lugar_destino');
            $valor_destino = $this->session->userdata('valor_destino');
      
            do{
               $key = md5(uniqid(mt_rand(), false));
             }
             while($this->validate_key($key));
            
            $reg_compra = new registro_compra();
            $reg_compra->cedula = $this->_post('cedula');
            $reg_compra->ciudad = $this->_post('ciudad');
            $reg_compra->direccion = $this->_post('direccion');
            $reg_compra->estado = 0;
            $reg_compra->id = "";
            $reg_compra->telefono = $this->_post('telefono');
            $reg_compra->celular = $this->_post('celular');
            $reg_compra->tipo_pago = $this->_post('tipo_pago');      
            $reg_compra->nombre = $this->_post('nombre'); 
            
                  
        $message = '<html><body>';
        $message .= '<img src="'.  base_url().'assests/img/header-logo.png" alt="Logotipo" />';
        $message .= '<table rules="all" style="border-color: #666;" cellpadding="10">';
        $message .= "<tr style='background: #eee;'><td><strong>Nombre:</strong> </td><td>" . strip_tags($this->_post('nombre')) . "</td></tr>";
        $message .= "<tr><td><strong>Codigo de Confirmación:</strong> </td><td>" . $key . "</td></tr>";
        $message .= "<tr><td><strong>Tipo de Pago:</strong> </td><td>" . strip_tags($this->_post('tipo_pago')) . "</td></tr>";
        $message .= "<tr><td><strong>Estado:</strong> </td><td  style='background: #FFD0D0;'>Pendiente</td></tr>";
        $message .= "<tr><td><strong>Telefono Fijo:</strong> </td><td>" . strip_tags($this->_post('telefono')) . "</td></tr>";
        $message .= "<tr><td><strong>Telefono Celular:</strong> </td><td>" . strip_tags($this->_post('celular')) . "</td></tr>";
        $message .= "<tr><td><strong>Dierección:</strong> </td><td>" . strip_tags($this->_post('direccion')) . "</td></tr>";
        $message .= "<tr><td><strong>Destino:</strong> </td><td>" . $destino_name . "</td></tr>";
     
            if($reg_compra->save()){       
                  
            $venta = new venta(); 
            $venta->destino_id = $destino_id;
            $venta->iva = '16%';
            $venta->id = "";
            $venta->referencia = $key;
            $venta->valor_destino = $valor_destino;
            $venta->registro_compra_id = $reg_compra->id;
            $venta->sub_total = $this->cart->total();
            $venta->total = ($this->cart->total()+($this->cart->total()*0.16))*$valor_destino; 
            if($venta->save()){      
                $carrito = $this->cart->contents();
                foreach ($carrito as $item) {
                     $productos = new producto_venta(); 
                     $productos->id = ""; 
                     $productos->producto_id = $item['id'];
                     $productos->venta_id = $venta->id;
                     if(!$productos->save()){
                         echo  $productos->error->string; 
                         exit(); 
                     }
                     
                     $message .= "<tr><td><strong>Productos:</strong> </td><td>" . $item['name'] ." (".$item['qty'].")". "</td></tr>";
                }
                $message .= "<tr><td><strong>Total a Pagar:</strong> </td><td>" .  $venta->total . "</td></tr>";
                $message .= "</table>";
                $message .= "</body></html>";
                $this->enviar_email(SITEEMAIL,SITENAME,"Registro de Pago","elbert.tous@imaginamos.co",$message);
                
                 $message = '<html><body>';
                 $message .= '<img src="'.  base_url().'assests/img/header-logo.png" alt="Logotipo" />';
                 $message .= "<div>
                    <p>Cordial Saludo,</p>
                    <p>Usted ha iniciado un proceso de compra en <a href=\"http://www.modostore.com\">MODOSTORE</a>,
                      nosotros nos pondremos en contacto con usted para finalizar su proceso de  compra, su código de confirmación es:".$key.", favor guardar este email, ya que el código de confirmación es vital en este proceso. </p>
                    <p>Gracias por  su compra. </p>
                    <p>Quedamos Atento.</p>
                  </div>";
                 $message .= "</body></html>";
                 $this->enviar_email(SITEEMAIL,SITENAME,"Proceso de Compra MODOSTORE","elbert.tous@imaginamos.co",$message);
                 $this->session->set_userdata(array('enviado'=>true));
				 $this->cart->destroy();
            
            }else{
                echo  $venta->error->string; 
                exit();
            }
            }else{
                echo  $reg_compra->error->string; 
                exit();
            }
            redirect('carrito'); 
        }
        



        public function update() {
            $datos = array();
            $data = array(
                'rowid' => $this->_get('rowid'),
                'qty' => ($this->_get('qty')-1)
            );
            $this->cart->update($data);
            foreach ($this->cart->contents() as $items => $value){
               if($value === $this->_post('rowid')){
                  $datos[$items] = $value;
                  break;
               }
            }
            $datos['total_sin_iva'] = $this->cart->format_number($this->cart->total(), 2);
            $datos['total'] = $this->cart->format_number($this->cart->total() + ($this->cart->total() * 0.16), 2);
            redirect("carrito"); 
        }



        public function add_to_cart() {
            $msg = "";
            $ok = false;
            $id = $this->_post('id');
            $cantidad = 1;
            $np = 0;  
            $cart_product = new producto();
            $cart_product->get_by_id($id);
            if ($cart_product->exists()) {
                $carrito = $this->cart->contents();
                foreach ($carrito as $item) {
                    if ($item['id'] == $id) {
                        $cantidad = 1 + $item['qty'];
                    }
                }
                $data = array(
                    'id' => $id,
                    'qty' => $cantidad,
                    'price' => $cart_product->precio,
                    'name' => $cart_product->nombre,
                    'descripcion' => substr(strip_tags($cart_product->descripcion),0,120)."...",
                    'price_iva' => $cart_product->precio * 0.16,
                );
                if ($this->cart->insert($data)) {
                    $ok = true;
                    $msg = "Producto agregado con exito...!";
                    $np = $this->cart->total_items();  
                }
            } else {
                $ok = false;
                $msg = "No existe el producto";
            }
        
          
            echo json_encode(array('np' => $np, 'ok' => $ok, 'message' => $msg));

        }

}
?>