<?php
include("../../../core/class/db.class.php");
//Creamos el nuevo objeto "Database"
$db = new Database();
//Conectamos
$db->connect();

//Se reciben variables
$texto1 = $_POST["titulo1"];
$texto1 = htmlentities($texto1);

$texto2 = $_POST["texto"];
$texto2 = htmlentities($texto2);

//$texto3 = $_POST["titulo3"];
//$texto3 = htmlentities($texto3);

//$enlace = $_POST["enlace"];
//$enPagNueva = $_POST["enPagNueva"];
//$imageUpload = $_POST["CMSFiles"];

/*
foreach ($_POST as $key=>$value)
{
	$arr[$key] = $value;
}
print_r($arr);exit;
*/



//Validamos
//if($texto1 == "" or $enlace == "" or count($imageUpload) == 0 )
if($texto1 == "" or $texto2 == "")
	{
	//Mensaje de error
	$message = "<script>showError('Ingrese t&iacute;tulo, texto',3000);</script>";
	}
	else
		{
				//Si todo ok, procesamos...
				//$imageUploadOk = $_POST["CMSFiles"][0];
				//$dateTime = date("Y-m-d H:i:s");
				$db->doQuery("INSERT INTO cms_aboutus_titulo(id_titulo, titulo)VALUES('','$texto1');
					          INSERT INTO cms_aboutus_item(id_item,id_titulo,item) VALUES ('','',$texto2)",INSERT_QUERY);
				$message = "<script>setInterval('window.location.reload()', 2000 ); showSuccess('Carga correcta',3000);</script>";
		}

echo $message;
?>