<?php
include("../../../core/class/db.class.php");
$db = new Database();
$db->connect();



if (($_POST["IMUFiles"][0])!=('')){
   $imagen = $_POST["IMUFiles"][0];
}




		$query = "INSERT INTO imagenes (
                                                    imagen
                                                 ) VALUES
                                                 (
                                                    
                                                    '".mysql_real_escape_string($imagen)."'
                                                    
                                                 )";
		$message = "";
		if ($db->doQuery($query,INSERT_QUERY))
		{
			
			$message .= "Imagen agregada correctamente!<br />";
			$message .= "<br />" . $_POST['titulo'];
		}
		else
		{
			$message .= "Error al grabar imagen";
		}
		echo $message;
	
?>