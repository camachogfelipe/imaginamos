<?php

class empresatitulo{

private $id;
private $titulo;


function __construct(){
	$this->id = NULL;
	$this->titulo = NULL;
}

function getid(){
	return $this->id;
}

function gettitulo(){
	return $this->titulo;
}



function setid($id){
	$this->id = $id;
}

function settitulo($titulo){
	$this->titulo = $titulo;
}



}
?>