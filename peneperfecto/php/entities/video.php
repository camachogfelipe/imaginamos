<?php

class video{

private $id;
private $link;


function __construct(){
	$this->id = NULL;
	$this->link = NULL;
}

function getid(){
	return $this->id;
}

function getlink(){
	return $this->link;
}



function setid($id){
	$this->id = $id;
}

function setlink($link){
	$this->link = $link;
}



}
?>