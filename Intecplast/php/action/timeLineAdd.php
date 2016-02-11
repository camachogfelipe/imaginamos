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

$anio = $_POST['anio'];
$descripcionEspanol = $_POST['descripcionEspanol'];
$descripcionIngles = $_POST['descripcionIngles'];

$timelineDAO = new timelineDAO();
$timeline = new timeline();

$descripcionEspanol = accents2HTML($descripcionEspanol);
$descripcionIngles = accents2HTML($descripcionIngles);

$condition=$timelineDAO->getByAnio($anio);

var_dump($condition);


if ($condition!=NULL) {

    $location = "location: ./../../admin/menuAdmin.php?s=timeLineAdd&error=1";

    header($location);
    exit;

}
else {  

$timeline->setAnio($anio);
$timeline->setDescripcion_e($descripcionEspanol);
$timeline->setDescripcion_i($descripcionIngles);
$timeline->setSeccionId(1);
$timeline->setFlagId(3);


if (is_uploaded_file($_FILES['imagenEspanol']['tmp_name'])  ) {
    $src= "/img/";

    $imagen = $_FILES['imagenEspanol']['name'];
    $imagen1 = explode(".",$imagen);


    if ($imagen1[1] == "jpg" || $imagen1[1] == "JPG" || $imagen1[1] == "jpeg" || $imagen1[1] == "JPEG" || $imagen1[1] == "gif" || $imagen1[1] == "GIF" || $imagen1[1] == "eps" || $imagen1[1] == "EPS" || $imagen1[1] == "png" || $imagen1[1] == "PNG" || $imagen1[1] == "tif" || $imagen1[1] == "TIF" || $imagen1[1] == "bmp" || $imagen1[1] == "BMP" ){
        $imagen2 = rand(0,9).rand(100,9999).rand(100,9999).".".$imagen1[1];


        move_uploaded_file($_FILES['imagenEspanol']['tmp_name'], "./../..".$src.$imagen2);

        $logo = $src.$imagen2;
        $timeline->setImagen_e($logo);    
    } 
    
    else {
        header($location.'&error10');
        exit;
    }
}

if (is_uploaded_file($_FILES['imagenIngles']['tmp_name'])  ) {
    $src= "/img/";

    $imagen = $_FILES['imagenIngles']['name'];
    $imagen1 = explode(".",$imagen);


    if ($imagen1[1] == "jpg" || $imagen1[1] == "JPG" || $imagen1[1] == "jpeg" || $imagen1[1] == "JPEG" || $imagen1[1] == "gif" || $imagen1[1] == "GIF" || $imagen1[1] == "eps" || $imagen1[1] == "EPS" || $imagen1[1] == "png" || $imagen1[1] == "PNG" || $imagen1[1] == "tif" || $imagen1[1] == "TIF" || $imagen1[1] == "bmp" || $imagen1[1] == "BMP" ){
        $imagen2 = rand(0,9).rand(100,9999).rand(100,9999).".".$imagen1[1];


        move_uploaded_file($_FILES['imagenIngles']['tmp_name'], "./../..".$src.$imagen2);

        $logo = $src.$imagen2;
        $timeline->setImagen_i($logo);    
    } 
    
    else {
        header($location.'&error10');
        exit;
    }
}

$timelineDAO->save($timeline);

$location = "location: ./../../admin/menuAdmin.php?s=timeLine&add=1";

header($location);
exit;
}

?>