<?php

class comentario{

private $id;
private $venta;
private $fecha;
private $comentario;
private $activo;


function __construct(){
	$this->id = NULL;
	$this->venta = NULL;
	$this->fecha = NULL;
	$this->comentario = NULL;
	$this->activo = NULL;
}

function getid(){
	return $this->id;
}

function getventa(){
	return $this->venta;
}

function getfecha(){
	return $this->fecha;
}

function getcomentario(){
	return $this->comentario;
}

function getactivo(){
	return $this->activo;
}



function setid($id){
	$this->id = $id;
}

function setventa($venta){
	$this->venta = $venta;
}

function setfecha($fecha){
	$this->fecha = $fecha;
}

function setcomentario($comentario){
	$this->comentario = $comentario;
}

function setactivo($activo){
	$this->activo = $activo;
}



}
?>