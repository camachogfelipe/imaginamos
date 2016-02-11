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
		return $this->build();
	}
        
        public function cotizar() {
            $this->load->library('email');
            $this->email->clear();
            $this->email->from('cms@imaginamos.com', 'CMS Imaginamos');
            $this->email->to($this->current_user->email);
            $this->email->subject('Hola ' . $this->current_user->username . ', estos son los datos de los productos cotizados');
            $this->email->message($html);
            echo json_encode(array('ok' => $this->email->send()));
        }

   
        public function tienda() {
           
            return $this->buildajax("tienda"); 
        }
        
        public function valor_envio() {
            $carrito = $this->cart->contents();
            $m = 0;
            foreach ($carrito as $item) {
                 $m += $item['precio_envio'];
            }
            return $m; 
        }
        
         public function pagar() {
         
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
            $venta->iva = '16%';
            $venta->id = "";
            $venta->referencia = $key;
            $venta->valor_destino = $this->valor_envio();
            $venta->registro_compra_id = $reg_compra->id;
            $venta->sub_total = $this->cart->total();
            $venta->total = ($this->cart->total()*$venta->valor_destino); 
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
                $this->enviar_email(SITEEMAIL,SITENAME,"Registro de Pago","elbert.tous@imaginamos.com",$message);
                
                 $message = '<html><body>';
                 $message .= '<img src="'.  base_url().'assests/img/header-logo.png" alt="Logotipo" />';
                 $message .= "<div>
                    <p>Cordial Saludo,</p>
                    <p>Usted ha iniciado un proceso de compra en <a href=\"http://www.autostore.com\">AUTOSTORE</a>,
                      nosotros nos pondremos en contacto con usted para finalizar su proceso de  compra, su código de confirmación es:&quot;.$key.&quot;, favor guardar es  email, ya que el código de confirmación es vital en este proceso. </p>
                    <p>Gracias por  su compra. </p>
                    <p>Quedamos Atento.</p>
                  </div>";
                 $message .= "</body></html>";
                 $this->enviar_email(SITEEMAIL,SITENAME,"Proceso de Compra MODOSTORE","elbert.tous@imaginamos.com",$message);
                 $this->session->set_userdata(array('enviado'=>true));
            
            }else{
                echo  $venta->error->string; 
                exit();
            }
            }else{
                echo  $reg_compra->error->string; 
                exit();
            }
            redirect('nuetros_productos'); 
        }
        

        public function eliminar() {
            $datos = array();
          
            $data = array(
                'rowid' => $this->_post('rowid'),
                'qty' => ($this->_post('qty')<=1)?0:($this->_post('qty')-1)
            );
            foreach ($this->cart->contents() as $items){
                if($items['rowid'] === $this->_post('rowid')){
                  $datos = array(
                    'rowid' => $items['rowid'], 
                    'id' => $items['id'],
                    'qty' => ($this->_post('qty')<=1)?0:($this->_post('qty')-1),
                    'price' => $items['price'],
                    'precio_envio' => $items['precio_envio'],
                    'name' => $items['name'],
                    'ref' => $items['ref'],
                    'descripcion' => $items['descripcion'],
                    'imagen' => $items['imagen'],
                    'price_iva' => $items['price_iva'],
                    'ok' => true,
                    'subtotal' => $this->cart->total(),
                    'total' => ($this->cart->total()+($this->cart->total()*0.16))
                 );
               }
            }
            $this->cart->update($data);
            $datos['cantidada'] = $this->cart->total_items(); 
            echo json_encode($datos);
        }

        public function actualizar() {
            $datos = array();
            $data = array(
                'rowid' => $this->_post('rowid'),
                'qty' => $this->_post('qty')
            );
            $this->cart->update($data);
            foreach ($this->cart->contents() as $items => $value){
               if($value === $this->_post('rowid')){
                  $datos[$items] = $value;
                  break;
               }
            }
            $total_sin_iva = $this->cart->format_number($this->cart->total(), 2);
            $total = $this->cart->format_number($this->cart->total() + ($this->cart->total() * 0.16), 2);
            echo json_encode(array('ok' => true, 'sub_total'=>$total_sin_iva,'total' => $total));
        }


        public function add_to_cart() {
            
            $data = array();
            $id = $this->_post('id');
            $cantidad = 1;
            $np = 0;  
            $cart_product = new producto();
            $cart_product->join_related('imagen')->group_by('id')->get_by_id($id);
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
                    'precio_envio' => $cart_product->precio_envio,
                    'name' => $cart_product->nombre,
                    'ref' => $cart_product->referencia,
                    'descripcion' => $cart_product->descripcion_intro,
                    'imagen' => $cart_product->imagen_path,
                    'price_iva' => $cart_product->precio * 0.16,
                );
                if ($this->cart->insert($data)) {
                    $np = $this->cart->total_items();
                     foreach ($this->cart->contents() as $items){
                         if($items['id'] == $id ){
                              $data['rowid'] = $items['rowid'];
                             break;
                         }
                     }
                    $data['cantidada'] = $this->cart->total_items(); 
                    $data['ok'] = true; 
                    $data['subtotal'] = $this->cart->total(); 
                    $data['total'] = ($this->cart->total()+($this->cart->total()*0.16)); 
                }
            } else {
               $data['ok'] = false; 
            }
            echo json_encode($data);

        }

}
?>