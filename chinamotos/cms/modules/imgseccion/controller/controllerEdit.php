<?php
include("../../../core/class/db.class.php");
//Creamos el nuevo objeto "Database"
$db = new Database();
//Conectamos
$db->connect();

$id = $_POST["id"];
$titulo = $_POST["titulo"];
$titulo = htmlentities($titulo);
$imageUpload = 0; $imageUpload = count($_POST["CMSFiles"]);

if($titulo == "")
	{
	$message = "<script>showError('Ingrese datos en el formulario',3000);</script>";
	}
	else
	{
		if($imageUpload == 0)
		$db->doQuery("UPDATE cms_imgseccion SET imgseccion_titulo = '$titulo' WHERE imgseccion_id = '$id'",UPDATE_QUERY);
		else{
		$nameImageUpload = $_POST["CMSFiles"][0];
		$db->doQuery("UPDATE cms_imgseccion SET imgseccion_titulo = '$titulo', imgseccion_image = '$nameImageUpload' WHERE imgseccion_id = '$id'",UPDATE_QUERY);
		}
		
		$message = "<script>setInterval('window.location.reload()', 2000 ); showSuccess('actualización correcta',3000);</script>";
	}
echo $message;
?>