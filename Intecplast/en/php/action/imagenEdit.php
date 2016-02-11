<?php session_start();

if( !isset($_SESSION['admin']) ){
    header("location: ./../../admin/index.php");
    exit;
}

include '../dao/daoConnection.php';
include '../dao/imagenDAO.php';
include '../entities/imagen.php';
include '../functions/validar.php';
include '../functions/textoHTML.php';

$lang=$_GET['lang'];

if ($lang==NULL) {
    exit;
}

$recurso=$_GET['s'];

$imagen_edit_id = $_POST['id'];
$imagen_edit_titulo = $_POST['titulo'];
$imagen_edit_descripcion = $_POST['descripcion'];
$imagen = $_POST['imagen'];

$location = "location: ./../../admin/menuAdmin.php?s=acercaDeNosotros&id=1";

$imagen_edit_id = str_replace(',', '.',$imagen_edit_id);
if (!validarNumero($imagen_edit_id)){
    header($location.'&error1');
    exit;
}

if (!validarTexto($imagen_edit_titulo)){
    header($location.'&error1');
    exit;
}

if (!validarTexto($imagen_edit_descripcion)){
    header($location.'&error1');
    exit;
}

$imagenDAO = new imagenDAO();

$imagen_edit = new imagen();

$imagen_edit = $imagenDAO->getById($imagen_edit_id);

$imagen_edit_titulo = accents2HTML($imagen_edit_titulo);

$imagen_edit_descripcion = accents2HTML($imagen_edit_descripcion);

$imagen_edit->setId($imagen_edit_id);


if ($lang=="es") {

    $imagen_edit->setTitulo_e($imagen_edit_titulo);

    $imagen_edit->setDescripcion_e($imagen_edit_descripcion);

}

else {
    
    $imagen_edit->setTitulo_i($imagen_edit_titulo);

    $imagen_edit->setDescripcion_i($imagen_edit_descripcion);    
        
}

if (is_uploaded_file($_FILES['imagen']['tmp_name'])  ) {
    $src= "/img/";

    $imagen = $_FILES['imagen']['name'];
    $imagen1 = explode(".",$imagen);


    if ($imagen1[1] == "jpg" || $imagen1[1] == "JPG" || $imagen1[1] == "jpeg" || $imagen1[1] == "JPEG" || $imagen1[1] == "gif" || $imagen1[1] == "GIF" || $imagen1[1] == "eps" || $imagen1[1] == "EPS" || $imagen1[1] == "png" || $imagen1[1] == "PNG" || $imagen1[1] == "tif" || $imagen1[1] == "TIF" || $imagen1[1] == "bmp" || $imagen1[1] == "BMP" ){
        $imagen2 = rand(0,9).rand(100,9999).rand(100,9999).".".$imagen1[1];


        $lang=="es" ? @unlink("./../..".$imagen_edit->getImagen_e()) : @unlink("./../..".$imagen_edit->getImagen_i());


        move_uploaded_file($_FILES['imagen']['tmp_name'], "./../..".$src.$imagen2);


        $logo = $src.$imagen2;

        $lang=="es" ? $imagen_edit->setImagen_e($logo) : $imagen_edit->setImagen_i($logo);
    
    } 
    
    else {
        header($location.'&error10');
        exit;
    }
}

$lang=="es" ? $imagenDAO->updateEspanol($imagen_edit) : $imagenDAO->updateIngles($imagen_edit);


$location = "location: ./../../admin/menuAdmin.php?s=".$recurso."&edit=1&lang=".$lang."&id=".$imagen_edit_id;

header($location);
exit;
?>