<?php
include("../../../core/class/db.class.php");
include '../define.php';

$db = new Database();
$db->connect();
$id = $_POST['id'];
$titulo1 = $_POST["titulo1"];
$titulo2 = $_POST["titulo2"];
$titulo3 = $_POST["titulo3"];
$titulo4 = $_POST["titulo4"];
$titulo5 = $_POST["titulo5"];
$titulo6 = $_POST["titulo6"];
$titulo7 = $_POST["titulo7"];
$titulo8 = $_POST["titulo8"];
$titulo9 = $_POST["titulo9"];
$imagen1 = $_POST["IMUFiles"][0];
$imagen2 = $_POST["IMUFiles1"][0];

if($imagen1 == ''){
    $imagen1 = $_POST['imagen1ant'];
}
if($imagen2 == ''){
    $imagen2 = $_POST['imagen2ant'];
}


if ($id == '')
{
	header('Location: ../view/Edit.php?id='.base64_encode($id).'&erno=3');
	exit;	
}
else
{
	$query = " UPDATE  ".TABLE_NAME." SET
            titulo1 =  '".mysql_real_escape_string($titulo1)."',
            titulo2 =  '".mysql_real_escape_string($titulo2)."',
            titulo3 =  '".mysql_real_escape_string($titulo3)."',
            titulo4 =  '".mysql_real_escape_string($titulo4)."',
            titulo6 =  '".mysql_real_escape_string($titulo6)."',
            titulo7 =  '".mysql_real_escape_string($titulo7)."',
            titulo8 =  '".mysql_real_escape_string($titulo8)."',
            titulo9 =  '".mysql_real_escape_string($titulo9)."',
            imagen1 =  '".mysql_real_escape_string($imagen1)."'
            WHERE  idcms ='".$id."'" ;
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