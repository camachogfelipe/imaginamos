<?php

class homebannerDAO{

public $daoConnection;

function __construct(){
	$this->daoConnection = new DAO;
	$this->daoConnection->conectar();
}

function save($homebanner){

	$new = new homebanner();
	$new = $homebanner;

	$sql = "INSERT INTO homebanner (id, banner

) VALUES (
'".mysql_real_escape_string($new->getid())."', 
'".mysql_real_escape_string($new->getbanner())."');";

	$result = mysql_query($sql, $this->daoConnection->Conexion_ID);
	if (!$result){
		echo 'Ooops (save homebanner): '.mysql_error();
		return false;
	}
	return true;
}


function getLastId(){
	return mysql_insert_id($this->daoConnection->Conexion_ID);
}


function getById($id){

	$sql = "SELECT id, banner FROM homebanner WHERE id = '".mysql_real_escape_string($id)."' ;";

	$this->daoConnection->consulta($sql);
	$this->daoConnection->leerVarios();

	$numRegistros = $this->daoConnection->numregistros();

	if ($numRegistros == 0){
		return NULL;
	}

	$i = 0;

		$new = new homebanner();

		$new->setid($this->daoConnection->ObjetoConsulta2[$i][0]);
		$new->setbanner($this->daoConnection->ObjetoConsulta2[$i][1]);

	return $new;

}

function gets(){

	$sql = "SELECT id, banner FROM homebanner;";

	$this->daoConnection->consulta($sql);
	$this->daoConnection->leerVarios();

	$numRegistros = $this->daoConnection->numregistros();

	if ($numRegistros == 0){
		return NULL;
	}

	$news = NULL;

	for ($i = 0; $i < $numRegistros; $i++){

		$new = new homebanner();

		$new->setid($this->daoConnection->ObjetoConsulta2[$i][0]);
		$new->setbanner($this->daoConnection->ObjetoConsulta2[$i][1]);

		$news[$i] = $new;

	}

	return $news;

}

function update ($homebanner){

	$new = new homebanner();
	$new = $homebanner;

	$sql = "UPDATE  homebanner SET  
		banner= 
			'".mysql_real_escape_string($new->getbanner())."'

		 WHERE id = '".mysql_real_escape_string($new->getid())."';";

	$result = mysql_query($sql, $this->daoConnection->Conexion_ID);
	if (!$result){
		echo 'Ooops (update homebanner): '.mysql_error();
		return false;
	}
	return true;
}


function delete($id){


	$sql = "DELETE FROM homebanner WHERE id = '".mysql_real_escape_string($id)."';";

	$result = mysql_query($sql, $this->daoConnection->Conexion_ID);
	if (!$result){
		echo 'Ooops (delete homebanner): '.mysql_error();
		return false;
	}
	return true;
}


function total(){

	$sql = "SELECT COUNT(*) FROM homebanner;";

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