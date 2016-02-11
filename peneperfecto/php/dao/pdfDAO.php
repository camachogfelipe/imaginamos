<?php

class pdfDAO{

public $daoConnection;

function __construct(){
	$this->daoConnection = new DAO;
	$this->daoConnection->conectar();
}

function save($pdf){

	$new = new pdf();
	$new = $pdf;

	$sql = "INSERT INTO pdf (id, archivo

) VALUES (
'".mysql_real_escape_string($new->getid())."', 
'".mysql_real_escape_string($new->getarchivo())."');";

	$result = mysql_query($sql, $this->daoConnection->Conexion_ID);
	if (!$result){
		echo 'Ooops (save pdf): '.mysql_error();
		return false;
	}
	return true;
}


function getLastId(){
	return mysql_insert_id($this->daoConnection->Conexion_ID);
}


function getById($id){

	$sql = "SELECT id, archivo FROM pdf WHERE id = '".mysql_real_escape_string($id)."' ;";

	$this->daoConnection->consulta($sql);
	$this->daoConnection->leerVarios();

	$numRegistros = $this->daoConnection->numregistros();

	if ($numRegistros == 0){
		return NULL;
	}

	$i = 0;

		$new = new pdf();

		$new->setid($this->daoConnection->ObjetoConsulta2[$i][0]);
		$new->setarchivo($this->daoConnection->ObjetoConsulta2[$i][1]);

	return $new;

}

function gets(){

	$sql = "SELECT id, archivo FROM pdf;";

	$this->daoConnection->consulta($sql);
	$this->daoConnection->leerVarios();

	$numRegistros = $this->daoConnection->numregistros();

	if ($numRegistros == 0){
		return NULL;
	}

	$news = NULL;

	for ($i = 0; $i < $numRegistros; $i++){

		$new = new pdf();

		$new->setid($this->daoConnection->ObjetoConsulta2[$i][0]);
		$new->setarchivo($this->daoConnection->ObjetoConsulta2[$i][1]);

		$news[$i] = $new;

	}

	return $news;

}

function update ($pdf){

	$new = new pdf();
	$new = $pdf;

	$sql = "UPDATE  pdf SET  
		archivo= 
			'".mysql_real_escape_string($new->getarchivo())."'

		 WHERE id = '".mysql_real_escape_string($new->getid())."';";

	$result = mysql_query($sql, $this->daoConnection->Conexion_ID);
	if (!$result){
		echo 'Ooops (update pdf): '.mysql_error();
		return false;
	}
	return true;
}


function delete($id){


	$sql = "DELETE FROM pdf WHERE id = '".mysql_real_escape_string($id)."';";

	$result = mysql_query($sql, $this->daoConnection->Conexion_ID);
	if (!$result){
		echo 'Ooops (delete pdf): '.mysql_error();
		return false;
	}
	return true;
}


function total(){

	$sql = "SELECT COUNT(*) FROM pdf;";

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