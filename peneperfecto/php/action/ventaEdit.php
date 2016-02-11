<?php session_start();?>
<?php



include '../dao/daoConnection.php';
include '../dao/ventaDAO.php';
include '../entities/venta.php';
include '../functions/validar.php';
include '../functions/textoHTML.php';

$id = $_POST['id'];
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$pais = $_POST['pais'];
$mail = $_POST['mail'];
$telefono = $_POST['telefono'];
$pass = $_POST['pass'];

$location = "location: ./../../inicio_usuarios_edicion.php?r";

$id = str_replace(',', '.',$id);
if (!validarNumero($id)){
    header($location.'&error1');
    exit;
}


if (!validarTexto($nombre)){
    header($location.'&error1');
    exit;
}

if (!validarTexto($apellido)){
    header($location.'&error1');
    exit;
}

if (!validarTexto($pais)){
    header($location.'&error1');
    exit;
}

if (!validarTexto($mail)){
    header($location.'&error1');
    exit;
}

if (!validarTexto($telefono)){
    header($location.'&error1');
    exit;
}



if (!validarTexto($pass)){
    header($location.'&error1');
    exit;
}

$ventaDAO = new ventaDAO();

$venta = new venta();

$venta = $ventaDAO->getById($id);



$venta->setnombre($nombre);
$venta->setapellido($apellido);
$venta->setpais($pais);
$venta->setmail($mail);
$venta->settelefono($telefono);
$venta->setpass(md5($pass));

$ventaDAO->update($venta);

$location = "location: ./../../inicio_usuarios_edicion.php?ok";

header($location.'&ok2');
exit;


?>