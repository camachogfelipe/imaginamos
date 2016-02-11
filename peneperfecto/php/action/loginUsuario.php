<?php session_start();?>
<?php

include '../dao/daoConnection.php';
include '../dao/ventaDAO.php';
include '../entities/venta.php';

$mail = $_POST['mail'];
$pass = $_POST['pass'];

$ventaDAO = new ventaDAO();

$result = $ventaDAO->getByLogin($mail, md5($pass));
 
if($result != NULL){
    $_SESSION['usuariosPP'] = serialize($result);
    header("location: ./../../inicio_usuarios.php");
    exit;
}
header("location: ./../../index.php?lr");
exit;
?>