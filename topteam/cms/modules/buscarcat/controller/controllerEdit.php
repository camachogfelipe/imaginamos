<?php
include("../../../core/class/db.class.php");
//Creamos el nuevo objeto "Database"
$db = new Database();
//Conectamos
$db->connect();

$id = $_POST["id"];

$texto1 = $_POST["texto1"];
$texto1 = htmlentities($texto1);

$texto2 = $_POST["texto2"];
$texto2 = htmlentities($texto2);

$enlace = $_POST["enlace"];
$imageUpload = 0; $imageUpload = count($_POST["CMSFiles"]);


if($texto1 == "" or $texto2 == "")
	{
	$message = "<script>showError('Ingrese datos en los campos',3000);</script>";
	}
	else
	{
		if($imageUpload == 0)
		$db->doQuery("UPDATE cms_banners SET banners_txt1 = '$texto1', banners_txt2 = '$texto2', banners_url = '$enlace' WHERE banners_id = '$id'",UPDATE_QUERY);
		else{
		$nameImageUpload = $_POST["CMSFiles"][0];
		$db->doQuery("UPDATE cms_banners SET banners_txt1 = '$texto1', banners_txt2 = '$texto2', banners_url = '$enlace', banners_image = '$nameImageUpload' WHERE banners_id = '$id'",UPDATE_QUERY);
		}
		
		$message = "<script>setInterval('window.location.reload()', 2000 ); showSuccess('actualización correcta',3000);</script>";
	}
echo $message;
?>