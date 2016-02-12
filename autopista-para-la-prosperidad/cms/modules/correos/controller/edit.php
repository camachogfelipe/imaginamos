<?php
include("../../../core/class/db.class.php");
$db = new Database();
$db->connect();


$titulo = $_POST["titulo"];
$texto = $_POST["texto"];
$id = $_POST['id'];
$link = $_POST['link'];

if ($_POST['imagenant']!='')
{
	$imagen = $_POST['imagenant'];	
}
$imagen = $_POST['imagenant'];


if ($_POST["IMUFiles"][0]!='')
{
	$imagen = $_POST["IMUFiles"][0];	
}
//echo "<pre>"; var_dump($_POST); echo "</pre>";
//echo print_r($titulo);
//exit();

if ($imagen == '' || $titulo == '' || $texto == '')
{
	header('Location: ../view/Edit.php?id='.base64_encode($id).'&erno=3');
	exit;	
}
else
{
	$query = " UPDATE cms_banner_superior SET 
			   titulo_banner_superior = '".$titulo."',
			   texto_banner_superior = '".$texto."',
			   imagen_banner_superior = '".mysql_real_escape_string($imagen)."',
                           link_banner_superior = '".mysql_real_escape_string($link)."'
			   WHERE
			   id_banner_superior = '".$id."'";
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