<?php

class seccionDAO{

public $daoConnection;

function __construct(){
	$this->daoConnection = new DAO;
	$this->daoConnection->conectar();
}

function save($seccion){

	$new = new seccion();
	$new = $seccion;

	$sql = "INSERT INTO secciones (seccion_id, seccion_nombre_e, seccion_nombre_i, seccion_admin_file
	) VALUES (
	'".mysql_real_escape_string($new->getId())."', 
	'".mysql_real_escape_string($new->getNombre_e())."', 
	'".mysql_real_escape_string($new->getNombre_i())."'),
	'".mysql_real_escape_string($new->getAdminFile())."');";
	$result = mysql_query($sql, $this->daoConnection->Conexion_ID);
	if (!$result){
		echo 'Ooops (save seccion): '.mysql_error();
		return false;
	}
	return true;
}


function getLastId(){
	return mysql_insert_id($this->daoConnection->Conexion_ID);
}


function getById($seccion_id){

	$sql = "SELECT * FROM secciones WHERE seccion_id = '".mysql_real_escape_string($seccion_id)."' ;";

	$this->daoConnection->consulta($sql);
	$this->daoConnection->leerVarios();

	$numRegistros = $this->daoConnection->numregistros();

	if ($numRegistros == 0){
		return NULL;
	}

	$i = 0;

		$new = new seccion();

		$new->setId($this->daoConnection->ObjetoConsulta2[$i][0]);
		$new->setNombre_e($this->daoConnection->ObjetoConsulta2[$i][1]);
		$new->setNombre_i($this->daoConnection->ObjetoConsulta2[$i][2]);
		$new->setAdminFile($this->daoConnection->ObjetoConsulta2[$i][3]);
                $new->setNombre_e(str_replace('\\', '', $new->getNombre_e()));
                $new->setNombre_i(str_replace('\\', '', $new->getNombre_i()));
	return $new;

}

function getByNombre($seccion_nombre_e){
	
	$sql= "SELECT * FROM secciones WHERE seccion_nombre_e = '".mysql_real_escape_string($seccion_nombre_e)."';";

	$this->daoConnection->consulta($sql);
	$this->daoConnection->leerVarios();

	$numRegistros = $this->daoConnection->numregistros();

	if ($numRegistros == 0) {
		return NULL;
	}

	$i = 0;

		$new = new seccion();

		$new->setId($this->daoConnection->ObjetoConsulta2[$i][0]);
		$new->setNombre_e($this->daoConnection->ObjetoConsulta2[$i][1]);
		$new->setNombre_i($this->daoConnection->ObjetoConsulta2[$i][2]);
		$new->setAdminFile($this->daoConnection->ObjetoConsulta2[$i][3]);
                $new->setNombre_e(str_replace('\\', '', $new->getNombre_e()));
                $new->setNombre_i(str_replace('\\', '', $new->getNombre_i()));
	
	return $new;


}

function gets(){

	$sql = "SELECT * FROM secciones ORDER BY seccion_nombre_e;";

	$this->daoConnection->consulta($sql);
	$this->daoConnection->leerVarios();

	$numRegistros = $this->daoConnection->numregistros();

	if ($numRegistros == 0){
		return NULL;
	}

	$news = NULL;

	for ($i = 0; $i < $numRegistros; $i++){

		$new = new seccion();

		$new->setId($this->daoConnection->ObjetoConsulta2[$i][0]);
		$new->setNombre_e($this->daoConnection->ObjetoConsulta2[$i][1]);
		$new->setNombre_i($this->daoConnection->ObjetoConsulta2[$i][2]);
		$new->setAdminFile($this->daoConnection->ObjetoConsulta2[$i][3]);
                $new->setNombre_e(str_replace('\\', '', $new->getNombre_e()));
                $new->setNombre_i(str_replace('\\', '', $new->getNombre_i()));

		$news[$i] = $new;

	}

	return $news;

}

function update ($seccion){

	$new = new seccion();
	$new = $seccion;

	$sql = "UPDATE  secciones SET  
		seccion_nombre_e= 
			'".mysql_real_escape_string($new->getNombre_e())."', 
		seccion_nombre_i= 
			'".mysql_real_escape_string($new->getNombre_i())."'
		seccion_admin_file= 
			'".mysql_real_escape_string($new->getAdminFile())."'

		 WHERE seccion_id = '".mysql_real_escape_string($new->getid())."';";

	$result = mysql_query($sql, $this->daoConnection->Conexion_ID);
	if (!$result){
		echo 'Ooops (update seccion): '.mysql_error();
		return false;
	}
	return true;
}


function delete($seccion_id){


	$sql = "DELETE FROM secciones WHERE seccion_id = '".mysql_real_escape_string($seccion_id)."';";

	$result = mysql_query($sql, $this->daoConnection->Conexion_ID);
	if (!$result){
		echo 'Ooops (delete seccion): '.mysql_error();
		return false;
	}
	return true;
}


function total(){

	$sql = "SELECT COUNT(*) FROM secciones;";

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