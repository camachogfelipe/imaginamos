<?php

class articuloDAO{

public $daoConnection;

function __construct(){
	$this->daoConnection = new DAO;
	$this->daoConnection->conectar();
}

function save($articulo){

	$new = new articulo();
	$new = $articulo;
	
	$sql = "INSERT INTO articulos (articulo_id, articulo_titulo_e, articulo_descripcion_e, articulo_imagen_e, articulo_titulo_i, articulo_descripcion_i, articulo_imagen_i, seccion_id, flag_id, articulo_enlace_e, articulo_enlace_i)
	VALUES (
	'".mysql_real_escape_string($new->getId())."',
	'".mysql_real_escape_string($new->getTitulo_e())."',
	'".mysql_real_escape_string($new->getDescripcion_e())."',
	'".mysql_real_escape_string($new->getImagen_e())."',
	'".mysql_real_escape_string($new->getTitulo_i())."',
	'".mysql_real_escape_string($new->getDescripcion_i())."',
	'".mysql_real_escape_string($new->getImagen_i())."',
	'".mysql_real_escape_string($new->getSeccionId())."',
	'".mysql_real_escape_string($new->getFlagId())."',
	'".mysql_real_escape_string($new->getEnlace_e())."',
	'".mysql_real_escape_string($new->getEnlace_i())."');";

	$result = mysql_query($sql, $this->daoConnection->Conexion_ID);
	if (!$result){
		echo 'Ooops (save articulo): '.mysql_error();
		return false;
	}
	return true;

}

function getById($articulo_id){

	$sql = "SELECT * FROM articulos WHERE articulo_id = '".mysql_real_escape_string($articulo_id)."' ;";

	$this->daoConnection->consulta($sql);
	$this->daoConnection->leerVarios();

	$numRegistros = $this->daoConnection->numregistros();

	if ($numRegistros == 0){
		return NULL;
	}

	$i = 0;

		$new = new articulo();

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

	$sql = "SELECT * FROM articulos WHERE seccion_id = '".mysql_real_escape_string($seccion_id)."' AND flag_id = '".mysql_real_escape_string($flag_id)."' ;";

	$this->daoConnection->consulta($sql);
	$this->daoConnection->leerVarios();

	$numRegistros = $this->daoConnection->numregistros();

	if ($numRegistros == 0){
		return NULL;
	}

	$news = NULL;

	for ($i = 0; $i < $numRegistros; $i++){

		$new = new articulo();

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

	$sql = "SELECT * FROM articulos WHERE seccion_id = '".mysql_real_escape_string($seccion_id)."';";

	$this->daoConnection->consulta($sql);
	$this->daoConnection->leerVarios();

	$numRegistros = $this->daoConnection->numregistros();

	if ($numRegistros == 0){
		return NULL;
	}

	$news = NULL;

	for ($i = 0; $i < $numRegistros; $i++){

		$new = new articulo();

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

	$sql = "SELECT * FROM articulos";

	$this->daoConnection->consulta($sql);
	$this->daoConnection->leerVarios();

	$numRegistros = $this->daoConnection->numregistros();

	if ($numRegistros == 0){
		return NULL;
	}

	$news = NULL;

	for ($i = 0; $i < $numRegistros; $i++){

		$new = new articulo();

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



function updateEspanol($articulo){

	$new = new articulo();
	$new = $articulo;

	$sql = "UPDATE  articulos SET  
		articulo_titulo_e= 
			'".mysql_real_escape_string($new->getTitulo_e())."', 
		articulo_descripcion_e= 
			'".mysql_real_escape_string($new->getDescripcion_e())."', 
		articulo_imagen_e= 
			'".mysql_real_escape_string($new->getImagen_e())."',
		articulo_enlace_e= 
			'".mysql_real_escape_string($new->getEnlace_e())."'			

		 WHERE articulo_id = '".mysql_real_escape_string($new->getId())."';";

	$result = mysql_query($sql, $this->daoConnection->Conexion_ID);
	if (!$result){
		echo 'Ooops (update articulo Es): '.mysql_error();
		return false;
	}
	return true;
}

function updateIngles($articulo){

	$new = new articulo();
	$new = $articulo;

	$sql = "UPDATE  articulos SET  
		articulo_titulo_i= 
			'".mysql_real_escape_string($new->getTitulo_i())."', 
		articulo_descripcion_i= 
			'".mysql_real_escape_string($new->getDescripcion_i())."', 
		articulo_imagen_i= 
			'".mysql_real_escape_string($new->getImagen_i())."',
		articulo_enlace_i= 
			'".mysql_real_escape_string($new->getEnlace_i())."'

		 WHERE articulo_id = '".mysql_real_escape_string($new->getId())."';";

	$result = mysql_query($sql, $this->daoConnection->Conexion_ID);
	if (!$result){
		echo 'Ooops (update articulo Es): '.mysql_error();
		return false;
	}
	return true;
}

function delete($articulo_id){


	$sql = "DELETE FROM articulos WHERE articulo_id = '".mysql_real_escape_string($articulo_id)."';";

	$result = mysql_query($sql, $this->daoConnection->Conexion_ID);
	if (!$result){
		echo 'Ooops (delete clase): '.mysql_error();
		return false;
	}
	return true;
}


function total(){

	$sql = "SELECT COUNT(*) FROM articulos;";

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