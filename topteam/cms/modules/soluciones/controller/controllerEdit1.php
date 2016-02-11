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
$mensaje = $_POST["mensaje"];
$mensaje = str_replace($busq, $remplaza, $mensaje);
$mensaje = str_replace($busq2, $remplaza2, $mensaje);

if($mensaje == "")
	{
	$message = "<script>showError('Ingrese datos en el formulario',3000);</script>";
	}
	else
	{
		
		$db->doQuery("UPDATE cms_soluciones SET soluciones_mensaje = '$mensaje' WHERE soluciones_id = '$id'",UPDATE_QUERY);
		$message = "<script>setInterval('window.location.href = \"../view/\"', 2000 ); showSuccess('actualización correcta',3000);</script>";		
		//$message = "<script>setInterval('window.location.reload()', 2000 ); showSuccess('actualización correcta',3000);</script>";
	}
echo $message;
?>