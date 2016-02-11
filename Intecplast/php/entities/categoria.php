<?php

class categoria{
	private $categoria_id;
	private $categoria_nombre_e;
	private $categoria_nombre_i;
	private $categoria_imgagen;
	private $categoria_imgRangos;

	function __construct(){
		$this->categoria_id = NULL;
		$this->categoria_nombre_e = NULL;
		$this->categoria_nombre_i = NULL;
		$this->categoria_imgagen = NULL;
		$this->categoria_imgRangos = NULL;
	}

	function getid(){
		return $this->categoria_id;
	}

	function getnombre_e(){
		return $this->categoria_nombre_e;
	}

	function getnombre_i(){
		return $this->categoria_nombre_i;
	}

	function getimagen(){
		return $this->categoria_imgagen;
	}

	function getimgRango(){
		return $this->categoria_imgRangos;
	}



	function setid($categoria_id){
		$this->categoria_id = $categoria_id;
	}

	function setnombre_e($categoria_nombre_e){
		$this->categoria_nombre_e = $categoria_nombre_e;
	}

	function setnombre_i($categoria_nombre_i){
		$this->categoria_nombre_i = $categoria_nombre_i;
	}

	function setimagen($categoria_imgagen){
		$this->categoria_imgagen = $categoria_imgagen;
	}

	function setimgRango($categoria_imgRangos){
		$this->categoria_imgRangos = $categoria_imgRangos;
	}




		
}

?>