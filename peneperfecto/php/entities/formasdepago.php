<?php

class formasdepago{

private $id;
private $texto;
private $imagen;


function __construct(){
	$this->id = NULL;
	$this->texto = NULL;
	$this->imagen = NULL;
}

function getid(){
	return $this->id;
}

function gettexto(){
	return $this->texto;
}

function getimagen(){
	return $this->imagen;
}



function setid($id){
	$this->id = $id;
}

function settexto($texto){
	$this->texto = $texto;
}

function setimagen($imagen){
	$this->imagen = $imagen;
}



}
?>