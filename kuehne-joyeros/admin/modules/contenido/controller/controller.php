<?php
include("../../../core/class/db.class.php");
//Creamos el nuevo objeto "Database"
$db = new Database();
//Conectamos
$db->connect();

//Se reciben variables
$desc_es = $_POST["desc_es"];
$desc_en = $_POST["desc_en"];
$link_c = $_POST["link_c"];
$id = $_POST["id"];


//Validamos
if($desc_es == "" or $desc_en == "")
	{
	//Mensaje de error
		$message = "<script>showError('Ingrese un Contenido en español e ingles',3000);</script>";
	}
	else
		{
				//Si todo ok, procesamos...
				
				$dateTime = date("Y-m-d H:i:s");
				if ($db->doQuery("UPDATE cms_contenidos SET descripcion_es = '$desc_es', descripcion_en = '$desc_en', link_cont = '$link_c' WHERE id_contenido = '$id'",INSERT_QUERY))
				{
					$message = "<script>setInterval('window.location.reload()', 2000 ); showSuccess('Actualización correcta',3000);</script>";
				}
				else
				{
					$message = "<script>showError('Carga incorrecta',3000);</script>";
				}
		}
		
		
echo $message;
?>