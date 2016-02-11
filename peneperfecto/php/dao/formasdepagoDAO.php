<?php

class formasdepagoDAO{

public $daoConnection;

function __construct(){
	$this->daoConnection = new DAO;
	$this->daoConnection->conectar();
}

function save($formasdepago){

	$new = new formasdepago();
	$new = $formasdepago;

	$sql = "INSERT INTO formasdepago (id, texto, imagen

) VALUES (
'".mysql_real_escape_string($new->getid())."', 
'".mysql_real_escape_string($new->gettexto())."', 
'".mysql_real_escape_string($new->getimagen())."');";

	$result = mysql_query($sql, $this->daoConnection->Conexion_ID);
	if (!$result){
		echo 'Ooops (save formasdepago): '.mysql_error();
		return false;
	}
	return true;
}


function getLastId(){
	return mysql_insert_id($this->daoConnection->Conexion_ID);
}


function getById($id){

	$sql = "SELECT id, texto, imagen FROM formasdepago WHERE id = '".mysql_real_escape_string($id)."' ;";

	$this->daoConnection->consulta($sql);
	$this->daoConnection->leerVarios();

	$numRegistros = $this->daoConnection->numregistros();

	if ($numRegistros == 0){
		return NULL;
	}

	$i = 0;

		$new = new formasdepago();

		$new->setid($this->daoConnection->ObjetoConsulta2[$i][0]);
		$new->settexto($this->daoConnection->ObjetoConsulta2[$i][1]);
		$new->setimagen($this->daoConnection->ObjetoConsulta2[$i][2]);

	return $new;

}

function gets(){

	$sql = "SELECT id, texto, imagen FROM formasdepago;";

	$this->daoConnection->consulta($sql);
	$this->daoConnection->leerVarios();

	$numRegistros = $this->daoConnection->numregistros();

	if ($numRegistros == 0){
		return NULL;
	}

	$news = NULL;

	for ($i = 0; $i < $numRegistros; $i++){

		$new = new formasdepago();

		$new->setid($this->daoConnection->ObjetoConsulta2[$i][0]);
		$new->settexto($this->daoConnection->ObjetoConsulta2[$i][1]);
		$new->setimagen($this->daoConnection->ObjetoConsulta2[$i][2]);

		$news[$i] = $new;

	}

	return $news;

}

function update ($formasdepago){

	$new = new formasdepago();
	$new = $formasdepago;

	$sql = "UPDATE  formasdepago SET  
		texto= 
			'".mysql_real_escape_string($new->gettexto())."', 
		imagen= 
			'".mysql_real_escape_string($new->getimagen())."'

		 WHERE id = '".mysql_real_escape_string($new->getid())."';";

	$result = mysql_query($sql, $this->daoConnection->Conexion_ID);
	if (!$result){
		echo 'Ooops (update formasdepago): '.mysql_error();
		return false;
	}
	return true;
}


function delete($id){


	$sql = "DELETE FROM formasdepago WHERE id = '".mysql_real_escape_string($id)."';";

	$result = mysql_query($sql, $this->daoConnection->Conexion_ID);
	if (!$result){
		echo 'Ooops (delete formasdepago): '.mysql_error();
		return false;
	}
	return true;
}


function total(){

	$sql = "SELECT COUNT(*) FROM formasdepago;";

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