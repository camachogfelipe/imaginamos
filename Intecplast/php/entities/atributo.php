<?php

class atributo{
	private $atributo_id;
	private $atributo_nombre_e;
	private $atributo_nombre_i;


function __construct(){
	$this->atributo_id = NULL;
	$this->atributo_nombre_e = NULL;
	$this->atributo_nombre_i = NULL;
}

function getid(){
	return $this->atributo_id;
}

function getnombre_e(){
	return $this->atributo_nombre_e;
}

function getnombre_i(){
	return $this->atributo_nombre_i;
}

function setid($atributo_id){
	$this->atributo_id = $atributo_id;
}

function setnombre_e($atributo_nombre_e){
	$this->atributo_nombre_e = $atributo_nombre_e;
}

function setnombre_i($atributo_nombre_i){
	$this->atributo_nombre_i = $atributo_nombre_i;
}
		
}

?>