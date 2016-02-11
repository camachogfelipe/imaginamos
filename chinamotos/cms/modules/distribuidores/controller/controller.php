<?php
include("../../../core/class/db.class.php");
//Creamos el nuevo objeto "Database"
$db = new Database();
//Conectamos
$db->connect();

//Se reciben variables
$texto1 = $_POST["ciudad"];
$texto1 = htmlentities($texto1);

//Validamos
if($texto1 == "")
	{
	//Mensaje de error
	$message = "<script>showError('Ingrese datos en el campo',3000);</script>";
	}
	else
		{
				//Si todo ok, procesamos...
				$db->doQuery("INSERT INTO cms_redpuntos_ciudad(redpuntos_ciudad_id, redpuntos_ciudad_nombre)VALUES('','$texto1')",INSERT_QUERY);
				$message = "<script>setInterval('window.location.href = \"../view/indexCiudades.php\"', 2000); showSuccess('Carga correcta',3000);</script>";
		}

echo $message;
?>