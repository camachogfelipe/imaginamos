<?php

class tecnicastituloDAO{

public $daoConnection;

function __construct(){
	$this->daoConnection = new DAO;
	$this->daoConnection->conectar();
}

function save($tecnicastitulo){

	$new = new tecnicastitulo();
	$new = $tecnicastitulo;

	$sql = "INSERT INTO tecnicastitulo (id, titulo

) VALUES (
'".mysql_real_escape_string($new->getid())."', 
'".mysql_real_escape_string($new->gettitulo())."');";

	$result = mysql_query($sql, $this->daoConnection->Conexion_ID);
	if (!$result){
		echo 'Ooops (save tecnicastitulo): '.mysql_error();
		return false;
	}
	return true;
}


function getLastId(){
	return mysql_insert_id($this->daoConnection->Conexion_ID);
}


function getById($id){

	$sql = "SELECT id, titulo FROM tecnicastitulo WHERE id = '".mysql_real_escape_string($id)."' ;";

	$this->daoConnection->consulta($sql);
	$this->daoConnection->leerVarios();

	$numRegistros = $this->daoConnection->numregistros();

	if ($numRegistros == 0){
		return NULL;
	}

	$i = 0;

		$new = new tecnicastitulo();

		$new->setid($this->daoConnection->ObjetoConsulta2[$i][0]);
		$new->settitulo($this->daoConnection->ObjetoConsulta2[$i][1]);

	return $new;

}

function gets(){

	$sql = "SELECT id, titulo FROM tecnicastitulo;";

	$this->daoConnection->consulta($sql);
	$this->daoConnection->leerVarios();

	$numRegistros = $this->daoConnection->numregistros();

	if ($numRegistros == 0){
		return NULL;
	}

	$news = NULL;

	for ($i = 0; $i < $numRegistros; $i++){

		$new = new tecnicastitulo();

		$new->setid($this->daoConnection->ObjetoConsulta2[$i][0]);
		$new->settitulo($this->daoConnection->ObjetoConsulta2[$i][1]);

		$news[$i] = $new;

	}

	return $news;

}

function update ($tecnicastitulo){

	$new = new tecnicastitulo();
	$new = $tecnicastitulo;

	$sql = "UPDATE  tecnicastitulo SET  
		titulo= 
			'".mysql_real_escape_string($new->gettitulo())."'

		 WHERE id = '".mysql_real_escape_string($new->getid())."';";

	$result = mysql_query($sql, $this->daoConnection->Conexion_ID);
	if (!$result){
		echo 'Ooops (update tecnicastitulo): '.mysql_error();
		return false;
	}
	return true;
}


function delete($id){


	$sql = "DELETE FROM tecnicastitulo WHERE id = '".mysql_real_escape_string($id)."';";

	$result = mysql_query($sql, $this->daoConnection->Conexion_ID);
	if (!$result){
		echo 'Ooops (delete tecnicastitulo): '.mysql_error();
		return false;
	}
	return true;
}


function total(){

	$sql = "SELECT COUNT(*) FROM tecnicastitulo;";

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