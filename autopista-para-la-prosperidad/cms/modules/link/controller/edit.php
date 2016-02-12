<?php
include("../../../core/class/db.class.php");
$db = new Database();
$db->connect();


$id = $_POST["id"];
$texto = $_POST["texto"];
$link = $_POST["link"];

if ( $link == '' || $texto == '')
{
	header('Location: ../view/Edit.php?id='.base64_encode($id).'&erno=3');
	exit;	
}
else
{
	$query = " UPDATE link SET 
			   texto = '".$texto."',
                           link = '".$link."'
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
	
	
}



?>