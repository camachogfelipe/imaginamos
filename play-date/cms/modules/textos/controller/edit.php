<?php
include("../../../core/class/db.class.php");
$db = new Database();
$db->connect();
$descripcion = $_POST["texto"];
$id = $_POST['id'];
if ($descripcion == '')
{
	header('Location: ../view/Edit.php?id='.base64_encode($id).'&erno=3');
	exit;	
}
else
{
	$query = " UPDATE cms_textos SET 
			   texto_textos = '$descripcion'                          
			   WHERE
			   id_textos = '$id'";
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