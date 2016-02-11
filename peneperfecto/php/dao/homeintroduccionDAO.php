<?php

class homeintroduccionDAO{

public $daoConnection;

function __construct(){
	$this->daoConnection = new DAO;
	$this->daoConnection->conectar();
}

function save($homeintroduccion){

	$new = new homeintroduccion();
	$new = $homeintroduccion;

	$sql = "INSERT INTO homeintroduccion (id, titulo, texto

) VALUES (
'".mysql_real_escape_string($new->getid())."', 
'".mysql_real_escape_string($new->gettitulo())."', 
'".mysql_real_escape_string($new->gettexto())."');";

	$result = mysql_query($sql, $this->daoConnection->Conexion_ID);
	if (!$result){
		echo 'Ooops (save homeintroduccion): '.mysql_error();
		return false;
	}
	return true;
}


function getLastId(){
	return mysql_insert_id($this->daoConnection->Conexion_ID);
}


function getById($id){

	$sql = "SELECT id, titulo, texto FROM homeintroduccion WHERE id = '".mysql_real_escape_string($id)."' ;";

	$this->daoConnection->consulta($sql);
	$this->daoConnection->leerVarios();

	$numRegistros = $this->daoConnection->numregistros();

	if ($numRegistros == 0){
		return NULL;
	}

	$i = 0;

		$new = new homeintroduccion();

		$new->setid($this->daoConnection->ObjetoConsulta2[$i][0]);
		$new->settitulo($this->daoConnection->ObjetoConsulta2[$i][1]);
		$new->settexto(str_replace('\"', '', $this->daoConnection->ObjetoConsulta2[$i][2]));

	return $new;

}

function gets(){

	$sql = "SELECT id, titulo, texto FROM homeintroduccion;";

	$this->daoConnection->consulta($sql);
	$this->daoConnection->leerVarios();

	$numRegistros = $this->daoConnection->numregistros();

	if ($numRegistros == 0){
		return NULL;
	}

	$news = NULL;

	for ($i = 0; $i < $numRegistros; $i++){

		$new = new homeintroduccion();

		$new->setid($this->daoConnection->ObjetoConsulta2[$i][0]);
		$new->settitulo($this->daoConnection->ObjetoConsulta2[$i][1]);
		$new->settexto(str_replace('\"', '', $this->daoConnection->ObjetoConsulta2[$i][2]));

		$news[$i] = $new;

	}

	return $news;

}

function update ($homeintroduccion){

	$new = new homeintroduccion();
	$new = $homeintroduccion;

	$sql = "UPDATE  homeintroduccion SET  
		titulo= 
			'".mysql_real_escape_string($new->gettitulo())."', 
		texto= 
			'".mysql_real_escape_string($new->gettexto())."'

		 WHERE id = '".mysql_real_escape_string($new->getid())."';";

	$result = mysql_query($sql, $this->daoConnection->Conexion_ID);
	if (!$result){
		echo 'Ooops (update homeintroduccion): '.mysql_error();
		return false;
	}
	return true;
}


function delete($id){


	$sql = "DELETE FROM homeintroduccion WHERE id = '".mysql_real_escape_string($id)."';";

	$result = mysql_query($sql, $this->daoConnection->Conexion_ID);
	if (!$result){
		echo 'Ooops (delete homeintroduccion): '.mysql_error();
		return false;
	}
	return true;
}


function total(){

	$sql = "SELECT COUNT(*) FROM homeintroduccion;";

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