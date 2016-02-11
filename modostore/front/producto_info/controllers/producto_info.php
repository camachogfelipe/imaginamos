<?php

    /**
     * @autor Elbert Tous
     * @email elbert.tous@imaginamos.com
     * @company Imaginamos S.A.S | Todos los derechos reservados
     * @date 2-050049
     */

                        

class Producto_info extends Front_Controller {

	public function __construct() {
		parent::__construct();
	}

	public function index($id = '') {
            $productos = new producto(); 
            $this->_data['productos'] = $productos->join_related('imagen')->get_by_id($id); 

            $caracteristicas = new caracteristica(); 
            $this->_data['caracteristicas'] = $caracteristicas->get_by_producto_id($id); 
            return $this->build();
	}

}
?>