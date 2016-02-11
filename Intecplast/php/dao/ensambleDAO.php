<?php

class ensambleDAO{

	public $daoConnection;

	function __construct(){
		$this->daoConnection = new DAO;
		$this->daoConnection->conectar();
	}

	function save($ensamble){

		$new = new ensamble();
		$new = $ensamble;

		$sql = "INSERT INTO ensambles (ensamble_id, ensamble_base, ensamble_complemento, producto_imagen
		) VALUES (
		'".mysql_real_escape_string($new->getId())."', 
		'".mysql_real_escape_string($new->getBase())."', 
		'".mysql_real_escape_string($new->getComplemento())."', 
		'".mysql_real_escape_string($new->getImagen())."');";

		$result = mysql_query($sql, $this->daoConnection->Conexion_ID);
		if (!$result){
			echo 'Ooops (save ensamble): '.mysql_error();
			return false;
		}
		return true;
	}


	function getLastId(){
		return mysql_insert_id($this->daoConnection->Conexion_ID);
	}


	function getById($ensamble_id){

		$sql = "SELECT * FROM ensambles WHERE ensamble_id = '".mysql_real_escape_string($ensamble_id)."' ;";

		$this->daoConnection->consulta($sql);
		$this->daoConnection->leerVarios();

		$numRegistros = $this->daoConnection->numregistros();

		if ($numRegistros == 0){
			return NULL;
		}

		$i = 0;

			$new = new ensamble();

			$new->setId($this->daoConnection->ObjetoConsulta2[$i][0]);
			$new->setBase($this->daoConnection->ObjetoConsulta2[$i][1]);
			$new->setComplemento($this->daoConnection->ObjetoConsulta2[$i][2]);
			$new->setImagen($this->daoConnection->ObjetoConsulta2[$i][3]);

		return $new;

	}

	function getCombinacion($base_id,$complemento_id){

		$sql = "SELECT * FROM ensambles WHERE ensamble_base = '".$base_id."' AND ensamble_complemento = '".$complemento_id."' ";

		$this->daoConnection->consulta($sql);
		$this->daoConnection->leerVarios();

		$numRegistros = $this->daoConnection->numregistros();

		if ($numRegistros == 0){
			return NULL;
		}

		$i = 0;

			$new = new ensamble();

			$new->setId($this->daoConnection->ObjetoConsulta2[$i][0]);
			$new->setBase($this->daoConnection->ObjetoConsulta2[$i][1]);
			$new->setComplemento($this->daoConnection->ObjetoConsulta2[$i][2]);
			$new->setImagen($this->daoConnection->ObjetoConsulta2[$i][3]);

		return $new;

	}


	function getByBase($base_id){


		$sql = "SELECT * FROM ensambles WHERE ensamble_base = '".$base_id."' ";

		$this->daoConnection->consulta($sql);
		$this->daoConnection->leerVarios();

		$numRegistros = $this->daoConnection->numregistros();

		if ($numRegistros == 0){
			return NULL;
		}

		$news = NULL;

		for ($i = 0; $i < $numRegistros; $i++){

			$new = new ensamble();

			$new->setId($this->daoConnection->ObjetoConsulta2[$i][0]);
			$new->setBase($this->daoConnection->ObjetoConsulta2[$i][1]);
			$new->setComplemento($this->daoConnection->ObjetoConsulta2[$i][2]);
			$new->setImagen($this->daoConnection->ObjetoConsulta2[$i][3]);
			$news[$i] = $new;

		}

		return $news;

	}

	function getByComplemento($complemento_id){


		$sql = "SELECT * FROM ensambles WHERE ensamble_complemento = '".$complemento_id."' ";

		$this->daoConnection->consulta($sql);
		$this->daoConnection->leerVarios();

		$numRegistros = $this->daoConnection->numregistros();

		if ($numRegistros == 0){
			return NULL;
		}

		$news = NULL;

		for ($i = 0; $i < $numRegistros; $i++){

			$new = new ensamble();

			$new->setId($this->daoConnection->ObjetoConsulta2[$i][0]);
			$new->setBase($this->daoConnection->ObjetoConsulta2[$i][1]);
			$new->setComplemento($this->daoConnection->ObjetoConsulta2[$i][2]);
			$new->setImagen($this->daoConnection->ObjetoConsulta2[$i][3]);
			$news[$i] = $new;

		}

		return $news;

	}


	function getByIdSearch($producto_ensamble){
	
			$sql = "SELECT ensambles.ensamble_id AS id, ensambles.ensamble_base AS ensamble_base, ensambles.ensamble_complemento AS ensamble_complemento, productos.producto_nombre AS producto_nombre  FROM ensambles, productos WHERE ensambles.ensamble_base= '$producto_ensamble' AND  ensambles.ensamble_base = productos.producto_codigo;";
			$this->daoConnection->consulta($sql);
			$this->daoConnection->leerVariosArray();

			$numRegistros = $this->daoConnection->numregistros();

			if ($numRegistros == 0){
				return NULL;
			}

			$news = NULL;

			for ($i = 0; $i < $numRegistros; $i++){

				$new = new ensamble();

				$new->setId($this->daoConnection->ObjetoConsulta2[$i]["id"]);
				$new->setBase($this->daoConnection->ObjetoConsulta2[$i]["ensamble_base"]);
				$new->setComplemento($this->daoConnection->ObjetoConsulta2[$i]["ensamble_complemento"]);
				$new->setImagen($this->daoConnection->ObjetoConsulta2[$i]["producto_nombre"]);

				$news[$i] = $new;

			}

			return $news;

		}



	function gets(){

		$sql = "SELECT * FROM ensambles ORDER BY ensamble_base;";

		$this->daoConnection->consulta($sql);
		$this->daoConnection->leerVarios();

		$numRegistros = $this->daoConnection->numregistros();

		if ($numRegistros == 0){
			return NULL;
		}

		$news = NULL;

		for ($i = 0; $i < $numRegistros; $i++){

			$new = new ensamble();

			$new->setId($this->daoConnection->ObjetoConsulta2[$i][0]);
			$new->setBase($this->daoConnection->ObjetoConsulta2[$i][1]);
			$new->setComplemento($this->daoConnection->ObjetoConsulta2[$i][2]);
			$new->setImagen($this->daoConnection->ObjetoConsulta2[$i][3]);
			$news[$i] = $new;

		}

		return $news;

	}

	function update ($ensamble){

		$new = new ensamble();
		$new = $ensamble;

		$sql = "UPDATE  ensambles SET  
			ensamble_base= 
				'".mysql_real_escape_string($new->getBase())."', 
			ensamble_complemento= 
				'".mysql_real_escape_string($new->getComplemento())."', 
			producto_imagen= 
				'".mysql_real_escape_string($new->getImagen())."'

			 WHERE ensamble_id = '".mysql_real_escape_string($new->getId())."';";

		$result = mysql_query($sql, $this->daoConnection->Conexion_ID);
		if (!$result){
			echo 'Ooops (update ensamble): '.mysql_error();
			return false;
		}
		return true;
	}


	function delete($ensamble_id){


		$sql = "DELETE FROM ensambles WHERE ensamble_id = '".mysql_real_escape_string($ensamble_id)."';";

		$result = mysql_query($sql, $this->daoConnection->Conexion_ID);
		if (!$result){
			echo 'Ooops (delete ensamble): '.mysql_error();
			return false;
		}
		return true;
	}


	function total(){

		$sql = "SELECT COUNT(*) FROM ensambles;";

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