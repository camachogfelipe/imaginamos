<?php

    /**
     * @autor Elbert Tous
     * @email elbert.tous@imaginamos.com
     * @company Imaginamos S.A.S | Todos los derechos reservados
     * @date 2-050049
     */

                        

class Recomendados extends Front_Controller {

	public function __construct() {
		parent::__construct();
	}

	public function index() {
               $productos = new producto(); 
               $this->_data['productos_new'] = $productos->join_related('imagen')->group_by('id')->limit(3)->get(); 
               
               $productos_rec = new producto(); 
               $this->_data['productos_rec'] = $productos_rec->where('recomendado',1)->join_related('imagen')->limit(3)->get(); 
               
	       $promoxiones = new producto(); 
               $this->_data['promociones'] = $promoxiones->join_related('imagen')->group_by('id')->join_related('promociones',NULL,TRUE,'INNER JOIN')->get(); 
               
               $producto_ventas = new producto(); 
               $this->_data['producto_ventas'] = $producto_ventas->join_related('imagen')->group_by('id')->join_related('venta',NULL,TRUE,'INNER JOIN')->limit(3)->get(); 
            
	       return $this->build();
	}

}
?>