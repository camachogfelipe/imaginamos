<?php
include("../../../core/class/db.class.php");
//Creamos el nuevo objeto "Database"
$db = new Database();
//Conectamos
$db->connect();

//Se reciben variables
$titulo = $_POST["titulo"];
$subtitulo = $_POST["subtitulo"];
$descripcion_detalle = $_POST["descripcion_detalle"];
$descripcion_completa = $_POST["descripcion_completa"];
$datos_cuenta = $_POST["datos_cuenta"];

$dato= "table";


//Validamos
if($titulo  == "" or $subtitulo  == "" or $descripcion_detalle  == "")
	{
	//Mensaje de error
	$message = "<script>showError('Ingrese título, subtitulo y descripcion',3000);</script>";
	}
	else
		{
			if( strpos( $datos_cuenta,$dato ) !== false ){ 
				//Si todo ok, procesamos...
     $db->doQuery("INSERT INTO t_servicios(id_servicios, titulo, subtitulo, descripcion_detalle, descripcion_completa, datos_cuenta)VALUES('','$titulo','$subtitulo','$descripcion_detalle','$descripcion_completa','$datos_cuenta')",INSERT_QUERY);
				$message = "<script>setInterval('window.location.reload()', 2000 ); showSuccess('Carga correcta',3000);</script>";
				header('Location: ../view/index.php');
			}else{
				header('Location: ../view/index.php?error=1');
			
				}
		}

echo $message;


?>