<?php

class formaDAO{

public $daoConnection;

function __construct(){
	$this->daoConnection = new DAO;
	$this->daoConnection->conectar();
}

function save($forma){

	$new = new forma();
	$new = $forma;

	$sql = "INSERT INTO formas (forma_id, forma_nombre_e, forma_nombre_i, forma_imagen

) VALUES (
'".mysql_real_escape_string($new->getid())."', 
'".mysql_real_escape_string($new->getnombre_e())."', 
'".mysql_real_escape_string($new->getnombre_i())."', 
'".mysql_real_escape_string($new->getimagen())."');";

	$result = mysql_query($sql, $this->daoConnection->Conexion_ID);
	if (!$result){
		echo 'Ooops (save forma): '.mysql_error();
		return false;
	}
	return true;
}


function getLastId(){
	return mysql_insert_id($this->daoConnection->Conexion_ID);
}


function getById($forma_id){

	$sql = "SELECT forma_id, forma_nombre_e, forma_nombre_i, forma_imagen FROM formas WHERE forma_id = '".mysql_real_escape_string($forma_id)."' ;";

	$this->daoConnection->consulta($sql);
	$this->daoConnection->leerVarios();

	$numRegistros = $this->daoConnection->numregistros();

	if ($numRegistros == 0){
		return NULL;
	}

	$i = 0;

		$new = new forma();

		$new->setid($this->daoConnection->ObjetoConsulta2[$i][0]);
		$new->setnombre_e($this->daoConnection->ObjetoConsulta2[$i][1]);
		$new->setnombre_i($this->daoConnection->ObjetoConsulta2[$i][2]);
		$new->setimagen($this->daoConnection->ObjetoConsulta2[$i][3]);
                $new->setnombre_e(str_replace('\\', '', $new->getnombre_e()));
                $new->setnombre_i(str_replace('\\', '', $new->getnombre_i()));
	return $new;

}

function getByNombre($forma_nombre_e){
	
	$sql= "SELECT * FROM formas WHERE forma_nombre_e = '".mysql_real_escape_string($forma_nombre_e)."';";

	$this->daoConnection->consulta($sql);
	$this->daoConnection->leerVarios();

	$numRegistros = $this->daoConnection->numregistros();

	if ($numRegistros == 0) {
		return NULL;
	}

	$i = 0;

		$new = new forma();

		$new->setid($this->daoConnection->ObjetoConsulta2[$i][0]);
		$new->setnombre_e($this->daoConnection->ObjetoConsulta2[$i][1]);
		$new->setnombre_i($this->daoConnection->ObjetoConsulta2[$i][2]);
		$new->setimagen($this->daoConnection->ObjetoConsulta2[$i][3]);
                $new->setnombre_e(str_replace('\\', '', $new->getnombre_e()));
                $new->setnombre_i(str_replace('\\', '', $new->getnombre_i()));

	return $new;

}

	function getByClase($clase_id){


		$sql = "SELECT DISTINCT formas.forma_id, formas.forma_nombre_e, formas.forma_nombre_i FROM formas, productos, categorias, sublineas WHERE categorias.categoria_id=productos.categoria_id AND formas.forma_id=productos.forma_id AND productos.clase_id=$clase_id ORDER BY forma_nombre_e;";

		$this->daoConnection->consulta($sql);
		$this->daoConnection->leerVarios();

		$numRegistros = $this->daoConnection->numregistros();

		if ($numRegistros == 0){
			return NULL;
		}

		$news = NULL;

		for ($i = 0; $i < $numRegistros; $i++){

			$new = new forma();

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


function gets(){

	$sql = "SELECT * FROM formas ORDER BY forma_nombre_e;";

	$this->daoConnection->consulta($sql);
	$this->daoConnection->leerVarios();

	$numRegistros = $this->daoConnection->numregistros();

	if ($numRegistros == 0){
		return NULL;
	}

	$news = NULL;

	for ($i = 0; $i < $numRegistros; $i++){

		$new = new forma();

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

function update ($forma){

	$new = new forma();
	$new = $forma;

	$sql = "UPDATE  formas SET  
		forma_nombre_e= 
			'".mysql_real_escape_string($new->getnombre_e())."', 
		forma_nombre_i= 
			'".mysql_real_escape_string($new->getnombre_i())."', 
		forma_imagen= 
			'".mysql_real_escape_string($new->getimagen())."'

		 WHERE forma_id = '".mysql_real_escape_string($new->getid())."';";

	$result = mysql_query($sql, $this->daoConnection->Conexion_ID);
	if (!$result){
		echo 'Ooops (update forma): '.mysql_error();
		return false;
	}
	return true;
}


function delete($forma_id){


	$sql = "DELETE FROM formas WHERE forma_id = '".mysql_real_escape_string($forma_id)."';";

	$result = mysql_query($sql, $this->daoConnection->Conexion_ID);
	if (!$result){
		echo 'Ooops (delete forma): '.mysql_error();
		return false;
	}
	return true;
}


function total(){

	$sql = "SELECT COUNT(*) FROM formas;";

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