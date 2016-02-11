<?php

class conparenos{

private $id;
private $caracteristica;
private $pp;
private $otro;


function __construct(){
	$this->id = NULL;
	$this->caracteristica = NULL;
	$this->pp = NULL;
	$this->otro = NULL;
}

function getid(){
	return $this->id;
}

function getcaracteristica(){
	return $this->caracteristica;
}

function getpp(){
	return $this->pp;
}

function getotro(){
	return $this->otro;
}



function setid($id){
	$this->id = $id;
}

function setcaracteristica($caracteristica){
	$this->caracteristica = $caracteristica;
}

function setpp($pp){
	$this->pp = $pp;
}

function setotro($otro){
	$this->otro = $otro;
}



}
?>