<?php
include("../../../core/class/db.class.php");
//Creamos el nuevo objeto "Database"
$db = new Database();
//Conectamos
$db->connect();

$id = $_POST["id"];
$titulo1 = $_POST["titulo1"];
$titulo1 = htmlentities($titulo1);

$titulo2 = $_POST["titulo2"];
$titulo2 = htmlentities($titulo2);

$contenido = $_POST["contenido"];
$contenido = htmlentities($contenido);

$enlace = $_POST["enlace"];
$imageUpload = 0; $imageUpload = count($_POST["CMSFiles"]);

if($titulo1 == "" or $titulo2 == "")
	{
	$message = "<script>showError('Ingrese datos en los campos',3000);</script>";
	}
	else
	{
		if($imageUpload == 0)
		$db->doQuery("UPDATE cms_headhunter SET headhunter_titulo1 = '$titulo1', headhunter_titulo2 = '$titulo2', headhunter_contenido = '$contenido', headhunter_enlace = '$enlace' WHERE headhunter_id = '$id'",UPDATE_QUERY);
		else{
		$nameImageUpload = $_POST["CMSFiles"][0];
		$db->doQuery("UPDATE cms_headhunter SET headhunter_titulo1 = '$titulo1', headhunter_titulo2 = '$titulo2', headhunter_contenido = '$contenido', headhunter_enlace = '$enlace', headhunter_imagen = '$nameImageUpload' WHERE headhunter_id = '$id'",UPDATE_QUERY);
		}
		
		$message = "<script>setInterval('window.location.reload()', 2000 ); showSuccess('actualización correcta',3000);</script>";
	}
echo $message;
?>