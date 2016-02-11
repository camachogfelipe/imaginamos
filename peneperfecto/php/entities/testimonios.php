<?php

class testimonios{

private $id;
private $titulo;
private $descripcion;
private $imagen;
private $fecha;


function __construct(){
	$this->id = NULL;
	$this->titulo = NULL;
	$this->descripcion = NULL;
	$this->imagen = NULL;
	$this->fecha = NULL;
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

function getimagen(){
	return $this->imagen;
}

function getfecha(){
	return $this->fecha;
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

function setimagen($imagen){
	$this->imagen = $imagen;
}

function setfecha($fecha){
	$this->fecha = $fecha;
}



}
?>