<?php session_start();

if( !isset($_SESSION['admin']) ){
    header("location: ./../../admin/index.php");
    exit;
}

include '../dao/daoConnection.php';
include '../dao/noticiaDAO.php';
include '../entities/noticia.php';
include '../functions/validar.php';
include '../functions/textoHTML.php';



$tituloEspanol = $_POST['tituloEspanol'];
$descripcionEspanol = $_POST['descripcionEspanol'];
$enlaceEspanol = $_POST['enlaceEspanol'];
$tituloIngles = $_POST['tituloIngles'];
$descripcionIngles = $_POST['descripcionIngles'];
$enlaceIngles = $_POST['enlaceIngles'];

$location = "location: ./../../admin/menuAdmin.php?s=admNoticias";

$noticiaDAO = new noticiaDAO();

$noticia = new noticia();

date_default_timezone_set('America/Bogota');
$date = getdate();



$tituloEspanol = accents2HTML($tituloEspanol);
$descripcionEspanol = accents2HTML($descripcionEspanol);
$tituloIngles = accents2HTML($tituloIngles);
$descripcionIngles = accents2HTML($descripcionIngles);
$noticia_fecha = ($date["year"]."-". $date["mon"]."-". $date["mday"]."");



$noticia->setId($noticia_id);
$noticia->setSeccionId(10);
$noticia->setTitulo_e($tituloEspanol);
$noticia->setDescripcion_e($descripcionEspanol);
$noticia->setEnlace_e($enlaceEspanol);
$noticia->setTitulo_i($tituloIngles);
$noticia->setDescripcion_i($descripcionIngles);
$noticia->setEnlace_i($enlaceIngles);
$noticia->setFecha($noticia_fecha);

if (is_uploaded_file($_FILES['imagenEspanol']['tmp_name'])  ) {
    $src= "/img/";

    $imagen = $_FILES['imagenEspanol']['name'];
    $imagen1 = explode(".",$imagen);


    if ($imagen1[1] == "jpg" || $imagen1[1] == "JPG" || $imagen1[1] == "jpeg" || $imagen1[1] == "JPEG" || $imagen1[1] == "gif" || $imagen1[1] == "GIF" || $imagen1[1] == "eps" || $imagen1[1] == "EPS" || $imagen1[1] == "png" || $imagen1[1] == "PNG" || $imagen1[1] == "tif" || $imagen1[1] == "TIF" || $imagen1[1] == "bmp" || $imagen1[1] == "BMP" ){
        $imagen2 = rand(0,9).rand(100,9999).rand(100,9999).".".$imagen1[1];


        move_uploaded_file($_FILES['imagenEspanol']['tmp_name'], "./../..".$src.$imagen2);

        $logo = $src.$imagen2;
        $noticia->setImagen_e($logo);    
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
        $noticia->setImagen_i($logo);    
    } 
    
    else {
        header($location.'&error10');
        exit;
    }
}

$noticiaDAO->save($noticia);

$location = "location: ./../../admin/menuAdmin.php?s=admNoticias&add=1";

header($location);
exit;
?>