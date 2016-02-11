<?php
include("../../../core/class/db.class.php");
include '../define.php';

$db = new Database();
$db->connect();
$id = $_POST['id'];
$titulo1 = $_POST["titulo1"];
$titulo2 = $_POST["titulo2"];
if ($id == ''){
	header('Location: ../view/Edit.php?id='.base64_encode($id).'&erno=3');
	exit;	
}else{
	$query = "INSERT INTO cms_tablas (idcms,titulo1,titulo2) VALUES (
            '".mysql_real_escape_string($id)."',
            '".mysql_real_escape_string($titulo1)."',
            '".mysql_real_escape_string($titulo2)."'
            ) ON DUPLICATE KEY UPDATE
            titulo1='".mysql_real_escape_string($titulo1)."', 
            titulo2='".mysql_real_escape_string($titulo2)."'
        "; 
           
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