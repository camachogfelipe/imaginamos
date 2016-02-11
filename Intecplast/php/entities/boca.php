<?php

class boca{
	private $boca_id;
	private $boca;

	function __construct(){
		$this->boca_id = NULL;
		$this->boca = NULL;
	}

	function getId(){
		return $this->boca_id;
	}

	function getBoca(){
		return $this->boca;
	}


	function setId($boca_id){
		$this->boca_id = $boca_id;
	}

	function setBoca($boca){
		$this->boca = $boca;
	}

}
?>