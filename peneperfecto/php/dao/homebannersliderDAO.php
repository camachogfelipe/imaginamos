<?php

class homebannersliderDAO{

public $daoConnection;

function __construct(){
	$this->daoConnection = new DAO;
	$this->daoConnection->conectar();
}

function save($homebannerslider){

	$new = new homebannerslider();
	$new = $homebannerslider;

	$sql = "INSERT INTO homebannerslider (id, imagen

) VALUES (
'".mysql_real_escape_string($new->getid())."', 
'".mysql_real_escape_string($new->getimagen())."');";

	$result = mysql_query($sql, $this->daoConnection->Conexion_ID);
	if (!$result){
		echo 'Ooops (save homebannerslider): '.mysql_error();
		return false;
	}
	return true;
}


function getLastId(){
	return mysql_insert_id($this->daoConnection->Conexion_ID);
}


function getById($id){

	$sql = "SELECT id, imagen FROM homebannerslider WHERE id = '".mysql_real_escape_string($id)."' ;";

	$this->daoConnection->consulta($sql);
	$this->daoConnection->leerVarios();

	$numRegistros = $this->daoConnection->numregistros();

	if ($numRegistros == 0){
		return NULL;
	}

	$i = 0;

		$new = new homebannerslider();

		$new->setid($this->daoConnection->ObjetoConsulta2[$i][0]);
		$new->setimagen($this->daoConnection->ObjetoConsulta2[$i][1]);

	return $new;

}

function gets(){

	$sql = "SELECT id, imagen FROM homebannerslider;";

	$this->daoConnection->consulta($sql);
	$this->daoConnection->leerVarios();

	$numRegistros = $this->daoConnection->numregistros();

	if ($numRegistros == 0){
		return NULL;
	}

	$news = NULL;

	for ($i = 0; $i < $numRegistros; $i++){

		$new = new homebannerslider();

		$new->setid($this->daoConnection->ObjetoConsulta2[$i][0]);
		$new->setimagen($this->daoConnection->ObjetoConsulta2[$i][1]);

		$news[$i] = $new;

	}

	return $news;

}

function update ($homebannerslider){

	$new = new homebannerslider();
	$new = $homebannerslider;

	$sql = "UPDATE  homebannerslider SET  
		imagen= 
			'".mysql_real_escape_string($new->getimagen())."'

		 WHERE id = '".mysql_real_escape_string($new->getid())."';";

	$result = mysql_query($sql, $this->daoConnection->Conexion_ID);
	if (!$result){
		echo 'Ooops (update homebannerslider): '.mysql_error();
		return false;
	}
	return true;
}


function delete($id){


	$sql = "DELETE FROM homebannerslider WHERE id = '".mysql_real_escape_string($id)."';";

	$result = mysql_query($sql, $this->daoConnection->Conexion_ID);
	if (!$result){
		echo 'Ooops (delete homebannerslider): '.mysql_error();
		return false;
	}
	return true;
}


function total(){

	$sql = "SELECT COUNT(*) FROM homebannerslider;";

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