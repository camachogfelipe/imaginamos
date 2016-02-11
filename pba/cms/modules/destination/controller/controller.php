<?php
include("../../../core/class/db.class.php");
//Creamos el nuevo objeto "Database"
$db = new Database();
//Conectamos
$db->connect();

//Se reciben variables
$texto1 = mysql_real_escape_string($_POST["titulo1"]);
 htmlentities($texto1);

 $texto2 = mysql_real_escape_string($_POST["titulo"]);
 htmlentities($texto2);
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
if($imageUpload == "")
	{
	//Mensaje de error
	$message = "<script>showError('Ingrese t&iacute;tulo 1, t&iacute;tulo 2 , el enlace y la imagen',3000);</script>";
	}
	else
		{
				//Si todo ok, procesamos...
				$imageUploadOk = $_POST["CMSFiles"][0];
//				$dateTime = date("Y-m-d H:i:s");
				$db->doQuery("INSERT INTO cms_destination_imagenes(id_imagenes,id_descarga,titulo,imagenes)VALUES('','$texto2','$texto1','$imageUploadOk')",INSERT_QUERY);
				$message = "<script>setInterval('window.location.reload()', 2000 ); showSuccess('Carga correcta',3000);</script>";
		}

echo $message;
?>