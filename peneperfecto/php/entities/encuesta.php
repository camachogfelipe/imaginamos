<?php

class encuesta{

private $id;
private $pregunta;
private $o1;
private $o2;
private $o3;
private $o4;


function __construct(){
	$this->id = NULL;
	$this->pregunta = NULL;
	$this->o1 = NULL;
	$this->o2 = NULL;
	$this->o3 = NULL;
	$this->o4 = NULL;
}

function getid(){
	return $this->id;
}

function getpregunta(){
	return $this->pregunta;
}

function geto1(){
	return $this->o1;
}

function geto2(){
	return $this->o2;
}

function geto3(){
	return $this->o3;
}

function geto4(){
	return $this->o4;
}



function setid($id){
	$this->id = $id;
}

function setpregunta($pregunta){
	$this->pregunta = $pregunta;
}

function seto1($o1){
	$this->o1 = $o1;
}

function seto2($o2){
	$this->o2 = $o2;
}

function seto3($o3){
	$this->o3 = $o3;
}

function seto4($o4){
	$this->o4 = $o4;
}



}
?>