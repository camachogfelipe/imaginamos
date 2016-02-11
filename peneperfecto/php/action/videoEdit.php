<?php session_start();?>
<?php

if( !isset($_SESSION['admin']) ){
    header("location: ./../../admin/index.php");
    exit;
}

include '../dao/daoConnection.php';
include '../dao/videoDAO.php';
include '../entities/video.php';
include '../functions/validar.php';
include '../functions/textoHTML.php';

$id = $_POST['id'];
$link = $_POST['link'];

$location = "location: ./../../admin/menuAdmin.php?s=videoEdit&a=$id";

$id = str_replace(',', '.',$id);
if (!validarNumero($id)){
    header($location.'&error1');
    exit;
}

$videoDAO = new videoDAO();

$video = new video();

$video = $videoDAO->getById($id);

$video->setid($id);
if (is_uploaded_file($HTTP_POST_FILES['link']['tmp_name'])  ) {
    $src= "/img/";


    $imagen = $HTTP_POST_FILES['link']['name'];
    $imagen1 = explode(".",$imagen);


    if ($imagen1[1] == "swf" || $imagen1[1] == "SWF" ){
        $imagen2 = rand(0,9).rand(100,9999).rand(100,9999).".".$imagen1[1];


        @unlink("./../..".$video->getlink());


        move_uploaded_file($HTTP_POST_FILES['link']['tmp_name'], "./../..".$src.$imagen2);


        $logo = $src.$imagen2;
        $video->setlink($logo);
    } else {

        header($location.'&error10');
        exit;

    }
}

$videoDAO->update($video);

$location = "location: ./../../admin/menuAdmin.php?s=videoEdit&a=".$id;

header($location.'&ok2');
exit;


?>