<?php

class puntoDAO{

public $daoConnection;

function __construct(){
	$this->daoConnection = new DAO;
	$this->daoConnection->conectar();
}

function save($punto){

	$new = new punto();
	$new = $punto;
	
	$sql = "INSERT INTO puntos (punto_id, punto_nombre, ciudad_id, punto_direccion, punto_tel, punto_pbx, punto_email, punto_hlv, punto_hs, tipoPunto_id, punto_gmap, seccion_id, flag_id
	)
	VALUES (
	'".mysql_real_escape_string($new->getId())."',
	'".mysql_real_escape_string($new->getNombre())."',
	'".mysql_real_escape_string($new->getCiudadId())."',
	'".mysql_real_escape_string($new->getDireccion())."',
	'".mysql_real_escape_string($new->getTel())."',
	'".mysql_real_escape_string($new->getPbx())."',
	'".mysql_real_escape_string($new->getEmail())."',
	'".mysql_real_escape_string($new->getHlv())."',
	'".mysql_real_escape_string($new->getHs())."',
	'".mysql_real_escape_string($new->getTipoPuntoId())."',
	'".mysql_real_escape_string($new->getGmap())."',
	'".mysql_real_escape_string($new->getSeccionId())."',
	'".mysql_real_escape_string($new->getFlagId())."');";

	$result = mysql_query($sql, $this->daoConnection->Conexion_ID);
	if (!$result){
		echo 'Ooops (save punto): '.mysql_error();
		return false;
	}
	return true;

}

function getById($punto_id){

	$sql = "SELECT * FROM puntos WHERE punto_id = '".mysql_real_escape_string($punto_id)."' ;";

	$this->daoConnection->consulta($sql);
	$this->daoConnection->leerVarios();

	$numRegistros = $this->daoConnection->numregistros();

	if ($numRegistros == 0){
		return NULL;
	}

	$i = 0;

		$new = new punto();

		$new->setId($this->daoConnection->ObjetoConsulta2[$i][0]);
		$new->setNombre($this->daoConnection->ObjetoConsulta2[$i][1]);
		$new->setCiudadId($this->daoConnection->ObjetoConsulta2[$i][2]);
		$new->setDireccion($this->daoConnection->ObjetoConsulta2[$i][3]);
		$new->setTel($this->daoConnection->ObjetoConsulta2[$i][4]);
		$new->setPbx($this->daoConnection->ObjetoConsulta2[$i][5]);
		$new->setEmail($this->daoConnection->ObjetoConsulta2[$i][6]);
		$new->setHlv($this->daoConnection->ObjetoConsulta2[$i][7]);
		$new->setHs($this->daoConnection->ObjetoConsulta2[$i][8]);
		$new->setTipoPuntoId($this->daoConnection->ObjetoConsulta2[$i][9]);
		$new->setGmap($this->daoConnection->ObjetoConsulta2[$i][10]);
		$new->setSeccionId($this->daoConnection->ObjetoConsulta2[$i][11]);
		$new->setFlagId($this->daoConnection->ObjetoConsulta2[$i][12]);
		
	return $new;

}

function getByTipoPunto($punto_id){

	$sql = "SELECT * FROM puntos WHERE tipoPunto_id = '".mysql_real_escape_string($punto_id)."' ;";

	$this->daoConnection->consulta($sql);
	$this->daoConnection->leerVarios();

	$numRegistros = $this->daoConnection->numregistros();

	if ($numRegistros == 0){
		return NULL;
	}

	$i = 0;

		$new = new punto();

		$new->setId($this->daoConnection->ObjetoConsulta2[$i][0]);
		$new->setNombre($this->daoConnection->ObjetoConsulta2[$i][1]);
		$new->setCiudadId($this->daoConnection->ObjetoConsulta2[$i][2]);
		$new->setDireccion($this->daoConnection->ObjetoConsulta2[$i][3]);
		$new->setTel($this->daoConnection->ObjetoConsulta2[$i][4]);
		$new->setPbx($this->daoConnection->ObjetoConsulta2[$i][5]);
		$new->setEmail($this->daoConnection->ObjetoConsulta2[$i][6]);
		$new->setHlv($this->daoConnection->ObjetoConsulta2[$i][7]);
		$new->setHs($this->daoConnection->ObjetoConsulta2[$i][8]);
		$new->setTipoPuntoId($this->daoConnection->ObjetoConsulta2[$i][9]);
		$new->setGmap($this->daoConnection->ObjetoConsulta2[$i][10]);
		$new->setSeccionId($this->daoConnection->ObjetoConsulta2[$i][11]);
		$new->setFlagId($this->daoConnection->ObjetoConsulta2[$i][12]);
		
	return $new;

}


function getBySeccionFlag($seccion_id, $flag_id){

	$sql = "SELECT * FROM puntos WHERE seccion_id = '".mysql_real_escape_string($seccion_id)."' AND flag_id = '".mysql_real_escape_string($flag_id)."' ;";

	$this->daoConnection->consulta($sql);
	$this->daoConnection->leerVarios();

	$numRegistros = $this->daoConnection->numregistros();

	if ($numRegistros == 0){
		return NULL;
	}

	$news = NULL;

	for ($i = 0; $i < $numRegistros; $i++){

		$new = new punto();

		$new->setId($this->daoConnection->ObjetoConsulta2[$i][0]);
		$new->setNombre($this->daoConnection->ObjetoConsulta2[$i][1]);
		$new->setCiudadId($this->daoConnection->ObjetoConsulta2[$i][2]);
		$new->setDireccion($this->daoConnection->ObjetoConsulta2[$i][3]);
		$new->setTel($this->daoConnection->ObjetoConsulta2[$i][4]);
		$new->setPbx($this->daoConnection->ObjetoConsulta2[$i][5]);
		$new->setEmail($this->daoConnection->ObjetoConsulta2[$i][6]);
		$new->setHlv($this->daoConnection->ObjetoConsulta2[$i][7]);
		$new->setHs($this->daoConnection->ObjetoConsulta2[$i][8]);
		$new->setTipoPuntoId($this->daoConnection->ObjetoConsulta2[$i][9]);
		$new->setGmap($this->daoConnection->ObjetoConsulta2[$i][10]);
		$new->setSeccionId($this->daoConnection->ObjetoConsulta2[$i][11]);
		$new->setFlagId($this->daoConnection->ObjetoConsulta2[$i][12]);

		$news[$i] = $new;

	}

	return $news;

}


function getBySeccion($seccion_id){

	$sql = "SELECT * FROM puntos WHERE seccion_id = '".mysql_real_escape_string($seccion_id)."';";

	$this->daoConnection->consulta($sql);
	$this->daoConnection->leerVarios();

	$numRegistros = $this->daoConnection->numregistros();

	if ($numRegistros == 0){
		return NULL;
	}

	$news = NULL;

	for ($i = 0; $i < $numRegistros; $i++){

		$new = new punto();

		$new->setId($this->daoConnection->ObjetoConsulta2[$i][0]);
		$new->setNombre($this->daoConnection->ObjetoConsulta2[$i][1]);
		$new->setCiudadId($this->daoConnection->ObjetoConsulta2[$i][2]);
		$new->setDireccion($this->daoConnection->ObjetoConsulta2[$i][3]);
		$new->setTel($this->daoConnection->ObjetoConsulta2[$i][4]);
		$new->setPbx($this->daoConnection->ObjetoConsulta2[$i][5]);
		$new->setEmail($this->daoConnection->ObjetoConsulta2[$i][6]);
		$new->setHlv($this->daoConnection->ObjetoConsulta2[$i][7]);
		$new->setHs($this->daoConnection->ObjetoConsulta2[$i][8]);
		$new->setTipoPuntoId($this->daoConnection->ObjetoConsulta2[$i][9]);
		$new->setGmap($this->daoConnection->ObjetoConsulta2[$i][10]);
		$new->setSeccionId($this->daoConnection->ObjetoConsulta2[$i][11]);
		$new->setFlagId($this->daoConnection->ObjetoConsulta2[$i][12]);

		$news[$i] = $new;

	}

	return $news;

}

function getSucursales(){

	$sql = "SELECT * FROM puntos WHERE tipoPunto_id!=1 ORDER BY punto_id";

	$this->daoConnection->consulta($sql);
	$this->daoConnection->leerVarios();

	$numRegistros = $this->daoConnection->numregistros();

	if ($numRegistros == 0){
		return NULL;
	}

	$news = NULL;

	for ($i = 0; $i < $numRegistros; $i++){

		$new = new punto();

		$new->setId($this->daoConnection->ObjetoConsulta2[$i][0]);
		$new->setNombre($this->daoConnection->ObjetoConsulta2[$i][1]);
		$new->setCiudadId($this->daoConnection->ObjetoConsulta2[$i][2]);
		$new->setDireccion($this->daoConnection->ObjetoConsulta2[$i][3]);
		$new->setTel($this->daoConnection->ObjetoConsulta2[$i][4]);
		$new->setPbx($this->daoConnection->ObjetoConsulta2[$i][5]);
		$new->setEmail($this->daoConnection->ObjetoConsulta2[$i][6]);
		$new->setHlv($this->daoConnection->ObjetoConsulta2[$i][7]);
		$new->setHs($this->daoConnection->ObjetoConsulta2[$i][8]);
		$new->setTipoPuntoId($this->daoConnection->ObjetoConsulta2[$i][9]);
		$new->setGmap($this->daoConnection->ObjetoConsulta2[$i][10]);
		$new->setSeccionId($this->daoConnection->ObjetoConsulta2[$i][11]);
		$new->setFlagId($this->daoConnection->ObjetoConsulta2[$i][12]);

		$news[$i] = $new;

	}

	return $news;

}



function gets(){

	$sql = "SELECT * FROM puntos ORDER BY punto_id";

	$this->daoConnection->consulta($sql);
	$this->daoConnection->leerVarios();

	$numRegistros = $this->daoConnection->numregistros();

	if ($numRegistros == 0){
		return NULL;
	}

	$news = NULL;

	for ($i = 0; $i < $numRegistros; $i++){

		$new = new punto();

		$new->setId($this->daoConnection->ObjetoConsulta2[$i][0]);
		$new->setNombre($this->daoConnection->ObjetoConsulta2[$i][1]);
		$new->setCiudadId($this->daoConnection->ObjetoConsulta2[$i][2]);
		$new->setDireccion($this->daoConnection->ObjetoConsulta2[$i][3]);
		$new->setTel($this->daoConnection->ObjetoConsulta2[$i][4]);
		$new->setPbx($this->daoConnection->ObjetoConsulta2[$i][5]);
		$new->setEmail($this->daoConnection->ObjetoConsulta2[$i][6]);
		$new->setHlv($this->daoConnection->ObjetoConsulta2[$i][7]);
		$new->setHs($this->daoConnection->ObjetoConsulta2[$i][8]);
		$new->setTipoPuntoId($this->daoConnection->ObjetoConsulta2[$i][9]);
		$new->setGmap($this->daoConnection->ObjetoConsulta2[$i][10]);
		$new->setSeccionId($this->daoConnection->ObjetoConsulta2[$i][11]);
		$new->setFlagId($this->daoConnection->ObjetoConsulta2[$i][12]);

		$news[$i] = $new;

	}

	return $news;

}



function update($punto){

	$new = new punto();
	$new = $punto;

	$sql = "UPDATE  puntos SET  
		punto_id=
			'".mysql_real_escape_string($new->getId())."',
		punto_nombre=
			'".mysql_real_escape_string($new->getNombre())."',
		ciudad_id=
			'".mysql_real_escape_string($new->getCiudadId())."',
		punto_direccion=
			'".mysql_real_escape_string($new->getDireccion())."',
		punto_tel=
			'".mysql_real_escape_string($new->getTel())."',
		punto_pbx=
			'".mysql_real_escape_string($new->getPbx())."',
		punto_email=
			'".mysql_real_escape_string($new->getEmail())."',
		punto_hlv=
			'".mysql_real_escape_string($new->getHlv())."',
		punto_hs=
			'".mysql_real_escape_string($new->getHs())."',
		punto_gmap=
			'".mysql_real_escape_string($new->getGmap())."'

		WHERE punto_id = '".mysql_real_escape_string($new->getId())."';";

	$result = mysql_query($sql, $this->daoConnection->Conexion_ID);
	if (!$result){
		echo 'Ooops (update punto Es): '.mysql_error();
		return false;
	}
	return true;
}

function delete($punto_id){


	$sql = "DELETE FROM puntos WHERE punto_id = '".mysql_real_escape_string($punto_id)."';";

	$result = mysql_query($sql, $this->daoConnection->Conexion_ID);
	if (!$result){
		echo 'Ooops (delete clase): '.mysql_error();
		return false;
	}
	return true;
}


function total(){

	$sql = "SELECT COUNT(*) FROM puntos;";

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