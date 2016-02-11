<?php

class registrofraces{

private $id;
private $texto;


function __construct(){
	$this->id = NULL;
	$this->texto = NULL;
}

function getid(){
	return $this->id;
}

function gettexto(){
	return $this->texto;
}



function setid($id){
	$this->id = $id;
}

function settexto($texto){
	$this->texto = $texto;
}



}
?>