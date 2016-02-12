<?php
include("../../../core/class/db.class.php");
$db = new Database();
$db->connect();


$titulo = $_POST["titulo"];
$subTitulo = $_POST["subtitulo"];
$texto = $_POST["texto"];
$id = $_POST['id'];
$textoDetalle = $_POST['textoDetalle'];
$video = $_POST['video'];

//echo "<pre>"; var_dump($_POST); echo "</pre>";
//echo print_r($titulo);
//exit();

if ($texto == '' || $titulo == '' || $textoDetalle == '')
{
	header('Location: ../view/Edit.php?id='.base64_encode($id).'&erno=3');
	exit;	
}
else
{
	$query = " UPDATE video SET 
			   titulo = '".$titulo."',
			   subtitulo = '".$subTitulo."',
			   texto = '".mysql_real_escape_string($texto)."',
                           textodetalle = '".mysql_real_escape_string($textoDetalle)."',
                           video = '".mysql_real_escape_string($video)."'
			   WHERE
			   id = '".$id."'";
        
        //die($query);
	if ($db->doQuery($query,INSERT_QUERY))
	{
		header('Location: ../view/Edit.php?id='.base64_encode($id).'&erno=1');
		exit;	
	}
	else
	{
		header('Location: ../view/Edit.php?id='.base64_encode($id).'&erno=2');
		exit;
	}
	
	
}



?>