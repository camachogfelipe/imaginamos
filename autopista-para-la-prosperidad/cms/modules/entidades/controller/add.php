<?php
include("../../../core/class/db.class.php");
$db = new Database();
$db->connect();

if (($_POST["entidad"])!=('')){
    $entidad = $_POST["entidad"];
}else{
    header('Location: ../view/index.php?erno=3');
	exit;
}

if (($_POST["pagina"])!=('')){
    $pagina = $_POST["pagina"];
}else{
    header('Location: ../view/index.php?erno=3');
	exit;
}

if (($_POST["IMUFiles"][0])!=('')){
   $imagen = $_POST["IMUFiles"][0];
}




		$query = "INSERT INTO entidades (
                                                     entidad, 
                                                     web_entidad, 
                                                     imagen
                                                 ) VALUES
                                                 (
                                                    '$entidad',                                                    
                                                    '$pagina',
                                                    '".mysql_real_escape_string($imagen)."'
                                                 )";
		$message = "";
		if ($db->doQuery($query,INSERT_QUERY))
		{
			
			$message .= "Entidad agregada correctamente!<br />";
			$message .= "<br />" . $_POST['titulo'];
		}
		else
		{
			$message .= "Error al grabar entidad";
		}
		echo $message;
	
?>