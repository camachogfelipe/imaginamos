<?php

    /**
     * @autor Elbert Tous
     * @email elbert.tous@imaginamos.com
     * @company Imaginamos S.A.S | Todos los derechos reservados
     * @date 2-050049
     */

                        

class Empresas extends Front_Controller {

	public function __construct() {
		parent::__construct();
	}

	public function index() {
            
            $empresa = new empresa(); 
            $this->_data['empresa'] = $empresa->join_related('imagen')->get(); 
            
            $puntos = new punto_diferencia(); 
            $this->_data['puntos'] = $puntos->get(); 
            
            $valores = new valor(); 
            $this->_data['valores'] = $valores->join_related('imagen')->get(); 
            
            return $this->build();
	}

}
?>