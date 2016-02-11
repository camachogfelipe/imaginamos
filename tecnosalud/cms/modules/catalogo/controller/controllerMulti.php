<?php
include("../../../core/class/db.class.php");
//Creamos el nuevo objeto "Database"
$db = new Database();
//Conectamos
$db->connect();

$id = $_POST["id"];
$title = $_POST["title"];

$imageUpload = 0;
$imageUpload = count($_POST["IMGFiles"]);

if($title == "" )
	{
	$message = "<script>showError('Ingrese título de la galeria',3000);</script>";
	}
	else
	{
		
		if($imageUpload == 0)
		{
		$message = "<script>showError('Seleccione una imagen',3000);</script>";
		}
		else
		{
		
		//$dateTime = date("Y-m-d H:i:s");
		
		//$lastId = $db->getLastId();
		
			if(count($_POST["IMGFiles"]>0))
			{
			for($i=0; $i<count($_POST["IMGFiles"]); $i++)
				{
				$imageOk = $_POST['IMGFiles'][$i];
				$db->doQuery("INSERT INTO cms_catalogo_pics(catalogo_pics_id, catalogo_id,catalogo_pics_titulo, catalogo_pics_path)VALUES('','$id','$title','$imageOk')",INSERT_QUERY);
				} 
			}
			
				$message = "<script>setInterval('window.location.reload()', 2000 ); showSuccess('Carga correcta',3000);</script>";
		}
	}
echo $message;
?>