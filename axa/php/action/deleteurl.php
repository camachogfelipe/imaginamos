<?php session_start(); ?>
<?php

if (!isset($_SESSION['admin'])) {
    header("location: ./../../admin/index.php");
    exit;
}

include '../dao/daoConnection.php';
$daoConnection = new DAO;
$daoConnection->conectar();

$id = $_GET['id'];
$id = base64_decode($id); //echo $id."asdas";


$location = "location: ./../../admin/menuAdmin.php?s=generador";

if ($id == "") {
    header($location . '&error1');
    exit;
}




$sql = 'Delete from empresa_url WHERE id = ' . $id . ' ';
$daoConnection->consulta($sql);

//everything fine!
header($location . '&ok');
exit;
?>