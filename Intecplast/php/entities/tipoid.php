<?php

class tipoid{
	private $tipoid_id;
	private $tipoid_nombre;


function __construct(){
	$this->tipoid_id = NULL;
	$this->tipoid_nombre = NULL;
}

function getid(){
	return $this->tipoid_id;
}

function getnombre(){
	return $this->tipoid_nombre;
}


function setid($tipoid_id){
	$this->tipoid_id = $tipoid_id;
}

function setnombre($tipoid_nombre){
	$this->tipoid_nombre = $tipoid_nombre;
}


}

?>