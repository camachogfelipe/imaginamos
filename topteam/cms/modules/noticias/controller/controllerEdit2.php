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
$title = $_POST["title"];
$title = str_replace($busq, $remplaza, $title);
$title = str_replace($busq2, $remplaza2, $title);

$resum = $_POST["resumen"];
$resum = str_replace($busq, $remplaza, $resum);
$resum = str_replace($busq2, $remplaza2, $resum);

$article = $_POST["article"];
$article = str_replace($busq, $remplaza, $article);
$article = str_replace($busq2, $remplaza2, $article);
$imageUpload = 0; $imageUpload = count($_POST["IMCFiles"]);

if($title == "" or $article == "")
	{
	$message = "<script>showError('Ingrese título y artículo',3000);</script>";
	}
	else
	{
		if($imageUpload == 0)
		$db->doQuery("UPDATE cms_news SET news_title = '$title', news_resum = '$resum', news_article = '$article' WHERE news_id = '$id'",UPDATE_QUERY);
		else{
		$nameImageUpload = $_POST["IMCFiles"][0];
		$db->doQuery("UPDATE cms_news SET news_title = '$title', news_resum = '$resum', news_article = '$article', news_image = '$nameImageUpload' WHERE news_id = '$id'",UPDATE_QUERY);
		}
		
		$message = "<script>setInterval('window.location.reload()', 2000 ); showSuccess('actualización correcta',3000);</script>";
	}
echo $message;
?>