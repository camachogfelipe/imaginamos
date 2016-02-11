<?php

class lineaDAO{

	public $daoConnection;

	function __construct(){
		
		$this->daoConnection = new DAO;
		$this->daoConnection->conectar();
	}

	function save($linea){
		
		$new = new linea();
		$new = $linea;

		$sql = "INSERT INTO lineas (linea_id, linea_nombre_e, linea_nombre_i)
		VALUES (
		'".mysql_real_escape_string($new->getid())."',
		'".mysql_real_escape_string($new->getnombre_e())."',
		'".mysql_real_escape_string($new->getnombre_i())."');";

			$result = mysql_query($sql, $this->daoConnection->Conexion_ID);
			if (!$result) {
				echo 'Ooops (save linea): '.mysql_error();
				return false;
			}
			return true;
	}

	function getLastId(){
		return mysql_insert_id($this->daoConnection->Conexion_ID);
	}

	function getById($linea_id){
		
		$sql= "SELECT * FROM lineas WHERE linea_id = '".mysql_real_escape_string($linea_id)."';";

		$this->daoConnection->consulta($sql);
		$this->daoConnection->leerVarios();

		$numRegistros = $this->daoConnection->numregistros();

		if ($numRegistros == 0) {
			return NULL;
		}

		$i = 0;

			$new = new linea();

			$new->setid($this->daoConnection->ObjetoConsulta2[$i][0]);
			$new->setnombre_e($this->daoConnection->ObjetoConsulta2[$i][1]);
			$new->setnombre_i($this->daoConnection->ObjetoConsulta2[$i][2]);
				$new->setnombre_e(str_replace('\\', '', $new->getnombre_e()));
				$new->setnombre_i(str_replace('\\', '', $new->getnombre_i()));

		return $new;

	}

	function getIdByNombre($linea_nombre_e){
		
		$sql= "SELECT linea_id FROM lineas WHERE linea_nombre_e = '".mysql_real_escape_string($linea_nombre_e)."';";

		$this->daoConnection->consulta($sql);
		$this->daoConnection->leerVarios();

		$numRegistros = $this->daoConnection->numregistros();

		if ($numRegistros == 0) {
			return NULL;
		}

		$i = 0;

			$new = new linea();

			$new->setid($this->daoConnection->ObjetoConsulta2[$i][0]);
			$new->setnombre_e($this->daoConnection->ObjetoConsulta2[$i][1]);
			$new->setnombre_i($this->daoConnection->ObjetoConsulta2[$i][2]);
				$new->setnombre_e(str_replace('\\', '', $new->getnombre_e()));
				$new->setnombre_i(str_replace('\\', '', $new->getnombre_i()));

		return $new;

	}

	function getByClase($clase_id){
		
		$sql= "SELECT DISTINCT lineas.linea_id, lineas.linea_nombre_e, lineas.linea_nombre_i FROM lineas, productos, sublineas WHERE sublineas.linea_id = lineas.linea_id AND sublineas.sublinea_id=productos.sublinea_id AND productos.clase_id = '".mysql_real_escape_string($clase_id)."' ORDER BY linea_nombre_e;";
		$this->daoConnection->consulta($sql);
		$this->daoConnection->leerVarios();

		$numRegistros = $this->daoConnection->numregistros();

		if ($numRegistros == 0){
			return NULL;
		}

		$news = NULL;

		for ($i = 0; $i < $numRegistros; $i++){

			$new = new linea();

			$new->setid($this->daoConnection->ObjetoConsulta2[$i][0]);
			$new->setnombre_e($this->daoConnection->ObjetoConsulta2[$i][1]);
			$new->setnombre_i($this->daoConnection->ObjetoConsulta2[$i][2]);
	                $new->setnombre_e(str_replace('\\', '', $new->getnombre_e()));
	                $new->setnombre_i(str_replace('\\', '', $new->getnombre_i()));
			$news[$i] = $new;

		}

		return $news;

	}

	function gets(){

		$sql = "SELECT * FROM lineas ORDER BY linea_nombre_e;";

		$this->daoConnection->consulta($sql);
		$this->daoConnection->leerVarios();

		$numRegistros = $this->daoConnection->numregistros();

		if ($numRegistros == 0){
			return NULL;
		}

		$news = NULL;

		for ($i = 0; $i < $numRegistros; $i++){

			$new = new linea();

			$new->setid($this->daoConnection->ObjetoConsulta2[$i][0]);
			$new->setnombre_e($this->daoConnection->ObjetoConsulta2[$i][1]);
			$new->setnombre_i($this->daoConnection->ObjetoConsulta2[$i][2]);
	                $new->setnombre_e(str_replace('\\', '', $new->getnombre_e()));
	                $new->setnombre_i(str_replace('\\', '', $new->getnombre_i()));
			$news[$i] = $new;

		}

		return $news;

	}

	function update ($linea){

		$new = new linea();
		$new = $linea;

		$sql = "UPDATE  lineas SET  
			linea_nombre_e= 
				'".mysql_real_escape_string($new->getnombre_e())."', 
			linea_nombre_i= 
				'".mysql_real_escape_string($new->getnombre_i())."'
			
			WHERE linea_id = '".mysql_real_escape_string($new->getid())."';";

		$result = mysql_query($sql, $this->daoConnection->Conexion_ID);
		if (!$result){
			echo 'Ooops (update linea): '.mysql_error();
			return false;
		}
		return true;
	}


	function delete($linea_id){


		$sql = "DELETE FROM lineas WHERE linea_id = '".mysql_real_escape_string($linea_id)."';";

		$result = mysql_query($sql, $this->daoConnection->Conexion_ID);
		if (!$result){
			echo 'Ooops (delete linea): '.mysql_error();
			return false;
		}
		return true;
	}


	function total(){

		$sql = "SELECT COUNT(*) FROM lineas;";

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