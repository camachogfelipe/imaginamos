<?php

class homeintroduccion{

private $id;
private $titulo;
private $texto;


function __construct(){
	$this->id = NULL;
	$this->titulo = NULL;
	$this->texto = NULL;
}

function getid(){
	return $this->id;
}

function gettitulo(){
	return $this->titulo;
}

function gettexto(){
	return $this->texto;
}



function setid($id){
	$this->id = $id;
}

function settitulo($titulo){
	$this->titulo = $titulo;
}

function settexto($texto){
	$this->texto = $texto;
}



}
?>