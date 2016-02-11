<?php
include("../../../core/class/db.class.php");
$db = new Database();
$db->connect();
$titulo = $_POST["titulo"];
$titulo2 = $_POST["titulo2"];
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

if ($imagen == '' || $titulo == '' || $titulo2 == '')
{
	header('Location: ../view/Edit.php?id='.base64_encode($id).'&lain=3');
	exit;	
}

else
{
	$query = " UPDATE cms_banner_superior SET 
			   titulo_banner_superior = '".$titulo."',
                           titulo2_banner_superior = '".$titulo2."',    
			   imagen_banner_superior = '".mysql_real_escape_string($imagen)."'
			   WHERE
			   id_banner_superior = '".$id."'";
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