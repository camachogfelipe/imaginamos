<?php
include("../../../core/class/db.class.php");
//Creamos el nuevo objeto "Database"
$db = new Database();
//Conectamos
$db->connect();

//$id = $_POST["id"];

//$texto1 = $_POST["texto"];
//$texto1 = mysql_real_escape_string($texto1);

//$enlace = $_POST["enlace"];
$imageUpload = $_POST["CMSFiles"][0];


if($imageUpload == "" )
	{
    
	$message = "<script>showError('Ingrese imagen',3000);</script>";
        
	}else {
		$db->doQuery("UPDATE cms_aboutpan_cont SET imagen = '$imageUpload'",UPDATE_QUERY);
                
                $message = "<script>setInterval('window.location.reload()', 2000 ); showSuccess('actualización correcta',3000);</script>";
        }
		
echo $message;
?>