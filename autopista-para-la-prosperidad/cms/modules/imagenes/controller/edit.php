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

	$query = " UPDATE imagenes SET 
			   imagen = '".mysql_real_escape_string($imagen)."'
			   WHERE
			   id = '".$id."'";
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



?>