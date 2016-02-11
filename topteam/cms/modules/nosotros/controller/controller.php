<?php
include("../../../core/class/db.class.php");
//Creamos el nuevo objeto "Database"
$db = new Database();
//Conectamos
$db->connect();

//Se reciben variables
$mensaje = $_POST["mensaje"];
$contenido = $_POST["contenido"];
$contenido2 = $_POST["contenido2"];
$imageUpload1 = $_POST["CMSFiles"];

//Validamos
if($mensaje == "" or $contenido == "" )
	{
	//Mensaje de error
	$message = "<script>showError('Ingrese todos los campos del formulario',3000);</script>";
	}
	else
		{
				//Si todo ok, procesamos...
				$imageUploadOk1 = $_POST["CMSFiles"][0];
				
				
				
				$dateTime = date("Y-m-d H:i:s");
				$db->doQuery("INSERT INTO cms_nosotros(nosotros_id, nosotros_mensaje, nosotros_contenido, nosotros_contenido2, nosotros_imagenInt)VALUES('','$mensaje','$contenido','$contenido2','$imageUploadOk1')",INSERT_QUERY);
				$message = "<script>setInterval('window.location.reload()', 2000 ); showSuccess('Carga correcta',3000);</script>";
		}

echo $message;
?>