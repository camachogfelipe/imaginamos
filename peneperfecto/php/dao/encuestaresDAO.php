<?php

class encuestaresDAO{

public $daoConnection;

function __construct(){
	$this->daoConnection = new DAO;
	$this->daoConnection->conectar();
}

function save($encuestares){

	$new = new encuestares();
	$new = $encuestares;

	$sql = "INSERT INTO encuestares (id, venta, respuesta

) VALUES (
'".mysql_real_escape_string($new->getid())."', 
'".mysql_real_escape_string($new->getventa())."', 
'".mysql_real_escape_string($new->getrespuesta())."');";

	$result = mysql_query($sql, $this->daoConnection->Conexion_ID);
	if (!$result){
		echo 'Ooops (save encuestares): '.mysql_error();
		return false;
	}
	return true;
}


function getLastId(){
	return mysql_insert_id($this->daoConnection->Conexion_ID);
}


function getById($id){

	$sql = "SELECT id, venta, respuesta FROM encuestares WHERE id = '".mysql_real_escape_string($id)."' ;";

	$this->daoConnection->consulta($sql);
	$this->daoConnection->leerVarios();

	$numRegistros = $this->daoConnection->numregistros();

	if ($numRegistros == 0){
		return NULL;
	}

	$i = 0;

		$new = new encuestares();

		$new->setid($this->daoConnection->ObjetoConsulta2[$i][0]);
		$new->setventa($this->daoConnection->ObjetoConsulta2[$i][1]);
		$new->setrespuesta($this->daoConnection->ObjetoConsulta2[$i][2]);

	return $new;

}

function getByVenta($venta){

	$sql = "SELECT id, venta, respuesta FROM encuestares WHERE venta = '".mysql_real_escape_string($venta)."' ;";

	$this->daoConnection->consulta($sql);
	$this->daoConnection->leerVarios();

	$numRegistros = $this->daoConnection->numregistros();

	if ($numRegistros == 0){
		return NULL;
	}

	$i = 0;

		$new = new encuestares();

		$new->setid($this->daoConnection->ObjetoConsulta2[$i][0]);
		$new->setventa($this->daoConnection->ObjetoConsulta2[$i][1]);
		$new->setrespuesta($this->daoConnection->ObjetoConsulta2[$i][2]);

	return $new;

}

function gets(){

	$sql = "SELECT id, venta, respuesta FROM encuestares;";

	$this->daoConnection->consulta($sql);
	$this->daoConnection->leerVarios();

	$numRegistros = $this->daoConnection->numregistros();

	if ($numRegistros == 0){
		return NULL;
	}

	$news = NULL;

	for ($i = 0; $i < $numRegistros; $i++){

		$new = new encuestares();

		$new->setid($this->daoConnection->ObjetoConsulta2[$i][0]);
		$new->setventa($this->daoConnection->ObjetoConsulta2[$i][1]);
		$new->setrespuesta($this->daoConnection->ObjetoConsulta2[$i][2]);

		$news[$i] = $new;

	}

	return $news;

}

function update ($encuestares){

	$new = new encuestares();
	$new = $encuestares;

	$sql = "UPDATE  encuestares SET  
		venta= 
			'".mysql_real_escape_string($new->getventa())."', 
		respuesta= 
			'".mysql_real_escape_string($new->getrespuesta())."'

		 WHERE id = '".mysql_real_escape_string($new->getid())."';";

	$result = mysql_query($sql, $this->daoConnection->Conexion_ID);
	if (!$result){
		echo 'Ooops (update encuestares): '.mysql_error();
		return false;
	}
	return true;
}


function delete($id){


	$sql = "DELETE FROM encuestares WHERE id = '".mysql_real_escape_string($id)."';";

	$result = mysql_query($sql, $this->daoConnection->Conexion_ID);
	if (!$result){
		echo 'Ooops (delete encuestares): '.mysql_error();
		return false;
	}
	return true;
}


function total(){

	$sql = "SELECT COUNT(*) FROM encuestares;";

	$this->daoConnection->consulta($sql);
	$this->daoConnection->leerVarios();

	$numRegistros = $this->daoConnection->numregistros();

	if ($numRegistros == 0){
		return 0;
	}

	return $this->daoConnection->ObjetoConsulta2[0][0];

}

function totalo($respuesta){

	$sql = "SELECT COUNT(*) FROM encuestares WHERE respuesta = '".  mysql_real_escape_string($respuesta)."';";

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