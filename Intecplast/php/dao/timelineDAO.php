<?php

class timelineDAO{

public $daoConnection;

function __construct(){
	$this->daoConnection = new DAO;
	$this->daoConnection->conectar();
}

function save($timeline){
	
	$new = new timeline();
	$new = $timeline;
	
	$sql = "INSERT INTO timeline (timeline_id, timeline_anio, timeline_descripcion_e, timeline_imagen_e, timeline_descripcion_i, timeline_imagen_i, seccion_id, flag_id)
	VALUES (
	'".mysql_real_escape_string($new->getId())."',
	'".mysql_real_escape_string($new->getAnio())."',
	'".mysql_real_escape_string($new->getDescripcion_e())."',
	'".mysql_real_escape_string($new->getImagen_e())."',
	'".mysql_real_escape_string($new->getDescripcion_i())."',
	'".mysql_real_escape_string($new->getImagen_i())."',
	'".mysql_real_escape_string($new->getSeccionId())."',
	'".mysql_real_escape_string($new->getFlagId())."');";

	$result = mysql_query($sql, $this->daoConnection->Conexion_ID);
	if (!$result){
		echo 'Ooops (save timeline): '.mysql_error();
		return false;
	}
	return true;
}



function getById($timeline_id){

	$sql = "SELECT * FROM timeline WHERE timeline_id = '".mysql_real_escape_string($timeline_id)."' ;";

	$this->daoConnection->consulta($sql);
	$this->daoConnection->leerVarios();

	$numRegistros = $this->daoConnection->numregistros();

	if ($numRegistros == 0){
		return NULL;
	}

	$i = 0;

		$new = new timeline();

		$new->setId($this->daoConnection->ObjetoConsulta2[$i][0]);
		$new->setAnio($this->daoConnection->ObjetoConsulta2[$i][1]);
		$new->setDescripcion_e($this->daoConnection->ObjetoConsulta2[$i][2]);
		$new->setImagen_e($this->daoConnection->ObjetoConsulta2[$i][3]);
		$new->setDescripcion_i($this->daoConnection->ObjetoConsulta2[$i][4]);
		$new->setImagen_i($this->daoConnection->ObjetoConsulta2[$i][5]);
		$new->setSeccionId($this->daoConnection->ObjetoConsulta2[$i][6]);
		$new->setFlagId($this->daoConnection->ObjetoConsulta2[$i][7]);
		
	return $new;

}


function getByAnio($timeline_anio){

	$sql = "SELECT * FROM timeline WHERE timeline_anio = '".mysql_real_escape_string($timeline_anio)."' ;";

	$this->daoConnection->consulta($sql);
	$this->daoConnection->leerVarios();

	$numRegistros = $this->daoConnection->numregistros();

	if ($numRegistros == 0){
		return NULL;
	}

	$i = 0;

		$new = new timeline();

		$new->setId($this->daoConnection->ObjetoConsulta2[$i][0]);
		$new->setAnio($this->daoConnection->ObjetoConsulta2[$i][1]);
		$new->setDescripcion_e($this->daoConnection->ObjetoConsulta2[$i][2]);
		$new->setImagen_e($this->daoConnection->ObjetoConsulta2[$i][3]);
		$new->setDescripcion_i($this->daoConnection->ObjetoConsulta2[$i][4]);
		$new->setImagen_i($this->daoConnection->ObjetoConsulta2[$i][5]);
		$new->setSeccionId($this->daoConnection->ObjetoConsulta2[$i][6]);
		$new->setFlagId($this->daoConnection->ObjetoConsulta2[$i][7]);
		
	return $new;

}

function getBySeccionFlag($seccion_id, $flag_id){

	$sql = "SELECT * FROM timeline WHERE seccion_id = '".mysql_real_escape_string($seccion_id)."' AND flag_id = '".mysql_real_escape_string($flag_id)."' ;";

	$this->daoConnection->consulta($sql);
	$this->daoConnection->leerVarios();

	$numRegistros = $this->daoConnection->numregistros();

	if ($numRegistros == 0){
		return NULL;
	}

	$news = NULL;

	for ($i = 0; $i < $numRegistros; $i++){

		$new = new timeline();

		$new->setId($this->daoConnection->ObjetoConsulta2[$i][0]);
		$new->setAnio($this->daoConnection->ObjetoConsulta2[$i][1]);
		$new->setDescripcion_e($this->daoConnection->ObjetoConsulta2[$i][2]);
		$new->setImagen_e($this->daoConnection->ObjetoConsulta2[$i][3]);
		$new->setDescripcion_i($this->daoConnection->ObjetoConsulta2[$i][4]);
		$new->setImagen_i($this->daoConnection->ObjetoConsulta2[$i][5]);
		$new->setSeccionId($this->daoConnection->ObjetoConsulta2[$i][6]);
		$new->setFlagId($this->daoConnection->ObjetoConsulta2[$i][7]);

		$news[$i] = $new;

	}

	return $news;

}



function gets(){

	$sql = "SELECT * FROM timeline ORDER BY timeline_anio";

	$this->daoConnection->consulta($sql);
	$this->daoConnection->leerVarios();

	$numRegistros = $this->daoConnection->numregistros();

	if ($numRegistros == 0){
		return NULL;
	}

	$news = NULL;

	for ($i = 0; $i < $numRegistros; $i++){

		$new = new timeline();

		$new->setId($this->daoConnection->ObjetoConsulta2[$i][0]);
		$new->setAnio($this->daoConnection->ObjetoConsulta2[$i][1]);
		$new->setDescripcion_e($this->daoConnection->ObjetoConsulta2[$i][2]);
		$new->setImagen_e($this->daoConnection->ObjetoConsulta2[$i][3]);
		$new->setDescripcion_i($this->daoConnection->ObjetoConsulta2[$i][4]);
		$new->setImagen_i($this->daoConnection->ObjetoConsulta2[$i][5]);
		$new->setSeccionId($this->daoConnection->ObjetoConsulta2[$i][6]);
		$new->setFlagId($this->daoConnection->ObjetoConsulta2[$i][7]);
		$news[$i] = $new;

	}

	return $news;

}


function updateEspanol($timeline){

	$new = new timeline();
	$new = $timeline;

	$sql = "UPDATE  timeline SET  
		timeline_descripcion_e= 
			'".mysql_real_escape_string($new->getDescripcion_e())."', 
		timeline_imagen_e= 
			'".mysql_real_escape_string($new->getImagen_e())."'

		 WHERE timeline_id = '".mysql_real_escape_string($new->getId())."';";

	$result = mysql_query($sql, $this->daoConnection->Conexion_ID);
	if (!$result){
		echo 'Ooops (update timeline Es): '.mysql_error();
		return false;
	}
	return true;
}


function updateIngles($timeline){

	$new = new timeline();
	$new = $timeline;

	$sql = "UPDATE  timeline SET  
		timeline_descripcion_i= 
			'".mysql_real_escape_string($new->getDescripcion_i())."', 
		timeline_imagen_i= 
			'".mysql_real_escape_string($new->getImagen_i())."'

		 WHERE timeline_id = '".mysql_real_escape_string($new->getId())."';";

	$result = mysql_query($sql, $this->daoConnection->Conexion_ID);
	if (!$result){
		echo 'Ooops (update timeline Es): '.mysql_error();
		return false;
	}
	return true;
}




function total(){

	$sql = "SELECT COUNT(*) FROM timeline;";

	$this->daoConnection->consulta($sql);
	$this->daoConnection->leerVarios();

	$numRegistros = $this->daoConnection->numregistros();

	if ($numRegistros == 0){
		return 0;
	}

	return $this->daoConnection->ObjetoConsulta2[0][0];

}

function delete($timeline_id){


	$sql = "DELETE FROM timeline WHERE timeline_id = '".mysql_real_escape_string($timeline_id)."';";

	$result = mysql_query($sql, $this->daoConnection->Conexion_ID);
	if (!$result){
		echo 'Ooops (delete timeline): '.mysql_error();
		return false;
	}
	return true;
}



}

?>