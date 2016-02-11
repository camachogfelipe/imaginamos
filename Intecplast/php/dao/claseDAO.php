<?php

class claseDAO{

public $daoConnection;

function __construct(){
	$this->daoConnection = new DAO;
	$this->daoConnection->conectar();
}

function save($clase){

	$new = new clase();
	$new = $clase;

	$sql = "INSERT INTO clases (clase_id, clase_nombre_e, clase_nombre_i, clase_imagen

) VALUES (
'".mysql_real_escape_string($new->getid())."', 
'".mysql_real_escape_string($new->getnombre_e())."', 
'".mysql_real_escape_string($new->getnombre_i())."', 
'".mysql_real_escape_string($new->getimagen())."');";

	$result = mysql_query($sql, $this->daoConnection->Conexion_ID);
	if (!$result){
		echo 'Ooops (save clase): '.mysql_error();
		return false;
	}
	return true;
}


function getLastId(){
	return mysql_insert_id($this->daoConnection->Conexion_ID);
}


function getById($clase_id){

	$sql = "SELECT clase_id, clase_nombre_e, clase_nombre_i, clase_imagen FROM clases WHERE clase_id = '".mysql_real_escape_string($clase_id)."' ;";

	$this->daoConnection->consulta($sql);
	$this->daoConnection->leerVarios();

	$numRegistros = $this->daoConnection->numregistros();

	if ($numRegistros == 0){
		return NULL;
	}

	$i = 0;

		$new = new clase();

		$new->setid($this->daoConnection->ObjetoConsulta2[$i][0]);
		$new->setnombre_e($this->daoConnection->ObjetoConsulta2[$i][1]);
		$new->setnombre_i($this->daoConnection->ObjetoConsulta2[$i][2]);
		$new->setimagen($this->daoConnection->ObjetoConsulta2[$i][3]);
                $new->setnombre_e(str_replace('\\', '', $new->getnombre_e()));
                $new->setnombre_i(str_replace('\\', '', $new->getnombre_i()));
	return $new;

}

function getByNombre($clase_nombre_e){
	
	$sql= "SELECT * FROM clases WHERE clase_nombre_e = '".mysql_real_escape_string($clase_nombre_e)."';";

	$this->daoConnection->consulta($sql);
	$this->daoConnection->leerVarios();

	$numRegistros = $this->daoConnection->numregistros();

	if ($numRegistros == 0) {
		return NULL;
	}

	$i = 0;

		$new = new clase();

		$new->setid($this->daoConnection->ObjetoConsulta2[$i][0]);
		$new->setnombre_e($this->daoConnection->ObjetoConsulta2[$i][1]);
		$new->setnombre_i($this->daoConnection->ObjetoConsulta2[$i][2]);
		$new->setimagen($this->daoConnection->ObjetoConsulta2[$i][3]);
                $new->setnombre_e(str_replace('\\', '', $new->getnombre_e()));
                $new->setnombre_i(str_replace('\\', '', $new->getnombre_i()));
	
	return $new;


}

function gets(){

	$sql = "SELECT * FROM clases ORDER BY clase_nombre_e;";

	$this->daoConnection->consulta($sql);
	$this->daoConnection->leerVarios();

	$numRegistros = $this->daoConnection->numregistros();

	if ($numRegistros == 0){
		return NULL;
	}

	$news = NULL;

	for ($i = 0; $i < $numRegistros; $i++){

		$new = new clase();

		$new->setid($this->daoConnection->ObjetoConsulta2[$i][0]);
		$new->setnombre_e($this->daoConnection->ObjetoConsulta2[$i][1]);
		$new->setnombre_i($this->daoConnection->ObjetoConsulta2[$i][2]);
		$new->setimagen($this->daoConnection->ObjetoConsulta2[$i][3]);
                $new->setnombre_e(str_replace('\\', '', $new->getnombre_e()));
                $new->setnombre_i(str_replace('\\', '', $new->getnombre_i()));
		$news[$i] = $new;

	}

	return $news;

}

function update ($clase){

	$new = new clase();
	$new = $clase;

	$sql = "UPDATE  clases SET  
		clase_nombre_e= 
			'".mysql_real_escape_string($new->getnombre_e())."', 
		clase_nombre_i= 
			'".mysql_real_escape_string($new->getnombre_i())."', 
		clase_imagen= 
			'".mysql_real_escape_string($new->getimagen())."'

		 WHERE clase_id = '".mysql_real_escape_string($new->getid())."';";

	$result = mysql_query($sql, $this->daoConnection->Conexion_ID);
	if (!$result){
		echo 'Ooops (update clase): '.mysql_error();
		return false;
	}
	return true;
}


function delete($clase_id){


	$sql = "DELETE FROM clases WHERE clase_id = '".mysql_real_escape_string($clase_id)."';";

	$result = mysql_query($sql, $this->daoConnection->Conexion_ID);
	if (!$result){
		echo 'Ooops (delete clase): '.mysql_error();
		return false;
	}
	return true;
}


function total(){

	$sql = "SELECT COUNT(*) FROM clases;";

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