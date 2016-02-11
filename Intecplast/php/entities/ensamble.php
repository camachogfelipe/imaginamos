<?php

class ensamble{
	private $ensamble_id;
	private $ensamble_base;
	private $ensamble_complemento;
	private $producto_imagen;


function __construct(){
	$this->ensamble_id = NULL;
	$this->ensamble_base = NULL;
	$this->ensamble_complemento = NULL;
	$this->producto_imagen = NULL;
}

function getId(){
	return $this->ensamble_id;
}

function getBase(){
	return $this->ensamble_base;
}

function getComplemento(){
	return $this->ensamble_complemento;
}

function getImagen(){
	return $this->producto_imagen;
}


function setId($ensamble_id){
	$this->ensamble_id = $ensamble_id;
}

function setBase($ensamble_base){
	$this->ensamble_base = $ensamble_base;
}

function setComplemento($ensamble_complemento){
	$this->ensamble_complemento = $ensamble_complemento;
}

function setImagen($producto_imagen){
	$this->producto_imagen = $producto_imagen;
}



}
?>