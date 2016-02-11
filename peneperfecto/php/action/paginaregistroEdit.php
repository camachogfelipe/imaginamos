<?php session_start();?>
<?php

if( !isset($_SESSION['admin']) ){
    header("location: ./../../admin/index.php");
    exit;
}

include '../dao/daoConnection.php';
include '../dao/paginaregistroDAO.php';
include '../entities/paginaregistro.php';
include '../functions/validar.php';
include '../functions/textoHTML.php';

$id = $_POST['id'];
$texto = $_POST['texto'];
$banner = $_POST['banner'];
$precio = $_POST['precio'];
$contenido = $_POST['contenido'];

$location = "location: ./../../admin/menuAdmin.php?s=paginaregistroEdit&a=$id";

$id = str_replace(',', '.',$id);
if (!validarNumero($id)){
    header($location.'&error1');
    exit;
}

if (!validarTexto($texto)){
    header($location.'&error1');
    exit;
}

if (!validarTexto($contenido)){
    header($location.'&error1');
    exit;
}

$paginaregistroDAO = new paginaregistroDAO();

$paginaregistro = new paginaregistro();

$paginaregistro = $paginaregistroDAO->getById($id);

$texto = accents2HTML($texto);  //     utilizar para eliminar tildes y ñ 

$contenido = accents2HTML($contenido);  //     utilizar para eliminar tildes y ñ 

$paginaregistro->setid($id);
$paginaregistro->settexto($texto);
if (is_uploaded_file($HTTP_POST_FILES['banner']['tmp_name'])  ) {
    $src= "/img/";


    $imagen = $HTTP_POST_FILES['banner']['name'];
    $imagen1 = explode(".",$imagen);


    if ($imagen1[1] == "jpg" || $imagen1[1] == "JPG" || $imagen1[1] == "jpeg" || $imagen1[1] == "JPEG" || $imagen1[1] == "gif" || $imagen1[1] == "GIF" || $imagen1[1] == "eps" || $imagen1[1] == "EPS" || $imagen1[1] == "png" || $imagen1[1] == "PNG" || $imagen1[1] == "tif" || $imagen1[1] == "TIF" || $imagen1[1] == "bmp" || $imagen1[1] == "BMP" ){
        $imagen2 = rand(0,9).rand(100,9999).rand(100,9999).".".$imagen1[1];


        @unlink("./../..".$paginaregistro->getbanner());


        move_uploaded_file($HTTP_POST_FILES['banner']['tmp_name'], "./../..".$src.$imagen2);


        $logo = $src.$imagen2;
        $paginaregistro->setbanner($logo);
    } else {

        header($location.'&error10');
        exit;

    }
}
if (is_uploaded_file($HTTP_POST_FILES['precio']['tmp_name'])  ) {
    $src= "/img/";


    $imagen = $HTTP_POST_FILES['precio']['name'];
    $imagen1 = explode(".",$imagen);


    if ($imagen1[1] == "jpg" || $imagen1[1] == "JPG" || $imagen1[1] == "jpeg" || $imagen1[1] == "JPEG" || $imagen1[1] == "gif" || $imagen1[1] == "GIF" || $imagen1[1] == "eps" || $imagen1[1] == "EPS" || $imagen1[1] == "png" || $imagen1[1] == "PNG" || $imagen1[1] == "tif" || $imagen1[1] == "TIF" || $imagen1[1] == "bmp" || $imagen1[1] == "BMP" ){
        $imagen2 = rand(0,9).rand(100,9999).rand(100,9999).".".$imagen1[1];


        @unlink("./../..".$paginaregistro->getprecio());


        move_uploaded_file($HTTP_POST_FILES['precio']['tmp_name'], "./../..".$src.$imagen2);


        $logo = $src.$imagen2;
        $paginaregistro->setprecio($logo);
    } else {

        header($location.'&error10');
        exit;

    }
}
$paginaregistro->setcontenido($contenido);

$paginaregistroDAO->update($paginaregistro);

$location = "location: ./../../admin/menuAdmin.php?s=paginaregistroEdit&a=".$id;

header($location.'&ok2');
exit;


?>