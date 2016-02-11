<?php
include("../../../core/class/db.class.php");
//Creamos el nuevo objeto "Database"
$db = new Database();
//Conectamos
$db->connect();

//$texto1 = mysql_real_escape_string($_POST["texto"]);
//htmlentities($texto1);

$imageUpload = 0; $imageUpload = count($_POST["CMSFiles"]);


if($imageUpload == "")
	{
	$message = "<script>showError('Ingrese imagen ',3000);</script>";
	}
	else
	{
		$nameImageUpload = $_POST["CMSFiles"][0];
		$db->doQuery("UPDATE cms_contact SET imagen = '$nameImageUpload'",UPDATE_QUERY);
		$message = "<script>setInterval('window.location.reload()', 2000 ); showSuccess('actualización correcta',3000);</script>";
	}
echo $message;
?>