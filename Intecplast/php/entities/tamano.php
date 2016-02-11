<?php

class tamano{
	private $tamano_id;
	private $tamano_nombre_e;
	private $tamano_nombre_i;


function __construct(){
	$this->tamano_id = NULL;
	$this->tamano_nombre_e = NULL;
	$this->tamano_nombre_i = NULL;
}

function getid(){
	return $this->tamano_id;
}

function getnombre_e(){
	return $this->tamano_nombre_e;
}

function getnombre_i(){
	return $this->tamano_nombre_i;
}

function setid($tamano_id){
	$this->tamano_id = $tamano_id;
}

function setnombre_e($tamano_nombre_e){
	$this->tamano_nombre_e = $tamano_nombre_e;
}

function setnombre_i($tamano_nombre_i){
	$this->tamano_nombre_i = $tamano_nombre_i;
}
		
}

?>