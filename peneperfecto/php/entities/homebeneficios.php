<?php

class homebeneficios{

private $id;
private $descripcion;
private $icono;


function __construct(){
	$this->id = NULL;
	$this->descripcion = NULL;
	$this->icono = NULL;
}

function getid(){
	return $this->id;
}

function getdescripcion(){
	return $this->descripcion;
}

function geticono(){
	return $this->icono;
}



function setid($id){
	$this->id = $id;
}

function setdescripcion($descripcion){
	$this->descripcion = $descripcion;
}

function seticono($icono){
	$this->icono = $icono;
}



}
?>