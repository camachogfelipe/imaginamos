<?php
include("../../../core/class/db.class.php");
//Creamos el nuevo objeto "Database"
$db = new Database();
//Conectamos
$db->connect();

//Se reciben variables
$pais = $_POST["pais"];
$direccion = $_POST["dir"];
$direccion2 = $_POST["dir2"];
$telefono = $_POST["tel"];
$celular = $_POST["cel"];
$ciudad = $_POST["ciudad"];
$distribuidor = $_POST["distri"];
$imageUpload = $_POST["IMGFiles"];

//Validamos
if($pais == ""  or $direccion == ""  or $direccion2 == "" or $telefono == "" or $celular == "" or count($imageUpload) == 0 or $ciudad == "" or $distribuidor == "")
	{
	//Mensaje de error
	$message = "<script>showError('Debe ingresar todos los datos del formulario',3000);</script>";
	}
	else
		{
				//Si todo ok, procesamos...
				//$imageUploadOk = $_POST["IMGFiles"][0];
                                
				
				$db->doQuery("INSERT INTO cms_distribuidor (distribuidor_id, distribuidor_nombre, distribuidor_direccion, distribuidor_direccion2, distribuidor_telefono, distribuidor_celular, distribuidor_ciudad, distribuidor_image1, pais_id) VALUES ('','".$distribuidor."','".$direccion."','".$direccion2."','".$telefono."','".$celular."','".$ciudad."','".$_POST["IMGFiles"][0]."',".$pais.")",INSERT_QUERY);
				$message = "<script>setInterval('window.location.reload()', 2000 ); showSuccess('Carga correcta',3000);</script>";
            //print_r($_POST);
                              // echo "UPDATE cms_pais SET  pais_distribuidor = '".$distribuidor."' ,pais_direccion = '".$direccion."', pais_direccion2 = '".$direccion2."', pais_telefono = '".$telefono."', pais_celular = '".$celular."' , pais_ciudad = '".$ciudad."', pais_distribuidor_image = '".$imageUploadOk."' WHERE pais_nombre = '".$pais."'";
				
		}

echo $message;
 
 


?>