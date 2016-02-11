<?php
include("../../../core/class/db.class.php");
//Creamos el nuevo objeto "Database"
$db = new Database();
//Conectamos
$db->connect();

$id = $_POST["id"];

//$texto1 = $_POST["titulo1"];
//$texto1 = htmlentities($texto1);

//$texto2 = $_POST["titulo2"];
//$texto2 = htmlentities($texto2);

//$enlace = $_POST["enlace"];
$imageUpload = 0; $imageUpload = count($_POST["CMSFiles"]);


if($imageUpload == 0)
	{
	$message = "<script>showError('Ingrese imagen',3000);</script>";
	}
	else
	{
		
		$nameImageUpload = $_POST["CMSFiles"][0];
		$db->doQuery("UPDATE cms_banners_img SET  imagen_banners = '$nameImageUpload' WHERE idbanners_img = '$id'",UPDATE_QUERY);
		
		
		$message = "<script>setInterval('window.location.reload()', 2000 ); showSuccess('actualización correcta',3000);</script>";
	}
echo $message;
?>