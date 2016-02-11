<?php

class empresasubtitulo{

private $id;
private $subtitulo;
private $descripcion;
private $imagen;


function __construct(){
	$this->id = NULL;
	$this->subtitulo = NULL;
	$this->descripcion = NULL;
	$this->imagen = NULL;
}

function getid(){
	return $this->id;
}

function getsubtitulo(){
	return $this->subtitulo;
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

function setsubtitulo($subtitulo){
	$this->subtitulo = $subtitulo;
}

function setdescripcion($descripcion){
	$this->descripcion = $descripcion;
}

function setimagen($imagen){
	$this->imagen = $imagen;
}



}
?>