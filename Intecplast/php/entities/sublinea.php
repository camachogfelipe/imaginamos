<?php

class sublinea{
	private $sublinea_id;
	private $sublinea_nombre_e;
	private $sublinea_nombre_i;
	private $linea_id;


function __construct(){
	$this->sublinea_id = NULL;
	$this->sublinea_nombre_e = NULL;
	$this->sublinea_nombre_i = NULL;
	$this->linea_id = NULL;
}

function getid(){
	return $this->sublinea_id;
}

function getnombre_e(){
	return $this->sublinea_nombre_e;
}

function getnombre_i(){
	return $this->sublinea_nombre_i;
}

function getLineaId(){
	return $this->linea_id;
}


function setid($sublinea_id){
	$this->sublinea_id = $sublinea_id;
}

function setnombre_e($sublinea_nombre_e){
	$this->sublinea_nombre_e = $sublinea_nombre_e;
}

function setnombre_i($sublinea_nombre_i){
	$this->sublinea_nombre_i = $sublinea_nombre_i;
}

function setLineaId($linea_id){
	$this->linea_id = $linea_id;
}
		
}

?>