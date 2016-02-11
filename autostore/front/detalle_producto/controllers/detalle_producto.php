<?php

    /**
     * @autor Elbert Tous
     * @email elbert.tous@imaginamos.com
     * @company Imaginamos S.A.S | Todos los derechos reservados
     * @date 3-050050
     */

                        

class Detalle_producto extends Front_Controller {

	public function __construct() {
		parent::__construct();
	}

	public function info($id='') {
            $productos = new producto(); 
            $this->_data['productos'] = $productos->join_related('imagen')->get_by_id($id); 

            $caracteristicas = new caracteristica(); 
            $this->_data['caracteristicas'] = $caracteristicas->get_by_producto_id($id); 
            
            
            
           return $this->build();
	}

}
?>