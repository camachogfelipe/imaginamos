<?php
include("../../../core/class/db.class.php");
//Creamos el nuevo objeto "Database"
$db = new Database();
//Conectamos
$db->connect();

$busq  = array('á', 'é', 'í', 'ó', 'ú','Á','É','Í','Ó','Ú');
$remplaza = array('&aacute;', '&eacute;', '&iacute;', '&oacute;', '&uacute;', '&Aacute;', '&Eacute;', '&Iacute;', '&Oacute;', '&Uacute;');


$busq2  = array('·','<div>','</div>','<br>','ñ', 'Ñ', 'ü', '“','”','¿','?','¡','!');
$remplaza2 = array('&middot;','<p>','</p>','<br />','&ntilde;', '&Ntilde;', '&uuml;', '&#8220;', '&#8221;','&iquest;','&#63;','&iexcl;','&#33;');

$id = $_POST["id"];
$titulo = $_POST["titulo"];
$titulo = str_replace($busq, $remplaza, $titulo);
$titulo = str_replace($busq2, $remplaza2, $titulo);

$contenido = $_POST["contenido"];
$contenido = str_replace($busq, $remplaza, $contenido);
$contenido = str_replace($busq2, $remplaza2, $contenido);


$imageUpload = 0; $imageUpload = count($_POST["CMSFiles"]);


if($titulo == "")
	{
	$message = "<script>showError('Ingrese los datos en el formulario',3000);</script>";
	}
	else
	{
		if($imageUpload == 0)
		$db->doQuery("UPDATE cms_conformato1 SET conformato1_titulo = '$titulo', conformato1_contenido = '$contenido' WHERE conformato1_id = '$id'",UPDATE_QUERY);
		else{
		$nameImageUpload = $_POST["CMSFiles"][0];
		$db->doQuery("UPDATE cms_conformato1 SET conformato1_titulo = '$titulo', conformato1_contenido = '$contenido', conformato1_imagen = '$nameImageUpload' WHERE conformato1_id = '$id'",UPDATE_QUERY);
		}
		
		$message = "<script>setInterval('window.location.reload()', 2000 ); showSuccess('actualización correcta',3000);</script>";
	}
echo $message;
?>