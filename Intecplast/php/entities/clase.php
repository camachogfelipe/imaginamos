<?php

class clase{
	private $clase_id;
	private $clase_nombre_e;
	private $clase_nombre_i;
	private $clase_imagen;


function __construct(){
	$this->clase_id = NULL;
	$this->clase_nombre_e = NULL;
	$this->clase_nombre_i = NULL;
	$this->clase_imagen = NULL;
}

function getid(){
	return $this->clase_id;
}

function getnombre_e(){
	return $this->clase_nombre_e;
}

function getnombre_i(){
	return $this->clase_nombre_i;
}

function getimagen(){
	return $this->clase_imagen;
}


function setid($clase_id){
	$this->clase_id = $clase_id;
}

function setnombre_e($clase_nombre_e){
	$this->clase_nombre_e = $clase_nombre_e;
}

function setnombre_i($clase_nombre_i){
	$this->clase_nombre_i = $clase_nombre_i;
}

function setimagen($clase_imagen){
	$this->clase_imagen = $clase_imagen;
}



}
?>