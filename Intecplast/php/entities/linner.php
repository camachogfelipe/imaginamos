<?php

class linner{
	private $linner_id;
	private $linner_nombre_e;
	private $linner_nombre_i;


function __construct(){
	$this->linner_id = NULL;
	$this->linner_nombre_e = NULL;
	$this->linner_nombre_i = NULL;
}

function getid(){
	return $this->linner_id;
}

function getnombre_e(){
	return $this->linner_nombre_e;
}

function getnombre_i(){
	return $this->linner_nombre_i;
}

function setid($linner_id){
	$this->linner_id = $linner_id;
}

function setnombre_e($linner_nombre_e){
	$this->linner_nombre_e = $linner_nombre_e;
}

function setnombre_i($linner_nombre_i){
	$this->linner_nombre_i = $linner_nombre_i;
}
		
}

?>