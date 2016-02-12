<?php
include("../../../core/class/db.class.php");
$db = new Database();
$db->connect();


if (($_POST["actividad"])!=('')){
    $actividad = $_POST["actividad"];
}else{
    header('Location: ../view/index.php?erno=3');
	exit;
}

if (($_POST["fecha"])!=('')){
    $fecha = $_POST["fecha"];
}else{
    header('Location: ../view/index.php?erno=3');
	exit;
}
$id=  base64_decode($_POST["id"]);


		$query = "INSERT INTO actividad (
                                                    cronograma_id, 
                                                    actividad, 
                                                    fecha
                                                 ) VALUES
                                                 (
                                                    '$id',                                                    
                                                    '$actividad',
                                                    '$fecha'
                                                 )";
                //die($query);
               
		
		if ($db->doQuery($query,INSERT_QUERY))
		{
                        $id=  base64_encode($id);
			header('Location: ../view/actividades.php?id='.$id);
		}
		else
		{
			
		}
		
	
?>