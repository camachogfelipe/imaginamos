<?php

class suscritoDAO{

public $daoConnection;

function __construct(){
	$this->daoConnection = new DAO;
	$this->daoConnection->conectar();
}

function save($suscrito){

	$new = new suscrito();
	$new = $suscrito;

	$sql = "INSERT INTO suscritos (suscrito_id, suscrito_nombre, suscrito_email
	) VALUES (
	'".mysql_real_escape_string($new->getId())."', 
	'".mysql_real_escape_string($new->getNombre())."', 
	'".mysql_real_escape_string($new->getEmail())."');";
	$result = mysql_query($sql, $this->daoConnection->Conexion_ID);
	if (!$result){
		echo 'Ooops (save suscrito): '.mysql_error();
		return false;
	}
	return true;
}


function getLastId(){
	return mysql_insert_id($this->daoConnection->Conexion_ID);
}


function getById($suscrito_id){

	$sql = "SELECT * FROM suscritos WHERE suscrito_id = '".mysql_real_escape_string($suscrito_id)."' ;";

	$this->daoConnection->consulta($sql);
	$this->daoConnection->leerVarios();

	$numRegistros = $this->daoConnection->numregistros();

	if ($numRegistros == 0){
		return NULL;
	}

	$i = 0;

		$new = new suscrito();

		$new->setId($this->daoConnection->ObjetoConsulta2[$i][0]);
		$new->setNombre($this->daoConnection->ObjetoConsulta2[$i][1]);
		$new->setEmail($this->daoConnection->ObjetoConsulta2[$i][2]);
                $new->setNombre(str_replace('\\', '', $new->getNombre()));
                $new->setEmail(str_replace('\\', '', $new->getEmail()));
	return $new;

}

function getByMail($suscrito_mail){

	$sql = "SELECT * FROM suscritos WHERE suscrito_email = '".mysql_real_escape_string($suscrito_mail)."' ;";

	$this->daoConnection->consulta($sql);
	$this->daoConnection->leerVarios();

	$numRegistros = $this->daoConnection->numregistros();

	if ($numRegistros == 0){
		return NULL;
	}

	$i = 0;

		$new = new suscrito();

		$new->setId($this->daoConnection->ObjetoConsulta2[$i][0]);
		$new->setNombre($this->daoConnection->ObjetoConsulta2[$i][1]);
		$new->setEmail($this->daoConnection->ObjetoConsulta2[$i][2]);
                $new->setNombre(str_replace('\\', '', $new->getNombre()));
                $new->setEmail(str_replace('\\', '', $new->getEmail()));
	return $new;

}


function getByNombre($suscrito_nombre){
	
	$sql= "SELECT * FROM suscritos WHERE suscrito_nombre = '".mysql_real_escape_string($suscrito_nombre_e)."';";

	$this->daoConnection->consulta($sql);
	$this->daoConnection->leerVarios();

	$numRegistros = $this->daoConnection->numregistros();

	if ($numRegistros == 0) {
		return NULL;
	}

	$i = 0;

		$new = new suscrito();

		$new->setId($this->daoConnection->ObjetoConsulta2[$i][0]);
		$new->setNombre($this->daoConnection->ObjetoConsulta2[$i][1]);
		$new->setEmail($this->daoConnection->ObjetoConsulta2[$i][2]);
                $new->setNombre(str_replace('\\', '', $new->getNombre()));
                $new->setEmail(str_replace('\\', '', $new->getEmail()));
	
	return $new;


}

function gets(){

	$sql = "SELECT * FROM suscritos ORDER BY suscrito_nombre;";

	$this->daoConnection->consulta($sql);
	$this->daoConnection->leerVarios();

	$numRegistros = $this->daoConnection->numregistros();

	if ($numRegistros == 0){
		return NULL;
	}

	$news = NULL;

	for ($i = 0; $i < $numRegistros; $i++){

		$new = new suscrito();

		$new->setId($this->daoConnection->ObjetoConsulta2[$i][0]);
		$new->setNombre($this->daoConnection->ObjetoConsulta2[$i][1]);
		$new->setEmail($this->daoConnection->ObjetoConsulta2[$i][2]);
                $new->setNombre(str_replace('\\', '', $new->getNombre()));
                $new->setEmail(str_replace('\\', '', $new->getEmail()));
		$news[$i] = $new;

	}

	return $news;

}

function update ($suscrito){

	$new = new suscrito();
	$new = $suscrito;

	$sql = "UPDATE  suscritos SET  
		suscrito_nombre= 
			'".mysql_real_escape_string($new->getNombre())."', 
		suscrito_email= 
			'".mysql_real_escape_string($new->getEmail())."'

		 WHERE suscrito_id = '".mysql_real_escape_string($new->getid())."';";

	$result = mysql_query($sql, $this->daoConnection->Conexion_ID);
	if (!$result){
		echo 'Ooops (update suscrito): '.mysql_error();
		return false;
	}
	return true;
}


function delete($suscrito_id){


	$sql = "DELETE FROM suscritos WHERE suscrito_id = '".mysql_real_escape_string($suscrito_id)."';";

	$result = mysql_query($sql, $this->daoConnection->Conexion_ID);
	if (!$result){
		echo 'Ooops (delete suscrito): '.mysql_error();
		return false;
	}
	return true;
}


function total(){

	$sql = "SELECT COUNT(*) FROM suscritos;";

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