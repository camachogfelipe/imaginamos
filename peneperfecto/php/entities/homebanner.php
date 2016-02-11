<?php

class homebanner{

private $id;
private $banner;


function __construct(){
	$this->id = NULL;
	$this->banner = NULL;
}

function getid(){
	return $this->id;
}

function getbanner(){
	return $this->banner;
}



function setid($id){
	$this->id = $id;
}

function setbanner($banner){
	$this->banner = $banner;
}



}
?>