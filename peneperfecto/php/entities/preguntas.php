<?php

class preguntas{

private $id;
private $pregunta;
private $respuesta;


function __construct(){
	$this->id = NULL;
	$this->pregunta = NULL;
	$this->respuesta = NULL;
}

function getid(){
	return $this->id;
}

function getpregunta(){
	return $this->pregunta;
}

function getrespuesta(){
	return $this->respuesta;
}



function setid($id){
	$this->id = $id;
}

function setpregunta($pregunta){
	$this->pregunta = $pregunta;
}

function setrespuesta($respuesta){
	$this->respuesta = $respuesta;
}



}
?>