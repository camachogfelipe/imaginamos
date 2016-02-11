<?php
include("../../../core/class/db.class.php");
//Creamos el nuevo objeto "Database"
$db = new Database();
//Conectamos
$db->connect();

$id = $_POST["id"];
$titulo = $_POST["titulo"];
$enlace = $_POST["enlace"];
$imageUpload = 0; $imageUpload = count($_POST["CMSFiles"]);

if($titulo == "" or $enlace == "")
	{
	$message = "<script>showError('Ingrese los datos del formulario',3000);</script>";
	}
	else
	{
		if($imageUpload == 0)
		$db->doQuery("UPDATE cms_aliadosImgIndex SET aliadosImgIndex_titulo = '$titulo', aliadosImgIndex_enlace = '$enlace' WHERE aliadosImgIndex_id = '$id'",UPDATE_QUERY);
		else{
		$nameImageUpload = $_POST["CMSFiles"][0];
		$db->doQuery("UPDATE cms_aliadosImgIndex SET aliadosImgIndex_titulo = '$titulo', aliadosImgIndex_enlace = '$enlace', aliadosImgIndex_imagen = '$nameImageUpload' WHERE aliadosImgIndex_id = '$id'",UPDATE_QUERY);
		}
		
		$message = "<script>setInterval('window.location.reload()', 2000 ); showSuccess('actualización correcta',3000);</script>";
	}
echo $message;
?>