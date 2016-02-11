<?php
include("../../../core/class/db.class.php");
//Creamos el nuevo objeto "Database"
$db = new Database();
//Conectamos
$db->connect();

//Se reciben variables
$contenido = $_POST["contenido"];
$contenido2 = $_POST["contenido2"];
$imageUpload1 = $_POST["CMSFiles"];
$rutavideo = $_POST["rutavideo"];

//Validamos
if($contenido == "" or $contenido2 == "" )
	{
	//Mensaje de error
	$message = "<script>showError('Ingrese todos los campos del formulario',3000);</script>";
	}
	else
		{
				//Si todo ok, procesamos...
				$imageUploadOk1 = $_POST["CMSFiles"][0];
				
				
				
				$dateTime = date("Y-m-d H:i:s");
				$db->doQuery("INSERT INTO cms_gestionh(gestionh_id, gestionh_contenido, gestionh_contenido2, gestionh_imagenInt, gestionh_rutavideo)VALUES('','$contenido','$contenido2','$imageUploadOk1','$rutavideo')",INSERT_QUERY);
				$message = "<script>setInterval('window.location.reload()', 2000 ); showSuccess('Carga correcta',3000);</script>";
		}

echo $message;
?>