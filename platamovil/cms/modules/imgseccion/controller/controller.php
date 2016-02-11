<?php
include("../../../core/class/db.class.php");
//Creamos el nuevo objeto "Database"
$db = new Database();
//Conectamos
$db->connect();

//Se reciben variables
$titulo = $_POST["titulo"];
$titulo = htmlentities($titulo);
$enlace = $_POST["enlace"];
$imageUpload = $_POST["CMSFiles"];

//Validamos
if($titulo == "" or $enlace == "" or count($imageUpload) == 0)
	{
	//Mensaje de error
	$message = "<script>showError('Ingrese todos los datos',3000);</script>";
	}
	else
		{
				//Si todo ok, procesamos...
				$imageUploadOk = $_POST["CMSFiles"][0];
				$dateTime = date("Y-m-d H:i:s");
				$db->doQuery("INSERT INTO cms_aliados(aliados_id, aliados_titulo, aliados_url, aliados_image)VALUES('','$titulo','$enlace','$imageUploadOk')",INSERT_QUERY);
				$message = "<script>setInterval('window.location.reload()', 2000 ); showSuccess('Carga correcta',3000);</script>";
		}

echo $message;
?>