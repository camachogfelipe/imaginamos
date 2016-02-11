<?php

class homeantesdespuesDAO{

public $daoConnection;

function __construct(){
	$this->daoConnection = new DAO;
	$this->daoConnection->conectar();
}

function save($homeantesdespues){

	$new = new homeantesdespues();
	$new = $homeantesdespues;

	$sql = "INSERT INTO homeantesdespues (id, swf

) VALUES (
'".mysql_real_escape_string($new->getid())."', 
'".mysql_real_escape_string($new->getswf())."');";

	$result = mysql_query($sql, $this->daoConnection->Conexion_ID);
	if (!$result){
		echo 'Ooops (save homeantesdespues): '.mysql_error();
		return false;
	}
	return true;
}


function getLastId(){
	return mysql_insert_id($this->daoConnection->Conexion_ID);
}


function getById($id){

	$sql = "SELECT id, swf FROM homeantesdespues WHERE id = '".mysql_real_escape_string($id)."' ;";

	$this->daoConnection->consulta($sql);
	$this->daoConnection->leerVarios();

	$numRegistros = $this->daoConnection->numregistros();

	if ($numRegistros == 0){
		return NULL;
	}

	$i = 0;

		$new = new homeantesdespues();

		$new->setid($this->daoConnection->ObjetoConsulta2[$i][0]);
		$new->setswf($this->daoConnection->ObjetoConsulta2[$i][1]);

	return $new;

}

function gets(){

	$sql = "SELECT id, swf FROM homeantesdespues;";

	$this->daoConnection->consulta($sql);
	$this->daoConnection->leerVarios();

	$numRegistros = $this->daoConnection->numregistros();

	if ($numRegistros == 0){
		return NULL;
	}

	$news = NULL;

	for ($i = 0; $i < $numRegistros; $i++){

		$new = new homeantesdespues();

		$new->setid($this->daoConnection->ObjetoConsulta2[$i][0]);
		$new->setswf($this->daoConnection->ObjetoConsulta2[$i][1]);

		$news[$i] = $new;

	}

	return $news;

}

function update ($homeantesdespues){

	$new = new homeantesdespues();
	$new = $homeantesdespues;

	$sql = "UPDATE  homeantesdespues SET  
		swf= 
			'".mysql_real_escape_string($new->getswf())."'

		 WHERE id = '".mysql_real_escape_string($new->getid())."';";

	$result = mysql_query($sql, $this->daoConnection->Conexion_ID);
	if (!$result){
		echo 'Ooops (update homeantesdespues): '.mysql_error();
		return false;
	}
	return true;
}


function delete($id){


	$sql = "DELETE FROM homeantesdespues WHERE id = '".mysql_real_escape_string($id)."';";

	$result = mysql_query($sql, $this->daoConnection->Conexion_ID);
	if (!$result){
		echo 'Ooops (delete homeantesdespues): '.mysql_error();
		return false;
	}
	return true;
}


function total(){

	$sql = "SELECT COUNT(*) FROM homeantesdespues;";

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