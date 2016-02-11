<?php

class comorecomendadoDAO{

public $daoConnection;

function __construct(){
	$this->daoConnection = new DAO;
	$this->daoConnection->conectar();
}

function save($comorecomendado){

	$new = new comorecomendado();
	$new = $comorecomendado;

	$sql = "INSERT INTO comorecomendado (id, imagen, link

) VALUES (
'".mysql_real_escape_string($new->getid())."', 
'".mysql_real_escape_string($new->getimagen())."', 
'".mysql_real_escape_string($new->getlink())."');";

	$result = mysql_query($sql, $this->daoConnection->Conexion_ID);
	if (!$result){
		echo 'Ooops (save comorecomendado): '.mysql_error();
		return false;
	}
	return true;
}


function getLastId(){
	return mysql_insert_id($this->daoConnection->Conexion_ID);
}


function getById($id){

	$sql = "SELECT id, imagen, link FROM comorecomendado WHERE id = '".mysql_real_escape_string($id)."' ;";

	$this->daoConnection->consulta($sql);
	$this->daoConnection->leerVarios();

	$numRegistros = $this->daoConnection->numregistros();

	if ($numRegistros == 0){
		return NULL;
	}

	$i = 0;

		$new = new comorecomendado();

		$new->setid($this->daoConnection->ObjetoConsulta2[$i][0]);
		$new->setimagen($this->daoConnection->ObjetoConsulta2[$i][1]);
		$new->setlink($this->daoConnection->ObjetoConsulta2[$i][2]);

	return $new;

}

function gets(){

	$sql = "SELECT id, imagen, link FROM comorecomendado;";

	$this->daoConnection->consulta($sql);
	$this->daoConnection->leerVarios();

	$numRegistros = $this->daoConnection->numregistros();

	if ($numRegistros == 0){
		return NULL;
	}

	$news = NULL;

	for ($i = 0; $i < $numRegistros; $i++){

		$new = new comorecomendado();

		$new->setid($this->daoConnection->ObjetoConsulta2[$i][0]);
		$new->setimagen($this->daoConnection->ObjetoConsulta2[$i][1]);
		$new->setlink($this->daoConnection->ObjetoConsulta2[$i][2]);

		$news[$i] = $new;

	}

	return $news;

}

function update ($comorecomendado){

	$new = new comorecomendado();
	$new = $comorecomendado;

	$sql = "UPDATE  comorecomendado SET  
		imagen= 
			'".mysql_real_escape_string($new->getimagen())."', 
		link= 
			'".mysql_real_escape_string($new->getlink())."'

		 WHERE id = '".mysql_real_escape_string($new->getid())."';";

	$result = mysql_query($sql, $this->daoConnection->Conexion_ID);
	if (!$result){
		echo 'Ooops (update comorecomendado): '.mysql_error();
		return false;
	}
	return true;
}


function delete($id){


	$sql = "DELETE FROM comorecomendado WHERE id = '".mysql_real_escape_string($id)."';";

	$result = mysql_query($sql, $this->daoConnection->Conexion_ID);
	if (!$result){
		echo 'Ooops (delete comorecomendado): '.mysql_error();
		return false;
	}
	return true;
}


function total(){

	$sql = "SELECT COUNT(*) FROM comorecomendado;";

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