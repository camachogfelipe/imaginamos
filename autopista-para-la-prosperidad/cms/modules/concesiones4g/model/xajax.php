<?php
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
// @marionavas
// Agencia: imaginamos.com
// Bogota, Colombia, 2012
// Archivo de funciones XAJAX para el módulo de configuración del CMS
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
require_once("../../../xajax/xajax.inc.php");
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

#Funcion para consultar por id
function consultaId($tabla,$id)
{
	$objResponse = new xajaxResponse();
	if ($tabla == "" || $id == "")
	{
		//Mensaje si llega vacio
		$objResponse->script("showError('No especifico tabla o id',3000);");
	}
	else
	{
		/*include("../../../core/class/db.class.php");
		$db = new Database();
		$db->connect();
		$query = "SELECT * FROM '".$tabla."' WHERE idtbl_capitulos = ".$id;
		$db->doQuery($query,SELECT_QUERY);*/
		$objResponse->script("showError('".$tabla.' '.$id."',3000);");
		
	}	
	return $objResponse;
}
#Fin Funcion para consultar por id

#Funcion crear capitulos
function capitulos( $formData )
{
	$objResponse = new xajaxResponse();
	if ($formData[logo] == "" )
	{
		//Mensaje si llega vacio
		$objResponse->script("showError('Complete todos los campos',3000);");
	}
	else
	{
		include("../../../core/class/db.class.php");
		$db = new Database();
		$db->connect();
		$query = "SELECT nombretbl_capitulos FROM tbl_capitulos WHERE nombretbl_capitulos = '$formData[capitulo]'";
		$db->doQuery($query,SELECT_QUERY);
		if($result = $db->results){
			//Mensaje si llega vacio
			$objResponse->script("showError('El nombre de capítulo ya existe',3000);");
		}
		else
		{
			
			$objResponse->script("showError('".$_POST["IMUFiles"]."',3000);");
			/*$query = "INSERT INTO tbl_capitulos (nombretbl_capitulos,logotbl_capitulos) VALUES ('$formData[capitulo]','$formData[logo]')";
			$db->doQuery($query,INSERT_QUERY);
			$objResponse->script("showError('Capitulo creado correctamente',5000 );");
			$objResponse->script("setInterval(\"window.location.reload();\", 2000 );");
			$objResponse->script("loading('Agregando',1);");
			$objResponse->script("setTimeout(\"unloading()\", 2000 );");	*/
			
		}
	}
	return $objResponse;
}

# Fin funcion crear capitulos



////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//Registro de funciones para XAJAX sobre PHP <= 5.2.17
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
$xajax = new xajax("");
$xajax->registerFunction("web");
$xajax->registerFunction("path");
$xajax->registerFunction("emailrecipient");
$xajax->registerFunction("capitulos");
$xajax->registerFunction("consultar");
$xajax->registerFunction("menus");
$xajax->processRequest();
$xajax->printJavascript("../../../xajax/");
?>