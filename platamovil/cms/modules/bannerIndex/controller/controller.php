<?php
include("../../../core/class/db.class.php");
//Creamos el nuevo objeto "Database"
$db = new Database();
//Conectamos
$db->connect();

//Se reciben variables
$texto1 = $_POST["titulo"];
$texto1 = htmlentities($texto1);

$enlace = $_POST["enlace"];
//$enPagNueva = $_POST["enPagNueva"];
$imageUpload = $_POST["CMSFiles"];

//Validamos
if($texto1 == "" or $enlace == "" )
	{
	//Mensaje de error
	$message = "<script>showError('Ingrese texto1, texto2 e imagen',3000);</script>";
	}
	else
		{
				//Si todo ok, procesamos...
				$imageUploadOk = $_POST["CMSFiles"][0];
				$dateTime = date("Y-m-d H:i:s");
				$db->doQuery("INSERT INTO cms_banners(banners_id, banners_txt1, banners_url, banners_blank, banners_order, banners_image)VALUES('','$texto1','$enlace','0','1','$imageUploadOk')",INSERT_QUERY);
				$message = "<script>setInterval('window.location.reload()', 2000 ); showSuccess('Carga correcta',3000);</script>";
		}

echo $message;
?>