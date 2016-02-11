<?php

//var_dump($_POST);exit
//echo  $_SESSION['Nombre'];exit;//
if (isset($_SESSION['Nombre'])) {
    echo "<script type='text/javascript'>window.location='index.php?seccion=zona-cliente';</script>";
}
if (!isset($_SESSION['Nombre'])) {
    include("admin/core/class/db.class.php");
    $db = new Database();
    $db->connect();
    $nombre = $_POST['user'];
    $pass = $_POST['pass'];

    $db->doQuery("SELECT * FROM usuarios WHERE correo='$nombre' and contrasena='" . md5($pass) . "' and activo=1", SELECT_QUERY);
    $resultado = $db->results;
    if (count($resultado) > 0) {
        $_SESSION['id'] = $resultado[0]["id"];
        $_SESSION['Nombre'] = $resultado[0]["nombres"];
        $_SESSION['correo'] = $resultado[0]["correo"];
        $_SESSION['sector'] = $resultado[0]["sector"];
        echo "Cargando ... "; 
        echo "<script type='text/javascript'>window.location='index.php?seccion=zona-cliente';</script>";
    } else {
        echo "<script type='text/javascript'>window.location='index.php?seccion=index&er';</script>";
    }
}
?>