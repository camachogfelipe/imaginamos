<?php
include("../../../core/class/db.class.php");
//Creamos el nuevo objeto "Database"
$db = new Database();
//Conectamos
$db->connect();

$id = $_POST["id"];

$texto1 = $_POST["titulo1"];
$texto1 = htmlentities($texto1);

$texto2 = $_POST["titulo2"];
$texto2 = htmlentities($texto2);

$texto3 = $_POST["titulo3"];
$texto3 = htmlentities($texto3);

$enlace = $_POST["enlace"];
$imageUpload = 0; $imageUpload = count($_POST["CMSFiles"]);


if($texto1 == "" or $enlace == "")
	{
	$message = "<script>showError('Ingrese al menos el t&iacute;tulo 1, el enlace y la imagen',3000);</script>";
	}
	else
	{
		if($imageUpload == 0)
		$db->doQuery("UPDATE cms_banners SET banners_txt1 = '$texto1', banners_txt2 = '$texto2', banners_txt3 = '$texto3', banners_url = '$enlace' WHERE banners_id = '$id'",UPDATE_QUERY);
		else{
		$nameImageUpload = $_POST["CMSFiles"][0];
		$db->doQuery("UPDATE cms_banners SET banners_txt1 = '$texto1', banners_txt2 = '$texto2', banners_txt3 = '$texto3', banners_url = '$enlace', banners_image = '$nameImageUpload' WHERE banners_id = '$id'",UPDATE_QUERY);
		}
		
		$message = "<script>setInterval('window.location.reload()', 2000 ); showSuccess('actualización correcta',3000);</script>";
	}
echo $message;
?>