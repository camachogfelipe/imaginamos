<?php
include("../../../core/class/db.class.php");
//Creamos el nuevo objeto "Database"
$db = new Database();
//Conectamos
$db->connect();

$foreing_key = $_POST["foreing_key"];
$desc_es = $_POST["desc_es"];
$desc_en = $_POST["desc_en"];
$imageUpload = 0;
$imageUpload = count($_POST["CMSFiles"]);

if($title == "" or $article == "")
	{
	$message = "<script>showError('Ingrese título y artículo',3000);</script>";
	}
	else
	{
		
		if($imageUpload == 0)
		{
		$message = "<script>showError('Seleccione una imagen',3000);</script>";
		}
		else
		{
		
		$dateTime = date("Y-m-d H:i:s");
		$db->doQuery("INSERT INTO cms_news(news_id, news_title, news_article, news_image, news_date)VALUES('','$title','$article','','$dateTime')",INSERT_QUERY);
		$lastId = $db->getLastId();
		
			if(count($_POST["CMSFiles"]>0))
			{
			for($i=0; $i<count($_POST["CMSFiles"]); $i++)
				{
				$imageOk = $_POST['CMSFiles'][$i];
				$db->doQuery("INSERT INTO cms_news_pics(news_pics_id, news_id, news_pics_path)VALUES('','$lastId','$imageOk')",INSERT_QUERY);
				}
			}
			
				$message = "<script>setInterval('window.location.reload()', 2000 ); showSuccess('Carga correcta',3000);</script>";
		}
	}
echo $message;
?>