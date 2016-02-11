<?php
include("../../../core/class/db.class.php");
$db = new Database();
$db->connect();
$titulo = $_POST["titulo"];
$texto = $_POST["texto"];
$id = $_POST['id'];
if ($_POST['imagenant']!='')
{
	$imagen = $_POST['imagenant'];	
}
$imagen = $_POST['imagenant'];
if ($_POST["IMUFiles"][0]!='')
{
	$imagen = $_POST["IMUFiles"][0];	
}

if ($imagen == '' || $titulo == '' || $texto == '')
{
	header('Location: ../view/Edit.php?id='.base64_encode($id).'&lain=3');
	exit;	
}

else
{
	$query = " UPDATE cms_destacados SET 
			   titulo_destacados = '".$titulo."',
			   texto_destacados = '".$texto."',
			   imagen_destacados = '".mysql_real_escape_string($imagen)."'
			   WHERE
			   id_destacados = '".$id."'";
	if ($db->doQuery($query,INSERT_QUERY))
	{
		header('Location: ../view/Edit.php?id='.base64_encode($id).'&lain=1');
		exit;	
	}
	else
	{
		header('Location: ../view/Edit.php?id='.base64_encode($id).'&lain=2');
		exit;
	}
	
	
}



?>