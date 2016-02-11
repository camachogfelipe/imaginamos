<?php

class homebeneficiosDAO{

public $daoConnection;

function __construct(){
	$this->daoConnection = new DAO;
	$this->daoConnection->conectar();
}

function save($homebeneficios){

	$new = new homebeneficios();
	$new = $homebeneficios;

	$sql = "INSERT INTO homebeneficios (id, descripcion, icono

) VALUES (
'".mysql_real_escape_string($new->getid())."', 
'".mysql_real_escape_string($new->getdescripcion())."', 
'".mysql_real_escape_string($new->geticono())."');";

	$result = mysql_query($sql, $this->daoConnection->Conexion_ID);
	if (!$result){
		echo 'Ooops (save homebeneficios): '.mysql_error();
		return false;
	}
	return true;
}


function getLastId(){
	return mysql_insert_id($this->daoConnection->Conexion_ID);
}


function getById($id){

	$sql = "SELECT id, descripcion, icono FROM homebeneficios WHERE id = '".mysql_real_escape_string($id)."' ;";

	$this->daoConnection->consulta($sql);
	$this->daoConnection->leerVarios();

	$numRegistros = $this->daoConnection->numregistros();

	if ($numRegistros == 0){
		return NULL;
	}

	$i = 0;

		$new = new homebeneficios();

		$new->setid($this->daoConnection->ObjetoConsulta2[$i][0]);
		$new->setdescripcion($this->daoConnection->ObjetoConsulta2[$i][1]);
		$new->seticono($this->daoConnection->ObjetoConsulta2[$i][2]);

	return $new;

}

function gets(){

	$sql = "SELECT id, descripcion, icono FROM homebeneficios;";

	$this->daoConnection->consulta($sql);
	$this->daoConnection->leerVarios();

	$numRegistros = $this->daoConnection->numregistros();

	if ($numRegistros == 0){
		return NULL;
	}

	$news = NULL;

	for ($i = 0; $i < $numRegistros; $i++){

		$new = new homebeneficios();

		$new->setid($this->daoConnection->ObjetoConsulta2[$i][0]);
		$new->setdescripcion($this->daoConnection->ObjetoConsulta2[$i][1]);
		$new->seticono($this->daoConnection->ObjetoConsulta2[$i][2]);

		$news[$i] = $new;

	}

	return $news;

}

function update ($homebeneficios){

	$new = new homebeneficios();
	$new = $homebeneficios;

	$sql = "UPDATE  homebeneficios SET  
		descripcion= 
			'".mysql_real_escape_string($new->getdescripcion())."', 
		icono= 
			'".mysql_real_escape_string($new->geticono())."'

		 WHERE id = '".mysql_real_escape_string($new->getid())."';";

	$result = mysql_query($sql, $this->daoConnection->Conexion_ID);
	if (!$result){
		echo 'Ooops (update homebeneficios): '.mysql_error();
		return false;
	}
	return true;
}


function delete($id){


	$sql = "DELETE FROM homebeneficios WHERE id = '".mysql_real_escape_string($id)."';";

	$result = mysql_query($sql, $this->daoConnection->Conexion_ID);
	if (!$result){
		echo 'Ooops (delete homebeneficios): '.mysql_error();
		return false;
	}
	return true;
}


function total(){

	$sql = "SELECT COUNT(*) FROM homebeneficios;";

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