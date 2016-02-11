<?php
include("../../../core/class/db.class.php");
//Creamos el nuevo objeto "Database"
$db = new Database();
//Conectamos
$db->connect();

$id = $_POST["id"];
$titulo = $_POST["titulo"];
$subtitulo = $_POST["subtitulo"];
$descripcion_detalle = $_POST["descripcion_detalle"];
$descripcion_completa = $_POST["descripcion_completa"];
$datos_cuenta = $_POST["datos_cuenta"];

if($titulo == "" or $subtitulo == "" or $titulo == "" or $descripcion_detalle == "" or $descripcion_completa == "" or strlen($titulo)>23 or strlen($subtitulo)>27 or strlen($descripcion_detalle)>80 or strlen($descripcion_completa)>1300)
	{
	$message = "<script>showError('Ingrese título y artículo',3000);</script>";
	}
	else
	{
	$db->doQuery("UPDATE t_servicios SET titulo = '$titulo', subtitulo = '$subtitulo', descripcion_detalle = '$descripcion_detalle', descripcion_completa = '$descripcion_completa', datos_cuenta = '$datos_cuenta' WHERE id_servicios = '$id'",UPDATE_QUERY);
		
			
		$message = "<script>setInterval('window.location.reload()', 2000 ); showSuccess('actualización correcta',3000);</script>";
	}
echo $message;

header('Location: ../view/index.php');

?>