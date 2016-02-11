<?php
include("../../../core/class/db.class.php");
//Creamos el nuevo objeto "Database"
$db = new Database();
//Conectamos
$db->connect();

$id = $_POST["id"];

//var_dump($id);

$textoA = $_POST["titulo1"];
$texto1 = mysql_real_escape_string($textoA);
htmlentities($texto1);


//$textoB = $_POST["texto"];
//$texto2 = mysql_real_escape_string($textoB);
//htmlentities($texto2);

//$texto3 = $_POST["titulo3"];
//$texto3 = htmlentities($texto3);

//$enlace = $_POST["enlace"];
$imageUpload = 0; $imageUpload = count($_POST["CMSFiles"]);



		if($imageUpload == 0){
		$db->doQuery("UPDATE cms_destination_imagenes SET titulo = '$texto1' where id_imagenes = '$id' ",UPDATE_QUERY);
                }else{
		$nameImageUpload = $_POST["CMSFiles"][0];
		$db->doQuery("UPDATE cms_destination_imagenes SET titulo = '$texto1', imagenes = '$nameImageUpload' where id_imagenes = '$id'",UPDATE_QUERY);
		} 
		
		$message = "<script>setInterval('window.location.reload()', 2000 ); showSuccess('actualización correcta',3000);</script>";
	
echo $message;

?>