<?php
include("../../../core/class/db.class.php");
include '../define.php';

$db = new Database();
$db->connect();
$id = $_POST['id'];
$imagen1 = $_POST["IMUFiles"][0];
$imagen2 = $_POST["IMU1Files"][0];
if($imagen1 == ''){
    $imagen1 = $_POST['imagen1ant'];
}
if($imagen2 == ''){
    $imagen2 = $_POST['imagen2ant'];
}
//print_r/($_POST);

if ($id == '')
{
	header('Location: ../view/Edit4.php?id='.base64_encode($id).'&erno=3');
	exit;	
}
else
{
	$query = " UPDATE  ".TABLE_NAME." SET
            adjunto1 =  '".mysql_real_escape_string($imagen1)."',
            adjunto2 =  '".mysql_real_escape_string($imagen2)."'
            WHERE  idcms ='".$id."'" ;
	if ($db->doQuery($query,INSERT_QUERY)){
          //  echo $query;
		header('Location: ../view/Edit4.php?id='.base64_encode($id).'&erno=1');
		exit;	
	}
	else
	{
		header('Location: ../view/Edit4.php?id='.base64_encode($id).'&erno=2');
		exit;
	}
        
}



?>