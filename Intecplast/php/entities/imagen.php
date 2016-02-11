<?php

class imagen{
	
	private $imagen_id;
	private $imagen_titulo_e;
	private $imagen_descripcion_e;
	private $imagen_imagen_e;
	private $imagen_enlace_e;
	private $imagen_titulo_i;
	private $imagen_descripcion_i;
	private $imagen_imagen_i;
	private $imagen_enlace_i;
	private $seccion_id;
	private $flag_id;

	function __construct(){
		
		$this->imagen_id = NULL;
		$this->imagen_titulo_e = NULL;
		$this->imagen_descripcion_e = NULL;
		$this->imagen_imagen_e = NULL;
		$this->imagen_enlace_e = NULL;
		$this->imagen_titulo_i = NULL;
		$this->imagen_descripcion_i = NULL;
		$this->imagen_imagen_i = NULL;
		$this->imagen_enlace_i	= NULL;
		$this->seccion_id = NULL;
		$this->flag_id = NULL;
	}


	function getId(){
		return $this->imagen_id;
	}
	
	function getTitulo_e(){
		return $this->imagen_titulo_e;
	}
	
	function getDescripcion_e(){
		return $this->imagen_descripcion_e;
	}
	
	function getImagen_e(){
		return $this->imagen_imagen_e;
	}

	function getEnlace_e(){
		return $this->imagen_enlace_e;
	}
	
	function getTitulo_i(){
		return $this->imagen_titulo_i;
	}
	
	function getDescripcion_i(){
		return $this->imagen_descripcion_i;
	}
	
	function getImagen_i(){
		return $this->imagen_imagen_i;
	}

	function getEnlace_i(){
		return $this->imagen_enlace_i;
	}
	
	function getSeccionId(){
		return $this->seccion_id;
	}
	
	function getFlagId(){
		return $this->flag_id;
	}

	//Funciones SET

	function setId($imagen_id){
		$this->imagen_id = $imagen_id;
	}
	
	function setTitulo_e($imagen_titulo_e){
		$this->imagen_titulo_e = $imagen_titulo_e;
	}
	
	function setDescripcion_e($imagen_descripcion_e){
		$this->imagen_descripcion_e = $imagen_descripcion_e;
	}
	
	function setImagen_e($imagen_imagen_e){
		$this->imagen_imagen_e = $imagen_imagen_e;
	}

	function setEnlace_e($imagen_enlace_e){
		$this->imagen_enlace_e = $imagen_enlace_e;
	}
	
	function setTitulo_i($imagen_titulo_i){
		$this->imagen_titulo_i = $imagen_titulo_i;
	}
	
	function setDescripcion_i($imagen_descripcion_i){
		$this->imagen_descripcion_i = $imagen_descripcion_i;
	}
	
	function setImagen_i($imagen_imagen_i){
		$this->imagen_imagen_i = $imagen_imagen_i;
	}

	function setEnlace_i($imagen_enlace_i){
		$this->imagen_enlace_i = $imagen_enlace_i;
	}
	
	function setSeccionId($seccion_id){
		$this->seccion_id = $seccion_id;
	}

	function setFlagId($flag_id){
		$this->flag_id = $flag_id;
	}


}

?>