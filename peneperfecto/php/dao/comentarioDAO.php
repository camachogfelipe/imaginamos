<?php

class comentarioDAO{

public $daoConnection;

function __construct(){
	$this->daoConnection = new DAO;
	$this->daoConnection->conectar();
}

function save($comentario){

	$new = new comentario();
	$new = $comentario;

	$sql = "INSERT INTO comentario (id, venta, fecha, comentario, activo

) VALUES (
'".mysql_real_escape_string($new->getid())."', 
'".mysql_real_escape_string($new->getventa())."', 
'".mysql_real_escape_string($new->getfecha())."', 
'".mysql_real_escape_string($new->getcomentario())."', 
'".mysql_real_escape_string($new->getactivo())."');";

	$result = mysql_query($sql, $this->daoConnection->Conexion_ID);
	if (!$result){
		echo 'Ooops (save comentario): '.mysql_error();
		return false;
	}
	return true;
}


function getLastId(){
	return mysql_insert_id($this->daoConnection->Conexion_ID);
}


function getById($id){

	$sql = "SELECT id, venta, fecha, comentario, activo FROM comentario WHERE id = '".mysql_real_escape_string($id)."' ;";

	$this->daoConnection->consulta($sql);
	$this->daoConnection->leerVarios();

	$numRegistros = $this->daoConnection->numregistros();

	if ($numRegistros == 0){
		return NULL;
	}

	$i = 0;

		$new = new comentario();

		$new->setid($this->daoConnection->ObjetoConsulta2[$i][0]);
		$new->setventa($this->daoConnection->ObjetoConsulta2[$i][1]);
		$new->setfecha($this->daoConnection->ObjetoConsulta2[$i][2]);
		$new->setcomentario($this->daoConnection->ObjetoConsulta2[$i][3]);
		$new->setactivo($this->daoConnection->ObjetoConsulta2[$i][4]);

	return $new;

}

function gets($activo){

	$sql = "SELECT id, venta, fecha, comentario, activo FROM comentario WHERE activo = '".  mysql_real_escape_string($activo)."';";

	$this->daoConnection->consulta($sql);
	$this->daoConnection->leerVarios();

	$numRegistros = $this->daoConnection->numregistros();

	if ($numRegistros == 0){
		return NULL;
	}

	$news = NULL;

	for ($i = 0; $i < $numRegistros; $i++){

		$new = new comentario();

		$new->setid($this->daoConnection->ObjetoConsulta2[$i][0]);
		$new->setventa($this->daoConnection->ObjetoConsulta2[$i][1]);
		$new->setfecha($this->daoConnection->ObjetoConsulta2[$i][2]);
		$new->setcomentario($this->daoConnection->ObjetoConsulta2[$i][3]);
		$new->setactivo($this->daoConnection->ObjetoConsulta2[$i][4]);

		$news[$i] = $new;

	}

	return $news;

}

function update ($comentario){

	$new = new comentario();
	$new = $comentario;

	$sql = "UPDATE  comentario SET  
		venta= 
			'".mysql_real_escape_string($new->getventa())."', 
		fecha= 
			'".mysql_real_escape_string($new->getfecha())."', 
		comentario= 
			'".mysql_real_escape_string($new->getcomentario())."', 
		activo= 
			'".mysql_real_escape_string($new->getactivo())."'

		 WHERE id = '".mysql_real_escape_string($new->getid())."';";

	$result = mysql_query($sql, $this->daoConnection->Conexion_ID);
	if (!$result){
		echo 'Ooops (update comentario): '.mysql_error();
		return false;
	}
	return true;
}


function delete($id){


	$sql = "DELETE FROM comentario WHERE id = '".mysql_real_escape_string($id)."';";

	$result = mysql_query($sql, $this->daoConnection->Conexion_ID);
	if (!$result){
		echo 'Ooops (delete comentario): '.mysql_error();
		return false;
	}
	return true;
}


function total($activo){

	$sql = "SELECT COUNT(*) FROM comentario WHERE activo = '".  mysql_real_escape_string($activo)."';";

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