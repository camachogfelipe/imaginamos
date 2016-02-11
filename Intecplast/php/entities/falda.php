<?php

class falda{
	private $falda_id;
	private $falda_nombre_e;
	private $falda_nombre_i;


function __construct(){
	$this->falda_id = NULL;
	$this->falda_nombre_e = NULL;
	$this->falda_nombre_i = NULL;
}

function getid(){
	return $this->falda_id;
}

function getnombre_e(){
	return $this->falda_nombre_e;
}

function getnombre_i(){
	return $this->falda_nombre_i;
}

function setid($falda_id){
	$this->falda_id = $falda_id;
}

function setnombre_e($falda_nombre_e){
	$this->falda_nombre_e = $falda_nombre_e;
}

function setnombre_i($falda_nombre_i){
	$this->falda_nombre_i = $falda_nombre_i;
}
		
}

?>