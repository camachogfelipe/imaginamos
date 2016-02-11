<?php
class seccion{
	private $seccion_id;
	private $seccion_nombre_e;
	private $seccion_nombre_i;
	private $seccion_admin_file;

	function __construct(){
		
		$this->seccion_id = NULL;
		$this->seccion_nombre_e = NULL;
		$this->seccion_nombre_i = NULL;
		$this->seccion_admin_file = NULL;

	}

	function getId(){
		return $this->seccion_id;
	}

	function getNombre_e(){
		return $this->seccion_nombre_e;
	}

	function getNombre_i(){
		return $this->seccion_nombre_i;
	}

	function getAdminFile(){
		return $this->seccion_admin_file;
	}


	function setId($seccion_id){
		$this->seccion_id = $seccion_id;
	}

	function setNombre_e($seccion_nombre_e){
		$this->seccion_nombre_e = $seccion_nombre_e;
	}

	function setNombre_i($seccion_nombre_i){
		$this->seccion_nombre_i = $seccion_nombre_i;
	}

	function setAdminFile($seccion_admin_file){
		return $this->seccion_admin_file = $seccion_admin_file;
	}
}
?>