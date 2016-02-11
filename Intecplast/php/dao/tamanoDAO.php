<?php

class tamanoDAO{

	public $daoConnection;

	function __construct(){
		
		$this->daoConnection = new DAO;
		$this->daoConnection->conectar();
	}

	function save($tamano){
		
		$new = new tamano();
		$new = $tamano;

		$sql = "INSERT INTO tamanos (tamano_id, tamano_nombre_e, tamano_nombre_i)
		VALUES (
		'".mysql_real_escape_string($new->getid())."',
		'".mysql_real_escape_string($new->getnombre_e())."',
		'".mysql_real_escape_string($new->getnombre_i())."');";

			$result = mysql_query($sql, $this->daoConnection->Conexion_ID);
			if (!$result) {
				echo 'Ooops (save tamano): '.mysql_error();
				return false;
			}
			return true;
	}

	function getLastId(){
		return mysql_insert_id($this->daoConnection->Conexion_ID);
	}

	function getById($tamano_id){
		
		$sql= "SELECT * FROM tamanos WHERE tamano_id = '".mysql_real_escape_string($tamano_id)."';";

		$this->daoConnection->consulta($sql);
		$this->daoConnection->leerVarios();

		$numRegistros = $this->daoConnection->numregistros();

		if ($numRegistros == 0) {
			return NULL;
		}

		$i = 0;

			$new = new tamano();

			$new->setid($this->daoConnection->ObjetoConsulta2[$i][0]);
			$new->setnombre_e($this->daoConnection->ObjetoConsulta2[$i][1]);
			$new->setnombre_i($this->daoConnection->ObjetoConsulta2[$i][2]);
				$new->setnombre_e(str_replace('\\', '', $new->getnombre_e()));
				$new->setnombre_i(str_replace('\\', '', $new->getnombre_i()));

		return $new;

	}

	function getByNombre($tamano_nombre_e){
		
		$sql= "SELECT * FROM tamanos WHERE tamano_nombre_e = '".mysql_real_escape_string($tamano_nombre_e)."';";

		$this->daoConnection->consulta($sql);
		$this->daoConnection->leerVarios();

		$numRegistros = $this->daoConnection->numregistros();

		if ($numRegistros == 0) {
			return NULL;
		}

		$i = 0;

			$new = new tamano();

			$new->setid($this->daoConnection->ObjetoConsulta2[$i][0]);
			$new->setnombre_e($this->daoConnection->ObjetoConsulta2[$i][1]);
			$new->setnombre_i($this->daoConnection->ObjetoConsulta2[$i][2]);
				$new->setnombre_e(str_replace('\\', '', $new->getnombre_e()));
				$new->setnombre_i(str_replace('\\', '', $new->getnombre_i()));

		return $new;

	}

	function getByClase($clase_id){
		$sql = "SELECT DISTINCT tamanos.tamano_id, tamanos.tamano_nombre_e, tamanos.tamano_nombre_i FROM tamanos, productos, categorias, sublineas WHERE categorias.categoria_id=productos.categoria_id AND tamanos.tamano_id=productos.tamano_id AND productos.clase_id=$clase_id ORDER BY tamano_nombre_e;";
		$this->daoConnection->consulta($sql);
		$this->daoConnection->leerVarios();

		$numRegistros = $this->daoConnection->numregistros();

		if ($numRegistros == 0){
			return NULL;
		}

		$news = NULL;

		for ($i = 0; $i < $numRegistros; $i++){

			$new = new tamano();

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

		$sql = "SELECT * FROM tamanos WHERE tamano_id!=1 ORDER BY tamano_nombre_e;";

		$this->daoConnection->consulta($sql);
		$this->daoConnection->leerVarios();

		$numRegistros = $this->daoConnection->numregistros();

		if ($numRegistros == 0){
			return NULL;
		}

		$news = NULL;

		for ($i = 0; $i < $numRegistros; $i++){

			$new = new tamano();

			$new->setid($this->daoConnection->ObjetoConsulta2[$i][0]);
			$new->setnombre_e($this->daoConnection->ObjetoConsulta2[$i][1]);
			$new->setnombre_i($this->daoConnection->ObjetoConsulta2[$i][2]);
	                $new->setnombre_e(str_replace('\\', '', $new->getnombre_e()));
	                $new->setnombre_i(str_replace('\\', '', $new->getnombre_i()));
			$news[$i] = $new;

		}

		return $news;

	}

	function update ($tamano){

		$new = new tamano();
		$new = $tamano;

		$sql = "UPDATE  tamanos SET  
			tamano_nombre_e= 
				'".mysql_real_escape_string($new->getnombre_e())."', 
			tamano_nombre_i= 
				'".mysql_real_escape_string($new->getnombre_i())."'
			
			WHERE tamano_id = '".mysql_real_escape_string($new->getid())."';";

		$result = mysql_query($sql, $this->daoConnection->Conexion_ID);
		if (!$result){
			echo 'Ooops (update tamano): '.mysql_error();
			return false;
		}
		return true;
	}


	function delete($tamano_id){


		$sql = "DELETE FROM tamanos WHERE tamano_id = '".mysql_real_escape_string($tamano_id)."';";

		$result = mysql_query($sql, $this->daoConnection->Conexion_ID);
		if (!$result){
			echo 'Ooops (delete tamano): '.mysql_error();
			return false;
		}
		return true;
	}


	function total(){

		$sql = "SELECT COUNT(*) FROM tamanos;";

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