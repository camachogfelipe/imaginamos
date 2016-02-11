<?php

    /**
     * @autor Elbert Tous
     * @email elbert.tous@imaginamos.com
     * @company Imaginamos S.A.S | Todos los derechos reservados
     * @date 2-050049
     */

                        

class Home extends Front_Controller {

	public function __construct() {
           parent::__construct();
	}

	public function index() {
            $banner = new barner(); 
            $this->_data['banners'] = $banner->join_related('imagen')->get();  
            
            $productos = new producto(); 
            $this->_data['productos'] = $productos->join_related('imagen')->limit(3)->get(); 
            
            $patrocinadores = new patrocinador(); 
            $this->_data['patrocinadores'] = $patrocinadores->join_related('imagen')->limit(5)->get(); 

            //pendiente produtos mas vendidos
            $producto_ventas = new producto(); 
            $this->_data['producto_ventas'] = $producto_ventas->join_related('imagen')->group_by('id')->join_related('venta',NULL,TRUE,'INNER JOIN')->limit(3)->get(); 
               
            return $this->build();
	}

}
?>