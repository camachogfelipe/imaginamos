<?php
include("../../../core/class/db.class.php");
//Creamos el nuevo objeto "Database"
$db = new Database();
//Conectamos
$db->connect();

//Se reciben variables
$imageUpload = $_POST["IMGFiles"];
$id = $_POST['id'];
//Validamos
if(count($imageUpload) == 0)
	{
	//Mensaje de error
	$message = "<script>showError('Porfavor ingrese una imagen',3000);</script>";
	}
	else
		{
				//Si todo ok, procesamos...
				$imageUploadOk = $_POST["IMGFiles"][0];
                                
				
				$db->doQuery("UPDATE cms_bannernosotros SET bannernosotros_image = '$imageUploadOk' WHERE bannernosotros_id = ".$id,UPDATE_QUERY);
				$message = "<script>setInterval('window.location.reload()', 2000 ); showSuccess('Carga correcta',3000);</script>";
            //print_r($_POST);
		}

echo $message;
 
 


?>