<?php

class articulo{
	
	private $articulo_id;
	private $articulo_titulo_e;
	private $articulo_descripcion_e;
	private $articulo_imagen_e;
	private $articulo_titulo_i;
	private $articulo_descripcion_i;
	private $articulo_imagen_i;
	private $seccion_id;
	private $articulo_enlace_e;
	private $articulo_enlace_i;

	function __construct(){
		
		$this->articulo_id = NULL;
		$this->articulo_titulo_e = NULL;
		$this->articulo_descripcion_e = NULL;
		$this->articulo_imagen_e = NULL;
		$this->articulo_titulo_i = NULL;
		$this->articulo_descripcion_i = NULL;
		$this->articulo_imagen_i = NULL;
		$this->seccion_id = NULL;
		$this->articulo_enlace_e = NULL;
		$this->articulo_enlace_i = NULL;

	}


	function getId(){
		return $this->articulo_id;
	}
	
	function getTitulo_e(){
		return $this->articulo_titulo_e;
	}
	
	function getDescripcion_e(){
		return $this->articulo_descripcion_e;
	}
	
	function getImagen_e(){
		return $this->articulo_imagen_e;
	}
	
	function getTitulo_i(){
		return $this->articulo_titulo_i;
	}
	
	function getDescripcion_i(){
		return $this->articulo_descripcion_i;
	}
	
	function getImagen_i(){
		return $this->articulo_imagen_i;
	}
	
	function getSeccionId(){
		return $this->seccion_id;
	}
	
	function getFlagId(){
		return $this->flag_id;
	}
	
	function getEnlace_e(){
		return $this->articulo_enlace_e;
	}

	function getEnlace_i(){
		return $this->articulo_enlace_i;
	}

	//Funciones SET

	function setId($articulo_id){
		$this->articulo_id = $articulo_id;
	}
	
	function setTitulo_e($articulo_titulo_e){
		$this->articulo_titulo_e = $articulo_titulo_e;
	}
	
	function setDescripcion_e($articulo_descripcion_e){
		$this->articulo_descripcion_e = $articulo_descripcion_e;
	}
	
	function setImagen_e($articulo_imagen_e){
		$this->articulo_imagen_e = $articulo_imagen_e;
	}
	
	function setTitulo_i($articulo_titulo_i){
		$this->articulo_titulo_i = $articulo_titulo_i;
	}
	
	function setDescripcion_i($articulo_descripcion_i){
		$this->articulo_descripcion_i = $articulo_descripcion_i;
	}
	
	function setImagen_i($articulo_imagen_i){
		$this->articulo_imagen_i = $articulo_imagen_i;
	}
	
	function setSeccionId($seccion_id){
		$this->seccion_id = $seccion_id;
	}

	function setFlagId($flag_id){
		$this->flag_id = $flag_id;
	}

	function setEnlace_e($articulo_enlace_e){
		$this->articulo_enlace_e = $articulo_enlace_e;
	}

	function setEnlace_i($articulo_enlace_i){
		$this->articulo_enlace_i = $articulo_enlace_i;
	}


}

?>