<?php
include("../../../core/class/db.class.php");
//Creamos el nuevo objeto "Database"
$db = new Database();
//Conectamos
$db->connect();

//Se reciben variables
$texto1 = $_POST["titulo"];
$texto1 = htmlentities($texto1);

$texto2 = $_POST["contenido"];
$texto2 = substr($texto2, 0, 125);
$texto2 = htmlentities($texto2);

$imageUpload = $_POST["CMSFiles"];


//Validamos
if($texto1 == "" or $texto2 == "" or count($imageUpload) == 0)
	{
	//Mensaje de error
	$message = "<script>showError('Ingrese todos datos en el formulario',3000);</script>";
	}
	else
		{
				//Si todo ok, procesamos...
				$imageUploadOk = $_POST["CMSFiles"][0];
				$db->doQuery("INSERT INTO cms_vendemos_cat(vendemos_cat_id, vendemos_cat_tit, vendemos_cat_con, vendemos_cat_img)VALUES('','$texto1','$texto2','$imageUploadOk')",INSERT_QUERY);
				$message = "<script>setInterval('window.location.href = \"../view/indexCat.php\"', 2000); showSuccess('Carga correcta',3000);</script>";
		}

echo $message;
?>