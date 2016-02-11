<?php

class beneficiosDAO{

public $daoConnection;

function __construct(){
	$this->daoConnection = new DAO;
	$this->daoConnection->conectar();
}

function save($beneficios){

	$new = new beneficios();
	$new = $beneficios;

	$sql = "INSERT INTO beneficios (id, titulo, descripcion, imagen

) VALUES (
'".mysql_real_escape_string($new->getid())."', 
'".mysql_real_escape_string($new->gettitulo())."', 
'".mysql_real_escape_string($new->getdescripcion())."', 
'".mysql_real_escape_string($new->getimagen())."');";

	$result = mysql_query($sql, $this->daoConnection->Conexion_ID);
	if (!$result){
		echo 'Ooops (save beneficios): '.mysql_error();
		return false;
	}
	return true;
}


function getLastId(){
	return mysql_insert_id($this->daoConnection->Conexion_ID);
}


function getById($id){

	$sql = "SELECT id, titulo, descripcion, imagen FROM beneficios WHERE id = '".mysql_real_escape_string($id)."' ;";

	$this->daoConnection->consulta($sql);
	$this->daoConnection->leerVarios();

	$numRegistros = $this->daoConnection->numregistros();

	if ($numRegistros == 0){
		return NULL;
	}

	$i = 0;

		$new = new beneficios();

		$new->setid($this->daoConnection->ObjetoConsulta2[$i][0]);
		$new->settitulo($this->daoConnection->ObjetoConsulta2[$i][1]);
		$new->setdescripcion($this->daoConnection->ObjetoConsulta2[$i][2]);
		$new->setimagen($this->daoConnection->ObjetoConsulta2[$i][3]);

	return $new;

}

function gets(){

	$sql = "SELECT id, titulo, descripcion, imagen FROM beneficios ORDER BY id;";

	$this->daoConnection->consulta($sql);
	$this->daoConnection->leerVarios();

	$numRegistros = $this->daoConnection->numregistros();

	if ($numRegistros == 0){
		return NULL;
	}

	$news = NULL;

	for ($i = 0; $i < $numRegistros; $i++){

		$new = new beneficios();

		$new->setid($this->daoConnection->ObjetoConsulta2[$i][0]);
		$new->settitulo($this->daoConnection->ObjetoConsulta2[$i][1]);
		$new->setdescripcion($this->daoConnection->ObjetoConsulta2[$i][2]);
		$new->setimagen($this->daoConnection->ObjetoConsulta2[$i][3]);

		$news[$i] = $new;

	}

	return $news;

}

function update ($beneficios){

	$new = new beneficios();
	$new = $beneficios;

	$sql = "UPDATE  beneficios SET  
		titulo= 
			'".mysql_real_escape_string($new->gettitulo())."', 
		descripcion= 
			'".mysql_real_escape_string($new->getdescripcion())."', 
		imagen= 
			'".mysql_real_escape_string($new->getimagen())."'

		 WHERE id = '".mysql_real_escape_string($new->getid())."';";

	$result = mysql_query($sql, $this->daoConnection->Conexion_ID);
	if (!$result){
		echo 'Ooops (update beneficios): '.mysql_error();
		return false;
	}
	return true;
}


function delete($id){


	$sql = "DELETE FROM beneficios WHERE id = '".mysql_real_escape_string($id)."';";

	$result = mysql_query($sql, $this->daoConnection->Conexion_ID);
	if (!$result){
		echo 'Ooops (delete beneficios): '.mysql_error();
		return false;
	}
	return true;
}


function total(){

	$sql = "SELECT COUNT(*) FROM beneficios;";

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