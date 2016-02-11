<?php
include("../../../core/class/db.class.php");
//Creamos el nuevo objeto "Database"
$db = new Database();
//Conectamos
$db->connect();

//Se reciben variables
$categoria = $_POST["categoria"];
$subcategoria = $_POST["subcategoria"];
$nombre_es = $_POST["nombre_es"];
$nombre_en = $_POST["nombre_en"];
$ref_es = $_POST["ref_es"];
$ref_en = $_POST["ref_en"];
$desc_es = $_POST["desc_es"];
$desc_en = $_POST["desc_en"];
$precio = $_POST["precio"];
$facebook = $_POST["facebook"];
$twitter = $_POST["twitter"];
$destacado = $_POST["destacado"];

$imageUpload = $_POST["CMSFiles"];



$query = "SELECT * FROM cms_subcategorias WHERE id_categoria = ".$categoria;
$db->doQuery($query,SELECT_QUERY);
$results = $db->results;

if($categoria == 0){
	$message = "<script>showError('Seleccione una Categoria',3000);</script>";
}else if($categoria != 0 and $results[0][id_subcategoria] != "" and $subcategoria == 0){
	$message = "<script>showError('Seleccione una Sub Categoria',3000);</script>";
}else if($nombre_es == ""){
	$message = "<script>showError('Ingrese un Nombre Producto en Español',3000);</script>";
}else if($nombre_en == ""){
	$message = "<script>showError('Ingrese un Nombre Producto en Ingles',3000);</script>";
}else if($ref_es == ""){
	$message = "<script>showError('Ingrese una Referencia Producto en Español',3000);</script>";
}else if($ref_en == ""){
	$message = "<script>showError('Ingrese una Referencia Producto en Ingles',3000);</script>";
}else if($desc_es == ""){
	$message = "<script>showError('Ingrese una Descripción Producto',3000);</script>";
}else {
		

		$query2 = "SELECT * FROM cms_productos WHERE destacado =".$destacado; 
		$db->doQuery($query2,SELECT_QUERY);
		$results2 = $db->results;
		
		if(($results2) > 0){
				if ($db->doQuery("UPDATE cms_productos SET destacado = 4 WHERE id_producto = ".$results2[0][id_producto],INSERT_QUERY));
		}
		
		//Si todo ok, procesamos...
		$imageUploadOk = $_POST["CMSFiles"][0];
		$dateTime = date("Y-m-d H:i:s");
		if ($db->doQuery("INSERT INTO cms_productos (id_categoria,id_subcategoria,nombre_producto_es,referencia_producto_es,desc_producto_es,nombre_producto_en,referencia_producto_en,desc_producto_en,precio_producto,imagen,compartir_facebook,compartir_twitter,destacado) 
VALUES ('$categoria','$subcategoria','$nombre_es','$ref_es','$desc_es','$nombre_en','$ref_en','$desc_en','$precio','$imageUploadOk','$facebook','$twitter','$destacado')",INSERT_QUERY))
		{
			$message = "<script>setInterval('window.location.reload()', 2000 ); showSuccess('Carga correcta',3000);</script>";
		}
		else
		{
			$message = "<script>showError('Carga incorrecta',3000);</script>";
		}
		
}




echo $message;
?>