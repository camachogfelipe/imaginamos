<?php

class beneficiosanimacion{

private $id;
private $animacion;


function __construct(){
	$this->id = NULL;
	$this->animacion = NULL;
}

function getid(){
	return $this->id;
}

function getanimacion(){
	return $this->animacion;
}



function setid($id){
	$this->id = $id;
}

function setanimacion($animacion){
	$this->animacion = $animacion;
}



}
?>