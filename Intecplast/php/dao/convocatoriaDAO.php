<?php

class convocatoriaDAO{

public $daoConnection;

function __construct(){
	$this->daoConnection = new DAO;
	$this->daoConnection->conectar();
}

function save($convocatoria){

	$new = new convocatoria();
	$new = $convocatoria;

	$sql = "INSERT INTO convocatorias (convocatoria_id, convocatoria_titulo_e, convocatoria_cargo_e, convocatoria_funciones_e, convocatoria_requisitos_e, convocatoria_titulo_i, convocatoria_cargo_i, convocatoria_funciones_i, convocatoria_requisitos_i, convocatoria_salario, convocatoria_vigencia, seccion_id, flag_id
	) VALUES (
	'".mysql_real_escape_string($new->getId())."',
	'".mysql_real_escape_string($new->getTitulo_e())."',
	'".mysql_real_escape_string($new->getCargo_e())."',
	'".mysql_real_escape_string($new->getFunciones_e())."',
	'".mysql_real_escape_string($new->getRequisitos_e())."',
	'".mysql_real_escape_string($new->getTitulo_i())."',
	'".mysql_real_escape_string($new->getCargo_i())."',
	'".mysql_real_escape_string($new->getFunciones_i())."',
	'".mysql_real_escape_string($new->getRequisitos_i())."',
	'".mysql_real_escape_string($new->getSalario())."',
	'".mysql_real_escape_string($new->getVigencia())."',
	'".mysql_real_escape_string($new->getSeccionId())."',
	'".mysql_real_escape_string($new->getFlagId())."');";

	$result = mysql_query($sql, $this->daoConnection->Conexion_ID);
	if (!$result){
		echo 'Ooops (save convocatoria): '.mysql_error();
		return false;
	}
	return true;
}


function getLastId(){
	return mysql_insert_id($this->daoConnection->Conexion_ID);
}


function getById($convocatoria_id){

	$sql = "SELECT * FROM convocatorias WHERE convocatoria_id = '".mysql_real_escape_string($convocatoria_id)."' ;";

	$this->daoConnection->consulta($sql);
	$this->daoConnection->leerVarios();

	$numRegistros = $this->daoConnection->numregistros();

	if ($numRegistros == 0){
		return NULL;
	}

	$i = 0;

		$new = new convocatoria();
		$new->setId($this->daoConnection->ObjetoConsulta2[$i][0]);
		$new->setTitulo_e($this->daoConnection->ObjetoConsulta2[$i][1]);
		$new->setCargo_e($this->daoConnection->ObjetoConsulta2[$i][2]);
		$new->setFunciones_e($this->daoConnection->ObjetoConsulta2[$i][3]);
		$new->setRequisitos_e($this->daoConnection->ObjetoConsulta2[$i][4]);
		$new->setTitulo_i($this->daoConnection->ObjetoConsulta2[$i][5]);
		$new->setCargo_i($this->daoConnection->ObjetoConsulta2[$i][6]);
		$new->setFunciones_i($this->daoConnection->ObjetoConsulta2[$i][7]);
		$new->setRequisitos_i($this->daoConnection->ObjetoConsulta2[$i][8]);
		$new->setSalario($this->daoConnection->ObjetoConsulta2[$i][9]);
		$new->setVigencia($this->daoConnection->ObjetoConsulta2[$i][10]);
		$new->setSeccionId($this->daoConnection->ObjetoConsulta2[$i][11]);
		$new->setFlagId($this->daoConnection->ObjetoConsulta2[$i][12]);

	return $new;

}


function gets(){

	$sql = "SELECT * FROM convocatorias ORDER BY convocatoria_titulo_e;";

	$this->daoConnection->consulta($sql);
	$this->daoConnection->leerVarios();

	$numRegistros = $this->daoConnection->numregistros();

	if ($numRegistros == 0){
		return NULL;
	}

	$news = NULL;

	for ($i = 0; $i < $numRegistros; $i++){

		$new = new convocatoria();

		$new->setId($this->daoConnection->ObjetoConsulta2[$i][0]);
		$new->setTitulo_e($this->daoConnection->ObjetoConsulta2[$i][1]);
		$new->setCargo_e($this->daoConnection->ObjetoConsulta2[$i][2]);
		$new->setFunciones_e($this->daoConnection->ObjetoConsulta2[$i][3]);
		$new->setRequisitos_e($this->daoConnection->ObjetoConsulta2[$i][4]);
		$new->setTitulo_i($this->daoConnection->ObjetoConsulta2[$i][5]);
		$new->setCargo_i($this->daoConnection->ObjetoConsulta2[$i][6]);
		$new->setFunciones_i($this->daoConnection->ObjetoConsulta2[$i][7]);
		$new->setRequisitos_i($this->daoConnection->ObjetoConsulta2[$i][8]);
		$new->setSalario($this->daoConnection->ObjetoConsulta2[$i][9]);
		$new->setVigencia($this->daoConnection->ObjetoConsulta2[$i][10]);
		$new->setSeccionId($this->daoConnection->ObjetoConsulta2[$i][11]);
		$new->setFlagId($this->daoConnection->ObjetoConsulta2[$i][12]);
		$news[$i] = $new;

	}

	return $news;

}

function getBySeccionFlag($seccion_id, $flag_id){

	$sql = "SELECT * FROM convocatorias WHERE seccion_id = '".mysql_real_escape_string($seccion_id)."' AND flag_id = '".mysql_real_escape_string($flag_id)."' ;";

	$this->daoConnection->consulta($sql);
	$this->daoConnection->leerVarios();

	$numRegistros = $this->daoConnection->numregistros();

	if ($numRegistros == 0){
		return NULL;
	}

	$news = NULL;

	for ($i = 0; $i < $numRegistros; $i++){

		$new = new convocatoria();

		$new->setId($this->daoConnection->ObjetoConsulta2[$i][0]);
		$new->setTitulo_e($this->daoConnection->ObjetoConsulta2[$i][1]);
		$new->setCargo_e($this->daoConnection->ObjetoConsulta2[$i][2]);
		$new->setFunciones_e($this->daoConnection->ObjetoConsulta2[$i][3]);
		$new->setRequisitos_e($this->daoConnection->ObjetoConsulta2[$i][4]);
		$new->setTitulo_i($this->daoConnection->ObjetoConsulta2[$i][5]);
		$new->setCargo_i($this->daoConnection->ObjetoConsulta2[$i][6]);
		$new->setFunciones_i($this->daoConnection->ObjetoConsulta2[$i][7]);
		$new->setRequisitos_i($this->daoConnection->ObjetoConsulta2[$i][8]);
		$new->setSalario($this->daoConnection->ObjetoConsulta2[$i][9]);
		$new->setVigencia($this->daoConnection->ObjetoConsulta2[$i][10]);
		$new->setSeccionId($this->daoConnection->ObjetoConsulta2[$i][11]);
		$new->setFlagId($this->daoConnection->ObjetoConsulta2[$i][12]);

		$news[$i] = $new;

	}

	return $news;

}


function update ($convocatoria){

	$new = new convocatoria();
	$new = $convocatoria;

	$sql = "UPDATE  convocatorias SET  
		convocatoria_titulo_e=
		'".mysql_real_escape_string($new->getTitulo_e())."', 

		convocatoria_cargo_e=
		'".mysql_real_escape_string($new->getCargo_e())."', 

		convocatoria_funciones_e=
		'".mysql_real_escape_string($new->getFunciones_e())."', 

		convocatoria_requisitos_e=
		'".mysql_real_escape_string($new->getRequisitos_e())."', 

		convocatoria_titulo_i=
		'".mysql_real_escape_string($new->getTitulo_i())."', 

		convocatoria_cargo_i=
		'".mysql_real_escape_string($new->getCargo_i())."', 

		convocatoria_funciones_i=
		'".mysql_real_escape_string($new->getFunciones_i())."', 

		convocatoria_requisitos_i=
		'".mysql_real_escape_string($new->getRequisitos_i())."', 

		convocatoria_salario=
		'".mysql_real_escape_string($new->getSalario())."', 

		convocatoria_vigencia=
		'".mysql_real_escape_string($new->getVigencia())."'

		WHERE convocatoria_id = '".mysql_real_escape_string($new->getId())."';";

	$result = mysql_query($sql, $this->daoConnection->Conexion_ID);
	if (!$result){
		echo 'Ooops (update convocatoria): '.mysql_error();
		return false;
	}
	return true;
}


function delete($convocatoria_id){


	$sql = "DELETE FROM convocatorias WHERE convocatoria_id = '".mysql_real_escape_string($convocatoria_id)."';";

	$result = mysql_query($sql, $this->daoConnection->Conexion_ID);
	if (!$result){
		echo 'Ooops (delete convocatoria): '.mysql_error();
		return false;
	}
	return true;
}


function total(){

	$sql = "SELECT COUNT(*) FROM convocatorias;";

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