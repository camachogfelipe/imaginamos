<?php session_start();?>
<?php

if( !isset($_SESSION['admin']) ){
    header("location: ./../../admin/index.php");
    exit;
}

include '../dao/daoConnection.php';
include '../dao/claseDAO.php';
include '../entities/clase.php';

$clase_id = $_GET['id'];

$claseDAO = new claseDAO();

$clase = new clase();
$clase = $claseDAO->getById($clase_id);


    @unlink("./../..".$clase->getimagen());


$result = $claseDAO->delete($clase_id);

$location = "location: ./../../admin/clasesAdd.php?delete=";

if (!$result) {
    header($location.'&error');
    exit;
}

header($location.'1');
exit;


?>