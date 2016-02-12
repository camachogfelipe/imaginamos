<?php
include("../../../core/class/db.class.php");
$db = new Database();
$db->connect();

if (($_POST["correo"])!=('')){
    $correo = $_POST["correo"];
}else{
    header('Location: ../view/index.php?erno=3');
	exit;
}


		$query = "INSERT INTO correos (
                                                     email,
                                                     destacado
                                                 ) VALUES
                                                 (
                                                    '$correo',                                                    
                                                    '0'
                                                 )";
		$message = "";
		if ($db->doQuery($query,INSERT_QUERY))
		{
			
			$message .= "Correo agregado correctamente!<br />";
			$message .= "<br />" . $_POST['correo'];
		}
		else
		{
			$message .= "Error al grabar el correo";
		}
		header('Location: ../view/index.php?Erno=1');
	
?>