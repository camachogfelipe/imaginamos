<?php session_start();

if( !isset($_SESSION['admin']) ){
    header("location: ./../../admin/index.php");
    exit;
}

include '../dao/daoConnection.php';
include '../dao/timelineDAO.php';
include '../entities/timeline.php';
include '../functions/validar.php';
include '../functions/textoHTML.php';

$lang=$_GET['lang'];

if ($lang==NULL) {
    exit;
}

$timeline_id = $_POST['id'];
$timeline_descripcion = $_POST['descripcion'];
$imagen = $_POST['imagen'];

$location = "location: ./../../admin/menuAdmin.php?s=acercaDeNosotros&id=1";

$timeline_id = str_replace(',', '.',$timeline_id);
if (!validarNumero($timeline_id)){
    header($location.'&error1');
    exit;
}

if (!validarTexto($timeline_descripcion)){
    header($location.'&error1');
    exit;
}

$timelineDAO = new timelineDAO();

$timeline = new timeline();

$timeline = $timelineDAO->getById($timeline_id);

$timeline_descripcion = accents2HTML($timeline_descripcion);

$timeline->setId($timeline_id);

$lang=="es" ? $timeline->setDescripcion_e($timeline_descripcion) : $timeline->setDescripcion_i($timeline_descripcion);    
        
if (is_uploaded_file($_FILES['imagen']['tmp_name'])  ) {
    $src= "/img/";

    $imagen = $_FILES['imagen']['name'];
    $imagen1 = explode(".",$imagen);


    if ($imagen1[1] == "jpg" || $imagen1[1] == "JPG" || $imagen1[1] == "jpeg" || $imagen1[1] == "JPEG" || $imagen1[1] == "gif" || $imagen1[1] == "GIF" || $imagen1[1] == "eps" || $imagen1[1] == "EPS" || $imagen1[1] == "png" || $imagen1[1] == "PNG" || $imagen1[1] == "tif" || $imagen1[1] == "TIF" || $imagen1[1] == "bmp" || $imagen1[1] == "BMP" ){
        $imagen2 = rand(0,9).rand(100,9999).rand(100,9999).".".$imagen1[1];


       // $lang=="es" ? @unlink("./../..".$timeline->getImagen_e()) : @unlink("./../..".$timeline->getImagen_i());


        move_uploaded_file($_FILES['imagen']['tmp_name'], "./../..".$src.$imagen2);


        $logo = $src.$imagen2;

        $lang=="es" ? $timeline->setImagen_e($logo) : $timeline->setImagen_i($logo);
    
    } 
    
    else {
        header($location.'&error10');
        exit;
    }
}

$lang=="es" ? $timelineDAO->updateEspanol($timeline) : $timelineDAO->updateIngles($timeline);


$location = "location: ./../../admin/menuAdmin.php?s=timeLineEdit&edit=1&lang=".$lang."&id=".$timeline_id;
header($location);
exit;
?>