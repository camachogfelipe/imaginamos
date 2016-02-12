<?php
include("../../../core/class/db.class.php");
$db = new Database();
$db->connect();

if (($_POST["titulo"])!=('')){
    $titulo = $_POST["titulo"];
}else{
    header('Location: ../view/index.php?erno=3');
	exit;
}


if (($_POST["texto"])!=('')){
    $texto = $_POST["texto"];
}else{
    header('Location: ../view/index.php?erno=3');
	exit;
}



		$query = "INSERT INTO concesiones (
                                                    titulo,
                                                    texto
                                                 ) VALUES
                                                 (
                                                    '$titulo',
                                                    '$texto'
                                                 )";
               
		
		if ($db->doQuery($query,INSERT_QUERY))
		{
			
			header('Location: ../view/index.php?erno=1');
		}
		else
		{
			header('Location: ../view/index.php?erno=2');
		}
		
	
?>