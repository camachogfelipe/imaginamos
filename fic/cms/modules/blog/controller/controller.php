<?php
include("../../../core/class/db.class.php");
//Creamos el nuevo objeto "Database"
$db = new Database();
//Conectamos
$db->connect();

//Se reciben variables
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


//Validamos
if($titulo  == "" or $subtitulo  == "" or $descripcion  == "" )
	{
	//Mensaje de error
	$message = "<script>showError('Ingrese título, artículo e imagen',3000);</script>";
	}
	else
		{
		
				//Si todo ok, procesamos...
				$dateTime = date("Y-m-d");
			 $db->doQuery("INSERT INTO t_blogs(id_blog, titulo, subtitulo, descripcion, imagen, fecha, tag1,url1, tag2,url2,tag3,url3)VALUES('','$titulo','$subtitulo','$descripcion','$imagen','$dateTime', '$tag1', '$url1', '$tag2', '$url2', '$tag3', '$url3')",INSERT_QUERY);
				$message = "<script>setInterval('window.location.reload()', 2000 ); showSuccess('Carga correcta',3000);</script>";
		}

echo $message;

header('Location: ../view/index.php');


?>