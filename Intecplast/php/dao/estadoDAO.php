<?php

class estadoDAO{

	public $daoConnection;

	function __construct(){
		
		$this->daoConnection = new DAO;
		$this->daoConnection->conectar();
	}

	function save($estado){
		
		$new = new estado();
		$new = $estado;

		$sql = "INSERT INTO estados (estado_id, estado_nombre)
		VALUES (
		'".mysql_real_escape_string($new->getid())."',
		'".mysql_real_escape_string($new->getnombre())."');";

			$result = mysql_query($sql, $this->daoConnection->Conexion_ID);
			if (!$result) {
				echo 'Ooops (save estado): '.mysql_error();
				return false;
			}
			return true;
	}

	function getLastId(){
		return mysql_insert_id($this->daoConnection->Conexion_ID);
	}

	function getById($estado_id){
		
		$sql= "SELECT * FROM estados WHERE estado_id = '".mysql_real_escape_string($estado_id)."';";

		$this->daoConnection->consulta($sql);
		$this->daoConnection->leerVarios();

		$numRegistros = $this->daoConnection->numregistros();

		if ($numRegistros == 0) {
			return NULL;
		}

		$i = 0;

			$new = new estado();

			$new->setid($this->daoConnection->ObjetoConsulta2[$i][0]);
			$new->setnombre($this->daoConnection->ObjetoConsulta2[$i][1]);
				$new->setnombre(str_replace('\\', '', $new->getnombre()));

		return $new;

	}

	function getIdByNombre($estado_nombre){
		
		$sql= "SELECT estado_id FROM estados WHERE estado_nombre = '".mysql_real_escape_string($estado_nombre)."';";

		$this->daoConnection->consulta($sql);
		$this->daoConnection->leerVarios();

		$numRegistros = $this->daoConnection->numregistros();

		if ($numRegistros == 0) {
			return NULL;
		}

		$i = 0;

			$new = new estado();

			$new->setid($this->daoConnection->ObjetoConsulta2[$i][0]);
			$new->setnombre($this->daoConnection->ObjetoConsulta2[$i][1]);
				$new->setnombre(str_replace('\\', '', $new->getnombre()));

		return $new;

	}


	function gets(){

		$sql = "SELECT * FROM estados ORDER BY estado_nombre;";

		$this->daoConnection->consulta($sql);
		$this->daoConnection->leerVarios();

		$numRegistros = $this->daoConnection->numregistros();

		if ($numRegistros == 0){
			return NULL;
		}

		$news = NULL;

		for ($i = 0; $i < $numRegistros; $i++){

			$new = new estado();

			$new->setid($this->daoConnection->ObjetoConsulta2[$i][0]);
			$new->setnombre($this->daoConnection->ObjetoConsulta2[$i][1]);
	                $new->setnombre(str_replace('\\', '', $new->getnombre()));
			$news[$i] = $new;

		}

		return $news;

	}

	function update ($estado){

		$new = new estado();
		$new = $estado;

		$sql = "UPDATE  estados SET  
			estado_nombre= 
				'".mysql_real_escape_string($new->getnombre())."'
			
			WHERE estado_id = '".mysql_real_escape_string($new->getid())."';";

		$result = mysql_query($sql, $this->daoConnection->Conexion_ID);
		if (!$result){
			echo 'Ooops (update estado): '.mysql_error();
			return false;
		}
		return true;
	}


	function delete($estado_id){


		$sql = "DELETE FROM estados WHERE estado_id = '".mysql_real_escape_string($estado_id)."';";

		$result = mysql_query($sql, $this->daoConnection->Conexion_ID);
		if (!$result){
			echo 'Ooops (delete estado): '.mysql_error();
			return false;
		}
		return true;
	}


	function total(){

		$sql = "SELECT COUNT(*) FROM estados;";

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