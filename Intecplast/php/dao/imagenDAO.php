<?php

class imagenDAO{

public $daoConnection;

function __construct(){
	$this->daoConnection = new DAO;
	$this->daoConnection->conectar();
}

function save($imagen){

	$new = new imagen();
	$new = $imagen;
	
	$sql = "INSERT INTO imagenes (imagen_id, imagen_titulo_e, imagen_descripcion_e, imagen_imagen_e, imagen_enlace_e, imagen_titulo_i, imagen_descripcion_i, imagen_imagen_i, imagen_enlace_i, seccion_id, flag_id)
	VALUES (
	'".mysql_real_escape_string($new->getId())."',
	'".mysql_real_escape_string($new->getTitulo_e())."',
	'".mysql_real_escape_string($new->getDescripcion_e())."',
	'".mysql_real_escape_string($new->getImagen_e())."',
	'".mysql_real_escape_string($new->getEnlace_e())."',
	'".mysql_real_escape_string($new->getTitulo_i())."',
	'".mysql_real_escape_string($new->getDescripcion_i())."',
	'".mysql_real_escape_string($new->getImagen_i())."',
	'".mysql_real_escape_string($new->getEnlace_i())."',
	'".mysql_real_escape_string($new->getSeccionId())."',
	'".mysql_real_escape_string($new->getFlagId())."');";

	$result = mysql_query($sql, $this->daoConnection->Conexion_ID);
	if (!$result){
		echo 'Ooops (save imagen): '.mysql_error();
		return false;
	}
	return true;

}

function getById($imagen_id){

	$sql = "SELECT * FROM imagenes WHERE imagen_id = '".mysql_real_escape_string($imagen_id)."' ;";

	$this->daoConnection->consulta($sql);
	$this->daoConnection->leerVarios();

	$numRegistros = $this->daoConnection->numregistros();

	if ($numRegistros == 0){
		return NULL;
	}

	$i = 0;

		$new = new imagen();

		$new->setId($this->daoConnection->ObjetoConsulta2[$i][0]);
		$new->setTitulo_e($this->daoConnection->ObjetoConsulta2[$i][1]);
		$new->setDescripcion_e($this->daoConnection->ObjetoConsulta2[$i][2]);
		$new->setImagen_e($this->daoConnection->ObjetoConsulta2[$i][3]);
		$new->setTitulo_i($this->daoConnection->ObjetoConsulta2[$i][4]);
		$new->setDescripcion_i($this->daoConnection->ObjetoConsulta2[$i][5]);
		$new->setImagen_i($this->daoConnection->ObjetoConsulta2[$i][6]);
		$new->setSeccionId($this->daoConnection->ObjetoConsulta2[$i][7]);
		$new->setFlagId($this->daoConnection->ObjetoConsulta2[$i][8]);
		$new->setEnlace_e($this->daoConnection->ObjetoConsulta2[$i][9]);
		$new->setEnlace_i($this->daoConnection->ObjetoConsulta2[$i][10]);

	return $new;

}

function getBySeccionFlag($seccion_id, $flag_id){

	$sql = "SELECT * FROM imagenes WHERE seccion_id = '".mysql_real_escape_string($seccion_id)."' AND flag_id = '".mysql_real_escape_string($flag_id)."' ;";

	$this->daoConnection->consulta($sql);
	$this->daoConnection->leerVarios();

	$numRegistros = $this->daoConnection->numregistros();

	if ($numRegistros == 0){
		return NULL;
	}

	$news = NULL;

	for ($i = 0; $i < $numRegistros; $i++){

		$new = new imagen();

		$new->setId($this->daoConnection->ObjetoConsulta2[$i][0]);
		$new->setTitulo_e($this->daoConnection->ObjetoConsulta2[$i][1]);
		$new->setDescripcion_e($this->daoConnection->ObjetoConsulta2[$i][2]);
		$new->setImagen_e($this->daoConnection->ObjetoConsulta2[$i][3]);
		$new->setTitulo_i($this->daoConnection->ObjetoConsulta2[$i][4]);
		$new->setDescripcion_i($this->daoConnection->ObjetoConsulta2[$i][5]);
		$new->setImagen_i($this->daoConnection->ObjetoConsulta2[$i][6]);
		$new->setSeccionId($this->daoConnection->ObjetoConsulta2[$i][7]);
		$new->setFlagId($this->daoConnection->ObjetoConsulta2[$i][8]);
		$new->setEnlace_e($this->daoConnection->ObjetoConsulta2[$i][9]);
		$new->setEnlace_i($this->daoConnection->ObjetoConsulta2[$i][10]);
		
		$news[$i] = $new;

	}

	return $news;

}

function getBySeccion($seccion_id){

	$sql = "SELECT * FROM imagenes WHERE seccion_id = '".mysql_real_escape_string($seccion_id)."';";

	$this->daoConnection->consulta($sql);
	$this->daoConnection->leerVarios();

	$numRegistros = $this->daoConnection->numregistros();

	if ($numRegistros == 0){
		return NULL;
	}

	$news = NULL;

	for ($i = 0; $i < $numRegistros; $i++){

		$new = new imagen();

		$new->setId($this->daoConnection->ObjetoConsulta2[$i][0]);
		$new->setTitulo_e($this->daoConnection->ObjetoConsulta2[$i][1]);
		$new->setDescripcion_e($this->daoConnection->ObjetoConsulta2[$i][2]);
		$new->setImagen_e($this->daoConnection->ObjetoConsulta2[$i][3]);
		$new->setTitulo_i($this->daoConnection->ObjetoConsulta2[$i][4]);
		$new->setDescripcion_i($this->daoConnection->ObjetoConsulta2[$i][5]);
		$new->setImagen_i($this->daoConnection->ObjetoConsulta2[$i][6]);
		$new->setSeccionId($this->daoConnection->ObjetoConsulta2[$i][7]);
		$new->setFlagId($this->daoConnection->ObjetoConsulta2[$i][8]);
		$new->setEnlace_e($this->daoConnection->ObjetoConsulta2[$i][9]);
		$new->setEnlace_i($this->daoConnection->ObjetoConsulta2[$i][10]);

		$news[$i] = $new;

	}

	return $news;

}


function gets(){

	$sql = "SELECT * FROM imagenes";

	$this->daoConnection->consulta($sql);
	$this->daoConnection->leerVarios();

	$numRegistros = $this->daoConnection->numregistros();

	if ($numRegistros == 0){
		return NULL;
	}

	$news = NULL;

	for ($i = 0; $i < $numRegistros; $i++){

		$new = new imagen();

		$new->setId($this->daoConnection->ObjetoConsulta2[$i][0]);
		$new->setTitulo_e($this->daoConnection->ObjetoConsulta2[$i][1]);
		$new->setDescripcion_e($this->daoConnection->ObjetoConsulta2[$i][2]);
		$new->setImagen_e($this->daoConnection->ObjetoConsulta2[$i][3]);
		$new->setTitulo_i($this->daoConnection->ObjetoConsulta2[$i][4]);
		$new->setDescripcion_i($this->daoConnection->ObjetoConsulta2[$i][5]);
		$new->setImagen_i($this->daoConnection->ObjetoConsulta2[$i][6]);
		$new->setSeccionId($this->daoConnection->ObjetoConsulta2[$i][7]);
		$new->setFlagId($this->daoConnection->ObjetoConsulta2[$i][8]);
		$new->setEnlace_e($this->daoConnection->ObjetoConsulta2[$i][9]);
		$new->setEnlace_i($this->daoConnection->ObjetoConsulta2[$i][10]);
		
		$news[$i] = $new;

	}

	return $news;

}



function updateEspanol($imagen){

	$new = new imagen();
	$new = $imagen;

	$sql = "UPDATE  imagenes SET  
		imagen_titulo_e= 
			'".mysql_real_escape_string($new->getTitulo_e())."', 
		imagen_descripcion_e= 
			'".mysql_real_escape_string($new->getDescripcion_e())."', 
		imagen_imagen_e= 
			'".mysql_real_escape_string($new->getImagen_e())."',
		imagen_enlace_e= 
			'".mysql_real_escape_string($new->getEnlace_e())."'

		 WHERE imagen_id = '".mysql_real_escape_string($new->getId())."';";

	$result = mysql_query($sql, $this->daoConnection->Conexion_ID);
	if (!$result){
		echo 'Ooops (update imagen Es): '.mysql_error();
		return false;
	}
	return true;
}

function updateIngles($imagen){

	$new = new imagen();
	$new = $imagen;

	$sql = "UPDATE  imagenes SET  
		imagen_titulo_i= 
			'".mysql_real_escape_string($new->getTitulo_i())."', 
		imagen_descripcion_i= 
			'".mysql_real_escape_string($new->getDescripcion_i())."', 
		imagen_imagen_i= 
			'".mysql_real_escape_string($new->getImagen_i())."',
		imagen_enlace_i= 
			'".mysql_real_escape_string($new->getEnlace_i())."'

		 WHERE imagen_id = '".mysql_real_escape_string($new->getId())."';";

	$result = mysql_query($sql, $this->daoConnection->Conexion_ID);
	if (!$result){
		echo 'Ooops (update imagen Es): '.mysql_error();
		return false;
	}
	return true;
}

function delete($imagen_id){


	$sql = "DELETE FROM imagenes WHERE imagen_id = '".mysql_real_escape_string($imagen_id)."';";

	$result = mysql_query($sql, $this->daoConnection->Conexion_ID);
	if (!$result){
		echo 'Ooops (delete clase): '.mysql_error();
		return false;
	}
	return true;
}


function total(){

	$sql = "SELECT COUNT(*) FROM imagenes;";

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