<?php session_start();?>
<?php



include '../dao/daoConnection.php';
include '../dao/comentarioDAO.php';
include '../entities/comentario.php';
include '../functions/validar.php';
include '../functions/textoHTML.php';

$id = $_POST['id'];
$venta = $_POST['venta'];
$fecha = date('y-m-d');
$comentarios = $_POST['comentario'];
$activo = 0;

$location = "location: ./../../admin/menuAdmin.php?s=comentarioAdd";



if (!validarNumero($venta)){
    header($location.'&error1');
    exit;
}

if (!validarTexto($comentarios)){
    header($location.'&error1');
    exit;
}

$comentarioDAO = new comentarioDAO();

$comentario = new comentario();

$comentario->setid($id);
$comentario->setventa($venta);
$comentario->setfecha($fecha);
$comentario->setcomentario($comentarios);
$comentario->setactivo($activo);

$comentarioDAO->save($comentario);

$id = $comentarioDAO->getLastId();

$location = "location: ./../../inicio_usuarios.php";

header($location.'?ok');
exit;


?>