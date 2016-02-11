<?php

class productoscotizacionesDAO{

public $daoConnection;

function __construct(){
	$this->daoConnection = new DAO;
	$this->daoConnection->conectar();
}

function save($productoscotizaciones){

	$new = new productoscotizaciones();
	$new = $productoscotizaciones;

	$sql = "INSERT INTO productoscotizaciones (prodCot_id, cotizacion_id, producto_codigo, cantidad_producto
	) VALUES (
	'".mysql_real_escape_string($new->getId())."', 
	'".mysql_real_escape_string($new->getCotizacionId())."', 
	'".mysql_real_escape_string($new->getProductoCodigo())."',
	'".mysql_real_escape_string($new->getCantidadProducto())."');";

	$result = mysql_query($sql, $this->daoConnection->Conexion_ID);
	if (!$result){
		echo 'Ooops (save productoscotizaciones): '.mysql_error();
		return false;
	}
	return true;
}


function getById($prodCot_id){

	$sql = "SELECT * FROM productoscotizaciones WHERE prodCot_id = '".mysql_real_escape_string($prodCot_id)."' ;";

	$this->daoConnection->consulta($sql);
	$this->daoConnection->leerVarios();

	$numRegistros = $this->daoConnection->numregistros();

	if ($numRegistros == 0){
		return NULL;
	}

	$i = 0;

		$new = new productoscotizaciones();

		$new->setId($this->daoConnection->ObjetoConsulta2[$i][0]);
		$new->setCotizacionId($this->daoConnection->ObjetoConsulta2[$i][1]);
		$new->setProductoCodigo($this->daoConnection->ObjetoConsulta2[$i][2]);

                
	return $new;

}


function getByCotizacion($cotizacion_id){

	$sql = "SELECT * FROM productoscotizaciones WHERE cotizacion_id = '$cotizacion_id' ORDER BY prodCot_id;";

	$this->daoConnection->consulta($sql);
	$this->daoConnection->leerVarios();

	$numRegistros = $this->daoConnection->numregistros();

	if ($numRegistros == 0){
		return NULL;
	}

	$news = NULL;

	for ($i = 0; $i < $numRegistros; $i++){

		$new = new productoscotizaciones();

		$new->setId($this->daoConnection->ObjetoConsulta2[$i][0]);
		$new->setCotizacionId($this->daoConnection->ObjetoConsulta2[$i][1]);
		$new->setProductoCodigo($this->daoConnection->ObjetoConsulta2[$i][2]);
		$new->setCantidadProducto($this->daoConnection->ObjetoConsulta2[$i][3]);


		$news[$i] = $new;

	}

	return $news;

}


function gets(){

	$sql = "SELECT * FROM productoscotizaciones ORDER BY prodCot_id;";

	$this->daoConnection->consulta($sql);
	$this->daoConnection->leerVarios();

	$numRegistros = $this->daoConnection->numregistros();

	if ($numRegistros == 0){
		return NULL;
	}

	$news = NULL;

	for ($i = 0; $i < $numRegistros; $i++){

		$new = new productoscotizaciones();

		$new->setId($this->daoConnection->ObjetoConsulta2[$i][0]);
		$new->setCotizacionId($this->daoConnection->ObjetoConsulta2[$i][1]);
		$new->setProductoCodigo($this->daoConnection->ObjetoConsulta2[$i][2]);


		$news[$i] = $new;

	}

	return $news;

}

function update ($prodCot_id){

	$new = new productoscotizaciones();
	$new = $productoscotizaciones;

	$sql = "UPDATE  productoscotizaciones SET  
		cotizacion_id= 
			'".mysql_real_escape_string($new->getCotizacionId())."', 
		producto_codigo= 
			'".mysql_real_escape_string($new->getProductoCodigo())."'
		 WHERE prodCot_id = '".mysql_real_escape_string($new->getId())."';";

	$result = mysql_query($sql, $this->daoConnection->Conexion_ID);
	if (!$result){
		echo 'Ooops (update productoscotizaciones): '.mysql_error();
		return false;
	}
	return true;
}


function delete($prodCot_id){


	$sql = "DELETE FROM productoscotizaciones WHERE prodCot_id = '".mysql_real_escape_string($prodCot_id)."';";

	$result = mysql_query($sql, $this->daoConnection->Conexion_ID);
	if (!$result){
		echo 'Ooops (delete productoscotizaciones): '.mysql_error();
		return false;
	}
	return true;
}


function total(){

	$sql = "SELECT COUNT(*) FROM productoscotizaciones;";

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