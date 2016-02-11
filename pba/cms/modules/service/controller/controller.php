<?php
include("../../../core/class/db.class.php");
//Creamos el nuevo objeto "Database"
$db = new Database();
//Conectamos
$db->connect();

//Se reciben variables
//$texto1 = $_POST["titulo1"];
//$texto1 = htmlentities($texto1);

//$texto2 = $_POST["titulo2"];
//$texto2 = htmlentities($texto2);

//$texto3 = $_POST["titulo3"];
//$texto3 = htmlentities($texto3);

//$enlace = $_POST["enlace"];
//$enPagNueva = $_POST["enPagNueva"];
$imageUpload = $_POST["CMSFiles"];

/*
foreach ($_POST as $key=>$value)
{
	$arr[$key] = $value;
}
print_r($arr);exit;
*/



//Validamos
//if($texto1 == "" or $enlace == "" or count($imageUpload) == 0 )
if($imageUpload == 0)
	{
	//Mensaje de error
	$message = "<script>showError('Cargue imagen',3000);</script>";
	}
	else
		{
				//Si todo ok, procesamos...
				$imageUploadOk = $_POST["CMSFiles"][0];
				$db->doQuery("UPDATE cms_services SET imagen_services = '$imageUploadOk' ",INSERT_QUERY);
				$message = "<script>setInterval('window.location.reload()', 2000 ); showSuccess('Carga correcta',3000);</script>";
		}

echo $message;
?>