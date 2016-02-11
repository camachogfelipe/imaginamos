<?php

class unidadDAO{

	public $daoConnection;

	function __construct(){
		
		$this->daoConnection = new DAO;
		$this->daoConnection->conectar();
	}

	function save($unidad){
		
		$new = new unidad();
		$new = $unidad;

		$sql = "INSERT INTO unidades (unidad_id, unidad_nombre)
		VALUES (
		'".mysql_real_escape_string($new->getid())."',
		'".mysql_real_escape_string($new->getnombre())."');";

			$result = mysql_query($sql, $this->daoConnection->Conexion_ID);
			if (!$result) {
				echo 'Ooops (save unidad): '.mysql_error();
				return false;
			}
			return true;
	}

	function getLastId(){
		return mysql_insert_id($this->daoConnection->Conexion_ID);
	}

	function getById($unidad_id){
		
		$sql= "SELECT * FROM unidades WHERE unidad_id = '".mysql_real_escape_string($unidad_id)."';";

		$this->daoConnection->consulta($sql);
		$this->daoConnection->leerVarios();

		$numRegistros = $this->daoConnection->numregistros();

		if ($numRegistros == 0) {
			return NULL;
		}

		$i = 0;

			$new = new unidad();

			$new->setid($this->daoConnection->ObjetoConsulta2[$i][0]);
			$new->setnombre($this->daoConnection->ObjetoConsulta2[$i][1]);
				$new->setnombre(str_replace('\\', '', $new->getnombre()));

		return $new;

	}



	function getByNombre($unidad_nombre){
		
		$sql= "SELECT * FROM unidades WHERE unidad_nombre = '".mysql_real_escape_string($unidad_nombre)."';";

		$this->daoConnection->consulta($sql);
		$this->daoConnection->leerVarios();

		$numRegistros = $this->daoConnection->numregistros();

		if ($numRegistros == 0) {
			return NULL;
		}

		$i = 0;

			$new = new unidad();

			$new->setid($this->daoConnection->ObjetoConsulta2[$i][0]);
			$new->setnombre($this->daoConnection->ObjetoConsulta2[$i][1]);
				$new->setnombre(str_replace('\\', '', $new->getnombre()));

		return $new;

	}

	function gets(){

		$sql = "SELECT * FROM unidades WHERE unidad_id!=1 ORDER BY unidad_nombre;";

		$this->daoConnection->consulta($sql);
		$this->daoConnection->leerVarios();

		$numRegistros = $this->daoConnection->numregistros();

		if ($numRegistros == 0){
			return NULL;
		}

		$news = NULL;

		for ($i = 0; $i < $numRegistros; $i++){

			$new = new unidad();

			$new->setid($this->daoConnection->ObjetoConsulta2[$i][0]);
			$new->setnombre($this->daoConnection->ObjetoConsulta2[$i][1]);
	                $new->setnombre(str_replace('\\', '', $new->getnombre()));
			$news[$i] = $new;

		}

		return $news;

	}

	function update ($unidad){

		$new = new unidad();
		$new = $unidad;

		$sql = "UPDATE  unidades SET  
			unidad_nombre= 
				'".mysql_real_escape_string($new->getnombre())."'
			
			WHERE unidad_id = '".mysql_real_escape_string($new->getid())."';";

		$result = mysql_query($sql, $this->daoConnection->Conexion_ID);
		if (!$result){
			echo 'Ooops (update unidad): '.mysql_error();
			return false;
		}
		return true;
	}


	function delete($unidad_id){


		$sql = "DELETE FROM unidades WHERE unidad_id = '".mysql_real_escape_string($unidad_id)."';";

		$result = mysql_query($sql, $this->daoConnection->Conexion_ID);
		if (!$result){
			echo 'Ooops (delete unidad): '.mysql_error();
			return false;
		}
		return true;
	}


	function total(){

		$sql = "SELECT COUNT(*) FROM unidades;";

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