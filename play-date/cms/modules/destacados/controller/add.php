<?php
include("../../../core/class/db.class.php");
$db = new Database();
$db->connect();

if ((($_POST["titulo"])!=(''))||(($_POST["texto"])!=(''))){
    $titulo = $_POST["titulo"];
    $texto = $_POST["texto"];
    
    
}else{
    header('Location: ../view/index.php?lain=3');
	exit;
}

if (($_POST["IMUFiles"][0])!=('')){
   $imagen = $_POST["IMUFiles"][0];
}



		$query = "INSERT INTO cms_destacados (
                                                    titulo_destacados,
                                                    texto_destacados,
                                                    imagen_destacados
                                                 ) VALUES
                                                 (
                                                    '$titulo',
                                                    '$texto',
                                                    '".mysql_real_escape_string($imagen)."'
                                                 )";
		
		if ($db->doQuery($query,INSERT_QUERY))
		{
                    header('Location: ../view/index.php?lain=1');
                    exit();
		}
		else
		{
		header('Location: ../view/index.php?lain=2');
                exit();	
		}
?>