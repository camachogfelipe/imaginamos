<?php

class flagDAO{

public $daoConnection;

function __construct(){
	$this->daoConnection = new DAO;
	$this->daoConnection->conectar();
}


function getById($flag_id){

	$sql = "SELECT * FROM flags WHERE flag_id = '".mysql_real_escape_string($flag_id)."' ;";

	$this->daoConnection->consulta($sql);
	$this->daoConnection->leerVarios();

	$numRegistros = $this->daoConnection->numregistros();

	if ($numRegistros == 0){
		return NULL;
	}

	$i = 0;

		$new = new flag();

		$new->setId($this->daoConnection->ObjetoConsulta2[$i][0]);
		$new->setNombre_e($this->daoConnection->ObjetoConsulta2[$i][1]);
		$new->setNombre_i($this->daoConnection->ObjetoConsulta2[$i][2]);
	
	return $new;

}

function getBySeccion($seccion_id){

	$sql = "SELECT DISTINCT flags.flag_id, flags.flag_nombre_e, flags.flag_admin_file FROM flags, articulos, secciones WHERE articulos.flag_id = flags.flag_id AND articulos.seccion_id = secciones.seccion_id AND secciones.seccion_id = '".mysql_real_escape_string($seccion_id)."' ORDER BY flag_nombre_e;";

	$this->daoConnection->consulta($sql);
	$this->daoConnection->leerVariosArray();

	$numRegistros = $this->daoConnection->numregistros();

	if ($numRegistros == 0){
		return NULL;
	}

	$news = NULL;

	for ($i = 0; $i < $numRegistros; $i++){

		$new = new flag();

		$new->setId($this->daoConnection->ObjetoConsulta2[$i]["flag_id"]);
		$new->setNombre_e($this->daoConnection->ObjetoConsulta2[$i]["flag_nombre_e"]);
		$new->setAdminFile($this->daoConnection->ObjetoConsulta2[$i]["flag_admin_file"]);

		$news[$i] = $new;

	}

	return $news;

}



function gets(){

	$sql = "SELECT * FROM flags";

	$this->daoConnection->consulta($sql);
	$this->daoConnection->leerVarios();

	$numRegistros = $this->daoConnection->numregistros();

	if ($numRegistros == 0){
		return NULL;
	}

	$news = NULL;

	for ($i = 0; $i < $numRegistros; $i++){

		$new = new flag();

		$new->setId($this->daoConnection->ObjetoConsulta2[$i][0]);
		$new->setNombre($this->daoConnection->ObjetoConsulta2[$i][1]);
		$new->setNombre_i($this->daoConnection->ObjetoConsulta2[$i][2]);

		$news[$i] = $new;

	}

	return $news;

}



function total(){

	$sql = "SELECT COUNT(*) FROM flags;";

	$this->daoConnection->consulta($sql);
	$this->daoConnection->leerVarios();

	$numRegistros = $this->daoConnection->numregistros();

	if ($numRegistros == 0){
		return 0;
	}

	return $this->daoConnection->ObjetoConsulta2[0][0];

}

}

?>