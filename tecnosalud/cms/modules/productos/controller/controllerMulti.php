<?php
include("../../../core/class/db.class.php");
//Creamos el nuevo objeto "Database"
$db = new Database();
//Conectamos
$db->connect();

$id = $_POST["id"];
$titles = $_POST["title"];
$descripcion = mysql_real_escape_string($_POST["descript"]);
$referencia = $_POST["ref"];
$articles = mysql_real_escape_string($_POST["texto"]);


$imageUpload = 0;
$imageUpload = count($_POST["CMSFiles"]);

if($titles == "" or $articles == "" or $referencia == "")
	{
	$message = "<script>showError('Porfavor ingrese todos los datos',3000);</script>";
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
		$db->doQuery( "INSERT INTO cms_productos (productos_id, id_subcategoria, productos_title, productos_texto,  productos_referencia,productos_descript) VALUES ('',".$id.",'".$titles."','".$articles."','".$referencia."','".$descripcion."')",INSERT_QUERY);
		$lastId = $db->getLastId();
		
			if(count($_POST["CMSFiles"]>0))
			{
			for($i=0; $i<count($_POST["CMSFiles"]); $i++)
				{
				$imageOk = $_POST['CMSFiles'][$i];
				$db->doQuery("INSERT INTO cms_productos_pics(productos_pics_id, productos_id, productos_pics_path)VALUES('','$lastId','$imageOk')",INSERT_QUERY);
				}
			}
			
				$message = "<script>setInterval('window.location.href = \"../view/productos.php?id=".$id."\"', 2000 ); showSuccess('actualización correcta',3000);</script>";
		}
	}
echo $message;
?>