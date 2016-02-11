<?php
require_once("../../../xajax/xajax.inc.php");

/********************************************************************************************/

function install( $formData )
{  
	//Archivo en el que se encuentra la data de ejemplo
	include("../includes/dataExample.php");
	include("../includes/querys.php");
	
	$objResponse = new xajaxResponse();
	
	$funcionality = $formData[funcionality];
	
	if($funcionality == "" or $funcionality == "sel" or $formData[dataExample] == "")
	
		$objResponse->script("showError('Seleccione las opciones necesarias',3000);");
	
	else {
		
		//include("../../../core/class/db.class.php");
		$db = new Database();
		$db->connect();
		$dateTime =  date("Y-m-d H:i:s");
		
		switch($funcionality)
		{
			//Texto 1, Texto 2, enlace y una imagen
			case 1:
			$queryCreateTable[1];
			break;		
			
		}	
		
		//Se crea la nueva tabla
		if($db->createTable($queryCreateTable[$funcionality]))
		{		
			
				
			//Si se seleccionó instalar datos de ejemplo, los instalamos
			if($formData[dataExample] == 1)
				$db->doQuery($dataExample[$funcionality],INSERT_QUERY);
				
			//Creamos la tabla de configuración que nos indicará que tipo de configuración se ha elegido
			$db->createTable($queryCreateTable[0]);
			$db->doQuery("INSERT INTO cms_banners_config(banners_config_id, banners_config_funcionality, banners_config_date)VALUES(1,'$funcionality','$dateTime')",INSERT_QUERY);
				
			//Imprimimos nuestro mensaje
			$objResponse->script("setInterval(\"window.location.reload();\", 3000 );");
			$objResponse->script("loading('Configurando',1);");
			$objResponse->script("setTimeout(\"unloading()\", 2000 );");			
			//$objResponse->script("showSuccess('Tablas creadas correctamente',3000);");				
				
		}else $objResponse->script("showError('Atención, el nombre de la tabla (".$tableName.") ya está siendo usado.',3000);");
	}
	return $objResponse;	
}

/********************************************************************************************/

function news( $formData )
{  
	$objResponse = new xajaxResponse();
	
	if($formData[texto] == "" or $formData[valor] == "")
	
		$objResponse->script("showError('Ingrese todos los datos',3000);");
	
	else {
		
		include("../../../core/class/db.class.php");
		$db = new Database();
		$db->connect();
		
		$db->doQuery("INSERT INTO cms_datostablas (datostablas_id,datostablas_tipo,datostablas_campo1,datostablas_campo2) VALUES ('','$formData[tipo]','$formData[texto]','$formData[valor]')",INSERT_QUERY);
		
		$objResponse->script("setInterval(\"window.location.reload();\", 3000 );");
		$objResponse->script("loading('Agregando..',1);");
		$objResponse->script("setTimeout(\"unloading()\", 2000 );");
	}
	
	return $objResponse;
	
}

/********************************************************************************************/

function edit( $formData )
{  
	$objResponse = new xajaxResponse();
	
	$texto1 = $formData[ciudad];
	$texto1 = htmlentities($texto1);
	
	
	if($texto1 == "")
	
		$objResponse->script("showError('Ingrese la ciudad',3000);");
	
	else {
		
		include("../../../core/class/db.class.php");
		$db = new Database();
		$db->connect();
		
		$db->doQuery("UPDATE cms_redpuntos_ciudad SET redpuntos_ciudad_nombre = '$texto1' WHERE redpuntos_ciudad_id = '$formData[id]'",UPDATE_QUERY);
		
		$objResponse->script("loading('Procesando',1);");
		$objResponse->script("setTimeout(\"unloading()\", 2000 );");
		$objResponse->script("showSuccess('Actualización correcta',3000);");
	}
	
	return $objResponse;
	
}

/********************************************************************************************/

function edit2( $formData )
{  
	$objResponse = new xajaxResponse();
	
	$texto1 = $formData[ciudad];
	$texto1 = htmlentities($texto1);
	
	$texto2 = $formData[localidad];
	$texto2 = htmlentities($texto2);
	
	$texto3 = $formData[barrio];
	$texto3 = htmlentities($texto3);
	
	$texto4 = $formData[nombrep];
	$texto4 = htmlentities($texto4);
	
	$texto5 = $formData[direccion];
	$texto5 = htmlentities($texto5);
	
	$texto6 = $formData[horario];
	$texto6 = htmlentities($texto6);
	
	
	if($texto1 == "" or $texto2 == "" or $texto3 == "" or $texto4 == "" or $texto5 == "" or $texto6 == "")
	
		$objResponse->script("showError('Ingrese la ciudad',3000);");
	
	else {
		
		include("../../../core/class/db.class.php");
		$db = new Database();
		$db->connect();
		
		$db->doQuery("UPDATE cms_redpuntos SET redpuntos_campo1 = '$texto1', redpuntos_campo2 = '$texto2', redpuntos_campo3 = '$texto3', redpuntos_campo4 = '$texto4', redpuntos_campo5 = '$texto5', redpuntos_campo6 = '$texto6' WHERE redpuntos_id = '$formData[id]'",UPDATE_QUERY);
		
		$objResponse->script("loading('Procesando',1);");
		$objResponse->script("setTimeout(\"unloading()\", 2000 );");
		$objResponse->script("showSuccess('Actualización correcta',3000);");
	}
	
	return $objResponse;
	
}


/********************************************************************************************/

function upload( $formData )
{  
	$objResponse = new xajaxResponse();
	
	$objResponse->alert($_POST[CMSFiles]);
	
	/*if($formData[title] == "" or $formData[article] == "" or $formData[article] == "<br>")
	
		$objResponse->script("showError('Ingrese un título y el contenido del artículo',3000);");
		
	elseif(count($formData[CMSFiles])==0) {
	
		$objResponse->script("showError('Cargue una imagen',3000);");
		
	}else{*/
	//$objResponse->alert($formData[title]);
	
	/*$objResponse->script("setInterval(\"window.location.reload();\", 3000 );");
	$objResponse->script("loading('Cargando',1);");
	$objResponse->script("setTimeout(\"unloading()\", 2000 );");*/
	
	/*if(count($_POST["IMUFiles"]))
{
	echo "<br />Uploaded files: ";
	
	for($i=0; $i<count($_POST["IMUFiles"]); $i++)
		echo "<br />" . $_POST["IMUFiles"][$i];
}*/
	//}
	return $objResponse;
	
}

/********************************************************************************************/

$xajax=new xajax();
/*$xajax->register(XAJAX_FUNCTION, "install");
$xajax->register(XAJAX_FUNCTION, "news");
$xajax->register(XAJAX_FUNCTION, "edit");
$xajax->register(XAJAX_FUNCTION, "upload");

$xajax->processRequest();
$xajax->configure('javascript URI','../../../xajax/');
$xajax->printJavascript( "../../../xajax/" );*/

$xajax->registerFunction("install");
$xajax->registerFunction("news");
$xajax->registerFunction("video");
$xajax->registerFunction("edit");
$xajax->registerFunction("edit2");
$xajax->registerFunction("upload");

$xajax->processRequest();

$xajax->printJavascript("../../../xajax/");
?>