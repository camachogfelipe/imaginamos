<?php
include("../../../core/class/db.class.php");
//Creamos el nuevo objeto "Database"
$db = new Database();
//Conectamos
$db->connect();

$id = $_POST["id"];
$title = $_POST["title"];
$subtitle = $_POST["subtitle"];
$article = $_POST["article"];
$imageUpload = 0; 
$imageUpload = count($_POST["CMSFiles"]);


if($title == "" or $subtitle == "" or $article == "")
	{
	$message = "<script>showError('Ingrese título y artículo',3000);</script>";
	}
	else
	{
            $title = htmlentities($title);
		if($imageUpload == 0){
		$db->doQuery("UPDATE cms_destacados SET destacados_title_logo = '".mysql_escape_string($title)."', destacados_title_texto = '".mysql_escape_string($subtitle)."',destacados_texto_contenido = '".mysql_escape_string($article)."' WHERE destacados_id = '$id'",UPDATE_QUERY);
                //print_r($_POST);
                    
                }
                else{
		$nameImageUpload = $_POST["CMSFiles"][0];
		$db->doQuery("UPDATE cms_destacados SET destacados_title_logo = '".mysql_escape_string($title)."', destacados_title_texto = '".mysql_escape_string($subtitle)."',destacados_texto_contenido = '".mysql_escape_string($article)."', destacados_image_logo = '$nameImageUpload' WHERE destacados_id = '$id'",UPDATE_QUERY);
		//print_r($_POST);
                    
                }
		// $message = "<script>setInterval('window.location.href = \"../view/\"', 2000 ); showSuccess('actualización correcta',3000);</script>";
		$message = "<script>setInterval('window.location.reload()', 2000 ); showSuccess('actualización correcta',3000);</script>";
	}
echo $message;
?>