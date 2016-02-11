<?php

class empresasubtituloDAO{

public $daoConnection;

function __construct(){
	$this->daoConnection = new DAO;
	$this->daoConnection->conectar();
}

function save($empresasubtitulo){

	$new = new empresasubtitulo();
	$new = $empresasubtitulo;

	$sql = "INSERT INTO empresasubtitulo (id, subtitulo, descripcion, imagen

) VALUES (
'".mysql_real_escape_string($new->getid())."', 
'".mysql_real_escape_string($new->getsubtitulo())."', 
'".mysql_real_escape_string($new->getdescripcion())."', 
'".mysql_real_escape_string($new->getimagen())."');";

	$result = mysql_query($sql, $this->daoConnection->Conexion_ID);
	if (!$result){
		echo 'Ooops (save empresasubtitulo): '.mysql_error();
		return false;
	}
	return true;
}


function getLastId(){
	return mysql_insert_id($this->daoConnection->Conexion_ID);
}


function getById($id){

	$sql = "SELECT id, subtitulo, descripcion, imagen FROM empresasubtitulo WHERE id = '".mysql_real_escape_string($id)."' ;";

	$this->daoConnection->consulta($sql);
	$this->daoConnection->leerVarios();

	$numRegistros = $this->daoConnection->numregistros();

	if ($numRegistros == 0){
		return NULL;
	}

	$i = 0;

		$new = new empresasubtitulo();

		$new->setid($this->daoConnection->ObjetoConsulta2[$i][0]);
		$new->setsubtitulo($this->daoConnection->ObjetoConsulta2[$i][1]);
		$new->setdescripcion($this->daoConnection->ObjetoConsulta2[$i][2]);
		$new->setimagen($this->daoConnection->ObjetoConsulta2[$i][3]);

	return $new;

}

function gets(){

	$sql = "SELECT id, subtitulo, descripcion, imagen FROM empresasubtitulo;";

	$this->daoConnection->consulta($sql);
	$this->daoConnection->leerVarios();

	$numRegistros = $this->daoConnection->numregistros();

	if ($numRegistros == 0){
		return NULL;
	}

	$news = NULL;

	for ($i = 0; $i < $numRegistros; $i++){

		$new = new empresasubtitulo();

		$new->setid($this->daoConnection->ObjetoConsulta2[$i][0]);
		$new->setsubtitulo($this->daoConnection->ObjetoConsulta2[$i][1]);
		$new->setdescripcion($this->daoConnection->ObjetoConsulta2[$i][2]);
		$new->setimagen($this->daoConnection->ObjetoConsulta2[$i][3]);

		$news[$i] = $new;

	}

	return $news;

}

function update ($empresasubtitulo){

	$new = new empresasubtitulo();
	$new = $empresasubtitulo;

	$sql = "UPDATE  empresasubtitulo SET  
		subtitulo= 
			'".mysql_real_escape_string($new->getsubtitulo())."', 
		descripcion= 
			'".mysql_real_escape_string($new->getdescripcion())."', 
		imagen= 
			'".mysql_real_escape_string($new->getimagen())."'

		 WHERE id = '".mysql_real_escape_string($new->getid())."';";

	$result = mysql_query($sql, $this->daoConnection->Conexion_ID);
	if (!$result){
		echo 'Ooops (update empresasubtitulo): '.mysql_error();
		return false;
	}
	return true;
}


function delete($id){


	$sql = "DELETE FROM empresasubtitulo WHERE id = '".mysql_real_escape_string($id)."';";

	$result = mysql_query($sql, $this->daoConnection->Conexion_ID);
	if (!$result){
		echo 'Ooops (delete empresasubtitulo): '.mysql_error();
		return false;
	}
	return true;
}


function total(){

	$sql = "SELECT COUNT(*) FROM empresasubtitulo;";

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