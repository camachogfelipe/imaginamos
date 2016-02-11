<?php

class conparenosDAO{

public $daoConnection;

function __construct(){
	$this->daoConnection = new DAO;
	$this->daoConnection->conectar();
}

function save($conparenos){

	$new = new conparenos();
	$new = $conparenos;

	$sql = "INSERT INTO conparenos (id, caracteristica, pp, otro

) VALUES (
'".mysql_real_escape_string($new->getid())."', 
'".mysql_real_escape_string($new->getcaracteristica())."', 
'".mysql_real_escape_string($new->getpp())."', 
'".mysql_real_escape_string($new->getotro())."');";

	$result = mysql_query($sql, $this->daoConnection->Conexion_ID);
	if (!$result){
		echo 'Ooops (save conparenos): '.mysql_error();
		return false;
	}
	return true;
}


function getLastId(){
	return mysql_insert_id($this->daoConnection->Conexion_ID);
}


function getById($id){

	$sql = "SELECT id, caracteristica, pp, otro FROM conparenos WHERE id = '".mysql_real_escape_string($id)."' ;";

	$this->daoConnection->consulta($sql);
	$this->daoConnection->leerVarios();

	$numRegistros = $this->daoConnection->numregistros();

	if ($numRegistros == 0){
		return NULL;
	}

	$i = 0;

		$new = new conparenos();

		$new->setid($this->daoConnection->ObjetoConsulta2[$i][0]);
		$new->setcaracteristica($this->daoConnection->ObjetoConsulta2[$i][1]);
		$new->setpp(str_replace('\\', '', $this->daoConnection->ObjetoConsulta2[$i][2]));
		$new->setotro(str_replace('\\', '', $this->daoConnection->ObjetoConsulta2[$i][3]));

	return $new;

}

function gets(){

	$sql = "SELECT id, caracteristica, pp, otro FROM conparenos ORDER BY id;";

	$this->daoConnection->consulta($sql);
	$this->daoConnection->leerVarios();

	$numRegistros = $this->daoConnection->numregistros();

	if ($numRegistros == 0){
		return NULL;
	}

	$news = NULL;

	for ($i = 0; $i < $numRegistros; $i++){

		$new = new conparenos();

		$new->setid($this->daoConnection->ObjetoConsulta2[$i][0]);
		$new->setcaracteristica($this->daoConnection->ObjetoConsulta2[$i][1]);
		$new->setpp(str_replace('\\', '', $this->daoConnection->ObjetoConsulta2[$i][2]));
		$new->setotro(str_replace('\\', '', $this->daoConnection->ObjetoConsulta2[$i][3]));

		$news[$i] = $new;

	}

	return $news;

}

function update ($conparenos){

	$new = new conparenos();
	$new = $conparenos;

	$sql = "UPDATE  conparenos SET  
		caracteristica= 
			'".mysql_real_escape_string($new->getcaracteristica())."', 
		pp= 
			'".mysql_real_escape_string($new->getpp())."', 
		otro= 
			'".mysql_real_escape_string($new->getotro())."'

		 WHERE id = '".mysql_real_escape_string($new->getid())."';";

	$result = mysql_query($sql, $this->daoConnection->Conexion_ID);
	if (!$result){
		echo 'Ooops (update conparenos): '.mysql_error();
		return false;
	}
	return true;
}


function delete($id){


	$sql = "DELETE FROM conparenos WHERE id = '".mysql_real_escape_string($id)."';";

	$result = mysql_query($sql, $this->daoConnection->Conexion_ID);
	if (!$result){
		echo 'Ooops (delete conparenos): '.mysql_error();
		return false;
	}
	return true;
}


function total(){

	$sql = "SELECT COUNT(*) FROM conparenos;";

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