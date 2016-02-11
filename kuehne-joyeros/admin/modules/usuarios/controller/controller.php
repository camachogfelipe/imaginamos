<?php
include("../../../core/class/db.class.php");
//Creamos el nuevo objeto "Database"
$db = new Database();
//Conectamos
$db->connect();

//Se reciben variables
$title = $_POST["title"];
$article = $_POST["article"];
$imageUpload = $_POST["CMSFiles"];
$capitulo = $_POST["capitulo"];

//Validamos
if($title == "" or $article == "" or count($imageUpload) == 0)
	{
	//Mensaje de error
	$message = "<script>showError('Ingrese Título, artículo, imagen y capítulo',3000);</script>";
	}
	else
		{
				//Si todo ok, procesamos...
				$imageUploadOk = $_POST["CMSFiles"][0];
				$dateTime = date("Y-m-d H:i:s");
				if ($db->doQuery("INSERT INTO cms_news(news_id, news_title, news_article, news_image, news_date, news_idtbl_capitulos)VALUES('','$title','$article','$imageUploadOk','$dateTime',$capitulo)",INSERT_QUERY))
				{
					$message = "<script>setInterval('window.location.reload()', 2000 ); showSuccess('Carga correcta',3000);</script>";
				}
				else
				{
					$message = "<script>showError('Carga incorrecta',3000);</script>";
				}
		}

echo $message;
?>