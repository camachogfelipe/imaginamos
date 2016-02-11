<?php

class bocaDAO{

	public $daoConnection;

	function __construct(){
		
		$this->daoConnection = new DAO;
		$this->daoConnection->conectar();
	}

	function save($boca){
		
		$new = new boca();
		$new = $boca;

		$sql = "INSERT INTO bocas (boca_id, boca)
		VALUES (
		'".mysql_real_escape_string($new->getId())."',
		'".mysql_real_escape_string($new->getBoca())."');";

			$result = mysql_query($sql, $this->daoConnection->Conexion_ID);
			if (!$result) {
				echo 'Ooops (save boca): '.mysql_error();
				return false;
			}
			return true;
	}

	function getLastId(){
		return mysql_insert_id($this->daoConnection->Conexion_ID);
	}

	function getById($boca_id){
		
		$sql= "SELECT * FROM bocas WHERE boca_id = '".mysql_real_escape_string($boca_id)."';";

		$this->daoConnection->consulta($sql);
		$this->daoConnection->leerVarios();

		$numRegistros = $this->daoConnection->numregistros();

		if ($numRegistros == 0) {
			return NULL;
		}

		$i = 0;

			$new = new boca();

			$new->setId($this->daoConnection->ObjetoConsulta2[$i][0]);
			$new->setBoca($this->daoConnection->ObjetoConsulta2[$i][1]);
				$new->setBoca(str_replace('\\', '', $new->getBoca()));

		return $new;

	}

	function getByClase($clase_id){


		$sql = "SELECT DISTINCT bocas.boca_id, bocas.boca FROM bocas, capacidades, materiales, productos, formas, categorias, sublineas WHERE categorias.categoria_id=productos.categoria_id AND materiales.material_id=productos.material_id AND productos.clase_id=$clase_id AND capacidades.capacidad_id = productos.capacidad_id AND bocas.boca_id = productos.boca_id AND formas.forma_id=productos.forma_id AND bocas.boca_id<>1 ORDER BY bocas.boca;";

		$this->daoConnection->consulta($sql);
		$this->daoConnection->leerVarios();

		$numRegistros = $this->daoConnection->numregistros();

		if ($numRegistros == 0){
			return NULL;
		}


		$news = NULL;

		for ($i = 0; $i < $numRegistros; $i++){

			$new = new boca();

			$new->setId($this->daoConnection->ObjetoConsulta2[$i][0]);
			$new->setBoca($this->daoConnection->ObjetoConsulta2[$i][1]);
	                $new->setBoca(str_replace('\\', '', $new->getBoca()));
			$news[$i] = $new;

		}

		return $news;

	}


	function getByNombre($boca){
		
		$sql= "SELECT * FROM bocas WHERE boca = '".mysql_real_escape_string($boca)."';";

		$this->daoConnection->consulta($sql);
		$this->daoConnection->leerVarios();

		$numRegistros = $this->daoConnection->numregistros();

		if ($numRegistros == 0) {
			return NULL;
		}

		$i = 0;

			$new = new boca();

			$new->setId($this->daoConnection->ObjetoConsulta2[$i][0]);
			$new->setBoca($this->daoConnection->ObjetoConsulta2[$i][1]);
				$new->setBoca(str_replace('\\', '', $new->getBoca()));

		return $new;

	}

	function gets(){

		$sql = "SELECT * FROM bocas WHERE boca_id!=1 ORDER BY boca;";

		$this->daoConnection->consulta($sql);
		$this->daoConnection->leerVarios();

		$numRegistros = $this->daoConnection->numregistros();

		if ($numRegistros == 0){
			return NULL;
		}

		$news = NULL;

		for ($i = 0; $i < $numRegistros; $i++){

			$new = new boca();

			$new->setId($this->daoConnection->ObjetoConsulta2[$i][0]);
			$new->setBoca($this->daoConnection->ObjetoConsulta2[$i][1]);
	                $new->setBoca(str_replace('\\', '', $new->getBoca()));
			$news[$i] = $new;

		}

		return $news;

	}

	function update ($boca){

		$new = new boca();
		$new = $boca;

		$sql = "UPDATE  bocas SET  
			boca= 
				'".mysql_real_escape_string($new->getBoca())."'
			
			WHERE boca_id = '".mysql_real_escape_string($new->getId())."';";

		$result = mysql_query($sql, $this->daoConnection->Conexion_ID);
		if (!$result){
			echo 'Ooops (update boca): '.mysql_error();
			return false;
		}
		return true;
	}


	function delete($boca_id){


		$sql = "DELETE FROM bocas WHERE boca_id = '".mysql_real_escape_string($boca_id)."';";

		$result = mysql_query($sql, $this->daoConnection->Conexion_ID);
		if (!$result){
			echo 'Ooops (delete boca): '.mysql_error();
			return false;
		}
		return true;
	}


	function total(){

		$sql = "SELECT COUNT(*) FROM bocas;";

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