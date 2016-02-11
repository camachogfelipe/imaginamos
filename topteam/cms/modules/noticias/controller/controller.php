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


//Se reciben variables
$title = $_POST["title"];
$title = str_replace($busq, $remplaza, $title);
$title = str_replace($busq2, $remplaza2, $title);

$article = $_POST["article"];
$article = str_replace($busq, $remplaza, $article);
$article = str_replace($busq2, $remplaza2, $article);

$imageUpload = $_POST["CMSFiles"];

//Validamos
if($title == "" or $article == "" or count($imageUpload) == 0)
	{
	//Mensaje de error
	$message = "<script>showError('Ingrese título, artículo e imagen',3000);</script>";
	}
	else
		{
				//Si todo ok, procesamos...
				$imageUploadOk = $_POST["CMSFiles"][0];
				$dateTime = date("Y-m-d H:i:s");
				$db->doQuery("INSERT INTO cms_news(news_id, news_title, news_article, news_image, news_date)VALUES('','$title','$article','$imageUploadOk','$dateTime')",INSERT_QUERY);
				$message = "<script>setInterval('window.location.reload()', 2000 ); showSuccess('Carga correcta',3000);</script>";
		}

echo $message;
?>