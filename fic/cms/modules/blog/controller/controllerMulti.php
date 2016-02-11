<?php
include("../../../core/class/db.class.php");
//Creamos el nuevo objeto "Database"
$db = new Database();
//Conectamos
$db->connect();

$foreing_key = $_POST["foreing_key"];
$texto1 = $_POST["texto1"];
$texto2 = $_POST["texto2"];
$texto3 = $_POST["texto3"];
$fondo = 0;
$fondo = count($_POST["CMSFiles"]);

if($texto1 == "" or $texto2 == "" or $texto3 == "")
	{
	$message = "<script>showError('Ingrese título y artículo',3000);</script>";
	}
	else
	{
		
		if($fondo == 0)
		{
		$message = "<script>showError('Seleccione una imagen',3000);</script>";
		}
		else
		{
		$fondo = $_POST["CMSFiles"][0];
		$dateTime = date("Y-m-d H:i:s");
		$db->doQuery("INSERT INTO t_home_slide(id_home_slide, texto1, texto2, texto3, fondo, news_date)VALUES('','$texto1','$texto2','$texto3','$fondo','$dateTime')",INSERT_QUERY);
		$lastId = $db->getLastId();
		
			/*if(count($_POST["CMSFiles"]>0))
			{
			for($i=0; $i<count($_POST["CMSFiles"]); $i++)
				{
				$imageOk = $_POST['CMSFiles'][$i];
				$db->doQuery("INSERT INTO cms_news_pics(news_pics_id, news_id, news_pics_path)VALUES('','$lastId','$imageOk')",INSERT_QUERY);
				}
			}*/
			
				$message = "<script>setInterval('window.location.reload()', 2000 ); showSuccess('Carga correcta',3000);</script>";
		}
	}
echo $message;
?>