<?php

class encuestaDAO{

public $daoConnection;

function __construct(){
	$this->daoConnection = new DAO;
	$this->daoConnection->conectar();
}

function save($encuesta){

	$new = new encuesta();
	$new = $encuesta;

	$sql = "INSERT INTO encuesta (id, pregunta, o1, o2, o3, o4

) VALUES (
'".mysql_real_escape_string($new->getid())."', 
'".mysql_real_escape_string($new->getpregunta())."', 
'".mysql_real_escape_string($new->geto1())."', 
'".mysql_real_escape_string($new->geto2())."', 
'".mysql_real_escape_string($new->geto3())."', 
'".mysql_real_escape_string($new->geto4())."');";

	$result = mysql_query($sql, $this->daoConnection->Conexion_ID);
	if (!$result){
		echo 'Ooops (save encuesta): '.mysql_error();
		return false;
	}
	return true;
}


function getLastId(){
	return mysql_insert_id($this->daoConnection->Conexion_ID);
}


function getById($id){

	$sql = "SELECT id, pregunta, o1, o2, o3, o4 FROM encuesta WHERE id = '".mysql_real_escape_string($id)."' ;";

	$this->daoConnection->consulta($sql);
	$this->daoConnection->leerVarios();

	$numRegistros = $this->daoConnection->numregistros();

	if ($numRegistros == 0){
		return NULL;
	}

	$i = 0;

		$new = new encuesta();

		$new->setid($this->daoConnection->ObjetoConsulta2[$i][0]);
		$new->setpregunta($this->daoConnection->ObjetoConsulta2[$i][1]);
		$new->seto1($this->daoConnection->ObjetoConsulta2[$i][2]);
		$new->seto2($this->daoConnection->ObjetoConsulta2[$i][3]);
		$new->seto3($this->daoConnection->ObjetoConsulta2[$i][4]);
		$new->seto4($this->daoConnection->ObjetoConsulta2[$i][5]);

	return $new;

}

function gets(){

	$sql = "SELECT id, pregunta, o1, o2, o3, o4 FROM encuesta;";

	$this->daoConnection->consulta($sql);
	$this->daoConnection->leerVarios();

	$numRegistros = $this->daoConnection->numregistros();

	if ($numRegistros == 0){
		return NULL;
	}

	$news = NULL;

	for ($i = 0; $i < $numRegistros; $i++){

		$new = new encuesta();

		$new->setid($this->daoConnection->ObjetoConsulta2[$i][0]);
		$new->setpregunta($this->daoConnection->ObjetoConsulta2[$i][1]);
		$new->seto1($this->daoConnection->ObjetoConsulta2[$i][2]);
		$new->seto2($this->daoConnection->ObjetoConsulta2[$i][3]);
		$new->seto3($this->daoConnection->ObjetoConsulta2[$i][4]);
		$new->seto4($this->daoConnection->ObjetoConsulta2[$i][5]);

		$news[$i] = $new;

	}

	return $news;

}

function update ($encuesta){
        
        $sql = "DELETE FROM encuestares";
        $this->daoConnection->consulta($sql);
    
	$new = new encuesta();
	$new = $encuesta;

	$sql = "UPDATE  encuesta SET  
		pregunta= 
			'".mysql_real_escape_string($new->getpregunta())."', 
		o1= 
			'".mysql_real_escape_string($new->geto1())."', 
		o2= 
			'".mysql_real_escape_string($new->geto2())."', 
		o3= 
			'".mysql_real_escape_string($new->geto3())."', 
		o4= 
			'".mysql_real_escape_string($new->geto4())."'

		 WHERE id = '".mysql_real_escape_string($new->getid())."';";

	$result = mysql_query($sql, $this->daoConnection->Conexion_ID);
	if (!$result){
		echo 'Ooops (update encuesta): '.mysql_error();
		return false;
	}
	return true;
}


function delete($id){


	$sql = "DELETE FROM encuesta WHERE id = '".mysql_real_escape_string($id)."';";

	$result = mysql_query($sql, $this->daoConnection->Conexion_ID);
	if (!$result){
		echo 'Ooops (delete encuesta): '.mysql_error();
		return false;
	}
	return true;
}


function total(){

	$sql = "SELECT COUNT(*) FROM encuesta;";

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