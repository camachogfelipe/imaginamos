<?php

class terminos{

private $id;
private $titulo;
private $descripcion;


function __construct(){
	$this->id = NULL;
	$this->titulo = NULL;
	$this->descripcion = NULL;
}

function getid(){
	return $this->id;
}

function gettitulo(){
	return $this->titulo;
}

function getdescripcion(){
	return $this->descripcion;
}



function setid($id){
	$this->id = $id;
}

function settitulo($titulo){
	$this->titulo = $titulo;
}

function setdescripcion($descripcion){
	$this->descripcion = $descripcion;
}



}
?>