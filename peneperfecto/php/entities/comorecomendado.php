<?php

class comorecomendado{

private $id;
private $imagen;
private $link;


function __construct(){
	$this->id = NULL;
	$this->imagen = NULL;
	$this->link = NULL;
}

function getid(){
	return $this->id;
}

function getimagen(){
	return $this->imagen;
}

function getlink(){
	return $this->link;
}



function setid($id){
	$this->id = $id;
}

function setimagen($imagen){
	$this->imagen = $imagen;
}

function setlink($link){
	$this->link = $link;
}



}
?>