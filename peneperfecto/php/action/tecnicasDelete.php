<?php session_start();?>
<?php

if( !isset($_SESSION['admin']) ){
    header("location: ./../../admin/index.php");
    exit;
}

include '../dao/daoConnection.php';
include '../dao/tecnicasDAO.php';
include '../entities/tecnicas.php';

$id = $_GET['id'];

$tecnicasDAO = new tecnicasDAO();

$tecnicas = new tecnicas();
$tecnicas = $tecnicasDAO->getById($id);


    @unlink("./../..".$tecnicas->getimagen());


$result = $tecnicasDAO->delete($id);

$location = "location: ./../../admin/menuAdmin.php?s=tecnicas&a=".$id;

if (!$result) {
    header($location.'&error');
    exit;
}

header($location.'&ok');
exit;


?>