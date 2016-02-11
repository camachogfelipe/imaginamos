<?php session_start();?>
<?php

if( !isset($_SESSION['admin']) ){
    header("location: ./../../admin/index.php");
    exit;
}

include '../dao/daoConnection.php';
include '../dao/formaDAO.php';
include '../entities/forma.php';

$forma_id = $_GET['id'];

$formaDAO = new formaDAO();

$forma = new forma();
$forma = $formaDAO->getById($forma_id);


    @unlink("./../..".$forma->getimagen());


$result = $formaDAO->delete($forma_id);

$location = "location: ./../../admin/formasAdd.php?delete=";

if (!$result) {
    header($location.'&error');
    exit;
}

header($location.'1');
exit;


?>