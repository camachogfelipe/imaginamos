<?php

class testimoniosDAO{

public $daoConnection;

function __construct(){
	$this->daoConnection = new DAO;
	$this->daoConnection->conectar();
}

function save($testimonios){

	$new = new testimonios();
	$new = $testimonios;

	$sql = "INSERT INTO testimonios (id, titulo, descripcion, imagen, fecha

) VALUES (
'".mysql_real_escape_string($new->getid())."', 
'".mysql_real_escape_string($new->gettitulo())."', 
'".mysql_real_escape_string($new->getdescripcion())."', 
'".mysql_real_escape_string($new->getimagen())."', 
'".mysql_real_escape_string($new->getfecha())."');";

	$result = mysql_query($sql, $this->daoConnection->Conexion_ID);
	if (!$result){
		echo 'Ooops (save testimonios): '.mysql_error();
		return false;
	}
	return true;
}


function getLastId(){
	return mysql_insert_id($this->daoConnection->Conexion_ID);
}


function getById($id){

	$sql = "SELECT id, titulo, descripcion, imagen, fecha FROM testimonios WHERE id = '".mysql_real_escape_string($id)."' ;";

	$this->daoConnection->consulta($sql);
	$this->daoConnection->leerVarios();

	$numRegistros = $this->daoConnection->numregistros();

	if ($numRegistros == 0){
		return NULL;
	}

	$i = 0;

		$new = new testimonios();

		$new->setid($this->daoConnection->ObjetoConsulta2[$i][0]);
		$new->settitulo($this->daoConnection->ObjetoConsulta2[$i][1]);
		$new->setdescripcion($this->daoConnection->ObjetoConsulta2[$i][2]);
		$new->setimagen($this->daoConnection->ObjetoConsulta2[$i][3]);
		$new->setfecha($this->daoConnection->ObjetoConsulta2[$i][4]);

	return $new;

}

function gets(){

	$sql = "SELECT id, titulo, descripcion, imagen, fecha FROM testimonios ORDER BY id DESC;";

	$this->daoConnection->consulta($sql);
	$this->daoConnection->leerVarios();

	$numRegistros = $this->daoConnection->numregistros();

	if ($numRegistros == 0){
		return NULL;
	}

	$news = NULL;

	for ($i = 0; $i < $numRegistros; $i++){

		$new = new testimonios();

		$new->setid($this->daoConnection->ObjetoConsulta2[$i][0]);
		$new->settitulo($this->daoConnection->ObjetoConsulta2[$i][1]);
		$new->setdescripcion($this->daoConnection->ObjetoConsulta2[$i][2]);
		$new->setimagen($this->daoConnection->ObjetoConsulta2[$i][3]);
		$new->setfecha($this->daoConnection->ObjetoConsulta2[$i][4]);

		$news[$i] = $new;

	}

	return $news;

}

function update ($testimonios){

	$new = new testimonios();
	$new = $testimonios;

	$sql = "UPDATE  testimonios SET  
		titulo= 
			'".mysql_real_escape_string($new->gettitulo())."', 
		descripcion= 
			'".mysql_real_escape_string($new->getdescripcion())."', 
		imagen= 
			'".mysql_real_escape_string($new->getimagen())."', 
		fecha= 
			'".mysql_real_escape_string($new->getfecha())."'

		 WHERE id = '".mysql_real_escape_string($new->getid())."';";

	$result = mysql_query($sql, $this->daoConnection->Conexion_ID);
	if (!$result){
		echo 'Ooops (update testimonios): '.mysql_error();
		return false;
	}
	return true;
}


function delete($id){


	$sql = "DELETE FROM testimonios WHERE id = '".mysql_real_escape_string($id)."';";

	$result = mysql_query($sql, $this->daoConnection->Conexion_ID);
	if (!$result){
		echo 'Ooops (delete testimonios): '.mysql_error();
		return false;
	}
	return true;
}


function total(){

	$sql = "SELECT COUNT(*) FROM testimonios;";

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