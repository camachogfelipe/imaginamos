<?php
include("../../../core/class/db.class.php");
//Creamos el nuevo objeto "Database"
$db = new Database();
//Conectamos
$db->connect();

$id = $_POST["id"];

$textoA = $_POST["title"];
$texto1 = mysql_real_escape_string($textoA);

 


//$textoB = $_POST["texto"];
//$texto2 = mysql_real_escape_string($textoB);
//htmlentities($texto2);

//$texto3 = $_POST["titulo3"];
//$texto3 = htmlentities($texto3);

//$enlace = $_POST["enlace"];
$imageUpload = 0; $imageUpload = count($_POST["IMGFiles"]);

 
if($imageUpload == "")
	{
	$message = "<script>showError('Ingrese imagen',3000);</script>";
	}
	else
	{
	
		$nameImageUpload = $_POST["IMGFiles"][0];
		$db->doQuery("UPDATE cms_catalogo_pics SET  catalogo_pics_titulo = '$texto1', catalogo_pics_path  = '$nameImageUpload' where catalogo_pics_id = '$id' ",UPDATE_QUERY);
		$message = "<script>setInterval('window.location.reload()', 2000 ); showSuccess('actualización correcta',3000);</script>";
	}
echo $message;

?>