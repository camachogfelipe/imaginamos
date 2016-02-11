<?php

class color{
	private $color_id;
	private $color_nombre_e;
	private $color_nombre_i;


function __construct(){
	$this->color_id = NULL;
	$this->color_nombre_e = NULL;
	$this->color_nombre_i = NULL;
}

function getid(){
	return $this->color_id;
}

function getnombre_e(){
	return $this->color_nombre_e;
}

function getnombre_i(){
	return $this->color_nombre_i;
}

function setid($color_id){
	$this->color_id = $color_id;
}

function setnombre_e($color_nombre_e){
	$this->color_nombre_e = $color_nombre_e;
}

function setnombre_i($color_nombre_i){
	$this->color_nombre_i = $color_nombre_i;
}
		
}

?>