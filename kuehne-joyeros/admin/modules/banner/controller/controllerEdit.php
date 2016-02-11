<?php
include("../../../core/class/db.class.php");
//Creamos el nuevo objeto "Database"
$db = new Database();
//Conectamos
$db->connect();


$id_banner = $_POST["id"];
if ($_POST["CMSFiles"][0]!='')
{
    $imagen = $_POST["CMSFiles"][0];	
    $query = " UPDATE cms_banner SET 
                imagen = '".mysql_real_escape_string($imagen)."'
                WHERE
                id_banner = ".$id_banner;
	if ($db->doQuery($query,INSERT_QUERY))
	{
		header('Location: ../view/edit.php?id='.($id_banner).'&funcionality=1&erno=1');
		exit;	
	}
	else
	{
		header('Location: ../view/edit.php?id='.($id_banner).'&funcionality=1&erno=2');
		exit;
	}

        
}else{
    header('Location: ../view/edit.php?id='.($id_banner).'&funcionality=1&erno=2');
    exit;
}
?>