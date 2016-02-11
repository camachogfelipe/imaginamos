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
	
	if($formData[title] == "" or $formData[article] == "" or $formData[article] == "<br>")
	
		$objResponse->script("showError('Ingrese un título y el contenido del artículo',3000);");
	
	else {
		
		include("../../../core/class/db.class.php");
		$db = new Database();
		$db->connect();
		
		$db->doQuery("INSERT INTO cms_news (news_id,news_title,news_article,news_date) VALUES ('','$formData[title]','$formData[article]','".date("Y-m-d H:i:s")."')",INSERT_QUERY);
		
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
	
	if($formData[title] == "" or $formData[article] == "" or $formData[article] == "<br>")
	
		$objResponse->script("showError('Ingrese un título y el contenido del artículo',3000);");
	
	else {
		
		include("../../../core/class/db.class.php");
		$db = new Database();
		$db->connect();
		
		$db->doQuery("UPDATE cms_news SET news_title = '$formData[title]', news_article = '$formData[article]' WHERE news_id = '$formData[id]'",UPDATE_QUERY);
		
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

function edit_titulo( $formData )
{  
	$objResponse = new xajaxResponse();
        
        
        $titulo = str_replace("'","&#39",$formData[titulo]);
        htmlentities($titulo);
	
	if($formData[titulo] == "")
	
		$objResponse->script("showError('Ingrese un título',3000);");
	
	else {
		
		include("../../../core/class/db.class.php");
		$db = new Database();
		$db->connect();
		
		$db->doQuery("UPDATE cms_meeting_titulo SET titulo = '$titulo' WHERE id_meeting_titulo = '$formData[id]'",UPDATE_QUERY);
		
		$objResponse->script("loading('Procesando',1);");
		$objResponse->script("setTimeout(\"unloading()\", 2000 );");
		$objResponse->script("showSuccess('Actualización correcta',3000);");
	}
	
	return $objResponse;
	
}

/********************************************************************************************/
function edit_item( $formData )
{  
	$objResponse = new xajaxResponse();
        
        
        $item = str_replace("'","&#39",$formData[item]);
        htmlentities($item);
	
	if($formData[item] == "")
	
		$objResponse->script("showError('Ingrese un título',3000);");
	
	else {
		
		include("../../../core/class/db.class.php");
		$db = new Database();
		$db->connect();
		
		$db->doQuery("UPDATE cms_meeting_item SET item = '$item' WHERE id_meeting_item = '$formData[id]'",UPDATE_QUERY);
		
		$objResponse->script("loading('Procesando',1);");
		$objResponse->script("setTimeout(\"unloading()\", 2000 );");
		$objResponse->script("showSuccess('Actualización correcta',3000);");
	}
	
	return $objResponse;
	
}

/********************************************************************************************/

function agregar2( $formData )
{  
	$objResponse = new xajaxResponse();
	
        
        $titulo = str_replace("'","&#39",$formData[titulo]);
         htmlentities($titulo);
        
	if($formData[titulo] == "" )
	
		$objResponse->script("showError('Ingrese un título',3000);");
	
	else {
		
		//include("../../../core/class/db.class.php");
		$db = new Database();
		$db->connect();
		
		$db->doQuery("INSERT INTO cms_meeting_titulo (id_meeting_titulo,titulo) VALUES ('','$titulo')",INSERT_QUERY);
		
		$objResponse->script("setInterval(\"window.location.reload();\", 3000 );");
		$objResponse->script("loading('Agregando..',1);");
		$objResponse->script("setTimeout(\"unloading()\", 2000 );");
                $objResponse->script("showSuccess('titulo agregado correctamente',3000);");
	}
	
	return $objResponse;
	
}

/*****************************************************************************************************************************************/
function agregar_item( $formData )
{  
	$objResponse = new xajaxResponse();
        
        $titulo = str_replace("'","&#39",$formData[titulo]);
        htmlentities($titulo);
        $item = str_replace("'","&#39",$formData[item]);
        htmlentities($item);
	
	if($formData[item] == "" )
	
		$objResponse->script("showError('Ingrese un item',3000);");
	
	else {
		
		//include("../../../core/class/db.class.php");
		$db = new Database();
		$db->connect();
		
		$db->doQuery("INSERT INTO cms_meeting_item (id_meeting_item,id_meeting_titulo,item) VALUES ('','$titulo','$item')",INSERT_QUERY);
		
		$objResponse->script("setInterval(\"window.location.reload();\", 3000 );");
		$objResponse->script("loading('Agregando..',1);");
		$objResponse->script("setTimeout(\"unloading()\", 2000 );");
                $objResponse->script("showSuccess('item agregado correctamente',3000);");
	}
	
	return $objResponse;
	
}
/********************************************************************************************************************************************************/
function edit_contenido( $formData )
{  
	$objResponse = new xajaxResponse();
	
        $texto = str_replace("'","&#39",$formData[texto]);
        htmlentities($texto);
       
	if($formData[texto] == "")
	
		$objResponse->script("showError('Ingrese un texto',3000);");
	
	else {
		
//		include("../../../core/class/db.class.php");
		$db = new Database();
		$db->connect();
		
		$db->doQuery("UPDATE cms_meeting_contenido SET texto = '$texto'",UPDATE_QUERY);
		
		$objResponse->script("loading('Procesando',1);");
		$objResponse->script("setTimeout(\"unloading()\", 2000 );");
		$objResponse->script("showSuccess('Actualización correcta',3000);");
	}
	
	return $objResponse;
}
/*********************************************************************************************************/
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
$xajax->registerFunction("edit_titulo");
$xajax->registerFunction("agregar_item");
$xajax->registerFunction("agregar2");
$xajax->registerFunction("edit_item");
$xajax->registerFunction("edit_contenido");


$xajax->processRequest();

$xajax->printJavascript("../../../xajax/");
?>
