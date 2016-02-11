<?php

class aspiracionDAO{

	public $daoConnection;

	function __construct(){
		$this->daoConnection = new DAO;
		$this->daoConnection->conectar();
	}

	function save($aspiracion){

		$new = new aspiracion();
		$new = $aspiracion;

		$sql = "INSERT INTO aspiraciones (aspiracion_id, aspiracion_valor) 
		VALUES (
		'".mysql_real_escape_string($new->getId())."', 
		'".mysql_real_escape_string($new->getValor())."');"; 

			$result = mysql_query($sql, $this->daoConnection->Conexion_ID);
			if (!$result){
				echo 'Ooops (save aspiracion): '.mysql_error();
				return false;
			}
			return true;
	}


	function getLastId(){
		return mysql_insert_id($this->daoConnection->Conexion_ID);
	}


	function getById($aspiracion_id){

		$sql = "SELECT * FROM aspiraciones WHERE aspiracion_id = '".mysql_real_escape_string($aspiracion_id)."' ;";

		$this->daoConnection->consulta($sql);
		$this->daoConnection->leerVarios();

		$numRegistros = $this->daoConnection->numregistros();

		if ($numRegistros == 0){
			return NULL;
		}

		$i = 0;

			$new = new aspiracion();

			$new->setId($this->daoConnection->ObjetoConsulta2[$i][0]);
			$new->setValor($this->daoConnection->ObjetoConsulta2[$i][1]);

		return $new;

	}


	function gets(){

		$sql = "SELECT * FROM aspiraciones ORDER BY aspiracion_id;";

		$this->daoConnection->consulta($sql);
		$this->daoConnection->leerVarios();

		$numRegistros = $this->daoConnection->numregistros();

		if ($numRegistros == 0){
			return NULL;
		}

		$news = NULL;

		for ($i = 0; $i < $numRegistros; $i++){

			$new = new aspiracion();

			$new->setId($this->daoConnection->ObjetoConsulta2[$i][0]);
			$new->setValor($this->daoConnection->ObjetoConsulta2[$i][1]);

			$news[$i] = $new;

		}

		return $news;

	}

	function update ($aspiracion){

		$new = new aspiracion();
		$new = $aspiracion;

		$sql = "UPDATE  aspiraciones SET  
			aspiracion_valor= 
				'".mysql_real_escape_string($new->getValor())."'

			 WHERE aspiracion_id = '".mysql_real_escape_string($new->getId())."';";

		$result = mysql_query($sql, $this->daoConnection->Conexion_ID);
		if (!$result){
			echo 'Ooops (update aspiracion): '.mysql_error();
			return false;
		}
		return true;
	}


	function delete($aspiracion_id){


		$sql = "DELETE FROM aspiraciones WHERE aspiracion_id = '".mysql_real_escape_string($aspiracion_id)."';";

		$result = mysql_query($sql, $this->daoConnection->Conexion_ID);
		if (!$result){
			echo 'Ooops (delete aspiracion): '.mysql_error();
			return false;
		}
		return true;
	}


	function total(){

		$sql = "SELECT COUNT(*) FROM aspiraciones;";

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