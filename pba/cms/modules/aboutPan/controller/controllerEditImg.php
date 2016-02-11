<?php
include("../../../core/class/db.class.php");
//Creamos el nuevo objeto "Database"
$db = new Database();
//Conectamos
$db->connect();

//$id = $_POST["id"];

//$texto1 = $_POST["texto"];
//$texto1 = htmlentities($texto1);

//$enlace = $_POST["enlace"];
$imageUpload = $_POST["CMSFiles"];
var_dump($imageUpload);


if($imageUpload == 0 )
	{
    
	$message = "<script>showError('carge una imagen por favor',3000);</script>";
        
	}else{
                
		$imageUploadOk = $_POST["CMSFiles"][0];
		$db->doQuery("UPDATE cms_aboutpan_imagen SET imagen = '$imageUploadOk' ",INSERT_QUERY);
		$message = "<script>setInterval('window.location.reload()', 2000 ); showSuccess('actualización correcta',3000);</script>";
        }
		
	
echo $message;
?>