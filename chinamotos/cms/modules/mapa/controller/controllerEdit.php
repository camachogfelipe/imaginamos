<?php
include("../../../core/class/db.class.php");
//Creamos el nuevo objeto "Database"
$db = new Database();
//Conectamos
$db->connect();

$id = $_POST["id"];

$contenido = $_POST["contenido"];
$contenido = htmlentities($contenido);

$enlace = $_POST["enlace"];

if($contenido == "" or $enlace == "" )
	{
	$message = "<script>showError('Ingrese el contenido y el enlace al mapa',3000);</script>";
	}
	else
	{
		
		$db->doQuery("UPDATE cms_mapa SET mapa_contenido = '$contenido', mapa_enlace = '$enlace' WHERE mapa_id = '$id'",UPDATE_QUERY);
		
		
		//$message = "<script>setInterval('window.location.reload(true)', 2000 ); showSuccess('actualización correcta',3000);</script>";
		$message = "<script>setInterval('window.location.href = \"../view/\"', 2000 ); showSuccess('actualización correcta',3000);</script>";
		 
		
	}
echo $message;
?>