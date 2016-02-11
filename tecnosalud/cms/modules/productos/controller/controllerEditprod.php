<?php
include("../../../core/class/db.class.php");
//Creamos el nuevo objeto "Database"
$db = new Database();
//Conectamos
$db->connect();

$id = $_POST["id"];
$title = $_POST["title"];
$text = $_POST["texto"];
$imageUpload = 0;
$imageUpload = count($_POST["IMGFiles"]);

if($title == "" or $text == "")
	{
	$message = "<script>showError('Porfavor ingrese todos los datos',3000);</script>";
	}
	else
	{
		if($imageUpload == 0){
                  //echo "UPDATE cms_pais SET pais_ciudad = '".$ciudad."', pais_distribuidor = '".$distribuidor."', pais_direccion = '".$direccion."', pais_direccion2 = '".$direccion2."', pais_telefono = '".$telefono."', pais_celular = '".$celular."' WHERE pais_id = ".$id;
		$db->doQuery("UPDATE cms_productos SET productos_title = '".mysql_real_escape_string($title)."', productos_texto = '".mysql_real_escape_string($text)."' WHERE productos_id = ".$id,UPDATE_QUERY);
                //var_dump($_POST);exit;
                    
                }else{
		$nameImageUpload = $_POST["IMGFiles"][0];
                $db->doQuery("UPDATE cms_productos SET productos_title = '".mysql_real_escape_string($title)."', productos_texto = '".mysql_real_escape_string($text)."', productos_image = '".$nameImageUpload."' WHERE productos_id = ".$id,UPDATE_QUERY);
		//$db->doQuery("UPDATE cms_pais SET pais_nombre = '".$title."', pais_image = '".$nameImageUpload."' WHERE pais_id =".$id,UPDATE_QUERY);
		}
		
		$message = "<script>setInterval('window.location.reload()', 2000 ); showSuccess('actualización correcta',3000);</script>";
	}
echo $message;
?>