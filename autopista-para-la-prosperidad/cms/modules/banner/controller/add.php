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

if (($_POST["IMUFiles"][0])!=('')){
   $imagen = $_POST["IMUFiles"][0];
}




		$query = "INSERT INTO cms_banner_superior (
                                                    titulo_banner_superior, 
                                                     texto_banner_superior, 
                                                    imagen_banner_superior,
                                                    link_banner_superior
                                                 ) VALUES
                                                 (
                                                    '$titulo',                                                    
                                                    '$texto',
                                                    '".mysql_real_escape_string($imagen)."',
                                                    '$link'
                                                 )";
		$message = "";
		if ($db->doQuery($query,INSERT_QUERY))
		{
			
			$message .= "Banner agregado correctamente!<br />";
			$message .= "<br />" . $_POST['titulo'];
		}
		else
		{
			$message .= "Error al grabar el Banner";
		}
		echo $message;
	
?>