<?php
include("../../../core/class/db.class.php");
//Creamos el nuevo objeto "Database"
$db = new Database();
//Conectamos
$db->connect();

$id = $_POST["id"];
$titulo = $_POST["titulo"];
$subtitulo = $_POST["subtitulo"];
$descripcion = $_POST["descripcion"];
$imagen = $_POST["imagen"];
$tag1 = $_POST["tag1"];
$url1 = $_POST["url1"];
$tag2 = $_POST["tag2"];
$url2 = $_POST["url2"];
$tag3 = $_POST["tag3"];
$url3 = $_POST["url3"];



if($titulo == "" or $subtitulo == "" or $descripcion == "")
	{
	
	$message = "<script>showError('Ingrese título y artículo',3000);</script>";
	}
	else
	{ 
			echo $db->doQuery("UPDATE t_blogs SET titulo = '$titulo', subtitulo = '$subtitulo', descripcion = '$descripcion', imagen = '$imagen',  tag1 = '$tag1', url1 = '$url1',  tag2 = '$tag2',  url2 = '$url2',  tag3 = '$tag3',  url3 = '$url3' WHERE id_blog = '$id'",UPDATE_QUERY);
	
			$message = "<script>setInterval('window.location.reload()', 2000 ); showSuccess('Carga correcta',3000);</script>";
		
	}
echo $message;

header('Location: ../view/index.php');

?>