<?php
include("../../../core/class/db.class.php");
//Creamos el nuevo objeto "Database"
$db = new Database();
//Conectamos
$db->connect();

//Se reciben variables
$titulo = $_POST["title"];
$texto = $_POST["texto"];
$fecha = $_POST["fecha"];
$descript = $_POST["descript"];
$imageUpload = $_POST["IMGFiles"];

//Validamos
if( $texto == "" or $titulo == "" or $descript == "" or count($imageUpload) == 0)
	{
	//Mensaje de error
	$message = "<script>showError('Debe ingresar todos los datos del formulario',3000);</script>";
	}
	else
		{
				//Si todo ok, procesamos...
				$imageUploadOk = $_POST["IMGFiles"][0];
                                
				
				$db->doQuery("INSERT INTO cms_novedades (novedad_id, novedad_title, novedad_texto,novedad_descript, novedad_image, novedad_fecha)  VALUES ('','".$titulo."', '".$texto."', '".$descript."','".$imageUploadOk."','".$fecha."' ) ",UPDATE_QUERY);
				$message = "<script>setInterval('window.location.reload()', 2000 ); showSuccess('Carga correcta',3000);</script>";
            //print_r($_POST);
                               //echo "INSERT INTO cms_novedades (novedad_id, novedad_title, novedad_texto, novedad_image)  VALUES ('','".$titulo."', '".$texto."','".$imageUploadOk."' ) ";exit;
				
		}

echo $message;
 
 


?>