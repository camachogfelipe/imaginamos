<?php session_start();

if( !isset($_SESSION['admin']) ){
    header("location: ./../../admin/index.php");
    exit;
}

include '../dao/daoConnection.php';
include '../dao/noticiaDAO.php';
include '../entities/noticia.php';

$noticia_id = $_GET['id'];

$noticiaDAO = new noticiaDAO();

$noticia = new noticia();
$noticia = $noticiaDAO->getById($noticia_id);


    @unlink("./../..".$noticia->getImagen_e());
    @unlink("./../..".$noticia->getImagen_i());


$result = $noticiaDAO->delete($noticia_id);

$location = "location: ./../../admin/menuAdmin.php?s=admNoticias&delete=1";

if (!$result) {
    header($location.'&error');
    exit;
}

header($location);
exit;


?>