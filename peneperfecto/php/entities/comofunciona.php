<?php

class comofunciona{

private $id;
private $titulo;
private $banner;
private $texto;


function __construct(){
	$this->id = NULL;
	$this->titulo = NULL;
	$this->banner = NULL;
	$this->texto = NULL;
}

function getid(){
	return $this->id;
}

function gettitulo(){
	return $this->titulo;
}

function getbanner(){
	return $this->banner;
}

function gettexto(){
	return $this->texto;
}



function setid($id){
	$this->id = $id;
}

function settitulo($titulo){
	$this->titulo = $titulo;
}

function setbanner($banner){
	$this->banner = $banner;
}

function settexto($texto){
	$this->texto = $texto;
}



}
?>