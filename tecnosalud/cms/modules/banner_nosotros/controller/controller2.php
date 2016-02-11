<?php
include("../../../core/class/db.class.php");
//Creamos el nuevo objeto "Database"
$db = new Database();
//Conectamos
$db->connect();

//Se reciben variables
$imageUpload = $_POST["IMGFiles"];

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
                                
				
				$db->doQuery("INSERT INTO cms_bannernosotros (bannernosotros_id, bannernosotros_image) VALUES ('','$imageUploadOk')",INSERT_QUERY);
				$message = "<script>setInterval('window.location.reload()', 2000 ); showSuccess('Carga correcta',3000);</script>";
            //print_r($_POST);
		}

echo $message;
 
 


?>