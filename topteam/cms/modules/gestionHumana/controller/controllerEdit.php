<?php
include("../../../core/class/db.class.php");
//Creamos el nuevo objeto "Database"
$db = new Database();
//Conectamos
$db->connect();

$busq  = array('á', 'é', 'í', 'ó', 'ú','Á','É','Í','Ó','Ú');
$remplaza = array('&aacute;', '&eacute;', '&iacute;', '&oacute;', '&uacute;', '&Aacute;', '&Eacute;', '&Iacute;', '&Oacute;', '&Uacute;');


$busq2  = array('"', 'ñ', 'Ñ', 'ü', '“','”');
$remplaza2 = array('&#34;', '&ntilde;', '&Ntilde;', '&uuml;', '&#8220;', '&#8221;');

$id = $_POST["id"];

$contenido = $_POST["contenido"];
$contenido = str_replace($busq, $remplaza, $contenido);
$contenido = str_replace($busq2, $remplaza2, $contenido);

$contenido2 = $_POST["contenido2"];
$contenido2 = str_replace($busq, $remplaza, $contenido2);
$contenido2 = str_replace($busq2, $remplaza2, $contenido2);

$imageUpload = 0; $imageUpload = count($_POST["CMSFiles"]);
$rutavideo = $_POST["rutavideo"];

if($contenido == "" or $contenido2 == "")
	{
	$message = "<script>showError('Ingrese los datos en el formulario',3000);</script>";
	}
	else
	{
		if($imageUpload == 0)
		$db->doQuery("UPDATE cms_gestionh SET gestionh_contenido = '$contenido', gestionh_contenido2 = '$contenido2', gestionh_rutavideo = '$rutavideo' WHERE gestionh_id = '$id'",UPDATE_QUERY);
		else{
		$nameImageUpload = $_POST["CMSFiles"][0];
		$db->doQuery("UPDATE cms_gestionh SET gestionh_contenido = '$contenido', gestionh_contenido2 = '$contenido2', gestionh_imagenInt = '$nameImageUpload', gestionh_rutavideo = '$rutavideo' WHERE gestionh_id = '$id'",UPDATE_QUERY);
		}
		
		$message = "<script>setInterval('window.location.reload()', 2000 ); showSuccess('actualización correcta',3000);</script>";
	}
echo $message;
?>