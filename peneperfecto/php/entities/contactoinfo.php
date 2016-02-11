<?php

class contactoinfo{

private $id;
private $direccion;
private $telefono;
private $celular;
private $fax;
private $mail;
private $ciudad;


function __construct(){
	$this->id = NULL;
	$this->direccion = NULL;
	$this->telefono = NULL;
	$this->celular = NULL;
	$this->fax = NULL;
	$this->mail = NULL;
	$this->ciudad = NULL;
}

function getid(){
	return $this->id;
}

function getdireccion(){
	return $this->direccion;
}

function gettelefono(){
	return $this->telefono;
}

function getcelular(){
	return $this->celular;
}

function getfax(){
	return $this->fax;
}

function getmail(){
	return $this->mail;
}

function getciudad(){
	return $this->ciudad;
}



function setid($id){
	$this->id = $id;
}

function setdireccion($direccion){
	$this->direccion = $direccion;
}

function settelefono($telefono){
	$this->telefono = $telefono;
}

function setcelular($celular){
	$this->celular = $celular;
}

function setfax($fax){
	$this->fax = $fax;
}

function setmail($mail){
	$this->mail = $mail;
}

function setciudad($ciudad){
	$this->ciudad = $ciudad;
}



}
?>