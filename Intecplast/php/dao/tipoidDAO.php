<?php

class tipoidDAO{

	public $daoConnection;

	function __construct(){
		
		$this->daoConnection = new DAO;
		$this->daoConnection->conectar();
	}

	function save($tipoid){
		
		$new = new tipoid();
		$new = $tipoid;

		$sql = "INSERT INTO tipoidentificacion (tipoid_cod, tipoid_nombre)
		VALUES (
		'".mysql_real_escape_string($new->getid())."',
		'".mysql_real_escape_string($new->getnombre())."');";

			$result = mysql_query($sql, $this->daoConnection->Conexion_ID);
			if (!$result) {
				echo 'Ooops (save tipoid): '.mysql_error();
				return false;
			}
			return true;
	}

	function getLastId(){
		return mysql_insert_id($this->daoConnection->Conexion_ID);
	}

	function getById($tipoid_id){
		
		$sql= "SELECT * FROM tipoidentificacion WHERE tipoid_cod = '".mysql_real_escape_string($tipoid_id)."';";

		$this->daoConnection->consulta($sql);
		$this->daoConnection->leerVarios();

		$numRegistros = $this->daoConnection->numregistros();

		if ($numRegistros == 0) {
			return NULL;
		}

		$i = 0;

			$new = new tipoid();

			$new->setid($this->daoConnection->ObjetoConsulta2[$i][0]);
			$new->setnombre($this->daoConnection->ObjetoConsulta2[$i][1]);
				$new->setnombre(str_replace('\\', '', $new->getnombre()));

		return $new;

	}

	function getIdByNombre($tipoid_nombre){
		
		$sql= "SELECT tipoid_cod FROM tipoidentificacion WHERE tipoid_nombre = '".mysql_real_escape_string($tipoid_nombre)."';";

		$this->daoConnection->consulta($sql);
		$this->daoConnection->leerVarios();

		$numRegistros = $this->daoConnection->numregistros();

		if ($numRegistros == 0) {
			return NULL;
		}

		$i = 0;

			$new = new tipoid();

			$new->setid($this->daoConnection->ObjetoConsulta2[$i][0]);
			$new->setnombre($this->daoConnection->ObjetoConsulta2[$i][1]);
				$new->setnombre(str_replace('\\', '', $new->getnombre()));

		return $new;

	}


	function gets(){

		$sql = "SELECT * FROM tipoidentificacion ORDER BY tipoid_nombre;";

		$this->daoConnection->consulta($sql);
		$this->daoConnection->leerVarios();

		$numRegistros = $this->daoConnection->numregistros();

		if ($numRegistros == 0){
			return NULL;
		}

		$news = NULL;

		for ($i = 0; $i < $numRegistros; $i++){

			$new = new tipoid();

			$new->setid($this->daoConnection->ObjetoConsulta2[$i][0]);
			$new->setnombre($this->daoConnection->ObjetoConsulta2[$i][1]);
	                $new->setnombre(str_replace('\\', '', $new->getnombre()));
			$news[$i] = $new;

		}

		return $news;

	}

	function update ($tipoid){

		$new = new tipoid();
		$new = $tipoid;

		$sql = "UPDATE  tipoidentificacion SET  
			tipoid_nombre= 
				'".mysql_real_escape_string($new->getnombre())."'
			
			WHERE tipoid_cod = '".mysql_real_escape_string($new->getid())."';";

		$result = mysql_query($sql, $this->daoConnection->Conexion_ID);
		if (!$result){
			echo 'Ooops (update tipoid): '.mysql_error();
			return false;
		}
		return true;
	}


	function delete($tipoid_id){


		$sql = "DELETE FROM tipoidentificacion WHERE tipoid_cod = '".mysql_real_escape_string($tipoid_id)."';";

		$result = mysql_query($sql, $this->daoConnection->Conexion_ID);
		if (!$result){
			echo 'Ooops (delete tipoid): '.mysql_error();
			return false;
		}
		return true;
	}


	function total(){

		$sql = "SELECT COUNT(*) FROM tipoidentificacion;";

		$this->daoConnection->consulta($sql);
		$this->daoConnection->leerVarios();

		$numRegistros = $this->daoConnection->numregistros();

		if ($numRegistros == 0){
			return 0;
		}

		return $this->daoConnection->ObjetoConsulta2[0][0];

	}

} //Fin de Clase

?>