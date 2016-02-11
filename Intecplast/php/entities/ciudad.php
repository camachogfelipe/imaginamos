<?php

class ciudad{
	private $ciudad_id;
	private $ciudad_nombre_e;
	private $ciudad_nombre_i;
	private $pais_id;


function __construct(){
	$this->ciudad_id = NULL;
	$this->ciudad_nombre_e = NULL;
	$this->ciudad_nombre_i = NULL;
	$this->pais_id = NULL;
}

function getid(){
	return $this->ciudad_id;
}

function getnombre_e(){
	return $this->ciudad_nombre_e;
}

function getnombre_i(){
	return $this->ciudad_nombre_i;
}

function getpaisId(){
	return $this->pais_id;
}

function setid($ciudad_id){
	$this->ciudad_id = $ciudad_id;
}

function setnombre_e($ciudad_nombre_e){
	$this->ciudad_nombre_e = $ciudad_nombre_e;
}

function setnombre_i($ciudad_nombre_i){
	$this->ciudad_nombre_i = $ciudad_nombre_i;
}

function setpaisId($pais_id){
	$this->pais_id = $pais_id;
}
		
}

?>