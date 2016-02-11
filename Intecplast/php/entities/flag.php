<?php

class flag{
	
	private $flag_id;
	private $flag_nombre_e;
	private $flag_nombre_i;
	private $flag_admin_file;

	function __construct(){
		$this->flag_id = NULL;
		$this->flag_nombre_e = NULL;
		$this->flag_nombre_i = NULL;
		$this->flag_admin_file = NULL;
	}

	function getId(){
		return $this->flag_id;
	}

	function getNombre_e(){
		return $this->flag_nombre_e;
	}

	function getNombre_i(){
		return $this->flag_nombre_i;
	}

	function getAdminFile(){
		return $this->flag_admin_file;
	}

	function setId($flag_id){
		$this->flag_id = $flag_id;
	}

	function setNombre_e($flag_nombre_e){
		$this->flag_nombre_e = $flag_nombre_e;
	}
	
	function setNombre_i($flag_nombre_i){
		$this->flag_nombre_i = $flag_nombre_i;
	}

	function setAdminFile($flag_admin_file){
		$this->flag_admin_file = $flag_admin_file;
	}


}
?>