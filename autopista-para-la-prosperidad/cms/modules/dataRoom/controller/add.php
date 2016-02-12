<?php
include("../../../core/class/db.class.php");
$db = new Database();
$db->connect();

if (($_POST["nombre"])!=('')){
    $nombre = $_POST["nombre"];
}else{
    header('Location: ../view/index.php?erno=3');
	exit;
}

$id=  base64_decode($_POST["id"]);
$tabla = 'categoria';
$llave = $_POST["llave"];
$ant = $_POST["ant"];
$antt = $_POST["antt"];
$idt = $_POST["idt"];


		$query = "INSERT INTO $tabla (
                                                   nombre
                                                 ) VALUES
                                                 (                                                   
                                                    '$nombre'
                                                 )";
                //die($query);
               
		
		if ($db->doQuery($query,INSERT_QUERY))
		{
                        $id=  base64_encode($id);
			header('Location: ../view/index.php?Erno=1');
		}
		else
		{
			
		}
		
	
?>