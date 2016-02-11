<?php
include("../../../core/class/db.class.php");
//Creamos el nuevo objeto "Database"
$db = new Database();
//Conectamos
$db->connect();

//Se reciben variables
$titulo1 = $_POST["titulo1"];
$contenido1 = $_POST["contenido1"];
$enlace1 = $_POST["enlace1"];
$titulo2 = $_POST["titulo2"];
$contenido2 = $_POST["contenido2"];
$enlace2 = $_POST["enlace2"];
$imageUpload1 = $_POST["IMGFiles"];
$imageUpload2 = $_POST["IMCFiles"];
/*
foreach ($_POST as $key=>$value)
{
	$arr[$key] = $value;
}
print_r($arr);exit;
*/
/*
if(count($_POST["IMGR1Files"]))
{
	$message .= "<br />Archivos cargados: ";
	for($i=0; $i<count($_POST["IMGR1Files"]); $i++)
		$message .= "<br />" . $_POST["IMGR1Files"][$i];
}
print_r($message);exit;

if(count($_POST["CMSFiles"]))
{
	$message2 .= "<br />Archivos cargados: ";
	for($j=0; $j<count($_POST["CMSFiles"]); $j++)
		$message2 .= "<br />" . $_POST["CMSFiles"][$j];
}
print_r($message2);exit;
*/

//Validamos
if($titulo1 == "" or $contenido1 == "" )
	{
	//Mensaje de error
	$message = "<script>showError('Ingrese todos los campos del formulario',3000);</script>";
	}
	else
		{
				//Si todo ok, procesamos...
				$imageUploadOk1 = $_POST["IMGFiles"][0];
				$imageUploadOk2 = $_POST["IMCFiles"][0];
				
				
				
				$dateTime = date("Y-m-d H:i:s");
				$db->doQuery("INSERT INTO cms_headhunter(headhunter_id, headhunter_titulo1, headhunter_contenido1, headhunter_enlace1, headhunter_imagen1, headhunter_titulo2, headhunter_contenido2, headhunter_enlace2, headhunter_imagen2)VALUES('','$titulo1','$contenido1','$enlace1','$imageUploadOk1','$titulo2','$contenido2','$enlace2','$imageUploadOk2')",INSERT_QUERY);
				$message = "<script>setInterval('window.location.reload()', 2000 ); showSuccess('Carga correcta',3000);</script>";
		}

echo $message;
?>