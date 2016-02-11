<?php
include("../../../core/class/db.class.php");
//Creamos el nuevo objeto "Database"
$db = new Database();
//Conectamos
$db->connect();

//Se reciben variables
$titulo= $_POST["titulo"];
$subtitulo= $_POST["subtitulo"];
$descripcion = $_POST["descripcion"];

//Validamos
if($titulo  == "" or $subtitulo  == "" or $descripcion  == "")
	{
	//Mensaje de error
	$message = "<script>showError('Ingrese título, subtitulo, descripcion e imagen',3000);</script>";
	}
	else
		{
				//Si todo ok, procesamos...
				$db->doQuery("INSERT INTO t_quienes_somos(id_quienes_somos, titulo, subtitulo, descripcion)VALUES('','$titulo','$subtitulo','$descripcion')",INSERT_QUERY);
				$message = "<script>setInterval('window.location.reload()', 2000 ); showSuccess('Carga correcta',3000);</script>";
		}

echo $message;


header('Location: ../view/index.php');


?>