<?php

class encuestares{

private $id;
private $venta;
private $respuesta;


function __construct(){
	$this->id = NULL;
	$this->venta = NULL;
	$this->respuesta = NULL;
}

function getid(){
	return $this->id;
}

function getventa(){
	return $this->venta;
}

function getrespuesta(){
	return $this->respuesta;
}



function setid($id){
	$this->id = $id;
}

function setventa($venta){
	$this->venta = $venta;
}

function setrespuesta($respuesta){
	$this->respuesta = $respuesta;
}



}
?>