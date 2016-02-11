<?php
include("../../../core/class/db.class.php");
//Creamos el nuevo objeto "Database"
$db = new Database();
//Conectamos
$db->connect();

$foreing_key = $_POST["id"];
$title = $_POST["title"];
$article = $_POST["texto"];
$article = mysql_real_escape_string($article);

$referencia = $_POST["ref"];
$descripcion = $_POST["descript"];
$descripcion = mysql_real_escape_string($descripcion);

//print_r($_POST);

if($title == "" or $article == "" or $referencia == "")
	{
	$message = "<script>showError('Ingrese título y artículo',3000);</script>";
	}
	else
	{
		if(count($_POST["IMGFiles"]))
		{
		for($i=0; $i<count($_POST["IMGFiles"]); $i++)
		$db->doQuery("INSERT INTO cms_productos_pics(productos_pics_id, productos_id, productos_pics_path)VALUES('','$foreing_key','".$_POST['IMGFiles'][$i]."')",INSERT_QUERY);
		}
			$db->doQuery("UPDATE cms_productos SET productos_title = '$title', productos_texto = '".$article."', productos_referencia = '".$referencia."', productos_descript = '".$descripcion."' WHERE productos_id = '$foreing_key'",UPDATE_QUERY);
			$message = "<script>setInterval('window.location.reload()', 2000 ); showSuccess('Actualizado correctamente',3000);</script>";
}
echo $message;
?>