<?php
include("../../../core/class/db.class.php");
//Creamos el nuevo objeto "Database"
$db = new Database();
//Conectamos
$db->connect();

//Se reciben variables
$pais = $_POST["pais"];
$imageUpload = $_POST["IMGFiles"];

//Validamos
//if($result = $db->results){}
		
//$objResponse->script("showError('El email ya existe, verifique',4000);");

       

$db->doQuery("SELECT * FROM cms_pais WHERE pais_nombre = '$pais'",SELECT_QUERY);


if($pais == "" or count($imageUpload) == 0 )
	{
	//Mensaje de error
	$message = "<script>showError('Debe ingresar todos los datos del formulario',3000);</script>";
	}
	else{
       
				//Si todo ok, procesamos...
				$imageUploadOk = $_POST["IMGFiles"][0];
                                
				
				$db->doQuery("INSERT INTO cms_pais(pais_id, pais_nombre, pais_image)VALUES('','".$pais."','$imageUploadOk')",INSERT_QUERY);
				$message = "<script>setInterval('window.location.reload()', 2000 ); showSuccess('Carga correcta',3000);</script>";
            //print_r($_POST);
		}

echo $message;
 
 


?>