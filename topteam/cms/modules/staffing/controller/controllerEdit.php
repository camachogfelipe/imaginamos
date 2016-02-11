<?php
include("../../../core/class/db.class.php");
//Creamos el nuevo objeto "Database"
$db = new Database();
//Conectamos
$db->connect();

$id = $_POST["id"];
$contenido = $_POST["contenido"];
$contenido = htmlentities($contenido);

$enlace = $_POST["enlace"];
$imageUpload = 0; $imageUpload = count($_POST["CMSFiles"]);

if($contenido == "" or $enlace == "")
	{
	$message = "<script>showError('Ingrese datos en los campos',3000);</script>";
	}
	else
	{
		if($imageUpload == 0)
		$db->doQuery("UPDATE cms_staffing SET staffing_contenido = '$contenido', staffing_enlace = '$enlace' WHERE staffing_id = '$id'",UPDATE_QUERY);
		else{
		$nameImageUpload = $_POST["CMSFiles"][0];
		$db->doQuery("UPDATE cms_staffing SET staffing_contenido = '$contenido', staffing_enlace = '$enlace', staffing_imagen = '$nameImageUpload' WHERE staffing_id = '$id'",UPDATE_QUERY);
		}
		
		$message = "<script>setInterval('window.location.reload()', 2000 ); showSuccess('actualización correcta',3000);</script>";
	}
echo $message;
?>