<?php

class contactenosimagen{

private $id;
private $imagen;


function __construct(){
	$this->id = NULL;
	$this->imagen = NULL;
}

function getid(){
	return $this->id;
}

function getimagen(){
	return $this->imagen;
}



function setid($id){
	$this->id = $id;
}

function setimagen($imagen){
	$this->imagen = $imagen;
}



}
?>