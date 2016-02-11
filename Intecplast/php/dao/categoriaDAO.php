<?php

class categoriaDAO{

	public $daoConnection;

	function __construct(){
		
		$this->daoConnection = new DAO;
		$this->daoConnection->conectar();
	}

	function save($categoria){
		
		$new = new categoria();
		$new = $categoria;

		$sql = "INSERT INTO categorias (categoria_id, categoria_nombre_e, categoria_nombre_i, categoria_imgagen, categoria_imgRangos)
		VALUES (
		'".mysql_real_escape_string($new->getid())."',
		'".mysql_real_escape_string($new->getnombre_e())."',
		'".mysql_real_escape_string($new->getnombre_i())."',
		'".mysql_real_escape_string($new->getimagen())."',
		'".mysql_real_escape_string($new->getimgRango())."');";

			$result = mysql_query($sql, $this->daoConnection->Conexion_ID);
			if (!$result) {
				echo 'Ooops (save categoria): '.mysql_error();
				return false;
			}
			return true;
	}

	function getLastId(){
		return mysql_insert_id($this->daoConnection->Conexion_ID);
	}

	function getById($categoria_id){
		
		$sql= "SELECT * FROM categorias WHERE categoria_id = '".mysql_real_escape_string($categoria_id)."';";

		$this->daoConnection->consulta($sql);
		$this->daoConnection->leerVarios();

		$numRegistros = $this->daoConnection->numregistros();

		if ($numRegistros == 0) {
			return NULL;
		}

		$i = 0;

			$new = new categoria();

			$new->setid($this->daoConnection->ObjetoConsulta2[$i][0]);
			$new->setnombre_e($this->daoConnection->ObjetoConsulta2[$i][1]);
			$new->setnombre_i($this->daoConnection->ObjetoConsulta2[$i][2]);
			$new->setimagen($this->daoConnection->ObjetoConsulta2[$i][3]);
			$new->setimgRango($this->daoConnection->ObjetoConsulta2[$i][4]);

				$new->setnombre_e(str_replace('\\', '', $new->getnombre_e()));
				$new->setnombre_i(str_replace('\\', '', $new->getnombre_i()));

		return $new;

	}

	function getByNombre($categoria_nombre_e){
		
		$sql= "SELECT * FROM categorias WHERE categoria_nombre_e = '".mysql_real_escape_string($categoria_nombre_e)."';";

		$this->daoConnection->consulta($sql);
		$this->daoConnection->leerVarios();

		$numRegistros = $this->daoConnection->numregistros();

		if ($numRegistros == 0) {
			return NULL;
		}

		$i = 0;

			$new = new categoria();

			$new->setid($this->daoConnection->ObjetoConsulta2[$i][0]);
			$new->setnombre_e($this->daoConnection->ObjetoConsulta2[$i][1]);
			$new->setnombre_i($this->daoConnection->ObjetoConsulta2[$i][2]);
			$new->setimagen($this->daoConnection->ObjetoConsulta2[$i][3]);
			$new->setimgRango($this->daoConnection->ObjetoConsulta2[$i][4]);
				$new->setnombre_e(str_replace('\\', '', $new->getnombre_e()));
				$new->setnombre_i(str_replace('\\', '', $new->getnombre_i()));

		return $new;

	}

	function getByLineaSublinea($linea_id,$sublinea_id,$clase_id){

		$sql = "SELECT DISTINCT categorias.categoria_id, categorias.categoria_nombre_e, categorias.categoria_nombre_i FROM categorias, productos, sublineas WHERE categorias.categoria_id=productos.categoria_id AND productos.sublinea_id=sublineas.sublinea_id AND sublineas.sublinea_id = '".mysql_real_escape_string($sublinea_id)."' AND sublineas.linea_id = '".mysql_real_escape_string($linea_id)."' AND productos.clase_id = '".mysql_real_escape_string($clase_id)."' ORDER BY categoria_nombre_e;";


		$this->daoConnection->consulta($sql);
		$this->daoConnection->leerVarios();

		$numRegistros = $this->daoConnection->numregistros();

		if ($numRegistros == 0){
			return NULL;
		}

		$news = NULL;

		for ($i = 0; $i < $numRegistros; $i++){

			$new = new categoria();

			$new->setid($this->daoConnection->ObjetoConsulta2[$i][0]);
			$new->setnombre_e($this->daoConnection->ObjetoConsulta2[$i][1]);
			$new->setnombre_i($this->daoConnection->ObjetoConsulta2[$i][2]);
			$new->setimagen($this->daoConnection->ObjetoConsulta2[$i][3]);
			$new->setimgRango($this->daoConnection->ObjetoConsulta2[$i][4]);
	                $new->setnombre_e(str_replace('\\', '', $new->getnombre_e()));
	                $new->setnombre_i(str_replace('\\', '', $new->getnombre_i()));
			$news[$i] = $new;

		}

		return $news;

	}

	function getByLinea($linea_id,$clase_id){

		$sql = "SELECT DISTINCT categorias.categoria_id, categorias.categoria_nombre_e FROM categorias, sublineas, productos WHERE categorias.categoria_id=productos.categoria_id AND sublineas.sublinea_id=productos.sublinea_id AND sublineas.linea_id = '".mysql_real_escape_string($linea_id)."' AND productos.clase_id = '".mysql_real_escape_string($clase_id)."' ORDER BY categoria_nombre_e;";


		$this->daoConnection->consulta($sql);
		$this->daoConnection->leerVarios();

		$numRegistros = $this->daoConnection->numregistros();

		if ($numRegistros == 0){
			return NULL;
		}

		$news = NULL;

		for ($i = 0; $i < $numRegistros; $i++){

			$new = new categoria();

			$new->setid($this->daoConnection->ObjetoConsulta2[$i][0]);
			$new->setnombre_e($this->daoConnection->ObjetoConsulta2[$i][1]);
			$new->setnombre_i($this->daoConnection->ObjetoConsulta2[$i][2]);
			$new->setimagen($this->daoConnection->ObjetoConsulta2[$i][3]);
			$new->setimgRango($this->daoConnection->ObjetoConsulta2[$i][4]);
	                $new->setnombre_e(str_replace('\\', '', $new->getnombre_e()));
	                $new->setnombre_i(str_replace('\\', '', $new->getnombre_i()));
			$news[$i] = $new;

		}

		return $news;

	}

	function getByClase($clase_id){

		$sql = "SELECT DISTINCT categorias.categoria_id, categorias.categoria_nombre_e FROM categorias, sublineas, productos WHERE categorias.categoria_id=productos.categoria_id AND sublineas.sublinea_id=productos.sublinea_id AND productos.clase_id = '".mysql_real_escape_string($clase_id)."' ORDER BY categoria_nombre_e;";


		$this->daoConnection->consulta($sql);
		$this->daoConnection->leerVarios();

		$numRegistros = $this->daoConnection->numregistros();

		if ($numRegistros == 0){
			return NULL;
		}

		$news = NULL;

		for ($i = 0; $i < $numRegistros; $i++){

			$new = new categoria();

			$new->setid($this->daoConnection->ObjetoConsulta2[$i][0]);
			$new->setnombre_e($this->daoConnection->ObjetoConsulta2[$i][1]);
			$new->setnombre_i($this->daoConnection->ObjetoConsulta2[$i][2]);
			$new->setimagen($this->daoConnection->ObjetoConsulta2[$i][3]);
			$new->setimgRango($this->daoConnection->ObjetoConsulta2[$i][4]);
	                $new->setnombre_e(str_replace('\\', '', $new->getnombre_e()));
	                $new->setnombre_i(str_replace('\\', '', $new->getnombre_i()));
			$news[$i] = $new;

		}

		return $news;

	}

	function gets(){

		$sql = "SELECT * FROM categorias ORDER BY categoria_nombre_e;";

		$this->daoConnection->consulta($sql);
		$this->daoConnection->leerVarios();

		$numRegistros = $this->daoConnection->numregistros();

		if ($numRegistros == 0){
			return NULL;
		}

		$news = NULL;

		for ($i = 0; $i < $numRegistros; $i++){

			$new = new categoria();

			$new->setid($this->daoConnection->ObjetoConsulta2[$i][0]);
			$new->setnombre_e($this->daoConnection->ObjetoConsulta2[$i][1]);
			$new->setnombre_i($this->daoConnection->ObjetoConsulta2[$i][2]);
			$new->setimagen($this->daoConnection->ObjetoConsulta2[$i][3]);
			$new->setimgRango($this->daoConnection->ObjetoConsulta2[$i][4]);
	                $new->setnombre_e(str_replace('\\', '', $new->getnombre_e()));
	                $new->setnombre_i(str_replace('\\', '', $new->getnombre_i()));
			$news[$i] = $new;

		}

		return $news;

	}

	function getsCond(){

		$sql = "SELECT * FROM categorias AS a WHERE EXISTS (SELECT * FROM productos AS b WHERE b.categoria_id = a.categoria_id ) ORDER BY categoria_nombre_e;";

		$this->daoConnection->consulta($sql);
		$this->daoConnection->leerVarios();

		$numRegistros = $this->daoConnection->numregistros();

		if ($numRegistros == 0){
			return NULL;
		}

		$news = NULL;

		for ($i = 0; $i < $numRegistros; $i++){

			$new = new categoria();

			$new->setid($this->daoConnection->ObjetoConsulta2[$i][0]);
			$new->setnombre_e($this->daoConnection->ObjetoConsulta2[$i][1]);
			$new->setnombre_i($this->daoConnection->ObjetoConsulta2[$i][2]);
			$new->setimagen($this->daoConnection->ObjetoConsulta2[$i][3]);
			$new->setimgRango($this->daoConnection->ObjetoConsulta2[$i][4]);
	                $new->setnombre_e(str_replace('\\', '', $new->getnombre_e()));
	                $new->setnombre_i(str_replace('\\', '', $new->getnombre_i()));
			$news[$i] = $new;

		}

		return $news;

	}



	function update ($categoria){

		$new = new categoria();
		$new = $categoria;

		$sql = "UPDATE  categorias SET  
			categoria_nombre_e= 
				'".mysql_real_escape_string($new->getnombre_e())."', 
			categoria_nombre_i= 
				'".mysql_real_escape_string($new->getnombre_i())."',
			categoria_imgagen= 
				'".mysql_real_escape_string($new->getimagen())."', 
			categoria_imgRangos= 
				'".mysql_real_escape_string($new->getimgRango())."'

			WHERE categoria_id = '".mysql_real_escape_string($new->getid())."';";

		$result = mysql_query($sql, $this->daoConnection->Conexion_ID);
		if (!$result){
			echo 'Ooops (update categoria): '.mysql_error();
			return false;
		}
		return true;
	}


	function delete($categoria_id){


		$sql = "DELETE FROM categorias WHERE categoria_id = '".mysql_real_escape_string($categoria_id)."';";

		$result = mysql_query($sql, $this->daoConnection->Conexion_ID);
		if (!$result){
			echo 'Ooops (delete categoria): '.mysql_error();
			return false;
		}
		return true;
	}


	function total(){

		$sql = "SELECT COUNT(*) FROM categorias;";

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