<?php

class cotizacionDAO{

public $daoConnection;

function __construct(){
	$this->daoConnection = new DAO;
	$this->daoConnection->conectar();
}

function save($cotizacion){

	$new = new cotizacion();
	$new = $cotizacion;

	$sql = "INSERT INTO cotizaciones (cotizacion_id, cliente_id, cotizacion_fechaSolicitud, cotizacion_fechaRespuesta, estado_id, estado_obeservacion
	) VALUES (
	'".mysql_real_escape_string($new->getId())."', 
	'".mysql_real_escape_string($new->getClienteId())."', 
	'".mysql_real_escape_string($new->getFechaSolicitud())."', 
	'".mysql_real_escape_string($new->getFechaRespuesta())."', 
	'".mysql_real_escape_string($new->getEstadoId())."', 
	'".mysql_real_escape_string($new->getObservacion())."');";

	$result = mysql_query($sql, $this->daoConnection->Conexion_ID);
	if (!$result){
		echo 'Ooops (save cotizacion): '.mysql_error();
		return false;
	}
	return true;
}


function getLastId(){
	return mysql_insert_id($this->daoConnection->Conexion_ID);
}


function getById($cotizacion_id){

	$sql = "SELECT * FROM cotizaciones WHERE cotizacion_id = '".mysql_real_escape_string($cotizacion_id)."' ;";

	$this->daoConnection->consulta($sql);
	$this->daoConnection->leerVarios();

	$numRegistros = $this->daoConnection->numregistros();

	if ($numRegistros == 0){
		return NULL;
	}

	$i = 0;

		$new = new cotizacion();

		$new->setId($this->daoConnection->ObjetoConsulta2[$i][0]);
		$new->setClienteId($this->daoConnection->ObjetoConsulta2[$i][1]);
		$new->setFechaSolicitud($this->daoConnection->ObjetoConsulta2[$i][2]);
		$new->setFechaRespuesta($this->daoConnection->ObjetoConsulta2[$i][3]);
		$new->setEstadoId($this->daoConnection->ObjetoConsulta2[$i][4]);
		$new->setObservacion($this->daoConnection->ObjetoConsulta2[$i][5]);
                
	return $new;

}


function gets(){

	$sql = "SELECT * FROM cotizaciones ORDER BY cotizacion_id DESC";

	$this->daoConnection->consulta($sql);
	$this->daoConnection->leerVarios();

	$numRegistros = $this->daoConnection->numregistros();

	if ($numRegistros == 0){
		return NULL;
	}

	$news = NULL;

	for ($i = 0; $i < $numRegistros; $i++){

		$new = new cotizacion();

		$new->setId($this->daoConnection->ObjetoConsulta2[$i][0]);
		$new->setClienteId($this->daoConnection->ObjetoConsulta2[$i][1]);
		$new->setFechaSolicitud($this->daoConnection->ObjetoConsulta2[$i][2]);
		$new->setFechaRespuesta($this->daoConnection->ObjetoConsulta2[$i][3]);
		$new->setEstadoId($this->daoConnection->ObjetoConsulta2[$i][4]);
		$new->setObservacion($this->daoConnection->ObjetoConsulta2[$i][5]);


		$news[$i] = $new;

	}

	return $news;

}

function update ($cotizacion){

	$new = new cotizacion();
	$new = $cotizacion;

	$sql = "UPDATE  cotizaciones SET  
		cotizacion_fechaRespuesta= 
			'".mysql_real_escape_string($new->getFechaRespuesta())."', 
		estado_id	= 
			'".mysql_real_escape_string($new->getEstadoId())."', 
		estado_obeservacion= 
			'".mysql_real_escape_string($new->getObservacion())."'

		 WHERE cotizacion_id = '".mysql_real_escape_string($new->getId())."';";

	$result = mysql_query($sql, $this->daoConnection->Conexion_ID);
	if (!$result){
		echo 'Ooops (update cotizacion): '.mysql_error();
		return false;
	}
	return true;
}


function delete($cotizacion_id){


	$sql = "DELETE FROM cotizaciones WHERE cotizacion_id = '".mysql_real_escape_string($cotizacion_id)."';";

	$result = mysql_query($sql, $this->daoConnection->Conexion_ID);
	if (!$result){
		echo 'Ooops (delete cotizacion): '.mysql_error();
		return false;
	}
	return true;
}


function total(){

	$sql = "SELECT COUNT(*) FROM cotizaciones;";

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