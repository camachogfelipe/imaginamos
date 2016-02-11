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
			//Título y Artículo
			case 1:
			$queryCreateTable[1];
			break;		
			
			//Título, Artículo y 1 imagen
			case 2:
			$queryCreateTable[2];
			break;
			
			//Título, Artículo y varias imagenes
			case 3:	
			$queryCreateTable[3];
			//Segunda tabla donde serán almacenadas las imagenes "extras"
			$queryCreateTable[4];
			break;
		}	
		
		//Se crea la nueva tabla
		if($db->createTable($queryCreateTable[$funcionality]))
		{		
			//Si el caso es crear una funcionalidad ($funcionality==3) con varias imágenes creamos la segunda tabla
			if($funcionality==3) $db->createTable($queryCreateTable[4]);
				
			//Si se seleccionó instalar datos de ejemplo, los instalamos
			if($formData[dataExample] == 1)
				$db->doQuery($dataExample[$funcionality],INSERT_QUERY);
				
			//Si se seleccionó instalar datos de ejemplo, y además es la funcionalidad 3 instalamos los datos para la segunda tabla "$queryCreateTableTwo"
			if($formData[dataExample] == 1 && $funcionality == 3)
				$db->doQuery($dataExample[4],INSERT_QUERY);
				
			//Creamos la tabla de configuración que nos indicará que tipo de configuración se ha elegido
			$db->createTable($queryCreateTable[0]);
			$db->doQuery("INSERT INTO cms_news_config(news_config_id, news_config_funcionality, news_config_date)VALUES(1,'$funcionality','$dateTime')",INSERT_QUERY);
				
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
	
	if($formData[titulo] == "" or $formData[texto] == "" or $formData[mapa] == "")
	
		$objResponse->script("showError('Ingrese todos los datos',3000);");
	
	else {
		
		//include("../../../core/class/db.class.php");
		$db = new Database();
		$db->connect();
		
		$db->doQuery("INSERT INTO cms_contacto (contacto_id,contacto_title,contacto_article,contacto_mapa,contacto_date) VALUES ('','$formData[titulo]','$formData[texto]','$formData[mapa]','".date("Y-m-d H:i:s")."')",INSERT_QUERY);
		
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
	
	if($formData[title] == "" or $formData[article] == "" or $formData[mapa] == "<br>")
	
		$objResponse->script("showError('Porfavor ingrese todos los datos del formulario',3000);");
	
	else {
		
		include("../../../core/class/db.class.php");
		$db = new Database();
		$db->connect();
		
		$db->doQuery("UPDATE cms_contacto SET contacto_title = '$formData[title]', contacto_article = '$formData[article]', contacto_mapa = '$formData[mapa]' WHERE contacto_id = '$formData[id]'",UPDATE_QUERY);
		
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
$xajax->registerFunction("upload");

$xajax->processRequest();

$xajax->printJavascript("../../../xajax/");
?>
