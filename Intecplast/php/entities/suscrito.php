<?php
class suscrito{
	private $suscrito_id;
	private $suscrito_nombre;
	private $suscrito_email;

	function __construct(){
		
		$this->suscrito_id = NULL;
		$this->suscrito_nombre = NULL;
		$this->suscrito_email = NULL;
	}
	//Funciones GET

	function getId(){
		return $this->suscrito_id;
	}

	function getNombre(){
		return $this->suscrito_nombre;
	}

	function getEmail(){
		return $this->suscrito_email;
	}

	//Funciones SET

	function setId($suscrito_id){
		$this->suscrito_id = $suscrito_id;
	}

	function setNombre($suscrito_nombre){
		$this->suscrito_nombre = $suscrito_nombre;
	}

	function setEmail($suscrito_email){
		$this->suscrito_email = $suscrito_email;
	}

}
?>