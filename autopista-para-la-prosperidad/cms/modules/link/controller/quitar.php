<?php
include("../../../core/class/db.class.php");
$db = new Database();
$db->connect();
if (isset($_POST)){
    $idp = $_POST['id'];
    $query = "UPDATE link
           SET
           destacado=0
           WHERE id = $idp";
    
    if ($db->doQuery($query,INSERT_QUERY))
	{
		echo 'El link se ha quitado de los destacados';
	}
	else
	{
		echo 'Ha ocurrido un error al quitar de destacados el link';
	}
}
?>