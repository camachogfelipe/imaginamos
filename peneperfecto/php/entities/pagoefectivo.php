<?php

class pagoefectivo{

private $id;
private $titulo;
private $Texto;


function __construct(){
	$this->id = NULL;
	$this->titulo = NULL;
	$this->Texto = NULL;
}

function getid(){
	return $this->id;
}

function gettitulo(){
	return $this->titulo;
}

function getTexto(){
	return $this->Texto;
}



function setid($id){
	$this->id = $id;
}

function settitulo($titulo){
	$this->titulo = $titulo;
}

function setTexto($Texto){
	$this->Texto = $Texto;
}



}
?>