<?php
include("../../../core/class/db.class.php");
//Creamos el nuevo objeto "Database"
$db = new Database();
//Conectamos
$db->connect();

$id = $_POST["id"];
$titulo = $_POST["title"];
$texto = $_POST["texto"];
$fecha = $_POST["fecha"];
$descript = $_POST["descript"];
$imageUpload = 0;
$imageUpload = count($_POST["IMGFiles"]);

if($titulo == "" or $texto == "" or $fecha == "" or $descript == "")
	{
	$message = "<script>showError('Porfavorrr ingrese todos los datos',3000);</script>";
	}
	else
	{
            
            $texto = htmlentities($texto);
		if($imageUpload == 0){
                  //echo "UPDATE cms_pais SET pais_ciudad = '".$ciudad."', pais_distribuidor = '".$distribuidor."', pais_direccion = '".$direccion."', pais_direccion2 = '".$direccion2."', pais_telefono = '".$telefono."', pais_celular = '".$celular."' WHERE pais_id = ".$id;
		$db->doQuery("UPDATE cms_novedades SET novedad_title = '".$titulo."', novedad_texto = '".$texto."',novedad_descript = '".$descript."', novedad_fecha = '".$fecha."'WHERE novedad_id = ".$id,UPDATE_QUERY);
                //print_r($_POST);exit;
             
                    
                }else{
		$nameImageUpload = $_POST["IMGFiles"][0];
                $db->doQuery("UPDATE cms_novedades SET novedad_title = '".$titulo."', novedad_texto = '".$texto."',novedad_descript = '".$descript."', novedad_image = '".$nameImageUpload."', novedad_fecha = '".$fecha."' WHERE novedad_id = ".$id,UPDATE_QUERY);
                //print_r($_POST);exit; 
		}
		
		$message = "<script>setInterval('window.location.reload()', 2000 ); showSuccess('actualización correcta',3000);</script>";
	}
echo $message;
?>