<?php
include("../../../core/class/db.class.php");
//Creamos el nuevo objeto "Database"
$db = new Database();
//Conectamos
$db->connect();

$id = $_POST["id"];
$pais = $_POST["pais"];
$direccion = $_POST["dir"];
$direccion2 = $_POST["dir2"];
$telefono = $_POST["tel"];
$celular = $_POST["cel"];
$ciudad = $_POST["ciudad"];
$distribuidor = $_POST["distri"];
//var_dump($_POST);exit;
$imageUpload = 0;
$imageUpload = count($_POST["IMGFiles"]);

if($pais == ""  or $direccion == ""  or $direccion2 == "" or $telefono == "" or $celular == ""  or $ciudad == "" or $distribuidor == "")
	{
	$message = "<script>showError('Porfavorrr ingrese todos los datos',3000);</script>";
	}
	else
	{
		if($imageUpload == 0){
                  //echo "UPDATE cms_pais SET pais_ciudad = '".$ciudad."', pais_distribuidor = '".$distribuidor."', pais_direccion = '".$direccion."', pais_direccion2 = '".$direccion2."', pais_telefono = '".$telefono."', pais_celular = '".$celular."' WHERE pais_id = ".$id;
		$db->doQuery("UPDATE cms_distribuidor SET distribuidor_ciudad = '".$ciudad."', distribuidor_nombre = '".$distribuidor."', distribuidor_direccion = '".$direccion."', distribuidor_direccion2 = '".$direccion2."', distribuidor_telefono = '".$telefono."', distribuidor_celular = '".$celular."' WHERE distribuidor_id = ".$id,UPDATE_QUERY);
                //var_dump($_POST);exit;
                    
                }else{
		$nameImageUpload = $_POST["IMGFiles"][0];
                 $db->doQuery("UPDATE cms_distribuidor SET distribuidor_ciudad = '".$ciudad."', distribuidor_nombre = '".$distribuidor."', distribuidor_direccion = '".$direccion."', distribuidor_direccion2 = '".$direccion2."', distribuidor_telefono = '".$telefono."', distribuidor_celular = '".$celular."', distribuidor_image1 = '".$nameImageUpload."' WHERE distribuidor_id = ".$id,UPDATE_QUERY);
		//$db->doQuery("UPDATE cms_pais SET pais_nombre = '".$title."', pais_image = '".$nameImageUpload."' WHERE pais_id =".$id,UPDATE_QUERY);
		}
		
		$message = "<script>setInterval('window.location.reload()', 2000 ); showSuccess('actualización correcta',3000);</script>";
	}
echo $message;
?>