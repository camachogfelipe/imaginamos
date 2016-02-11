<?php

class noticiaDAO{

public $daoConnection;

function __construct(){
	$this->daoConnection = new DAO;
	$this->daoConnection->conectar();
}

function save($noticia){

	$new = new noticia();
	$new = $noticia;
	
	$sql = "INSERT INTO noticias (noticia_id, noticia_titulo_e, noticia_descripcion_e, noticia_imagen_e, noticia_enlace_e, noticia_titulo_i, noticia_descripcion_i, noticia_imagen_i, noticia_enlace_i, seccion_id, noticia_fecha)
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
	'".mysql_real_escape_string($new->getFecha())."');";

	$result = mysql_query($sql, $this->daoConnection->Conexion_ID);
	if (!$result){
		echo 'Ooops (save noticia): '.mysql_error();
		return false;
	}
	return true;

}

function getById($noticia_id){

	$sql = "SELECT * FROM noticias WHERE noticia_id = '".mysql_real_escape_string($noticia_id)."' ;";

	$this->daoConnection->consulta($sql);
	$this->daoConnection->leerVarios();

	$numRegistros = $this->daoConnection->numregistros();

	if ($numRegistros == 0){
		return NULL;
	}

	$i = 0;

		$new = new noticia();

		$new->setId($this->daoConnection->ObjetoConsulta2[$i][0]);
		$new->setTitulo_e($this->daoConnection->ObjetoConsulta2[$i][1]);
		$new->setDescripcion_e($this->daoConnection->ObjetoConsulta2[$i][2]);
		$new->setImagen_e($this->daoConnection->ObjetoConsulta2[$i][3]);
		$new->setEnlace_e($this->daoConnection->ObjetoConsulta2[$i][4]);
		$new->setTitulo_i($this->daoConnection->ObjetoConsulta2[$i][5]);
		$new->setDescripcion_i($this->daoConnection->ObjetoConsulta2[$i][6]);
		$new->setImagen_i($this->daoConnection->ObjetoConsulta2[$i][7]);
		$new->setEnlace_i($this->daoConnection->ObjetoConsulta2[$i][8]);
		$new->setSeccionId($this->daoConnection->ObjetoConsulta2[$i][9]);
		$new->setFecha($this->daoConnection->ObjetoConsulta2[$i][10]);
		
	return $new;

}

function gets(){

	$sql = "SELECT * FROM noticias ORDER BY noticia_fecha";

	$this->daoConnection->consulta($sql);
	$this->daoConnection->leerVarios();

	$numRegistros = $this->daoConnection->numregistros();

	if ($numRegistros == 0){
		return NULL;
	}

	$news = NULL;

	for ($i = 0; $i < $numRegistros; $i++){

		$new = new noticia();

		$new->setId($this->daoConnection->ObjetoConsulta2[$i][0]);
		$new->setTitulo_e($this->daoConnection->ObjetoConsulta2[$i][1]);
		$new->setDescripcion_e($this->daoConnection->ObjetoConsulta2[$i][2]);
		$new->setImagen_e($this->daoConnection->ObjetoConsulta2[$i][3]);
		$new->setEnlace_e($this->daoConnection->ObjetoConsulta2[$i][4]);
		$new->setTitulo_i($this->daoConnection->ObjetoConsulta2[$i][5]);
		$new->setDescripcion_i($this->daoConnection->ObjetoConsulta2[$i][6]);
		$new->setImagen_i($this->daoConnection->ObjetoConsulta2[$i][7]);
		$new->setEnlace_i($this->daoConnection->ObjetoConsulta2[$i][8]);
		$new->setSeccionId($this->daoConnection->ObjetoConsulta2[$i][9]);
		$new->setFecha($this->daoConnection->ObjetoConsulta2[$i][10]);

		$news[$i] = $new;

	}

	return $news;

}

function getByMesAnio($mes,$anio){

	$sql = "SELECT * FROM noticias WHERE MONTH (noticia_fecha) = '".mysql_real_escape_string($mes)."' AND YEAR (noticia_fecha) = '".mysql_real_escape_string($anio)."' ORDER BY noticia_fecha";

	$this->daoConnection->consulta($sql);
	$this->daoConnection->leerVariosArray();

	$numRegistros = $this->daoConnection->numregistros();

	if ($numRegistros == 0){
		return NULL;
	}

	$news = NULL;

	for ($i = 0; $i < $numRegistros; $i++){

		$new = new noticia();

		$new->setId($this->daoConnection->ObjetoConsulta2[$i][0]);
		$new->setTitulo_e($this->daoConnection->ObjetoConsulta2[$i][1]);
		$new->setDescripcion_e($this->daoConnection->ObjetoConsulta2[$i][2]);
		$new->setImagen_e($this->daoConnection->ObjetoConsulta2[$i][3]);
		$new->setEnlace_e($this->daoConnection->ObjetoConsulta2[$i][4]);
		$new->setTitulo_i($this->daoConnection->ObjetoConsulta2[$i][5]);
		$new->setDescripcion_i($this->daoConnection->ObjetoConsulta2[$i][6]);
		$new->setImagen_i($this->daoConnection->ObjetoConsulta2[$i][7]);
		$new->setEnlace_i($this->daoConnection->ObjetoConsulta2[$i][8]);
		$new->setSeccionId($this->daoConnection->ObjetoConsulta2[$i][9]);
		$new->setFecha($this->daoConnection->ObjetoConsulta2[$i][10]);

		$news[$i] = $new;

	}

	return $news;

	
}

function getUltimasNoticias(){

	$sql = "SELECT * FROM noticias ORDER BY noticia_fecha DESC LIMIT 4";

	$this->daoConnection->consulta($sql);
	$this->daoConnection->leerVariosArray();

	$numRegistros = $this->daoConnection->numregistros();

	if ($numRegistros == 0){
		return NULL;
	}

	$news = NULL;

	for ($i = 0; $i < $numRegistros; $i++){

		$new = new noticia();

		$new->setId($this->daoConnection->ObjetoConsulta2[$i][0]);
		$new->setTitulo_e($this->daoConnection->ObjetoConsulta2[$i][1]);
		$new->setDescripcion_e($this->daoConnection->ObjetoConsulta2[$i][2]);
		$new->setImagen_e($this->daoConnection->ObjetoConsulta2[$i][3]);
		$new->setEnlace_e($this->daoConnection->ObjetoConsulta2[$i][4]);
		$new->setTitulo_i($this->daoConnection->ObjetoConsulta2[$i][5]);
		$new->setDescripcion_i($this->daoConnection->ObjetoConsulta2[$i][6]);
		$new->setImagen_i($this->daoConnection->ObjetoConsulta2[$i][7]);
		$new->setEnlace_i($this->daoConnection->ObjetoConsulta2[$i][8]);
		$new->setSeccionId($this->daoConnection->ObjetoConsulta2[$i][9]);
		$new->setFecha($this->daoConnection->ObjetoConsulta2[$i][10]);

		$news[$i] = $new;

	}

	return $news;

	
}

function getFechas(){

	$sql = "SELECT DISTINCT MONTH (noticia_fecha) AS mes, YEAR (noticia_fecha) AS anio FROM noticias ORDER BY noticia_fecha DESC";

	$this->daoConnection->consulta($sql);
	$this->daoConnection->leerVariosArray();

	$numRegistros = $this->daoConnection->numregistros();

	if ($numRegistros == 0){
		return NULL;
	}

	$news = NULL;

	for ($i = 0; $i < $numRegistros; $i++){

		$new = new noticia();

		$new->setMes($this->daoConnection->ObjetoConsulta2[$i]['mes']);
		$new->setId($this->daoConnection->ObjetoConsulta2[$i]['anio']);

		$news[$i] = $new;

	}

	return $news;

}



function updateEspanol($noticia){

	$new = new noticia();
	$new = $noticia;

	$sql = "UPDATE  noticias SET  
		noticia_titulo_e=
		'".mysql_real_escape_string($new->getTitulo_e())."',
		noticia_descripcion_e=
		'".mysql_real_escape_string($new->getDescripcion_e())."',
		noticia_imagen_e=
		'".mysql_real_escape_string($new->getImagen_e())."',
		noticia_enlace_e=
		'".mysql_real_escape_string($new->getEnlace_e())."'

		 WHERE noticia_id = '".mysql_real_escape_string($new->getId())."';";

	$result = mysql_query($sql, $this->daoConnection->Conexion_ID);
	if (!$result){
		echo 'Ooops (update noticia Es): '.mysql_error();
		return false;
	}
	return true;
}

function updateIngles($noticia){

	$new = new noticia();
	$new = $noticia;

	$sql = "UPDATE  noticias SET  
		noticia_titulo_i=
		'".mysql_real_escape_string($new->getTitulo_i())."',
		noticia_descripcion_i=
		'".mysql_real_escape_string($new->getDescripcion_i())."',
		noticia_imagen_i=
		'".mysql_real_escape_string($new->getImagen_i())."',
		noticia_enlace_i=
		'".mysql_real_escape_string($new->getEnlace_i())."'

		 WHERE noticia_id = '".mysql_real_escape_string($new->getId())."';";

	$result = mysql_query($sql, $this->daoConnection->Conexion_ID);
	if (!$result){
		echo 'Ooops (update noticia Es): '.mysql_error();
		return false;
	}
	return true;
}

function delete($noticia_id){


	$sql = "DELETE FROM noticias WHERE noticia_id = '".mysql_real_escape_string($noticia_id)."';";

	$result = mysql_query($sql, $this->daoConnection->Conexion_ID);
	if (!$result){
		echo 'Ooops (delete clase): '.mysql_error();
		return false;
	}
	return true;
}


function total(){

	$sql = "SELECT COUNT(*) FROM noticias;";

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