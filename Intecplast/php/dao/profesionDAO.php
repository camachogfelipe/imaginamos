<?php

class profesionDAO{

	public $daoConnection;

	function __construct(){
		$this->daoConnection = new DAO;
		$this->daoConnection->conectar();
	}

	function save($profesion){

		$new = new profesion();
		$new = $profesion;

		$sql = "INSERT INTO profesiones (profesion_id, profesion_nombre_e, profesion_nombre_i) 
		VALUES (
		'".mysql_real_escape_string($new->getId())."', 
		'".mysql_real_escape_string($new->getNombre_e())."', 
		'".mysql_real_escape_string($new->getNombre_i())."');"; 

			$result = mysql_query($sql, $this->daoConnection->Conexion_ID);
			if (!$result){
				echo 'Ooops (save profesion): '.mysql_error();
				return false;
			}
			return true;
	}


	function getLastId(){
		return mysql_insert_id($this->daoConnection->Conexion_ID);
	}


	function getById($profesion_id){

		$sql = "SELECT * FROM profesiones WHERE profesion_id = '".mysql_real_escape_string($profesion_id)."' ;";

		$this->daoConnection->consulta($sql);
		$this->daoConnection->leerVarios();

		$numRegistros = $this->daoConnection->numregistros();

		if ($numRegistros == 0){
			return NULL;
		}

		$i = 0;

			$new = new profesion();

			$new->setId($this->daoConnection->ObjetoConsulta2[$i][0]);
			$new->setNombre_e($this->daoConnection->ObjetoConsulta2[$i][1]);
			$new->setNombre_i($this->daoConnection->ObjetoConsulta2[$i][2]);
	                $new->setNombre_e(str_replace('\\', '', $new->getNombre_e()));
	                $new->setNombre_i(str_replace('\\', '', $new->getNombre_i()));
		return $new;

	}

	function getByNombre($profesion_nombre_e){
		
		$sql= "SELECT * FROM profesiones WHERE profesion_nombre_e = '".mysql_real_escape_string($profesion_nombre_e)."';";

		$this->daoConnection->consulta($sql);
		$this->daoConnection->leerVarios();

		$numRegistros = $this->daoConnection->numregistros();

		if ($numRegistros == 0) {
			return NULL;
		}

		$i = 0;

			$new = new profesion();

			$new->setId($this->daoConnection->ObjetoConsulta2[$i][0]);
			$new->setNombre_e($this->daoConnection->ObjetoConsulta2[$i][1]);
			$new->setNombre_i($this->daoConnection->ObjetoConsulta2[$i][2]);
	                $new->setNombre_e(str_replace('\\', '', $new->getNombre_e()));
	                $new->setNombre_i(str_replace('\\', '', $new->getNombre_i()));

		return $new;

	}


	function gets(){

		$sql = "SELECT * FROM profesiones ORDER BY profesion_nombre_e;";

		$this->daoConnection->consulta($sql);
		$this->daoConnection->leerVarios();

		$numRegistros = $this->daoConnection->numregistros();

		if ($numRegistros == 0){
			return NULL;
		}

		$news = NULL;

		for ($i = 0; $i < $numRegistros; $i++){

			$new = new profesion();


			$new->setId($this->daoConnection->ObjetoConsulta2[$i][0]);
			$new->setNombre_e($this->daoConnection->ObjetoConsulta2[$i][1]);
			$new->setNombre_i($this->daoConnection->ObjetoConsulta2[$i][2]);
	                $new->setNombre_e(str_replace('\\', '', $new->getNombre_e()));
	                $new->setNombre_i(str_replace('\\', '', $new->getNombre_i()));

			$news[$i] = $new;

		}

		return $news;

	}

	function update ($profesion){

		$new = new profesion();
		$new = $profesion;

		$sql = "UPDATE  profesiones SET  
			profesion_nombre_e= 
				'".mysql_real_escape_string($new->getNombre_e())."', 
			profesion_nombre_i= 
				'".mysql_real_escape_string($new->getNombre_i())."'

			 WHERE profesion_id = '".mysql_real_escape_string($new->getId())."';";

		$result = mysql_query($sql, $this->daoConnection->Conexion_ID);
		if (!$result){
			echo 'Ooops (update profesion): '.mysql_error();
			return false;
		}
		return true;
	}


	function delete($profesion_id){


		$sql = "DELETE FROM profesiones WHERE profesion_id = '".mysql_real_escape_string($profesion_id)."';";

		$result = mysql_query($sql, $this->daoConnection->Conexion_ID);
		if (!$result){
			echo 'Ooops (delete profesion): '.mysql_error();
			return false;
		}
		return true;
	}


	function total(){

		$sql = "SELECT COUNT(*) FROM profesiones;";

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