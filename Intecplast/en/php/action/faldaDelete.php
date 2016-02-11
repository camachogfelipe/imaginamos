<?php session_start();?>
<?php

if( !isset($_SESSION['admin']) ){
    header("location: ./../../admin/index.php");
    exit;
}

include '../dao/daoConnection.php';
include '../dao/faldaDAO.php';
include '../entities/falda.php';

$falda_id = $_GET['id'];

$faldaDAO = new faldaDAO();

$falda = new falda();

$result = $faldaDAO->delete($falda_id);

$location = "location: ./../../admin/faldasAdd.php?delete=";

if (!$result) {
    header($location.'&error');
    exit;
}

header($location.'1');
exit;


?>