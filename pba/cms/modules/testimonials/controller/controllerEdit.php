<?php
include("../../../core/class/db.class.php");
//Creamos el nuevo objeto "Database"
$db = new Database();
//Conectamos
$db->connect();

//$id = $_POST["id"];

//$texto1 = $_POST["titulo1"];
//$texto1 = trim($texto1);
//$texto1 = htmlspecialchars($texto1);
//$texto1 = mysql_real_escape_string($texto1);


//$texto2 = $_POST["texto"];
//$texto2 = trim($texto2);
//$texto2 = mysql_real_escape_string($texto2);

//$texto3 = $_POST["titulo3"];
//$texto3 = htmlentities($texto3);

$enlace = $_POST["enlace"];
$imageUpload = 0; $imageUpload = count($_POST["CMSFiles"]);

 
if($imageUpload == "")
	{
	$message = "<script>showError('Ingrese texto e imagen',3000);</script>";
	}
	else
	{
		
		$nameImageUpload = $_POST["CMSFiles"][0];
		$db->doQuery("UPDATE cms_testimonials SET imagen = '$nameImageUpload'",UPDATE_QUERY);
		$message = "<script>setInterval('window.location.reload()', 2000 ); showSuccess('actualización correcta',3000);</script>";
	}
echo $message;

?>