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

if (($_POST["textoDetalle"])!=('')){
    $textoDetalle = $_POST["textoDetalle"];
}else{
    header('Location: ../view/index.php?erno=3');
	exit;
}

$video = $_POST["video"];


		$query = "INSERT INTO video (
                                                    titulo, 
                                                    subtitulo, 
                                                    texto,
                                                    textodetalle,
                                                    video
                                                 ) VALUES
                                                 (
                                                    '$titulo',                                                    
                                                    '$subTitulo',
                                                    '$texto',
                                                    '$textoDetalle',
                                                    '$video'
                                                 )";
                //die($query);
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
		header('Location: ../view/index.php');
	
?>