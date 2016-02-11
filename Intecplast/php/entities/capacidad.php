<?php

class capacidad{
	private $capacidad_id;
	private $capacidad_rango;

	function __construct(){
		$this->capacidad_id = NULL;
		$this->capacidad_rango = NULL;
	}

	function getId(){
		return $this->capacidad_id;
	}

	function getCapacidad_rango(){
		return $this->capacidad_rango;
	}


	function setId($capacidad_id){
		$this->capacidad_id = $capacidad_id;
	}

	function setCapacidad_rango($capacidad_rango){
		$this->capacidad_rango = $capacidad_rango;
	}

}
?>