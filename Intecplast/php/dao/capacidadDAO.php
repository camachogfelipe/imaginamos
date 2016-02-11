<?php

class capacidadDAO{

	public $daoConnection;

	function __construct(){
		
		$this->daoConnection = new DAO;
		$this->daoConnection->conectar();
	}

	function save($capacidad){
		
		$new = new capacidad();
		$new = $capacidad;

		$sql = "INSERT INTO capacidades (capacidad_id, capacidad_rango)
		VALUES (
		'".mysql_real_escape_string($new->getId())."',
		'".mysql_real_escape_string($new->getCapacidad_rango())."');";

			$result = mysql_query($sql, $this->daoConnection->Conexion_ID);
			if (!$result) {
				echo 'Ooops (save capacidad): '.mysql_error();
				return false;
			}
			return true;
	}

	function getLastId(){
		return mysql_insert_id($this->daoConnection->Conexion_ID);
	}

	function getById($capacidad_id){
		
		$sql= "SELECT * FROM capacidades WHERE capacidad_id = '".mysql_real_escape_string($capacidad_id)."';";

		$this->daoConnection->consulta($sql);
		$this->daoConnection->leerVarios();

		$numRegistros = $this->daoConnection->numregistros();

		if ($numRegistros == 0) {
			return NULL;
		}

		$i = 0;

			$new = new capacidad();

			$new->setId($this->daoConnection->ObjetoConsulta2[$i][0]);
			$new->setCapacidad_rango($this->daoConnection->ObjetoConsulta2[$i][1]);
				$new->setCapacidad_rango(str_replace('\\', '', $new->getCapacidad_rango()));

		return $new;

	}


	function gets(){

		$sql = "SELECT * FROM capacidades WHERE capacidad_id!=1 ORDER BY capacidad_rango;";

		$this->daoConnection->consulta($sql);
		$this->daoConnection->leerVarios();

		$numRegistros = $this->daoConnection->numregistros();

		if ($numRegistros == 0){
			return NULL;
		}

		$news = NULL;

		for ($i = 0; $i < $numRegistros; $i++){

			$new = new capacidad();

			$new->setId($this->daoConnection->ObjetoConsulta2[$i][0]);
			$new->setCapacidad_rango($this->daoConnection->ObjetoConsulta2[$i][1]);
	                $new->setCapacidad_rango(str_replace('\\', '', $new->getCapacidad_rango()));
			$news[$i] = $new;

		}

		return $news;

	}

	function getByClase($clase_id){


		$sql = "SELECT DISTINCT capacidades.capacidad_id, capacidades.capacidad_rango FROM capacidades, materiales, productos, formas, categorias, sublineas WHERE categorias.categoria_id=productos.categoria_id AND materiales.material_id=productos.material_id AND productos.clase_id=$clase_id AND capacidades.capacidad_id = productos.capacidad_id AND formas.forma_id=productos.forma_id AND capacidades.capacidad_id<>1 ORDER BY capacidad_rango;";

		$this->daoConnection->consulta($sql);
		$this->daoConnection->leerVarios();

		$numRegistros = $this->daoConnection->numregistros();

		if ($numRegistros == 0){
			return NULL;
		}

		$news = NULL;

		for ($i = 0; $i < $numRegistros; $i++){

			$new = new capacidad();

			$new->setId($this->daoConnection->ObjetoConsulta2[$i][0]);
			$new->setCapacidad_rango($this->daoConnection->ObjetoConsulta2[$i][1]);
	                $new->setCapacidad_rango(str_replace('\\', '', $new->getCapacidad_rango()));
			$news[$i] = $new;

		}

		return $news;

	}

	function update ($capacidad){

		$new = new capacidad();
		$new = $capacidad;

		$sql = "UPDATE  capacidades SET  
			capacidad_rango= 
				'".mysql_real_escape_string($new->getCapacidad_rango())."'
			
			WHERE capacidad_id = '".mysql_real_escape_string($new->getId())."';";

		$result = mysql_query($sql, $this->daoConnection->Conexion_ID);
		if (!$result){
			echo 'Ooops (update capacidad): '.mysql_error();
			return false;
		}
		return true;
	}


	function delete($capacidad_id){


		$sql = "DELETE FROM capacidades WHERE capacidad_id = '".mysql_real_escape_string($capacidad_id)."';";

		$result = mysql_query($sql, $this->daoConnection->Conexion_ID);
		if (!$result){
			echo 'Ooops (delete capacidad): '.mysql_error();
			return false;
		}
		return true;
	}


	function total(){

		$sql = "SELECT COUNT(*) FROM capacidades;";

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