<?php

class ejemplo{
	private $ejemplo_id;
	private $producto_codigo;
	private $ejemplo_imagen;

function __construct(){
	$this->ejemplo_id = NULL;
	$this->producto_codigo = NULL;
	$this->ejemplo_imagen = NULL;
}

function getid(){
	return $this->ejemplo_id;
}

function getproducto_codigo(){
	return $this->producto_codigo;
}

function getimagen(){
	return $this->ejemplo_imagen;
}


function setid($ejemplo_id){
	$this->ejemplo_id = $ejemplo_id;
}

function setproducto_codigo($producto_codigo){
	$this->producto_codigo = $producto_codigo;
}

function setimagen($ejemplo_imagen){
	$this->ejemplo_imagen = $ejemplo_imagen;
}

}
?>