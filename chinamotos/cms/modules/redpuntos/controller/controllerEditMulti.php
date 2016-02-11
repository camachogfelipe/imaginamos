<?php
include("../../../core/class/db.class.php");
//Creamos el nuevo objeto "Database"
$db = new Database();
//Conectamos
$db->connect();

$foreing_key = $_POST["foreing_key"];
$title = $_POST["title"];
$article = $_POST["article"];

if($title == "" or $article == "")
	{
	$message = "<script>showError('Ingrese título y artículo',3000);</script>";
	}
	else
	{
		if(count($_POST["CMSFiles"]))
		{
		for($i=0; $i<count($_POST["CMSFiles"]); $i++)
		$db->doQuery("INSERT INTO cms_news_pics(news_pics_id, news_id, news_pics_path)VALUES('','$foreing_key','".$_POST['CMSFiles'][$i]."')",INSERT_QUERY);
		}
			$db->doQuery("UPDATE cms_news SET news_title = '$title', news_article = '$article' WHERE news_id = '$foreing_key'",UPDATE_QUERY);
			$message = "<script>setInterval('window.location.reload()', 2000 ); showSuccess('Actualizado correctamente',3000);</script>";
}
echo $message;
?>