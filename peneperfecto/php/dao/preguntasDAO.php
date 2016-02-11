<?php

class preguntasDAO{

public $daoConnection;

function __construct(){
	$this->daoConnection = new DAO;
	$this->daoConnection->conectar();
}

function save($preguntas){

	$new = new preguntas();
	$new = $preguntas;

	$sql = "INSERT INTO preguntas (id, pregunta, respuesta

) VALUES (
'".mysql_real_escape_string($new->getid())."', 
'".mysql_real_escape_string($new->getpregunta())."', 
'".mysql_real_escape_string($new->getrespuesta())."');";

	$result = mysql_query($sql, $this->daoConnection->Conexion_ID);
	if (!$result){
		echo 'Ooops (save preguntas): '.mysql_error();
		return false;
	}
	return true;
}


function getLastId(){
	return mysql_insert_id($this->daoConnection->Conexion_ID);
}


function getById($id){

	$sql = "SELECT id, pregunta, respuesta FROM preguntas WHERE id = '".mysql_real_escape_string($id)."' ;";

	$this->daoConnection->consulta($sql);
	$this->daoConnection->leerVarios();

	$numRegistros = $this->daoConnection->numregistros();

	if ($numRegistros == 0){
		return NULL;
	}

	$i = 0;

		$new = new preguntas();

		$new->setid($this->daoConnection->ObjetoConsulta2[$i][0]);
		$new->setpregunta($this->daoConnection->ObjetoConsulta2[$i][1]);
		$new->setrespuesta($this->daoConnection->ObjetoConsulta2[$i][2]);

	return $new;

}

function gets(){

	$sql = "SELECT id, pregunta, respuesta FROM preguntas;";

	$this->daoConnection->consulta($sql);
	$this->daoConnection->leerVarios();

	$numRegistros = $this->daoConnection->numregistros();

	if ($numRegistros == 0){
		return NULL;
	}

	$news = NULL;

	for ($i = 0; $i < $numRegistros; $i++){

		$new = new preguntas();

		$new->setid($this->daoConnection->ObjetoConsulta2[$i][0]);
		$new->setpregunta($this->daoConnection->ObjetoConsulta2[$i][1]);
		$new->setrespuesta($this->daoConnection->ObjetoConsulta2[$i][2]);

		$news[$i] = $new;

	}

	return $news;

}

function update ($preguntas){

	$new = new preguntas();
	$new = $preguntas;

	$sql = "UPDATE  preguntas SET  
		pregunta= 
			'".mysql_real_escape_string($new->getpregunta())."', 
		respuesta= 
			'".mysql_real_escape_string($new->getrespuesta())."'

		 WHERE id = '".mysql_real_escape_string($new->getid())."';";

	$result = mysql_query($sql, $this->daoConnection->Conexion_ID);
	if (!$result){
		echo 'Ooops (update preguntas): '.mysql_error();
		return false;
	}
	return true;
}


function delete($id){


	$sql = "DELETE FROM preguntas WHERE id = '".mysql_real_escape_string($id)."';";

	$result = mysql_query($sql, $this->daoConnection->Conexion_ID);
	if (!$result){
		echo 'Ooops (delete preguntas): '.mysql_error();
		return false;
	}
	return true;
}


function total(){

	$sql = "SELECT COUNT(*) FROM preguntas;";

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