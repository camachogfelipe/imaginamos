<?php

class estado{
	private $estado_id;
	private $estado_nombre;


function __construct(){
	$this->estado_id = NULL;
	$this->estado_nombre = NULL;
}

function getid(){
	return $this->estado_id;
}

function getnombre(){
	return $this->estado_nombre;
}


function setid($estado_id){
	$this->estado_id = $estado_id;
}

function setnombre($estado_nombre){
	$this->estado_nombre = $estado_nombre;
}


}

?>