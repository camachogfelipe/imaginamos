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

if (($_POST["subtitulo"])!=('')){
    $subTitulo = $_POST["subtitulo"];
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
    $archivo = $_POST["IMUFiles"][0];
}


		$query = "INSERT INTO PRESENTACIONES (
                                                    titulo, 
                                                    subtitulo, 
                                                    texto,
                                                    archivo
                                                 ) VALUES
                                                 (
                                                    '$titulo',                                                    
                                                    '$subTitulo',
                                                    '$texto',
                                                    '$archivo'
                                                 )";
               
		$message = "";
		if ($db->doQuery($query,INSERT_QUERY))
		{
			
			$message .= "Presentacion agregada correctamente!<br />";
			$message .= "<br />" . $_POST['titulo'];
		}
		else
		{
			$message .= "Error al grabar presentacion";
		}
		echo $message;
	
?>