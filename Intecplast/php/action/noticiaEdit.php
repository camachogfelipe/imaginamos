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

$lang=$_GET['lang'];

if ($lang==NULL) {
    exit;
}

$recurso=$_GET['s'];

$noticia_id = $_POST['id'];
$noticia_titulo = $_POST['titulo'];
$noticia_descripcion = $_POST['descripcion'];
$imagen = $_POST['imagen'];
$enlace = $_POST['enlace'];

$location = "location: ./../../admin/menuAdmin.php?s=acercaDeNosotros&id=1";

$noticia_id = str_replace(',', '.',$noticia_id);
if (!validarNumero($noticia_id)){
    header($location.'&error1');
    exit;
}

if (!validarTexto($noticia_titulo)){
    header($location.'&error1');
    exit;
}

if (!validarTexto($noticia_descripcion)){
    header($location.'&error1');
    exit;
}

$noticiaDAO = new noticiaDAO();

$noticia = new noticia();

$noticia = $noticiaDAO->getById($noticia_id);

$noticia_titulo = accents2HTML($noticia_titulo);

$noticia_descripcion = accents2HTML($noticia_descripcion);

$noticia->setId($noticia_id);


if ($lang=="es") {

    $noticia->setTitulo_e($noticia_titulo);

    $noticia->setDescripcion_e($noticia_descripcion);
    
    $noticia->setEnlace_e($enlace);

}

else {
    
    $noticia->setTitulo_i($noticia_titulo);

    $noticia->setDescripcion_i($noticia_descripcion);    
    
    $noticia->setEnlace_i($enlace);
    
}

if (is_uploaded_file($_FILES['imagen']['tmp_name'])  ) {
    $src= "/img/";

    $imagen = $_FILES['imagen']['name'];
    $imagen1 = explode(".",$imagen);


    if ($imagen1[1] == "jpg" || $imagen1[1] == "JPG" || $imagen1[1] == "jpeg" || $imagen1[1] == "JPEG" || $imagen1[1] == "gif" || $imagen1[1] == "GIF" || $imagen1[1] == "eps" || $imagen1[1] == "EPS" || $imagen1[1] == "png" || $imagen1[1] == "PNG" || $imagen1[1] == "tif" || $imagen1[1] == "TIF" || $imagen1[1] == "bmp" || $imagen1[1] == "BMP" ){
        $imagen2 = rand(0,9).rand(100,9999).rand(100,9999).".".$imagen1[1];


        $lang=="es" ? @unlink("./../..".$noticia->getImagen_e()) : @unlink("./../..".$noticia->getImagen_i());


        move_uploaded_file($_FILES['imagen']['tmp_name'], "./../..".$src.$imagen2);


        $logo = $src.$imagen2;

        $lang=="es" ? $noticia->setImagen_e($logo) : $noticia->setImagen_i($logo);
    
    } 
    
    else {
        header($location.'&error10');
        exit;
    }
}

$lang=="es" ? $noticiaDAO->updateEspanol($noticia) : $noticiaDAO->updateIngles($noticia);


$location = "location: ./../../admin/menuAdmin.php?s=".$recurso."&edit=1&lang=".$lang."&id=".$noticia_id;

header($location);
exit;
?>