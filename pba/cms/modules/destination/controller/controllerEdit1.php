<?php
include("../../../core/class/db.class.php");
//Creamos el nuevo objeto "Database"
$db = new Database();
//Conectamos
$db->connect();

$id = $_POST["id"];

$textoA = $_POST["titulo1"];
$texto1 = mysql_real_escape_string($textoA);
htmlentities($texto1);
 
$enlaceA = $_POST["enlace"];
$enlace = mysql_real_escape_string($enlaceA);
htmlentities($enlace); 

$PDF = $_POST["CMSFiles"][0];


if($texto1 == "")
	{
	$message = "<script>showError('Ingrese al menos el t&iacute;tulo 1, el enlace y la imagen',3000);</script>";
	}
	else
	{
//		if($imageUpload == 0)
//		$db->doQuery("UPDATE cms_destination_descargas SET titulo = '$texto1', url = '$enlace' where id_descarga = '$id' ",UPDATE_QUERY);
//		else{
		$db->doQuery("UPDATE cms_destination_descargas SET titulo = '$texto1', descarga = '$PDF' ,url = '$enlace' where id_descarga = '$id'",UPDATE_QUERY);
//		}
		
		$message = "<script>setInterval('window.location.reload()', 2000 ); showSuccess('actualización correcta',3000);</script>";
	}
echo $message;

?>