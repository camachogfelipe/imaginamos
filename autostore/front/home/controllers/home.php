<?php

/**
 * @autor Elbert Tous
 * @email elbert.tous@imaginamos.com
 * @company Imaginamos S.A.S | Todos los derechos reservados
 * @date 3-050050
 */
class Home extends Front_Controller {

    public function __construct() {
        $this->_data['anonymous'] = ($this->session->userdata('current_user_one')==TRUE)?NULL:TRUE;
		$this->session->set_userdata(array('current_page',  strtolower(__CLASS__))); 
		$this->_data['current_page'] = $this->session->userdata('current_page'); 
        parent::__construct();
    }

    public function index($per = 1) {
        
       $url =  base_url() . "home/index/";  
       $bienvenida = new bienvenida(); 
       $this->_data['bienvenida'] = $bienvenida->get(); 
       
       //pendiente produtos mas vendidos
       $producto_ventas = new producto();
       $this->_data['producto_ventas'] = $producto_ventas->join_related('imagen')->group_by('id')->join_related('venta', NULL, TRUE, 'INNER JOIN')->limit(12)->get();

     //  $this->_data['paginador_ventas'] = $this->paginate($per, $producto_ventas->result_count(),$url);
       
       
       $productos = new producto(); 
       $this->_data['productos_prom'] = $productos->where('promocion',1)->join_related('imagen')->limit(12)->get(); 
       
  //     $this->_data['paginador_promo'] = $this->paginate($per, $productos->result_count(), $url);
     
       
        // $welcome = new  
       $banner = new barner(); 
       $this->_data['banners'] = $banner->join_related('imagen')->get();
       return $this->build();
    }
    
  
    
   

}

?>