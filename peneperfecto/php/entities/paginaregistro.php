<?php

class paginaregistro{

private $id;
private $texto;
private $banner;
private $precio;
private $contenido;


function __construct(){
	$this->id = NULL;
	$this->texto = NULL;
	$this->banner = NULL;
	$this->precio = NULL;
	$this->contenido = NULL;
}

function getid(){
	return $this->id;
}

function gettexto(){
	return $this->texto;
}

function getbanner(){
	return $this->banner;
}

function getprecio(){
	return $this->precio;
}

function getcontenido(){
	return $this->contenido;
}



function setid($id){
	$this->id = $id;
}

function settexto($texto){
	$this->texto = $texto;
}

function setbanner($banner){
	$this->banner = $banner;
}

function setprecio($precio){
	$this->precio = $precio;
}

function setcontenido($contenido){
	$this->contenido = $contenido;
}



}
?>