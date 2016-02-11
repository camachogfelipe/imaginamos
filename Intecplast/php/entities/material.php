<?php

class material{
	private $material_id;
	private $material_nombre_e;
	private $material_nombre_i;


function __construct(){
	$this->material_id = NULL;
	$this->material_nombre_e = NULL;
	$this->material_nombre_i = NULL;
}

function getid(){
	return $this->material_id;
}

function getnombre_e(){
	return $this->material_nombre_e;
}

function getnombre_i(){
	return $this->material_nombre_i;
}

function setid($material_id){
	$this->material_id = $material_id;
}

function setnombre_e($material_nombre_e){
	$this->material_nombre_e = $material_nombre_e;
}

function setnombre_i($material_nombre_i){
	$this->material_nombre_i = $material_nombre_i;
}
		
}

?>