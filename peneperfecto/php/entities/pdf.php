<?php

class pdf{

private $id;
private $archivo;


function __construct(){
	$this->id = NULL;
	$this->archivo = NULL;
}

function getid(){
	return $this->id;
}

function getarchivo(){
	return $this->archivo;
}



function setid($id){
	$this->id = $id;
}

function setarchivo($archivo){
	$this->archivo = $archivo;
}



}
?>