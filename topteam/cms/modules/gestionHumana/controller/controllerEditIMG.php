<?php
include("../../../core/class/db.class.php");
//Creamos el nuevo objeto "Database"
$db = new Database();
//Conectamos
$db->connect();


$id = $_POST["id"];

$imageUpload = 0; $imageUpload = count($_POST["CMSFiles"]);


		if($imageUpload != 0){
		$nameImageUpload = $_POST["CMSFiles"][0];
		$db->doQuery("UPDATE cms_gestionh SET gestionh_imagenInt = '$nameImageUpload' WHERE gestionh_id = '$id'",UPDATE_QUERY);
		}
		
		$message = "<script>setInterval('window.location.reload()', 2000 ); showSuccess('actualización correcta',3000);</script>";
	
echo $message;
?>