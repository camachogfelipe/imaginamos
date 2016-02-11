<?php

class pais{
	private $pais_id;
	private $pais_nombre_e;
	private $pais_nombre_i;


function __construct(){
	$this->pais_id = NULL;
	$this->pais_nombre_e = NULL;
	$this->pais_nombre_i = NULL;
}

function getid(){
	return $this->pais_id;
}

function getnombre_e(){
	return $this->pais_nombre_e;
}

function getnombre_i(){
	return $this->pais_nombre_i;
}

function setid($pais_id){
	$this->pais_id = $pais_id;
}

function setnombre_e($pais_nombre_e){
	$this->pais_nombre_e = $pais_nombre_e;
}

function setnombre_i($pais_nombre_i){
	$this->pais_nombre_i = $pais_nombre_i;
}
		
}

?>