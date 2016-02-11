<?php
include("../../../core/class/db.class.php");
//Creamos el nuevo objeto "Database"
$db = new Database();
//Conectamos
$db->connect();

$id = $_POST["id"];
$imageUpload = count($_POST["CMSFiles"]);


		if(count($_POST["CMSFiles"]) == 0){
		$message = "<script>showError('Seleccione una imagen',3000);</script>";
                }
                else{
		//print_r($_POST);
                $nameImageUpload = $_POST["CMSFiles"][0];
		$db->doQuery("UPDATE cms_news SET   new_image2 = '$nameImageUpload' WHERE news_id = '$id'",UPDATE_QUERY);
		}
		
		$message = "<script>setInterval('window.location.reload()', 2000 ); showSuccess('actualización correcta',3000);</script>";
	
echo $message;
?>