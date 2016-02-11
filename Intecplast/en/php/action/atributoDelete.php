<?php session_start();?>
<?php

if( !isset($_SESSION['admin']) ){
    header("location: ./../../admin/index.php");
    exit;
}

include '../dao/daoConnection.php';
include '../dao/atributoDAO.php';
include '../entities/atributo.php';

$atributo_id = $_GET['id'];

$atributoDAO = new atributoDAO();

$atributo = new atributo();

$result = $atributoDAO->delete($atributo_id);

$location = "location: ./../../admin/atributosAdd.php?delete=";

if (!$result) {
    header($location.'&error');
    exit;
}

header($location.'1');
exit;


?>