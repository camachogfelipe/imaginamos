<?php

class contactoinfoDAO{

public $daoConnection;

function __construct(){
	$this->daoConnection = new DAO;
	$this->daoConnection->conectar();
}

function save($contactoinfo){

	$new = new contactoinfo();
	$new = $contactoinfo;

	$sql = "INSERT INTO contactoinfo (id, direccion, telefono, celular, fax, mail, ciudad

) VALUES (
'".mysql_real_escape_string($new->getid())."', 
'".mysql_real_escape_string($new->getdireccion())."', 
'".mysql_real_escape_string($new->gettelefono())."', 
'".mysql_real_escape_string($new->getcelular())."', 
'".mysql_real_escape_string($new->getfax())."', 
'".mysql_real_escape_string($new->getmail())."', 
'".mysql_real_escape_string($new->getciudad())."');";

	$result = mysql_query($sql, $this->daoConnection->Conexion_ID);
	if (!$result){
		echo 'Ooops (save contactoinfo): '.mysql_error();
		return false;
	}
	return true;
}


function getLastId(){
	return mysql_insert_id($this->daoConnection->Conexion_ID);
}


function getById($id){

	$sql = "SELECT id, direccion, telefono, celular, fax, mail, ciudad FROM contactoinfo WHERE id = '".mysql_real_escape_string($id)."' ;";

	$this->daoConnection->consulta($sql);
	$this->daoConnection->leerVarios();

	$numRegistros = $this->daoConnection->numregistros();

	if ($numRegistros == 0){
		return NULL;
	}

	$i = 0;

		$new = new contactoinfo();

		$new->setid($this->daoConnection->ObjetoConsulta2[$i][0]);
		$new->setdireccion($this->daoConnection->ObjetoConsulta2[$i][1]);
		$new->settelefono($this->daoConnection->ObjetoConsulta2[$i][2]);
		$new->setcelular($this->daoConnection->ObjetoConsulta2[$i][3]);
		$new->setfax($this->daoConnection->ObjetoConsulta2[$i][4]);
		$new->setmail($this->daoConnection->ObjetoConsulta2[$i][5]);
		$new->setciudad($this->daoConnection->ObjetoConsulta2[$i][6]);

	return $new;

}

function gets(){

	$sql = "SELECT id, direccion, telefono, celular, fax, mail, ciudad FROM contactoinfo;";

	$this->daoConnection->consulta($sql);
	$this->daoConnection->leerVarios();

	$numRegistros = $this->daoConnection->numregistros();

	if ($numRegistros == 0){
		return NULL;
	}

	$news = NULL;

	for ($i = 0; $i < $numRegistros; $i++){

		$new = new contactoinfo();

		$new->setid($this->daoConnection->ObjetoConsulta2[$i][0]);
		$new->setdireccion($this->daoConnection->ObjetoConsulta2[$i][1]);
		$new->settelefono($this->daoConnection->ObjetoConsulta2[$i][2]);
		$new->setcelular($this->daoConnection->ObjetoConsulta2[$i][3]);
		$new->setfax($this->daoConnection->ObjetoConsulta2[$i][4]);
		$new->setmail($this->daoConnection->ObjetoConsulta2[$i][5]);
		$new->setciudad($this->daoConnection->ObjetoConsulta2[$i][6]);

		$news[$i] = $new;

	}

	return $news;

}

function update ($contactoinfo){

	$new = new contactoinfo();
	$new = $contactoinfo;

	$sql = "UPDATE  contactoinfo SET  
		direccion= 
			'".mysql_real_escape_string($new->getdireccion())."', 
		telefono= 
			'".mysql_real_escape_string($new->gettelefono())."', 
		celular= 
			'".mysql_real_escape_string($new->getcelular())."', 
		fax= 
			'".mysql_real_escape_string($new->getfax())."', 
		mail= 
			'".mysql_real_escape_string($new->getmail())."', 
		ciudad= 
			'".mysql_real_escape_string($new->getciudad())."'

		 WHERE id = '".mysql_real_escape_string($new->getid())."';";

	$result = mysql_query($sql, $this->daoConnection->Conexion_ID);
	if (!$result){
		echo 'Ooops (update contactoinfo): '.mysql_error();
		return false;
	}
	return true;
}


function delete($id){


	$sql = "DELETE FROM contactoinfo WHERE id = '".mysql_real_escape_string($id)."';";

	$result = mysql_query($sql, $this->daoConnection->Conexion_ID);
	if (!$result){
		echo 'Ooops (delete contactoinfo): '.mysql_error();
		return false;
	}
	return true;
}


function total(){

	$sql = "SELECT COUNT(*) FROM contactoinfo;";

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