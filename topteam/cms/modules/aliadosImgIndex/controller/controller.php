<?php
include("../../../core/class/db.class.php");
//Creamos el nuevo objeto "Database"
$db = new Database();
//Conectamos
$db->connect();

//Se reciben variables
$titulo = $_POST["titulo"];
$enlace = $_POST["enlace"];
$imageUpload1 = $_POST["IMGFiles"];
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
if( $titulo == "" or $enlace == "" )
	{
	//Mensaje de error
	$message = "<script>showError('Ingrese todos los campos del formulario',3000);</script>";
	}
	else
		{
				//Si todo ok, procesamos...
				$imageUploadOk1 = $_POST["IMGFiles"][0];
			
				
				
				
				$dateTime = date("Y-m-d H:i:s");
				$db->doQuery("INSERT INTO cms_aliadosImgIndex(aliadosImgIndex_id, aliadosImgIndex_titulo, aliadosImgIndex_imagen, aliadosImgIndex_enlace)VALUES('','$titulo','$imageUploadOk1','$enlace')",INSERT_QUERY);
				$message = "<script>setInterval('window.location.reload()', 2000 ); showSuccess('Carga correcta',3000);</script>";
		}

echo $message;
?>