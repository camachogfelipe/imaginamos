<?php

class forma{
	private $forma_id;
	private $forma_nombre_e;
	private $forma_nombre_i;
	private $forma_imagen;


function __construct(){
	$this->forma_id = NULL;
	$this->forma_nombre_e = NULL;
	$this->forma_nombre_i = NULL;
	$this->forma_imagen = NULL;
}

function getid(){
	return $this->forma_id;
}

function getnombre_e(){
	return $this->forma_nombre_e;
}

function getnombre_i(){
	return $this->forma_nombre_i;
}

function getimagen(){
	return $this->forma_imagen;
}


function setid($forma_id){
	$this->forma_id = $forma_id;
}

function setnombre_e($forma_nombre_e){
	$this->forma_nombre_e = $forma_nombre_e;
}

function setnombre_i($forma_nombre_i){
	$this->forma_nombre_i = $forma_nombre_i;
}

function setimagen($forma_imagen){
	$this->forma_imagen = $forma_imagen;
}



}
?>