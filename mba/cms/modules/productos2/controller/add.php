<?php
include("../../../core/class/db.class.php");
include '../define.php';
$db = new Database();
$db->connect();

//print_r($_POST);

$imagen = $_POST["IMUFiles"][0];
$imagen1 = $_POST["IMU1Files"][0];

$titulo1 = $_POST["titulo1"];
$titulo2 = $_POST["titulo2"];
$titulo3 = $_POST["titulo3"];
$titulo4 = $_POST["titulo4"];
$titulo5 = $_POST["titulo5"];
$titulo6 = $_POST["titulo6"];
$titulo7 = $_POST["titulo7"];
$titulo8 = $_POST["titulo8"];
$titulo9 = $_POST["titulo9"];

$descripcion = $_POST["descripcion"];
//echo $descripcion .'----';
$seccion = 1;
if ($titulo1 == '')
{
	header('Location: ../view/Add.php?id='.base64_encode($titulo5).'&erno=3');
        exit;
}
else
{

$query = "INSERT INTO  ".TABLE_NAME." (
                titulo1 ,
                titulo2 ,
                titulo3 ,
                titulo4 ,
                titulo5 ,
                titulo6 ,
                titulo7 ,
                titulo8 ,
                titulo9,
                imagen1,
                imagen2
            )
            VALUES (
                '".mysql_real_escape_string($titulo1)."',
                '".mysql_real_escape_string($titulo2)."',
                '".mysql_real_escape_string($titulo3)."',
                '".mysql_real_escape_string($titulo4)."',
                '".mysql_real_escape_string($titulo5)."',
                '".mysql_real_escape_string($titulo6)."',
                '".mysql_real_escape_string($titulo7)."',
                '".mysql_real_escape_string($titulo8)."',
                '".mysql_real_escape_string($titulo9)."',
                '".mysql_real_escape_string($imagen)."',
                '".mysql_real_escape_string($imagen1)."'
            )";
		$message = "";
                //echo $querty;
		if ($db->doQuery($query,INSERT_QUERY))
		{
			
                    header('Location: ../view/index.php?id='.base64_encode($titulo5).'&erno=1');
                    exit;	
		}
		else
		{
                    header('Location: ../view/index.php?id='.base64_encode($titulo5).'&erno=2');
                    exit;	
		}
		//echo $message;
	
}



?>