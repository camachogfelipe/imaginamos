<?php include("../../../core/class/db.class.php");
$db = new Database();
$db->connect();
foreach ($_POST as $key => $value)
{
	$arrinputs[$key] = $value;
	$$key = $value;	
}
if($_POST["IMUFiles"][0]==NULL){
 $imagen1 =  $_POST['imagenant1'];
}else{
    $imagen1 = $_POST["IMUFiles"][0];
}
//if($_POST["IMU2Files"][0]==NULL){
// $imagen2 =  $_POST['imagenant2'];
//}else{
//    $imagen2 = $_POST["IMU2Files"][0];
//}


if ($titulo== '' || $texto == '' || $titulo2== '' || $texto2=='' || $titulo3=='' || $texto3=='')
{
	header('Location: ../view/index.php?lain=3');
	exit;	
}
else
{
	$query = " UPDATE cms_quienes SET 
			   titulo_quienes = '$titulo',
                           texto_quienes =   '$texto',
			   titulo2_quienes = '$titulo2',
                           texto2_quienes =   '$texto2',
			   titulo3_quienes = '$titulo3',
                           texto3_quienes =   '$texto3',
                           imagen1_quienes = '".  mysql_real_escape_string($imagen1)."'
			   WHERE
			   id_quienes = 1";
	if ($db->doQuery($query,INSERT_QUERY))
	{
		header('Location: ../view/index.php?lain=1');
		exit;	
	}
	else
	{
		header('Location: ../view/index.php?lain=2');
		exit;
	}	
}
?>