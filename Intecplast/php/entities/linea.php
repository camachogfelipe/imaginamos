<?php

class linea{
	private $linea_id;
	private $linea_nombre_e;
	private $linea_nombre_i;


function __construct(){
	$this->linea_id = NULL;
	$this->linea_nombre_e = NULL;
	$this->linea_nombre_i = NULL;
}

function getid(){
	return $this->linea_id;
}

function getnombre_e(){
	return $this->linea_nombre_e;
}

function getnombre_i(){
	return $this->linea_nombre_i;
}

function setid($linea_id){
	$this->linea_id = $linea_id;
}

function setnombre_e($linea_nombre_e){
	$this->linea_nombre_e = $linea_nombre_e;
}

function setnombre_i($linea_nombre_i){
	$this->linea_nombre_i = $linea_nombre_i;
}
		
}

?>