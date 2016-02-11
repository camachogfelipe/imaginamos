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
	$db = new Database();
	$db->connect();
	$query = "SELECT * FROM cms_subcategorias WHERE id_categoria = ".$formData[categoria];
	$db->doQuery($query,SELECT_QUERY);
	$results = $db->results;
	
	$objResponse = new xajaxResponse();
	
	if($formData[categoria] == 0){
	
		$objResponse->script("showError('Seleccione una Categoria',3000);");
		$objResponse->script("enviar()");
			
	}else if($formData[categoria] != 0 and $results[0][id_subcategoria] != "" and $formData[subcategoria] == 0){
			
		$objResponse->script("showError('Seleccione una Sub Categoria',3000);");
	    $objResponse->script("enviar()");
		
	}else if($formData[nombre_es] == "" or $formData[nombre_en] == ""){
	
		$objResponse->script("showError('Ingrese un Nombre Producto en Español e Ingles',3000);");
		$objResponse->script("enviar()");
		
	}else if($formData[ref_es] == "" or $formData[ref_en] == ""){
	
		$objResponse->script("showError('Ingrese una Referencia Producto en Español e Ingles',3000);");
		$objResponse->script("enviar()");
		
	}else if($formData[desc_es] == "" or $formData[desc_en] == ""){
	
		$objResponse->script("showError('Ingrese una Descripción Producto en Español e Ingles',3000);");
		$objResponse->script("enviar()");
		
	}else if($formData[precio] == ""){
	
		$objResponse->script("showError('Ingrese un Precio Producto',3000);");
		$objResponse->script("enviar()");
		
	}else {
		
		//include("../../../core/class/db.class.php");
	
		$imageUpload = $_POST["CMSFiles"];
		$imageUploadOk = $_POST["CMSFiles"][0];
		
		$db->doQuery("INSERT INTO cms_productos (id_categoria,id_subcategoria,nombre_producto_es,referencia_producto_es,desc_producto_es,nombre_producto_en,referencia_producto_en,desc_producto_en,precio_producto,imagen,compartir_facebook,compartir_twitter) 
		VALUES ('$formData[categoria]','$formData[subcategoria]','$formData[nombre_es]','$formData[ref_es]','$formData[desc_es]','$formData[nombre_en]','$formData[ref_en]','$formData[desc_en]','$formData[precio]','$imageUploadOk','$formData[facebook]','$formData[twitter]')",INSERT_QUERY);
		
		$objResponse->script("setInterval(\"window.location.reload();\", 3000 );");
		$objResponse->script("loading('Agregando..',1);");
		$objResponse->script("setTimeout(\"unloading()\", 2000 );");
	}
	
	return $objResponse;
	
}

/********************************************************************************************/
function edit( $formData )
{  
	include("../../../core/class/db.class.php");
	$db = new Database();
	$db->connect();
	$query = "SELECT * FROM cms_subcategorias WHERE id_categoria = ".$formData[categoria];
	$db->doQuery($query,SELECT_QUERY);
	$results = $db->results;
	
	$objResponse = new xajaxResponse();
	
	if($formData[categoria] == 0)
	
		$objResponse->script("showError('Seleccione una Categoria',3000);");
	
	else if($formData[categoria] != 0 and $results[0][id_subcategoria] != "" and $formData[subcategoria] == 0)
			
		$objResponse->script("showError('Seleccione una Sub Categoria',3000);");
		
	else if($formData[nombre_es] == "" or $formData[nombre_en] == "")
	
		$objResponse->script("showError('Ingrese un Nombre Producto en Español e Ingles',3000);");
	
	else if($formData[ref_es] == "" or $formData[ref_en] == "")
	
		$objResponse->script("showError('Ingrese una Referencia Producto en Español e Ingles',3000);");
	
	else if($formData[desc_es] == "" or $formData[desc_en] == "")
	
		$objResponse->script("showError('Ingrese una Descripción Producto en Español e Ingles',3000);");
	
	else if($formData[precio] == "")
	
		$objResponse->script("showError('Ingrese un Precio Producto',3000);");
		
	else {
		
		
		$db = new Database();
		$db->connect();
		
		$db->doQuery("UPDATE cms_productos SET id_categoria = '$formData[categoria]',id_subcategoria = '$formData[subcategoria]',nombre_producto_es = '$formData[nombre_es]',referencia_producto_es = '$formData[ref_es]',desc_producto_es = '$formData[desc_es]',nombre_producto_en = '$formData[nombre_en]',referencia_producto_en = '$formData[ref_en]',desc_producto_en = '$formData[desc_en]',precio_producto = '$formData[precio]',compartir_facebook = '$formData[facebook]',compartir_twitter = '$formData[twitter]' WHERE id_producto = '$formData[id]'",UPDATE_QUERY);
		
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
