<?php

class promocionDAO{

public $daoConnection;

function __construct(){
	$this->daoConnection = new DAO;
	$this->daoConnection->conectar();
}

function save($promocion){

	$new = new promocion();
	$new = $promocion;
	
	$sql = "INSERT INTO promociones ( promocion_id, promocion_titulo_e, promocion_descripcion_e, promocion_imagen_e, promocion_titulo_i, promocion_descripcion_i, promocion_imagen_i, promocion_referencia, promocion_precio, promocion_unidades, promocion_destacada, seccion_id )
	VALUES (
	'".mysql_real_escape_string($new->getId())."',
	'".mysql_real_escape_string($new->getTitulo_e())."',
	'".mysql_real_escape_string($new->getDescripcion_e())."',
	'".mysql_real_escape_string($new->getImagen_e())."',
	'".mysql_real_escape_string($new->getTitulo_i())."',
	'".mysql_real_escape_string($new->getDescripcion_i())."',
	'".mysql_real_escape_string($new->getImagen_i())."',
	'".mysql_real_escape_string($new->getReferencia())."',
	'".mysql_real_escape_string($new->getPrecio())."',
	'".mysql_real_escape_string($new->getUnidades())."',
	'".mysql_real_escape_string($new->getDestacada())."',
	'".mysql_real_escape_string($new->getSeccionId())."');";

	$result = mysql_query($sql, $this->daoConnection->Conexion_ID);
	if (!$result){
		echo 'Ooops (save promocion): '.mysql_error();
		return false;
	}
	return true;

}

function getById($promocion_id){

	$sql = "SELECT * FROM promociones WHERE promocion_id = '".mysql_real_escape_string($promocion_id)."' ;";

	$this->daoConnection->consulta($sql);
	$this->daoConnection->leerVarios();

	$numRegistros = $this->daoConnection->numregistros();

	if ($numRegistros == 0){
		return NULL;
	}

	$i = 0;

		$new = new promocion();

		$new->setId($this->daoConnection->ObjetoConsulta2[$i][0]);
		$new->setTitulo_e($this->daoConnection->ObjetoConsulta2[$i][1]);
		$new->setDescripcion_e($this->daoConnection->ObjetoConsulta2[$i][2]);
		$new->setImagen_e($this->daoConnection->ObjetoConsulta2[$i][3]);
		$new->setTitulo_i($this->daoConnection->ObjetoConsulta2[$i][4]);
		$new->setDescripcion_i($this->daoConnection->ObjetoConsulta2[$i][5]);
		$new->setImagen_i($this->daoConnection->ObjetoConsulta2[$i][6]);
		$new->setReferencia($this->daoConnection->ObjetoConsulta2[$i][7]);
		$new->setPrecio($this->daoConnection->ObjetoConsulta2[$i][8]);
		$new->setUnidades($this->daoConnection->ObjetoConsulta2[$i][9]);
		$new->setSeccionId($this->daoConnection->ObjetoConsulta2[$i][10]);
		$new->setDestacada($this->daoConnection->ObjetoConsulta2[$i][11]);
		
	return $new;

}

function gets(){

	$sql = "SELECT * FROM promociones";

	$this->daoConnection->consulta($sql);
	$this->daoConnection->leerVarios();

	$numRegistros = $this->daoConnection->numregistros();

	if ($numRegistros == 0){
		return NULL;
	}

	$news = NULL;

	for ($i = 0; $i < $numRegistros; $i++){

		$new = new promocion();

		$new->setId($this->daoConnection->ObjetoConsulta2[$i][0]);
		$new->setTitulo_e($this->daoConnection->ObjetoConsulta2[$i][1]);
		$new->setDescripcion_e($this->daoConnection->ObjetoConsulta2[$i][2]);
		$new->setImagen_e($this->daoConnection->ObjetoConsulta2[$i][3]);
		$new->setTitulo_i($this->daoConnection->ObjetoConsulta2[$i][4]);
		$new->setDescripcion_i($this->daoConnection->ObjetoConsulta2[$i][5]);
		$new->setImagen_i($this->daoConnection->ObjetoConsulta2[$i][6]);
		$new->setReferencia($this->daoConnection->ObjetoConsulta2[$i][7]);
		$new->setPrecio($this->daoConnection->ObjetoConsulta2[$i][8]);
		$new->setUnidades($this->daoConnection->ObjetoConsulta2[$i][9]);
		$new->setSeccionId($this->daoConnection->ObjetoConsulta2[$i][10]);
		$new->setDestacada($this->daoConnection->ObjetoConsulta2[$i][11]);

		$news[$i] = $new;

	}

	return $news;

}


function getBySeccionFlag($seccion_id, $flag_id){

	$sql = "SELECT * FROM promociones WHERE seccion_id = '".mysql_real_escape_string($seccion_id)."' AND flag_id = '".mysql_real_escape_string($flag_id)."' ;";

	$this->daoConnection->consulta($sql);
	$this->daoConnection->leerVarios();

	$numRegistros = $this->daoConnection->numregistros();

	if ($numRegistros == 0){
		return NULL;
	}

	$news = NULL;

	for ($i = 0; $i < $numRegistros; $i++){

		$new = new promocion();

		$new->setId($this->daoConnection->ObjetoConsulta2[$i][0]);
		$new->setTitulo_e($this->daoConnection->ObjetoConsulta2[$i][1]);
		$new->setDescripcion_e($this->daoConnection->ObjetoConsulta2[$i][2]);
		$new->setImagen_e($this->daoConnection->ObjetoConsulta2[$i][3]);
		$new->setTitulo_i($this->daoConnection->ObjetoConsulta2[$i][4]);
		$new->setDescripcion_i($this->daoConnection->ObjetoConsulta2[$i][5]);
		$new->setImagen_i($this->daoConnection->ObjetoConsulta2[$i][6]);
		$new->setReferencia($this->daoConnection->ObjetoConsulta2[$i][7]);
		$new->setPrecio($this->daoConnection->ObjetoConsulta2[$i][8]);
		$new->setUnidades($this->daoConnection->ObjetoConsulta2[$i][9]);
		$new->setSeccionId($this->daoConnection->ObjetoConsulta2[$i][10]);
		$new->setDestacada($this->daoConnection->ObjetoConsulta2[$i][11]);

		$news[$i] = $new;

	}

	return $news;

}


function getBySeccion($seccion_id){

	$sql = "SELECT * FROM promociones WHERE seccion_id = '".mysql_real_escape_string($seccion_id)."';";

	$this->daoConnection->consulta($sql);
	$this->daoConnection->leerVarios();

	$numRegistros = $this->daoConnection->numregistros();

	if ($numRegistros == 0){
		return NULL;
	}

	$news = NULL;

	for ($i = 0; $i < $numRegistros; $i++){

		$new = new promocion();

		$new->setId($this->daoConnection->ObjetoConsulta2[$i][0]);
		$new->setTitulo_e($this->daoConnection->ObjetoConsulta2[$i][1]);
		$new->setDescripcion_e($this->daoConnection->ObjetoConsulta2[$i][2]);
		$new->setImagen_e($this->daoConnection->ObjetoConsulta2[$i][3]);
		$new->setTitulo_i($this->daoConnection->ObjetoConsulta2[$i][4]);
		$new->setDescripcion_i($this->daoConnection->ObjetoConsulta2[$i][5]);
		$new->setImagen_i($this->daoConnection->ObjetoConsulta2[$i][6]);
		$new->setReferencia($this->daoConnection->ObjetoConsulta2[$i][7]);
		$new->setPrecio($this->daoConnection->ObjetoConsulta2[$i][8]);
		$new->setUnidades($this->daoConnection->ObjetoConsulta2[$i][9]);
		$new->setSeccionId($this->daoConnection->ObjetoConsulta2[$i][10]);
		$new->setDestacada($this->daoConnection->ObjetoConsulta2[$i][11]);

		$news[$i] = $new;

	}

	return $news;

}

function getByPrincipal(){

$sql = "SELECT * FROM promociones WHERE promocion_destacada = 1 ;";

	$this->daoConnection->consulta($sql);
	$this->daoConnection->leerVarios();

	$numRegistros = $this->daoConnection->numregistros();

	if ($numRegistros == 0){
		return NULL;
	}

	$i = 0;

		$new = new promocion();

		$new->setId($this->daoConnection->ObjetoConsulta2[$i][0]);
		$new->setTitulo_e($this->daoConnection->ObjetoConsulta2[$i][1]);
		$new->setDescripcion_e($this->daoConnection->ObjetoConsulta2[$i][2]);
		$new->setImagen_e($this->daoConnection->ObjetoConsulta2[$i][3]);
		$new->setTitulo_i($this->daoConnection->ObjetoConsulta2[$i][4]);
		$new->setDescripcion_i($this->daoConnection->ObjetoConsulta2[$i][5]);
		$new->setImagen_i($this->daoConnection->ObjetoConsulta2[$i][6]);
		$new->setReferencia($this->daoConnection->ObjetoConsulta2[$i][7]);
		$new->setPrecio($this->daoConnection->ObjetoConsulta2[$i][8]);
		$new->setUnidades($this->daoConnection->ObjetoConsulta2[$i][9]);
		$new->setSeccionId($this->daoConnection->ObjetoConsulta2[$i][10]);
		$new->setDestacada($this->daoConnection->ObjetoConsulta2[$i][11]);
		
	return $new;

}

function getDiferentPrincipal(){

$sql = "SELECT * FROM promociones WHERE promocion_destacada <> 1 ;";

	$this->daoConnection->consulta($sql);
	$this->daoConnection->leerVarios();

	$numRegistros = $this->daoConnection->numregistros();

	if ($numRegistros == 0){
		return NULL;
	}

	$news = NULL;

	for ($i = 0; $i < $numRegistros; $i++){

		$new = new promocion();

		$new->setId($this->daoConnection->ObjetoConsulta2[$i][0]);
		$new->setTitulo_e($this->daoConnection->ObjetoConsulta2[$i][1]);
		$new->setDescripcion_e($this->daoConnection->ObjetoConsulta2[$i][2]);
		$new->setImagen_e($this->daoConnection->ObjetoConsulta2[$i][3]);
		$new->setTitulo_i($this->daoConnection->ObjetoConsulta2[$i][4]);
		$new->setDescripcion_i($this->daoConnection->ObjetoConsulta2[$i][5]);
		$new->setImagen_i($this->daoConnection->ObjetoConsulta2[$i][6]);
		$new->setReferencia($this->daoConnection->ObjetoConsulta2[$i][7]);
		$new->setPrecio($this->daoConnection->ObjetoConsulta2[$i][8]);
		$new->setUnidades($this->daoConnection->ObjetoConsulta2[$i][9]);
		$new->setSeccionId($this->daoConnection->ObjetoConsulta2[$i][10]);
		$new->setDestacada($this->daoConnection->ObjetoConsulta2[$i][11]);

		$news[$i] = $new;

	}

	return $news;
}

function updateEspanol($promocion){

	$new = new promocion();
	$new = $promocion;

	$sql = "UPDATE  promociones SET  
		promocion_titulo_e=
		'".mysql_real_escape_string($new->getTitulo_e())."',
		promocion_descripcion_e=
		'".mysql_real_escape_string($new->getDescripcion_e())."',
		promocion_imagen_e=
		'".mysql_real_escape_string($new->getImagen_e())."',
		promocion_referencia=
		'".mysql_real_escape_string($new->getReferencia())."',
		promocion_precio=
		'".mysql_real_escape_string($new->getPrecio())."',
		promocion_unidades=
		'".mysql_real_escape_string($new->getUnidades())."'

		 WHERE promocion_id = '".mysql_real_escape_string($new->getId())."';";

	$result = mysql_query($sql, $this->daoConnection->Conexion_ID);
	if (!$result){
		echo 'Ooops (update promocion Es): '.mysql_error();
		return false;
	}
	return true;
}

function updateIngles($promocion){

	$new = new promocion();
	$new = $promocion;

	$sql = "UPDATE  promociones SET  
		promocion_titulo_i=
		'".mysql_real_escape_string($new->getTitulo_i())."',
		promocion_descripcion_i=
		'".mysql_real_escape_string($new->getDescripcion_i())."',
		promocion_imagen_i=
		'".mysql_real_escape_string($new->getImagen_i())."',
		promocion_referencia=
		'".mysql_real_escape_string($new->getReferencia())."',
		promocion_precio=
		'".mysql_real_escape_string($new->getPrecio())."',
		promocion_unidades=
		'".mysql_real_escape_string($new->getUnidades())."'


		 WHERE promocion_id = '".mysql_real_escape_string($new->getId())."';";

	$result = mysql_query($sql, $this->daoConnection->Conexion_ID);
	if (!$result){
		echo 'Ooops (update promocion Es): '.mysql_error();
		return false;
	}
	return true;
}


function asigPrincipal($promocion){

	$new = new promocion();
	$new = $promocion;

	$sql = "UPDATE  promociones SET  
		promocion_destacada=
		'".mysql_real_escape_string($new->getDestacada())."'

		 WHERE promocion_id = '".mysql_real_escape_string($new->getId())."';";

	$result = mysql_query($sql, $this->daoConnection->Conexion_ID);
	if (!$result){
		echo 'Ooops (update promocion Es): '.mysql_error();
		return false;
	}
	return true;
}



function delete($promocion_id){


	$sql = "DELETE FROM promociones WHERE promocion_id = '".mysql_real_escape_string($promocion_id)."';";

	$result = mysql_query($sql, $this->daoConnection->Conexion_ID);
	if (!$result){
		echo 'Ooops (delete clase): '.mysql_error();
		return false;
	}
	return true;
}


function total(){

	$sql = "SELECT COUNT(*) FROM promociones;";

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