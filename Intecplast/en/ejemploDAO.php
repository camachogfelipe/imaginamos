<?php

class ejemploDAO{

public $daoConnection;

function __construct(){
	$this->daoConnection = new DAO;
	$this->daoConnection->conectar();
}

function save($ejemplo){

	$new = new ejemplo();
	$new = $ejemplo;

	$sql = "INSERT INTO ejemplos (ejemplo_id, producto_codigo, ejemplo_imagen

) VALUES (
'".mysql_real_escape_string($new->getid())."', 
'".mysql_real_escape_string($new->getproducto_codigo())."', 
'".mysql_real_escape_string($new->getimagen())."');";

	$result = mysql_query($sql, $this->daoConnection->Conexion_ID);
	if (!$result){
		echo 'Ooops (save ejemplo): '.mysql_error();
		return false;
	}
	return true;
}


function getLastId(){
	return mysql_insert_id($this->daoConnection->Conexion_ID);
}


function getById($ejemplo_id){

	$sql = "SELECT * FROM ejemplos WHERE ejemplo_id = '".mysql_real_escape_string($ejemplo_id)."' ;";

	$this->daoConnection->consulta($sql);
	$this->daoConnection->leerVarios();

	$numRegistros = $this->daoConnection->numregistros();

	if ($numRegistros == 0){
		return NULL;
	}

	$i = 0;

		$new = new ejemplo();

		$new->setid($this->daoConnection->ObjetoConsulta2[$i][0]);
		$new->setproducto_codigo($this->daoConnection->ObjetoConsulta2[$i][1]);
		$new->setimagen($this->daoConnection->ObjetoConsulta2[$i][2]);

	return $new;

}


function getByProductoCodigo($producto_codigo){

	$sql = "SELECT * FROM ejemplos WHERE producto_codigo = '".mysql_real_escape_string($producto_codigo)."' ;";

	$this->daoConnection->consulta($sql);
	$this->daoConnection->leerVarios();

	$numRegistros = $this->daoConnection->numregistros();

	if ($numRegistros == 0){
		return NULL;
	}

	$i = 0;

		$new = new ejemplo();

		$new->setid($this->daoConnection->ObjetoConsulta2[$i][0]);
		$new->setproducto_codigo($this->daoConnection->ObjetoConsulta2[$i][1]);
		$new->setimagen($this->daoConnection->ObjetoConsulta2[$i][2]);

	return $new;

}

function gets(){

	$sql = "SELECT * FROM ejemplos ORDER BY producto_codigo;";

	$this->daoConnection->consulta($sql);
	$this->daoConnection->leerVarios();

	$numRegistros = $this->daoConnection->numregistros();

	if ($numRegistros == 0){
		return NULL;
	}

	$news = NULL;

	for ($i = 0; $i < $numRegistros; $i++){

		$new = new ejemplo();

		$new->setid($this->daoConnection->ObjetoConsulta2[$i][0]);
		$new->setproducto_codigo($this->daoConnection->ObjetoConsulta2[$i][1]);
		$new->setimagen($this->daoConnection->ObjetoConsulta2[$i][2]);

		$news[$i] = $new;

	}

	return $news;

}

function getsByProducto_codigo($producto_codigo){

	$sql = "SELECT * FROM ejemplos WHERE producto_codigo = '".mysql_real_escape_string($producto_codigo)."'";

	$this->daoConnection->consulta($sql);
	$this->daoConnection->leerVarios();

	$numRegistros = $this->daoConnection->numregistros();

	if ($numRegistros == 0){
		return NULL;
	}

	$news = NULL;

	for ($i = 0; $i < $numRegistros; $i++){

		$new = new ejemplo();

		$new->setid($this->daoConnection->ObjetoConsulta2[$i][0]);
		$new->setproducto_codigo($this->daoConnection->ObjetoConsulta2[$i][1]);
		$new->setimagen($this->daoConnection->ObjetoConsulta2[$i][2]);

		$news[$i] = $new;

	}

	return $news;

}

function update ($ejemplo){

	$new = new ejemplo();
	$new = $ejemplo;

	$sql = "UPDATE  ejemplos SET  
		producto_codigo= 
			'".mysql_real_escape_string($new->getproducto_codigo())."', 
		ejemplo_imagen= 
			'".mysql_real_escape_string($new->getimagen())."'

		 WHERE ejemplo_id = '".mysql_real_escape_string($new->getid())."';";

	$result = mysql_query($sql, $this->daoConnection->Conexion_ID);
	if (!$result){
		echo 'Ooops (update ejemplo): '.mysql_error();
		return false;
	}
	return true;
}


function delete($ejemplo_id){


	$sql = "DELETE FROM ejemplos WHERE ejemplo_id = '".mysql_real_escape_string($ejemplo_id)."';";

	$result = mysql_query($sql, $this->daoConnection->Conexion_ID);
	if (!$result){
		echo 'Ooops (delete ejemplo): '.mysql_error();
		return false;
	}
	return true;
}


function totalProducto_codigo($producto_codigo){

	$sql = "SELECT COUNT(*) FROM ejemplos WHERE producto_codigo = '".mysql_real_escape_string($producto_codigo)."';";

	$this->daoConnection->consulta($sql);
	$this->daoConnection->leerVarios();

	$numRegistros = $this->daoConnection->numregistros();

	if ($numRegistros == 0){
		return 0;
	}

	return $this->daoConnection->ObjetoConsulta2[0][0];

}

function total(){

	$sql = "SELECT COUNT(*) FROM ejemplos;";

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