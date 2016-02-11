<?php
include("../../../core/class/db.class.php");
//Creamos el nuevo objeto "Database"
$db = new Database();
//Conectamos
$db->connect();

$id = $_POST["id"];

$imageUpload = 0; 
$imageUpload = count($_POST["CMSFiles"]);


if($imageUpload == 0)
	{
	$message = "<script>showError('Porfavor seleccione una imagen',3000);</script>";
	}
	else
	{
		
		$nameImageUpload = $_POST["CMSFiles"][0];
		$db->doQuery("UPDATE cms_destacados SET destacados_image_fondo = '$nameImageUpload' WHERE destacados_id = '$id'",UPDATE_QUERY);
		//print_r($_POST);
                //$message = "<script>setInterval('window.location.reload()', 2000 ); showSuccess('actualización correcta',3000);</script>";
                $message = "<script>setInterval('window.location.href = \"../view/\"', 2000 ); showSuccess('actualización correcta',3000);</script>";
                
        }
echo $message;
?>