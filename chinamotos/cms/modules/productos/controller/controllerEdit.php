<?php
include("../../../core/class/db.class.php");
//Creamos el nuevo objeto "Database"
$db = new Database();
//Conectamos
$db->connect();

$id = $_POST["id"];

$texto1 = $_POST["titulo"];
$texto1 = htmlentities($texto1);

$texto2 = $_POST["contenido"];
$texto2 = substr($texto2, 0, 125);
$texto2 = htmlentities($texto2);

$imageUpload = 0; $imageUpload = count($_POST["CMSFiles"]);


if($texto1 == "" or $texto2 == "")
	{
	$message = "<script>showError('Ingrese al menos el t&iacute;tulo y el contenido',3000);</script>";
	}
	else
	{
		if($imageUpload == 0)
		$db->doQuery("UPDATE cms_vendemos_cat SET vendemos_cat_tit = '$texto1', vendemos_cat_con = '$texto2' WHERE vendemos_cat_id = '$id'",UPDATE_QUERY);
		else{
		$nameImageUpload = $_POST["CMSFiles"][0];
		$db->doQuery("UPDATE cms_vendemos_cat SET vendemos_cat_tit = '$texto1', vendemos_cat_con = '$texto2', vendemos_cat_img = '$nameImageUpload' WHERE vendemos_cat_id = '$id'",UPDATE_QUERY);
		}
		
		$message = "<script>setInterval('window.location.reload()', 2000 ); showSuccess('actualización correcta',3000);</script>";
	}
echo $message;
?>