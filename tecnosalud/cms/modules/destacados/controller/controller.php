<?php
include("../../../core/class/db.class.php");
//Creamos el nuevo objeto "Database"
$db = new Database();
//Conectamos
$db->connect();

//Se reciben variables
$title = $_POST["titulo"];

$article = $_POST["texto"];

$imageUpload1 = $_POST["IMGFiles"];
$imageUpload2 = $_POST["IMCFiles"];

print_r($_POST);exit;

//Validamos
/*if($title == "" or $article == "" )
	{
	//Mensaje de error
	$message = "<script>showError('Debe ingresar todos los datos del formulario',3000);</script>";
	}
	else
		{
				//Si todo ok, procesamos...
				//$imageUploadOk = $_POST["CMSFiles"][0];
                                //$imageUploadOk2 = $_POST["IMCFiles"][0];
				//$dateTime = date("Y-m-d H:i:s");
				//$db->doQuery("INSERT INTO cms_news(news_id, news_title, news_article, news_image,news_image2, news_date)VALUES('','$title','$article','$imageUploadOk',,'$imageUploadOk2''$dateTime')",INSERT_QUERY);
				//$message = "<script>setInterval('window.location.reload()', 2000 ); showSuccess('Carga correcta',3000);</script>";
            print_r($_POST);
		}

echo $message;
 
 */


?>