<?php
include("../../../core/class/db.class.php");
//Creamos el nuevo objeto "Database"
$db = new Database();
//Conectamos
$db->connect();

$id = $_POST["id"];
$title = $_POST["pais"];
//var_dump($_POST);exit;
$imageUpload = 0;
$imageUpload = count($_POST["IMGFiles"]);

if($title == "" )
	{
	$message = "<script>showError('Ingrese título y artículo',3000);</script>";
	}
	else
	{
		if($imageUpload == 0){
                    //echo "UPDATE cms_pais SET pais_nombre = '".$title."' WHERE pais_id =".$id;exit;
		$db->doQuery("UPDATE cms_pais SET pais_nombre = '".$title."' WHERE pais_id =".$id,UPDATE_QUERY);
                }else{
		$nameImageUpload = $_POST["IMGFiles"][0];
                //echo "UPDATE cms_pais SET pais_nombre = '".$title."', pais_image = '".$nameImageUpload."' WHERE pais_id =".$id;exit;
		$db->doQuery("UPDATE cms_pais SET pais_nombre = '".$title."', pais_image = '".$nameImageUpload."' WHERE pais_id =".$id,UPDATE_QUERY);
		}
		
		$message = "<script>setInterval('window.location.reload()', 2000 ); showSuccess('actualización correcta',3000);</script>";
	}
echo $message;
?>