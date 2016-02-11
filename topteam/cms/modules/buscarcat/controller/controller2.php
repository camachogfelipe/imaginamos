<?php
include("../../../core/class/db.class.php");
//Creamos el nuevo objeto "Database"
$db = new Database();
//Conectamos
$db->connect();

//Se reciben variables
$texto1 = $_POST["ciudad"];
$texto1 = htmlentities($texto1);

$texto2 = $_POST["localidad"];
$texto2 = htmlentities($texto2);

$texto3 = $_POST["barrio"];
$texto3 = htmlentities($texto3);

$texto4 = $_POST["nombrep"];
$texto4 = htmlentities($texto4);

$texto5 = $_POST["direccion"];
$texto5 = htmlentities($texto5);

$texto6 = $_POST["horario"];
$texto6 = htmlentities($texto6);

//Validamos
if($texto1 == "" or $texto2 == "" or $texto3 == "" or $texto4 == "" or $texto5 == "" or $texto6 == "" )
	{
	//Mensaje de error
	$message = "<script>showError('Ingrese todos los datos del formulario',3000);</script>";
	}
	else
		{
				//Si todo ok, procesamos...
				$db->doQuery("INSERT INTO cms_redpuntos(redpuntos_id, redpuntos_campo1, redpuntos_campo2, redpuntos_campo3, redpuntos_campo4, redpuntos_campo5, redpuntos_campo6)VALUES('','$texto1','$texto2','$texto3','$texto4','$texto5','$texto6')",INSERT_QUERY);
				$message = "<script>setInterval('window.location.href = \"../view/indexDatos.php\"', 2000); showSuccess('Carga correcta',3000);</script>";
		}

echo $message;
?>