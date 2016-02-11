<?php

class unidad{
	private $unidad_id;
	private $unidad_nombre;


function __construct(){
	$this->unidad_id = NULL;
	$this->unidad_nombre = NULL;
}

function getid(){
	return $this->unidad_id;
}

function getnombre(){
	return $this->unidad_nombre;
}

function setid($unidad_id){
	$this->unidad_id = $unidad_id;
}

function setnombre($unidad_nombre){
	$this->unidad_nombre = $unidad_nombre;
}

		
}

?>