<?php

class tecnicas{

private $id;
private $titulo;
private $descripcion;
private $imagen;


function __construct(){
	$this->id = NULL;
	$this->titulo = NULL;
	$this->descripcion = NULL;
	$this->imagen = NULL;
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



}
?>