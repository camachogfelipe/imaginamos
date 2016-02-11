<?php
include("../../../core/class/db.class.php");
$db = new Database();
$db->connect();

if ((($_POST["titulo"])!=(''))||(($_POST["titulo2"])!=(''))){
    $titulo = $_POST["titulo"];
    $titulo2 = $_POST["titulo2"];
   
    
}else{
    header('Location: ../view/index.php?lain=3');
	exit;
}

if (($_POST["IMUFiles"][0])!=('')){
   $imagen = $_POST["IMUFiles"][0];
}



		$query = "INSERT INTO cms_banner_superior (
                                                    titulo_banner_superior,
                                                    titulo2_banner_superior,
                                                    imagen_banner_superior
                                                 ) VALUES
                                                 (
                                                    '$titulo','$titulo2',   
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