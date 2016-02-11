<?php

class timeline{
	
	private $timeline_id;
	private $timeline_anio;
	private $timeline_descripcion_e;
	private $timeline_imagen_e;
	private $timeline_descripcion_i;
	private $timeline_imagen_i;
	private $seccion_id;
	private $flag_id;

	function __construct(){
		$this->timeline_id = NULL;
		$this->timeline_anio = NULL;
		$this->timeline_descripcion_e = NULL;
		$this->timeline_imagen_e = NULL;
		$this->timeline_descripcion_i = NULL;
		$this->timeline_imagen_i = NULL;
		$this->seccion_id = NULL;
		$this->flag_id = NULL;
	}

	function getId(){
		return $this->timeline_id;
	}

	function getAnio(){
		return $this->timeline_anio;
	}

	function getDescripcion_e(){
		return $this->timeline_descripcion_e;
	}

	function getImagen_e(){
		return $this->timeline_imagen_e;
	}

	function getDescripcion_i(){
		return $this->timeline_descripcion_i;
	}

	function getImagen_i(){
		return $this->timeline_imagen_i;
	}

	function getSeccionId(){
		return $this->seccion_id;
	}

	function getFlagId(){
		return $this->flag_id;
	}

	//Funciones SET

	function setId($timeline_id){
		$this->timeline_id = $timeline_id;
	}

	function setAnio($timeline_anio){
		$this->timeline_anio = $timeline_anio;
	}

	function setDescripcion_e($timeline_descripcion_e){
		$this->timeline_descripcion_e = $timeline_descripcion_e;
	}

	function setImagen_e($timeline_imagen_e){
		$this->timeline_imagen_e = $timeline_imagen_e;
	}

	function setDescripcion_i($timeline_descripcion_i){
		$this->timeline_descripcion_i = $timeline_descripcion_i;
	}

	function setImagen_i($timeline_imagen_i){
		$this->timeline_imagen_i = $timeline_imagen_i;
	}

	function setSeccionId($seccion_id){
		$this->seccion_id = $seccion_id;
	}

	function setFlagId($flag_id){
		$this->flag_id = $flag_id;
	}



}

?>