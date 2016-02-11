<?php

class ventaDAO{

public $daoConnection;

function __construct(){
	$this->daoConnection = new DAO;
	$this->daoConnection->conectar();
}

function save($venta){

	$new = new venta();
	$new = $venta;

	$sql = "INSERT INTO venta (id, fecha, nombre, apellido, pais, mail, telefono, fpago, total, descripcion, confirmacion, pass

) VALUES (
'".mysql_real_escape_string($new->getid())."', 
'".mysql_real_escape_string($new->getfecha())."', 
'".mysql_real_escape_string($new->getnombre())."', 
'".mysql_real_escape_string($new->getapellido())."', 
'".mysql_real_escape_string($new->getpais())."', 
'".mysql_real_escape_string($new->getmail())."', 
'".mysql_real_escape_string($new->gettelefono())."', 
'".mysql_real_escape_string($new->getfpago())."', 
'".mysql_real_escape_string($new->gettotal())."', 
'".mysql_real_escape_string($new->getdescripcion())."', 
'".mysql_real_escape_string($new->getconfirmacion())."', 
'".mysql_real_escape_string($new->getpass())."');";

	$result = mysql_query($sql, $this->daoConnection->Conexion_ID);
	if (!$result){
		echo 'Ooops (save venta): '.mysql_error();
		return false;
	}
	return true;
}


function getLastId(){
	return mysql_insert_id($this->daoConnection->Conexion_ID);
}


function getById($id){

	$sql = "SELECT id, fecha, nombre, apellido, pais, mail, telefono, fpago, total, descripcion, confirmacion, pass FROM venta WHERE id = '".mysql_real_escape_string($id)."' ;";

	$this->daoConnection->consulta($sql);
	$this->daoConnection->leerVarios();

	$numRegistros = $this->daoConnection->numregistros();

	if ($numRegistros == 0){
		return NULL;
	}

	$i = 0;

		$new = new venta();

		$new->setid($this->daoConnection->ObjetoConsulta2[$i][0]);
		$new->setfecha($this->daoConnection->ObjetoConsulta2[$i][1]);
		$new->setnombre($this->daoConnection->ObjetoConsulta2[$i][2]);
		$new->setapellido($this->daoConnection->ObjetoConsulta2[$i][3]);
		$new->setpais($this->daoConnection->ObjetoConsulta2[$i][4]);
		$new->setmail($this->daoConnection->ObjetoConsulta2[$i][5]);
		$new->settelefono($this->daoConnection->ObjetoConsulta2[$i][6]);
		$new->setfpago($this->daoConnection->ObjetoConsulta2[$i][7]);
		$new->settotal($this->daoConnection->ObjetoConsulta2[$i][8]);
		$new->setdescripcion($this->daoConnection->ObjetoConsulta2[$i][9]);
		$new->setconfirmacion($this->daoConnection->ObjetoConsulta2[$i][10]);
		$new->setpass($this->daoConnection->ObjetoConsulta2[$i][11]);

	return $new;

}

function getByLogin($mail, $pass){
        

	$sql = "SELECT id, fecha, nombre, apellido, pais, mail, telefono, fpago, total, descripcion, confirmacion, pass FROM venta WHERE mail = '".mysql_real_escape_string($mail)."' AND
                                                                                                                                         pass = '".  mysql_real_escape_string($pass)."' AND
                                                                                                                                         (confirmacion = '2012' OR confirmacion = '1');";

	$this->daoConnection->consulta($sql);
	$this->daoConnection->leerVarios();

	$numRegistros = $this->daoConnection->numregistros();

	if ($numRegistros == 0){
		return NULL;
	}

	$i = 0;

		$new = new venta();

		$new->setid($this->daoConnection->ObjetoConsulta2[$i][0]);
		$new->setfecha($this->daoConnection->ObjetoConsulta2[$i][1]);
		$new->setnombre($this->daoConnection->ObjetoConsulta2[$i][2]);
		$new->setapellido($this->daoConnection->ObjetoConsulta2[$i][3]);
		$new->setpais($this->daoConnection->ObjetoConsulta2[$i][4]);
		$new->setmail($this->daoConnection->ObjetoConsulta2[$i][5]);
		$new->settelefono($this->daoConnection->ObjetoConsulta2[$i][6]);
		$new->setfpago($this->daoConnection->ObjetoConsulta2[$i][7]);
		$new->settotal($this->daoConnection->ObjetoConsulta2[$i][8]);
		$new->setdescripcion($this->daoConnection->ObjetoConsulta2[$i][9]);
		$new->setconfirmacion($this->daoConnection->ObjetoConsulta2[$i][10]);
		$new->setpass($this->daoConnection->ObjetoConsulta2[$i][11]);

	return $new;

}

function gets(){

	$sql = "SELECT id, fecha, nombre, apellido, pais, mail, telefono, fpago, total, descripcion, confirmacion, pass FROM venta;";

	$this->daoConnection->consulta($sql);
	$this->daoConnection->leerVarios();

	$numRegistros = $this->daoConnection->numregistros();

	if ($numRegistros == 0){
		return NULL;
	}

	$news = NULL;

	for ($i = 0; $i < $numRegistros; $i++){

		$new = new venta();

		$new->setid($this->daoConnection->ObjetoConsulta2[$i][0]);
		$new->setfecha($this->daoConnection->ObjetoConsulta2[$i][1]);
		$new->setnombre($this->daoConnection->ObjetoConsulta2[$i][2]);
		$new->setapellido($this->daoConnection->ObjetoConsulta2[$i][3]);
		$new->setpais($this->daoConnection->ObjetoConsulta2[$i][4]);
		$new->setmail($this->daoConnection->ObjetoConsulta2[$i][5]);
		$new->settelefono($this->daoConnection->ObjetoConsulta2[$i][6]);
		$new->setfpago($this->daoConnection->ObjetoConsulta2[$i][7]);
		$new->settotal($this->daoConnection->ObjetoConsulta2[$i][8]);
		$new->setdescripcion($this->daoConnection->ObjetoConsulta2[$i][9]);
		$new->setconfirmacion($this->daoConnection->ObjetoConsulta2[$i][10]);
		$new->setpass($this->daoConnection->ObjetoConsulta2[$i][11]);

		$news[$i] = $new;

	}

	return $news;

}

function update ($venta){

	$new = new venta();
	$new = $venta;

	$sql = "UPDATE  venta SET  
		fecha= 
			'".mysql_real_escape_string($new->getfecha())."', 
		nombre= 
			'".mysql_real_escape_string($new->getnombre())."', 
		apellido= 
			'".mysql_real_escape_string($new->getapellido())."', 
		pais= 
			'".mysql_real_escape_string($new->getpais())."', 
		mail= 
			'".mysql_real_escape_string($new->getmail())."', 
		telefono= 
			'".mysql_real_escape_string($new->gettelefono())."', 
		fpago= 
			'".mysql_real_escape_string($new->getfpago())."', 
		total= 
			'".mysql_real_escape_string($new->gettotal())."', 
		descripcion= 
			'".mysql_real_escape_string($new->getdescripcion())."', 
		confirmacion= 
			'".mysql_real_escape_string($new->getconfirmacion())."', 
		pass= 
			'".mysql_real_escape_string($new->getpass())."'

		 WHERE id = '".mysql_real_escape_string($new->getid())."';";

	$result = mysql_query($sql, $this->daoConnection->Conexion_ID);
	if (!$result){
		echo 'Ooops (update venta): '.mysql_error();
		return false;
	}
	return true;
}


function delete($id){


	$sql = "DELETE FROM venta WHERE id = '".mysql_real_escape_string($id)."';";

	$result = mysql_query($sql, $this->daoConnection->Conexion_ID);
	if (!$result){
		echo 'Ooops (delete venta): '.mysql_error();
		return false;
	}
	return true;
}


function total(){

	$sql = "SELECT COUNT(*) FROM venta;";

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