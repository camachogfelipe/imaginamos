<?php
	error_reporting(E_ERROR);
	
	function conexion() {
		try {
			$conexion =  mysql_connect('mysql51-004.wc2.dfw1.stabletransit.com', '533638_platamov', 'Admin2012');
			mysql_select_db('533638_platamovil', $conexion);
			mysql_query ("SET NAMES 'utf8'");
			
			return $conexion;
		} catch (Exception $ex) {
			$this->setMensaje("warning", "No se puede generar conexion a la BD<br />{$ex->getTraceAsString()}");
			return 0;
		}
	}
?>