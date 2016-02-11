<?php

class productoscotizaciones{
	
	private $prodCot_id;
	private $cotizacion_id;
	private $producto_codigo;


	function __construct(){
		
		$this->prodCot_id = NULL;
		$this->cotizacion_id = NULL;
		$this->producto_codigo = NULL;

	}


	function getId(){	
		return $this->prodCot_id;
	}

	function getCotizacionId(){	
		return $this->cotizacion_id;
	}

	function getProductoCodigo(){	
		return $this->producto_codigo;
	}

	function getCantidadProducto(){
		return $this->cantidad_producto;
	}

//Funciones Set

	function setId($prodCot_id){	
		$this->prodCot_id = $prodCot_id;
	}

	function setCotizacionId($cotizacion_id){	
		$this->cotizacion_id = $cotizacion_id;
	}

	function setProductoCodigo($producto_codigo){	
		$this->producto_codigo = $producto_codigo;
	}

	function setCantidadProducto($cantidad_producto){
		$this->cantidad_producto = $cantidad_producto;
	}
}

?>