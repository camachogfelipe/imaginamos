<?php
include("../../../core/class/db.class.php");
//Creamos el nuevo objeto "Database"
$db = new Database();
//Conectamos
$db->connect();

$id = $_POST["id"];
$title = $_POST["title"];
$article = $_POST["article"];
$imageUpload = 0; $imageUpload = count($_POST["CMSFiles"]);

if($title == "" or $article == "")
	{
	$message = "<script>showError('Ingrese título y artículo',3000);</script>";
	}
	else
	{
		if($imageUpload == 0)
		$db->doQuery("UPDATE cms_news SET news_title = '".mysql_escape_string ($title)."', news_article = '".mysql_escape_string ($article)."' WHERE news_id = '$id'",UPDATE_QUERY);
		else{
		$nameImageUpload = $_POST["CMSFiles"][0];
		$db->doQuery("UPDATE cms_news SET news_title = '$title', news_article = '".mysql_escape_string($article)."', news_image = '$nameImageUpload' WHERE news_id = '$id'",UPDATE_QUERY);
		}
		
		$message = "<script>setInterval('window.location.reload()', 2000 ); showSuccess('actualización correcta',3000);</script>";
	}
echo $message;
?>