<?php
include("../../../core/class/db.class.php");
//Creamos el nuevo objeto "Database"
$db = new Database();
//Conectamos
$db->connect();

$titulo= $_POST["titulo"];
$subtitulo= $_POST["subtitulo"];
$descripcion = $_POST["descripcion"];
$imagen = $_POST["imagen"];

if($titulo  == "" or $subtitulo  == "" or $descripcion  == "")
	{
	$message = "<script>showError('Ingrese título y artículo',3000);</script>";
	}
	else
	{
		
		$db->doQuery("UPDATE t_quienes_somos SET titulo = '$titulo', subtitulo = '$subtitulo', descripcion = '$descripcion', imagen = '$imagen' WHERE id_quienes_somos = '1'",UPDATE_QUERY);
	
		
		$message = "<script>setInterval('window.location.reload()', 2000 ); showSuccess('actualización correcta',3000);</script>";
	}
echo $message;

header('Location: ../view/index.php');

?>