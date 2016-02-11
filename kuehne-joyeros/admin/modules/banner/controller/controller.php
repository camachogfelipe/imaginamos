<?php
include("../../../core/class/db.class.php");
//Creamos el nuevo objeto "Database"
$db = new Database();
//Conectamos
$db->connect();

//Se reciben variables
$tipo = $_POST["tipo"];
$imageUpload = $_POST["CMSFiles"];

		//Si todo ok, procesamos...
		$dateTime = date("Y-m-d H:i:s");
		
		if(count($_POST["CMSFiles"]>0))
			{
			for($i=0; $i<count($_POST["CMSFiles"]); $i++)
				{
				$imageOk = $_POST['CMSFiles'][$i];
				$db->doQuery("INSERT INTO cms_banner (imagen,fecha,tipo) VALUES ('$imageOk','$dateTime',$tipo)",INSERT_QUERY);
				}
			}
			
			$message .= "<script>loading('Procesando',1); setTimeout(\"unloading()\", 2000 ); </script>";
			$message .= "<script>showSuccess('Carga correcta',3000); </script>";
		    $message .= "<script>setInterval('window.location.reload()', 4000 ); </script>";
echo $message;


?>