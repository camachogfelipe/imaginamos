<?php

class paisDAO{

	public $daoConnection;

	function __construct(){
		
		$this->daoConnection = new DAO;
		$this->daoConnection->conectar();
	}

	function save($pais){
		
		$new = new pais();
		$new = $pais;

		$sql = "INSERT INTO paises (pais_id, pais_nombre_e, pais_nombre_i)
		VALUES (
		'".mysql_real_escape_string($new->getid())."',
		'".mysql_real_escape_string($new->getnombre_e())."',
		'".mysql_real_escape_string($new->getnombre_i())."');";

			$result = mysql_query($sql, $this->daoConnection->Conexion_ID);
			if (!$result) {
				echo 'Ooops (save pais): '.mysql_error();
				return false;
			}
			return true;
	}

	function getLastId(){
		return mysql_insert_id($this->daoConnection->Conexion_ID);
	}

	function getById($pais_id){
		
		$sql= "SELECT * FROM paises WHERE pais_id = '".mysql_real_escape_string($pais_id)."';";

		$this->daoConnection->consulta($sql);
		$this->daoConnection->leerVarios();

		$numRegistros = $this->daoConnection->numregistros();

		if ($numRegistros == 0) {
			return NULL;
		}

		$i = 0;

			$new = new pais();

			$new->setid($this->daoConnection->ObjetoConsulta2[$i][0]);
			$new->setnombre_e($this->daoConnection->ObjetoConsulta2[$i][1]);
			$new->setnombre_i($this->daoConnection->ObjetoConsulta2[$i][2]);
				$new->setnombre_e(str_replace('\\', '', $new->getnombre_e()));
				$new->setnombre_i(str_replace('\\', '', $new->getnombre_i()));

		return $new;

	}

	function getIdByNombre($pais_nombre_e){
		
		$sql= "SELECT pais_id FROM paises WHERE pais_nombre_e = '".mysql_real_escape_string($pais_nombre_e)."';";

		$this->daoConnection->consulta($sql);
		$this->daoConnection->leerVarios();

		$numRegistros = $this->daoConnection->numregistros();

		if ($numRegistros == 0) {
			return NULL;
		}

		$i = 0;

			$new = new pais();

			$new->setid($this->daoConnection->ObjetoConsulta2[$i][0]);
			$new->setnombre_e($this->daoConnection->ObjetoConsulta2[$i][1]);
			$new->setnombre_i($this->daoConnection->ObjetoConsulta2[$i][2]);
				$new->setnombre_e(str_replace('\\', '', $new->getnombre_e()));
				$new->setnombre_i(str_replace('\\', '', $new->getnombre_i()));

		return $new;

	}


	function gets(){

		$sql = "SELECT * FROM paises ORDER BY pais_nombre_e;";

		$this->daoConnection->consulta($sql);
		$this->daoConnection->leerVarios();

		$numRegistros = $this->daoConnection->numregistros();

		if ($numRegistros == 0){
			return NULL;
		}

		$news = NULL;

		for ($i = 0; $i < $numRegistros; $i++){

			$new = new pais();

			$new->setid($this->daoConnection->ObjetoConsulta2[$i][0]);
			$new->setnombre_e($this->daoConnection->ObjetoConsulta2[$i][1]);
			$new->setnombre_i($this->daoConnection->ObjetoConsulta2[$i][2]);
	                $new->setnombre_e(str_replace('\\', '', $new->getnombre_e()));
	                $new->setnombre_i(str_replace('\\', '', $new->getnombre_i()));
			$news[$i] = $new;

		}

		return $news;

	}

	function update ($pais){

		$new = new pais();
		$new = $pais;

		$sql = "UPDATE  paises SET  
			pais_nombre_e= 
				'".mysql_real_escape_string($new->getnombre_e())."', 
			pais_nombre_i= 
				'".mysql_real_escape_string($new->getnombre_i())."'
			
			WHERE pais_id = '".mysql_real_escape_string($new->getid())."';";

		$result = mysql_query($sql, $this->daoConnection->Conexion_ID);
		if (!$result){
			echo 'Ooops (update pais): '.mysql_error();
			return false;
		}
		return true;
	}


	function delete($pais_id){


		$sql = "DELETE FROM paises WHERE pais_id = '".mysql_real_escape_string($pais_id)."';";

		$result = mysql_query($sql, $this->daoConnection->Conexion_ID);
		if (!$result){
			echo 'Ooops (delete pais): '.mysql_error();
			return false;
		}
		return true;
	}


	function total(){

		$sql = "SELECT COUNT(*) FROM paises;";

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