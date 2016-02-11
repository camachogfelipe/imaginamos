<?php

class sublineaDAO{

	public $daoConnection;

	function __construct(){
		
		$this->daoConnection = new DAO;
		$this->daoConnection->conectar();
	}

	function save($sublinea){
		
		$new = new sublinea();
		$new = $sublinea;		
		$sql = "INSERT INTO sublineas (sublinea_id, sublinea_nombre_e, sublinea_nombre_i, linea_id)
		VALUES (
		'".mysql_real_escape_string($new->getid())."',
		'".mysql_real_escape_string($new->getnombre_e())."',
		'".mysql_real_escape_string($new->getnombre_i())."',
		'".mysql_real_escape_string($new->getLineaId())."');";

			$result = mysql_query($sql, $this->daoConnection->Conexion_ID);
			if (!$result) {
				echo 'Ooops (save sublinea): '.mysql_error();
				return false;
			}
			return true;
	}

	function getLastId(){
		return mysql_insert_id($this->daoConnection->Conexion_ID);
	}

	function getById($sublinea_id){
		
		$sql= "SELECT * FROM sublineas WHERE sublinea_id = '".mysql_real_escape_string($sublinea_id)."';";

		$this->daoConnection->consulta($sql);
		$this->daoConnection->leerVarios();

		$numRegistros = $this->daoConnection->numregistros();

		if ($numRegistros == 0) {
			return NULL;
		}

		$i = 0;

			$new = new sublinea();

			$new->setid($this->daoConnection->ObjetoConsulta2[$i][0]);
			$new->setnombre_e($this->daoConnection->ObjetoConsulta2[$i][1]);
			$new->setnombre_i($this->daoConnection->ObjetoConsulta2[$i][2]);
			$new->setLineaId($this->daoConnection->ObjetoConsulta2[$i][3]);
				$new->setnombre_e(str_replace('\\', '', $new->getnombre_e()));
				$new->setnombre_i(str_replace('\\', '', $new->getnombre_i()));

		return $new;

	}

	function getByNombre($sublinea_nombre_e){
		
		$sql= "SELECT * FROM sublineas WHERE sublinea_nombre_e = '".mysql_real_escape_string($sublinea_nombre_e)."';";

		$this->daoConnection->consulta($sql);
		$this->daoConnection->leerVarios();

		$numRegistros = $this->daoConnection->numregistros();

		if ($numRegistros == 0) {
			return NULL;
		}

		$i = 0;

			$new = new sublinea();

			$new->setid($this->daoConnection->ObjetoConsulta2[$i][0]);
			$new->setnombre_e($this->daoConnection->ObjetoConsulta2[$i][1]);
			$new->setnombre_i($this->daoConnection->ObjetoConsulta2[$i][2]);
			$new->setLineaId($this->daoConnection->ObjetoConsulta2[$i][3]);
				$new->setnombre_e(str_replace('\\', '', $new->getnombre_e()));
				$new->setnombre_i(str_replace('\\', '', $new->getnombre_i()));

		return $new;

	}

	function getByLinea($linea_id,$clase_id){

		$sql = "SELECT DISTINCT sublineas.sublinea_id, sublineas.sublinea_nombre_e , sublineas.sublinea_nombre_i FROM sublineas, productos WHERE sublineas.sublinea_id=productos.sublinea_id AND sublineas.linea_id = '".mysql_real_escape_string($linea_id)."' AND productos.clase_id = '".mysql_real_escape_string($clase_id)."' ORDER BY sublinea_nombre_e;";

		$this->daoConnection->consulta($sql);
		$this->daoConnection->leerVarios();

		$numRegistros = $this->daoConnection->numregistros();

		if ($numRegistros == 0){
			return NULL;
		}

		$news = NULL;

		for ($i = 0; $i < $numRegistros; $i++){

			$new = new sublinea();

			$new->setid($this->daoConnection->ObjetoConsulta2[$i][0]);
			$new->setnombre_e($this->daoConnection->ObjetoConsulta2[$i][1]);
			$new->setnombre_i($this->daoConnection->ObjetoConsulta2[$i][2]);
			$new->setLineaId($this->daoConnection->ObjetoConsulta2[$i][3]);
	                $new->setnombre_e(str_replace('\\', '', $new->getnombre_e()));
	                $new->setnombre_i(str_replace('\\', '', $new->getnombre_i()));
			$news[$i] = $new;

		}

		return $news;

	}

	function gets($clase){		
		$sql = "SELECT * FROM sublineas INNER JOIN productos ON sublineas.sublinea_id = productos.sublinea_id WHERE productos.clase_id ='".$clase."' GROUP BY sublineas.sublinea_id ORDER BY sublinea_nombre_e;";
		//$sql = "SELECT * FROM sublineas ORDER BY sublinea_nombre_e;";

		$this->daoConnection->consulta($sql);
		$this->daoConnection->leerVarios();

		$numRegistros = $this->daoConnection->numregistros();

		if ($numRegistros == 0){
			return NULL;
		}

		$news = NULL;

		for ($i = 0; $i < $numRegistros; $i++){

			$new = new sublinea();

			$new->setid($this->daoConnection->ObjetoConsulta2[$i][0]);
			$new->setnombre_e($this->daoConnection->ObjetoConsulta2[$i][1]);
			$new->setnombre_i($this->daoConnection->ObjetoConsulta2[$i][2]);
			$new->setLineaId($this->daoConnection->ObjetoConsulta2[$i][3]);
	                $new->setnombre_e(str_replace('\\', '', $new->getnombre_e()));
	                $new->setnombre_i(str_replace('\\', '', $new->getnombre_i()));
			$news[$i] = $new;

		}

		return $news;

	}

	function getsAdmin(){		
		$sql = "SELECT * FROM sublineas ORDER BY sublinea_nombre_e;";

		$this->daoConnection->consulta($sql);
		$this->daoConnection->leerVarios();

		$numRegistros = $this->daoConnection->numregistros();

		if ($numRegistros == 0){
			return NULL;
		}

		$news = NULL;

		for ($i = 0; $i < $numRegistros; $i++){

			$new = new sublinea();

			$new->setid($this->daoConnection->ObjetoConsulta2[$i][0]);
			$new->setnombre_e($this->daoConnection->ObjetoConsulta2[$i][1]);
			$new->setnombre_i($this->daoConnection->ObjetoConsulta2[$i][2]);
			$new->setLineaId($this->daoConnection->ObjetoConsulta2[$i][3]);
	                $new->setnombre_e(str_replace('\\', '', $new->getnombre_e()));
	                $new->setnombre_i(str_replace('\\', '', $new->getnombre_i()));
			$news[$i] = $new;

		}

		return $news;

	}


	function buscarLineas($linea_id){

		$sql = "SELECT * FROM sublineas WHERE linea_id = '".$linea_id."' ;";

		$this->daoConnection->consulta($sql);
		$this->daoConnection->leerVarios();

		$numRegistros = $this->daoConnection->numregistros();

		if ($numRegistros == 0){
			return NULL;
		}

		$news = NULL;

		for ($i = 0; $i < $numRegistros; $i++){

			$new = new sublinea();

			$new->setid($this->daoConnection->ObjetoConsulta2[$i][0]);
			$new->setnombre_e($this->daoConnection->ObjetoConsulta2[$i][1]);
			$new->setnombre_i($this->daoConnection->ObjetoConsulta2[$i][2]);
			$new->setLineaId($this->daoConnection->ObjetoConsulta2[$i][3]);
	                $new->setnombre_e(str_replace('\\', '', $new->getnombre_e()));
	                $new->setnombre_i(str_replace('\\', '', $new->getnombre_i()));
			$news[$i] = $new;

		}

		return $news;

	}

	function update ($sublinea){

		$new = new sublinea();
		$new = $sublinea;

		$sql = "UPDATE  sublineas SET  
			sublinea_nombre_e= 
				'".mysql_real_escape_string($new->getnombre_e())."', 
			sublinea_nombre_i= 
				'".mysql_real_escape_string($new->getnombre_i())."',
			linea_id= 
				'".mysql_real_escape_string($new->getLineaId())."'
			
			WHERE sublinea_id = '".mysql_real_escape_string($new->getid())."';";

		$result = mysql_query($sql, $this->daoConnection->Conexion_ID);
		if (!$result){
			echo 'Ooops (update sublinea): '.mysql_error();
			return false;
		}
		return true;
	}


	function delete($sublinea_id){


		$sql = "DELETE FROM sublineas WHERE sublinea_id = '".mysql_real_escape_string($sublinea_id)."';";

		$result = mysql_query($sql, $this->daoConnection->Conexion_ID);
		if (!$result){
			echo 'Ooops (delete sublinea): '.mysql_error();
			return false;
		}
		return true;
	}


	function total(){

		$sql = "SELECT COUNT(*) FROM sublineas;";

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