<?php
include("../../../core/class/db.class.php");
//Creamos el nuevo objeto "Database"
$db = new Database();
//Conectamos
$db->connect();

$id = $_POST["id"];

$texto1 = $_POST["titulo"];
$texto1 = htmlentities($texto1);
$enlace = $_POST["enlace"];
$imageUpload = 0; $imageUpload = count($_POST["CMSFiles"]);


if($texto1 == "" or $enlace == "")
	{
	$message = "<script>showError('Ingrese datos en los campos',3000);</script>";
	}
	else
	{
		if($imageUpload == 0)
		$db->doQuery("UPDATE cms_banners SET banners_txt1 = '$texto1', banners_url = '$enlace' WHERE banners_id = '$id'",UPDATE_QUERY);
		else{
		$nameImageUpload = $_POST["CMSFiles"][0];
		$db->doQuery("UPDATE cms_banners SET banners_txt1 = '$texto1', banners_url = '$enlace', banners_image = '$nameImageUpload' WHERE banners_id = '$id'",UPDATE_QUERY);
		}
		
		$message = "<script>setInterval('window.location.reload()', 2000 ); showSuccess('actualización correcta',3000);</script>";
	}
echo $message;
?>