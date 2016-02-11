<?php
include("../../../core/class/db.class.php");
//Creamos el nuevo objeto "Database"
$db = new Database();
//Conectamos
$db->connect();

//Se reciben variables
$titulo = $_POST["titulo"];
$texto = $_POST["texto"];
$imageUpload = $_POST["IMGFiles"];

//Validamos
if($titulo == ""  or $texto == ""  or count($imageUpload) == 0 )
	{
	//Mensaje de error
	$message = "<script>showError('Debe ingresar todos los datos del formulario',3000);</script>";
	}
	else
		{
				//Si todo ok, procesamos...
				$imageUploadOk = $_POST["IMGFiles"][0];
                                
				
				$db->doQuery( "INSERT INTO cms_categoria (categoria_id, id_padre, categoria_title, categoria_texto, categoria_image) VALUES ('',0,'".mysql_real_escape_string($titulo)."','".mysql_real_escape_string($texto)."','".$imageUploadOk."')",INSERT_QUERY);
				$message = "<script>setInterval('window.location.reload()', 2000 ); showSuccess('Carga correcta',3000);</script>";
            //print_r($_POST);
                              // echo "UPDATE cms_pais SET  pais_distribuidor = '".$distribuidor."' ,pais_direccion = '".$direccion."', pais_direccion2 = '".$direccion2."', pais_telefono = '".$telefono."', pais_celular = '".$celular."' , pais_ciudad = '".$ciudad."', pais_distribuidor_image = '".$imageUploadOk."' WHERE pais_nombre = '".$pais."'";
				
		}

echo $message;
 
 


?>