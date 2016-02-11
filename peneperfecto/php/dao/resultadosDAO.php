<?php

class resultadosDAO{

public $daoConnection;

function __construct(){
	$this->daoConnection = new DAO;
	$this->daoConnection->conectar();
}

function save($resultados){

	$new = new resultados();
	$new = $resultados;

	$sql = "INSERT INTO resultados (id, titulo, banner, texto

) VALUES (
'".mysql_real_escape_string($new->getid())."', 
'".mysql_real_escape_string($new->gettitulo())."', 
'".mysql_real_escape_string($new->getbanner())."', 
'".mysql_real_escape_string($new->gettexto())."');";

	$result = mysql_query($sql, $this->daoConnection->Conexion_ID);
	if (!$result){
		echo 'Ooops (save resultados): '.mysql_error();
		return false;
	}
	return true;
}


function getLastId(){
	return mysql_insert_id($this->daoConnection->Conexion_ID);
}


function getById($id){

	$sql = "SELECT id, titulo, banner, texto FROM resultados WHERE id = '".mysql_real_escape_string($id)."' ;";

	$this->daoConnection->consulta($sql);
	$this->daoConnection->leerVarios();

	$numRegistros = $this->daoConnection->numregistros();

	if ($numRegistros == 0){
		return NULL;
	}

	$i = 0;

		$new = new resultados();

		$new->setid($this->daoConnection->ObjetoConsulta2[$i][0]);
		$new->settitulo($this->daoConnection->ObjetoConsulta2[$i][1]);
		$new->setbanner($this->daoConnection->ObjetoConsulta2[$i][2]);
		$new->settexto($this->daoConnection->ObjetoConsulta2[$i][3]);

	return $new;

}

function gets(){

	$sql = "SELECT id, titulo, banner, texto FROM resultados;";

	$this->daoConnection->consulta($sql);
	$this->daoConnection->leerVarios();

	$numRegistros = $this->daoConnection->numregistros();

	if ($numRegistros == 0){
		return NULL;
	}

	$news = NULL;

	for ($i = 0; $i < $numRegistros; $i++){

		$new = new resultados();

		$new->setid($this->daoConnection->ObjetoConsulta2[$i][0]);
		$new->settitulo($this->daoConnection->ObjetoConsulta2[$i][1]);
		$new->setbanner($this->daoConnection->ObjetoConsulta2[$i][2]);
		$new->settexto($this->daoConnection->ObjetoConsulta2[$i][3]);

		$news[$i] = $new;

	}

	return $news;

}

function update ($resultados){

	$new = new resultados();
	$new = $resultados;

	$sql = "UPDATE  resultados SET  
		titulo= 
			'".mysql_real_escape_string($new->gettitulo())."', 
		banner= 
			'".mysql_real_escape_string($new->getbanner())."', 
		texto= 
			'".mysql_real_escape_string($new->gettexto())."'

		 WHERE id = '".mysql_real_escape_string($new->getid())."';";

	$result = mysql_query($sql, $this->daoConnection->Conexion_ID);
	if (!$result){
		echo 'Ooops (update resultados): '.mysql_error();
		return false;
	}
	return true;
}


function delete($id){


	$sql = "DELETE FROM resultados WHERE id = '".mysql_real_escape_string($id)."';";

	$result = mysql_query($sql, $this->daoConnection->Conexion_ID);
	if (!$result){
		echo 'Ooops (delete resultados): '.mysql_error();
		return false;
	}
	return true;
}


function total(){

	$sql = "SELECT COUNT(*) FROM resultados;";

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