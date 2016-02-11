<?php

class homeantesdespues{

private $id;
private $swf;


function __construct(){
	$this->id = NULL;
	$this->swf = NULL;
}

function getid(){
	return $this->id;
}

function getswf(){
	return $this->swf;
}



function setid($id){
	$this->id = $id;
}

function setswf($swf){
	$this->swf = $swf;
}



}
?>