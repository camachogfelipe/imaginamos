<?php session_start();?>
<?php

if( !isset($_SESSION['admin']) ){
    header("location: ./../../admin/index.php");
    exit;
}

include '../dao/daoConnection.php';
include '../dao/colorDAO.php';
include '../entities/color.php';

$color_id = $_GET['id'];

$colorDAO = new colorDAO();

$color = new color();

$result = $colorDAO->delete($color_id);

$location = "location: ./../../admin/coloresAdd.php?delete=";

if (!$result) {
    header($location.'&error');
    exit;
}

header($location.'1');
exit;


?>