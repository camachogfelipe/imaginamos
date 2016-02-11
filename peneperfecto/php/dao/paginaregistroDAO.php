<?php

class paginaregistroDAO{

public $daoConnection;

function __construct(){
	$this->daoConnection = new DAO;
	$this->daoConnection->conectar();
}

function save($paginaregistro){

	$new = new paginaregistro();
	$new = $paginaregistro;

	$sql = "INSERT INTO paginaregistro (id, texto, banner, precio, contenido

) VALUES (
'".mysql_real_escape_string($new->getid())."', 
'".mysql_real_escape_string($new->gettexto())."', 
'".mysql_real_escape_string($new->getbanner())."', 
'".mysql_real_escape_string($new->getprecio())."', 
'".mysql_real_escape_string($new->getcontenido())."');";

	$result = mysql_query($sql, $this->daoConnection->Conexion_ID);
	if (!$result){
		echo 'Ooops (save paginaregistro): '.mysql_error();
		return false;
	}
	return true;
}


function getLastId(){
	return mysql_insert_id($this->daoConnection->Conexion_ID);
}


function getById($id){

	$sql = "SELECT id, texto, banner, precio, contenido FROM paginaregistro WHERE id = '".mysql_real_escape_string($id)."' ;";

	$this->daoConnection->consulta($sql);
	$this->daoConnection->leerVarios();

	$numRegistros = $this->daoConnection->numregistros();

	if ($numRegistros == 0){
		return NULL;
	}

	$i = 0;

		$new = new paginaregistro();

		$new->setid($this->daoConnection->ObjetoConsulta2[$i][0]);
		$new->settexto($this->daoConnection->ObjetoConsulta2[$i][1]);
		$new->setbanner($this->daoConnection->ObjetoConsulta2[$i][2]);
		$new->setprecio($this->daoConnection->ObjetoConsulta2[$i][3]);
		$new->setcontenido($this->daoConnection->ObjetoConsulta2[$i][4]);

	return $new;

}

function gets(){

	$sql = "SELECT id, texto, banner, precio, contenido FROM paginaregistro;";

	$this->daoConnection->consulta($sql);
	$this->daoConnection->leerVarios();

	$numRegistros = $this->daoConnection->numregistros();

	if ($numRegistros == 0){
		return NULL;
	}

	$news = NULL;

	for ($i = 0; $i < $numRegistros; $i++){

		$new = new paginaregistro();

		$new->setid($this->daoConnection->ObjetoConsulta2[$i][0]);
		$new->settexto($this->daoConnection->ObjetoConsulta2[$i][1]);
		$new->setbanner($this->daoConnection->ObjetoConsulta2[$i][2]);
		$new->setprecio($this->daoConnection->ObjetoConsulta2[$i][3]);
		$new->setcontenido($this->daoConnection->ObjetoConsulta2[$i][4]);

		$news[$i] = $new;

	}

	return $news;

}

function update ($paginaregistro){

	$new = new paginaregistro();
	$new = $paginaregistro;

	$sql = "UPDATE  paginaregistro SET  
		texto= 
			'".mysql_real_escape_string($new->gettexto())."', 
		banner= 
			'".mysql_real_escape_string($new->getbanner())."', 
		precio= 
			'".mysql_real_escape_string($new->getprecio())."', 
		contenido= 
			'".mysql_real_escape_string($new->getcontenido())."'

		 WHERE id = '".mysql_real_escape_string($new->getid())."';";

	$result = mysql_query($sql, $this->daoConnection->Conexion_ID);
	if (!$result){
		echo 'Ooops (update paginaregistro): '.mysql_error();
		return false;
	}
	return true;
}


function delete($id){


	$sql = "DELETE FROM paginaregistro WHERE id = '".mysql_real_escape_string($id)."';";

	$result = mysql_query($sql, $this->daoConnection->Conexion_ID);
	if (!$result){
		echo 'Ooops (delete paginaregistro): '.mysql_error();
		return false;
	}
	return true;
}


function total(){

	$sql = "SELECT COUNT(*) FROM paginaregistro;";

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