<?php

/**
 * Description of usuarioAdd
 *
 * @author Oscar David Flórez Hernández
 * 
 */
session_start();

if (!isset($_SESSION['user'])) {
    echo 3;
    exit;
}

include '../dao/daoConnection.php';
include '../dao/userDAO.php';
include '../entities/user.php';

foreach ($_POST as $key => $value) {
    $$key = $value;
}

$location = "location: ./../../index.php";

if ($id == "" || $nombre == "" || $apellidos == "" || $email == "") {
    echo 2;
    exit;
}

$userDAO = new userDAO;

$usuario = $userDAO->getById($id);

$usuario->setLogin($login);
$usuario->setNombre($nombre);
$usuario->setApellidos($apellidos);
$usuario->setEmail($email);
$usuario->setActivo(1);
$usuario->setIsadmin(0);
$usuario->setPerfil($perfil);
$usuario->setImagen($imagen);

$userDAO->update($usuario);

if($pass != ""){
    $usuario->setPass($pass);
    $userDAO->updateUserPass($usuario);
}

echo 1;
exit;
?>