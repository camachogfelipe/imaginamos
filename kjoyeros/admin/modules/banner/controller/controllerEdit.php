<?php
include("../../../core/class/db.class.php");
//Creamos el nuevo objeto "Database"
$db = new Database();
//Conectamos
$db->connect();

$cantidad = $_POST["cantidad"];
$id_banner = $_POST["id_banner"];



		for($a=0; $a < $cantidad; $a++)
		{
			$link_b = $_POST["link_b".$a];
			
			$db->doQuery("UPDATE cms_banner SET link_b = '".$link_b."' WHERE id_banner = ".$id_banner,INSERT_QUERY);
			
		}

		$message = "<script>setInterval('window.location = '../view/', 2000 ); showSuccess('actualización correcta',3000);</script>";
	
echo $message;
?>