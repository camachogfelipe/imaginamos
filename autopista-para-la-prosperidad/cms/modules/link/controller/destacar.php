<?php
include("../../../core/class/db.class.php");
$db = new Database();
$db->connect();
if (isset($_POST)){
    $query1 = "SELECT * FROM link WHERE destacado = 1";
    $db->doQuery($query1,SELECT_QUERY);
    $results = $db->results;
    $numOfResults = $db->getNumResults();
    if($numOfResults==5){
        echo 'No puedes destacar m&aacute;s de 5 links';
        exit();
    }else{
         $idp = $_POST['id'];
        $query = "UPDATE link
           SET
           destacado=1
           WHERE id = $idp";
        if ($db->doQuery($query,INSERT_QUERY))
            {
		echo 'El link ha sido destacado';
            }
            else
            {
		echo 'Ha ocurrido un error al destacar este item.';
            }
        }
}
?>