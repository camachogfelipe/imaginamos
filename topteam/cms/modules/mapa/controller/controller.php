<?php
include("../../../core/class/db.class.php");
//Creamos el nuevo objeto "Database"
$db = new Database();
//Conectamos
$db->connect();

//Se reciben variables
$enlace = $_POST["enlace"];

//Validamos
if($enlace == "" )
	{
	//Mensaje de error
	$message = "<script>showError('Ingrese todos los campos del formulario',3000);</script>";
	}
	else
		{
				//Si todo ok, procesamos...
				
				$dateTime = date("Y-m-d H:i:s");
				$db->doQuery("INSERT INTO cms_mapa(mapa_id, mapa_enlace)VALUES('','$enlace')",INSERT_QUERY);
				$message = "<script>setInterval('window.location.reload()', 2000 ); showSuccess('Carga correcta',3000);</script>";
		}

echo $message;
?>