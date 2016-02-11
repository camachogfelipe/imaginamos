<?php session_start();?>
<?php

if( !isset($_SESSION['admin']) ){
    header("location: ./../../admin/index.php");
    exit;
}

include '../dao/daoConnection.php';
include '../dao/ensambleDAO.php';
include '../entities/ensamble.php';

    $id = $_GET['id'];
    $ensambleDAO = new ensambleDAO();
    $ensamble = new ensamble();
    $ensamble = $ensambleDAO->getById($id);


    @unlink("./../..".$ensamble->getImagen());


$result = $ensambleDAO->delete($id);

$location = "location: ./../../admin/menuAdmin.php?s=view_ensambles&delete=";

if (!$result) {
    header($location.'&error');
    exit;
}

header($location.'1');
exit;


?>