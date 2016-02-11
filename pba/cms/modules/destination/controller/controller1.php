<?php
include("../../../core/class/db.class.php");
//Creamos el nuevo objeto "Database"
$db = new Database();
//Conectamos
$db->connect();

//Se reciben variables
$textoA = $_POST["titulo1"];
$texto1 = mysql_real_escape_string($textoA);
htmlentities($texto1);

//$texto2 = $_POST["titulo2"];
//$texto2 = htmlentities($texto2);

//$texto3 = $_POST["titulo3"];
//$texto3 = htmlentities($texto3);

$enlaceA = $_POST["enlace"];
$enlace = mysql_real_escape_string($enlaceA);
htmlentities($enlace);
//$enPagNueva = $_POST["enPagNueva"];
$PDF = $_POST["CMSFiles"][0];

/*
foreach ($_POST as $key=>$value)
{
	$arr[$key] = $value;
}
print_r($arr);exit;
*/



//Validamos
//if($texto1 == "" or $enlace == "" or count($imageUpload) == 0 )
if($texto1 == "" )
	{
	//Mensaje de error
	$message = "<script>showError('Ingrese t&iacute;tulo',3000);</script>";
	}
	else
		{
				//Si todo ok, procesamos...
//				$imageUploadOk = $_POST["CMSFiles"][0];
//				$dateTime = date("Y-m-d H:i:s");
				$db->doQuery("INSERT INTO cms_destination_descargas(id_descarga, titulo,descarga,url)VALUES('','$texto1','$PDF','$enlace')",INSERT_QUERY);
				$message = "<script>setInterval('window.location.reload()', 2000 ); showSuccess('Carga correcta',3000);</script>";
		}

echo $message;
?>