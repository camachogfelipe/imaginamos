<?php

class ciudadDAO{

	public $daoConnection;

	function __construct(){
		
		$this->daoConnection = new DAO;
		$this->daoConnection->conectar();
	}

	function save($ciudad){
		
		$new = new ciudad();
		$new = $ciudad;

		$sql = "INSERT INTO ciudades (ciudad_id, ciudad_nombre_e, ciudad_nombre_i, pais_id)
		VALUES (
		'".mysql_real_escape_string($new->getid())."',
		'".mysql_real_escape_string($new->getnombre_e())."',
		'".mysql_real_escape_string($new->getnombre_i())."',
		'".mysql_real_escape_string($new->getpaisId())."');";

			$result = mysql_query($sql, $this->daoConnection->Conexion_ID);
			if (!$result) {
				echo 'Ooops (save ciudad): '.mysql_error();
				return false;
			}
			return true;
	}

	function getLastId(){
		return mysql_insert_id($this->daoConnection->Conexion_ID);
	}

	function getById($ciudad_id){
		
		$sql= "SELECT * FROM ciudades WHERE ciudad_id = '".mysql_real_escape_string($ciudad_id)."';";

		$this->daoConnection->consulta($sql);
		$this->daoConnection->leerVarios();

		$numRegistros = $this->daoConnection->numregistros();

		if ($numRegistros == 0) {
			return NULL;
		}

		$i = 0;

			$new = new ciudad();

			$new->setid($this->daoConnection->ObjetoConsulta2[$i][0]);
			$new->setnombre_e($this->daoConnection->ObjetoConsulta2[$i][1]);
			$new->setnombre_i($this->daoConnection->ObjetoConsulta2[$i][2]);
			$new->setpaisId($this->daoConnection->ObjetoConsulta2[$i][3]);
				$new->setnombre_e(str_replace('\\', '', $new->getnombre_e()));
				$new->setnombre_i(str_replace('\\', '', $new->getnombre_i()));

		return $new;

	}

	function getByNombre($ciudad_nombre_e){
		
		$sql= "SELECT * FROM ciudades WHERE ciudad_nombre_e = '".mysql_real_escape_string($ciudad_nombre_e)."';";

		$this->daoConnection->consulta($sql);
		$this->daoConnection->leerVarios();

		$numRegistros = $this->daoConnection->numregistros();

		if ($numRegistros == 0) {
			return NULL;
		}

		$i = 0;

			$new = new ciudad();

			$new->setid($this->daoConnection->ObjetoConsulta2[$i][0]);
			$new->setnombre_e($this->daoConnection->ObjetoConsulta2[$i][1]);
			$new->setnombre_i($this->daoConnection->ObjetoConsulta2[$i][2]);
			$new->setpaisId($this->daoConnection->ObjetoConsulta2[$i][3]);
				$new->setnombre_e(str_replace('\\', '', $new->getnombre_e()));
				$new->setnombre_i(str_replace('\\', '', $new->getnombre_i()));

		return $new;

	}


	function getByPais($pais_id){

		$sql = "SELECT * FROM ciudades WHERE pais_id = $pais_id ORDER BY ciudad_nombre_e;";

		$this->daoConnection->consulta($sql);
		$this->daoConnection->leerVarios();

		$numRegistros = $this->daoConnection->numregistros();

		if ($numRegistros == 0){
			return NULL;
		}

		$news = NULL;

		for ($i = 0; $i < $numRegistros; $i++){

			$new = new ciudad();

			$new->setid($this->daoConnection->ObjetoConsulta2[$i][0]);
			$new->setnombre_e($this->daoConnection->ObjetoConsulta2[$i][1]);
			$new->setnombre_i($this->daoConnection->ObjetoConsulta2[$i][2]);
			$new->setpaisId($this->daoConnection->ObjetoConsulta2[$i][3]);
	                $new->setnombre_e(str_replace('\\', '', $new->getnombre_e()));
	                $new->setnombre_i(str_replace('\\', '', $new->getnombre_i()));
			$news[$i] = $new;

		}

		return $news;

	}


	function gets(){

		$sql = "SELECT * FROM ciudades ORDER BY ciudad_nombre_e;";

		$this->daoConnection->consulta($sql);
		$this->daoConnection->leerVarios();

		$numRegistros = $this->daoConnection->numregistros();

		if ($numRegistros == 0){
			return NULL;
		}

		$news = NULL;

		for ($i = 0; $i < $numRegistros; $i++){

			$new = new ciudad();

			$new->setid($this->daoConnection->ObjetoConsulta2[$i][0]);
			$new->setnombre_e($this->daoConnection->ObjetoConsulta2[$i][1]);
			$new->setnombre_i($this->daoConnection->ObjetoConsulta2[$i][2]);
			$new->setpaisId($this->daoConnection->ObjetoConsulta2[$i][3]);
	                $new->setnombre_e(str_replace('\\', '', $new->getnombre_e()));
	                $new->setnombre_i(str_replace('\\', '', $new->getnombre_i()));
			$news[$i] = $new;

		}

		return $news;

	}

	function update ($ciudad){

		$new = new ciudad();
		$new = $ciudad;

		$sql = "UPDATE  ciudades SET  
			ciudad_nombre_e= 
				'".mysql_real_escape_string($new->getnombre_e())."', 
			ciudad_nombre_i= 
				'".mysql_real_escape_string($new->getnombre_i())."',
			pais_id= 
				'".mysql_real_escape_string($new->getpaisId())."'
			
			WHERE ciudad_id = '".mysql_real_escape_string($new->getid())."';";

		$result = mysql_query($sql, $this->daoConnection->Conexion_ID);
		if (!$result){
			echo 'Ooops (update ciudad): '.mysql_error();
			return false;
		}
		return true;
	}


	function delete($ciudad_id){


		$sql = "DELETE FROM ciudades WHERE ciudad_id = '".mysql_real_escape_string($ciudad_id)."';";

		$result = mysql_query($sql, $this->daoConnection->Conexion_ID);
		if (!$result){
			echo 'Ooops (delete ciudad): '.mysql_error();
			return false;
		}
		return true;
	}


	function total(){

		$sql = "SELECT COUNT(*) FROM ciudades;";

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