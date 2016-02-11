<?php
include("../../../core/class/db.class.php");
//Creamos el nuevo objeto "Database"
$db = new Database();
//Conectamos
$db->connect();


$id = $_POST["id"];
$contenido = $_POST["contenido"];
$contenido = htmlentities($contenido);
//$contenido = str_replace($busq, $remplaza, $contenido);
//$contenido = str_replace($busq2, $remplaza2, $contenido);

$dir = $_POST["dir"];
$dir = htmlentities($dir);
$dir2 = $_POST["dir2"];
$dir2 = htmlentities($dir2);
$barrio = $_POST["barrio"];
$barrio = htmlentities($barrio);
$ciudad = $_POST["ciudad"];
$ciudad = htmlentities($ciudad);
$pais = $_POST["pais"];
$pais = htmlentities($pais);
$tel = $_POST["tel"];
$movil = $_POST["movil"];
$email = $_POST["email"];
//$contenido2 = str_replace($busq, $remplaza, $contenido2);
//$contenido2 = str_replace($busq2, $remplaza2, $contenido2);
/*
foreach ($_POST as $key=>$value)
{
	$arr[$key] = $value;
}
print_r($arr);exit;
*/

if($contenido == "" OR $dir == "" OR $dir2 == "" OR $barrio == "" OR $ciudad == "" OR $pais == "" OR $tel == "" OR $movil == "" OR $email == "" )
	{
	$message = "<script>showError('Ingrese todos los datos en el formulario',3000);</script>";
	}
	else
	{
		
		$db->doQuery("UPDATE cms_contacto SET contacto_contenido = '$contenido', contacto_direc = '$dir', contacto_direc2 = '$dir2', contacto_barrio = '$barrio', contacto_ciudad = '$ciudad', contacto_pais = '$pais', contacto_tel = '$tel', contacto_movil = '$movil', contacto_email = '$email'  WHERE contacto_id = '$id'",UPDATE_QUERY);
		
		
		//$message = "<script>setInterval('window.location.reload()', 2000 ); showSuccess('actualización correcta',3000);</script>";
		$message = "<script>setInterval('window.location.href = \"../view/\"', 2000 ); showSuccess('actualización correcta',3000);</script>";
	}
echo $message;
?>