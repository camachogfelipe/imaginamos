<?php
include("../../../core/class/db.class.php");
//Creamos el nuevo objeto "Database"
$db = new Database();
//Conectamos
$db->connect();

//Se reciben variables
$contenido1 = $_POST["contenido1"];
$enlace1 = $_POST["enlace1"];
$imageUpload1 = $_POST["IMGFiles"];
$contenido2 = $_POST["contenido2"];
$enlace2 = $_POST["enlace2"];
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
if( $contenido1 == "" or $enlace1 == "" )
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
				$db->doQuery("INSERT INTO cms_staffing(staffing_id, staffing_contenido1, staffing_enlace1, staffing_imagen1, staffing_contenido2, staffing_enlace2, staffing_imagen2)VALUES('','$contenido1','$enlace1','$imageUploadOk1','$contenido2','$enlace2','$imageUploadOk2')",INSERT_QUERY);
				$message = "<script>setInterval('window.location.reload()', 2000 ); showSuccess('Carga correcta',3000);</script>";
		}

echo $message;
?>