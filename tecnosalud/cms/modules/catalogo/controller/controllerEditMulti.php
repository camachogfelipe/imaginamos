<?php
include("../../../core/class/db.class.php");
//Creamos el nuevo objeto "Database"
$db = new Database();
//Conectamos
$db->connect();

$id = $_POST["id"];
print_r($_POST);

/*if(count($_POST["IMGFiles"]) == 0)
	{
	$message = "<script>showError('Ingrese la imagen',3000);</script>";
	}
	else
	{
		if(count($_POST["IMGFiles"]))
		{
		for($i=0; $i<count($_POST["IMGFiles"]); $i++)
		$db->doQuery("INSERT INTO cms_catalogo_pics(catalogo_pics_id, catalogo_id, catalogo_pics_path)VALUES('','$foreing_key','".$_POST['IMGFiles'][$i]."')",INSERT_QUERY);
		}
			//$db->doQuery("UPDATE cms_catalogo SET news_title = '$title', news_article = '$article' WHERE news_id = '$foreing_key'",UPDATE_QUERY);
			$message = "<script>setInterval('window.location.reload()', 2000 ); showSuccess('Actualizado correctamente',3000);</script>";
}
echo $message;*/
?>