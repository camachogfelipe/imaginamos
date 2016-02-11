<?php

//var_dump($_POST);exit
//echo  $_SESSION['Nombre'];exit;//
if (isset($_SESSION['Nombre'])) {
    echo "<script type='text/javascript'>window.location='index.php?seccion=zonasegura';</script>";
}
if (!isset($_SESSION['Nombre'])) {
    include("admin/core/class/db.class.php");
    $db = new Database();
    $db->connect();
    $nombre = $_POST['nombre'];
    $pass = $_POST['contrasena'];
//echo "SELECT * FROM usuarios WHERE correo='$nombre' and contrasena='$pass'";exit;
    $db->doQuery("SELECT * FROM user WHERE usuario='$nombre' and contrasena='$pass'and bandera=0", SELECT_QUERY);
    $resultado = $db->results;
    if (count($resultado) > 0) {
        $_SESSION['id'] = $resultado[0]["id"];
        $_SESSION['Nombre'] = $resultado[0]["nombre"];
        $_SESSION['usuario'] = $resultado[0]["usuario"];
        $_SESSION['sector'] = $resultado[0]["sector"];
        echo "Cargando ... "; //. utf8_encode($_SESSION['Nombre'])
        echo "<script type='text/javascript'>window.location='index.php?seccion=zonasegura';</script>";
    } else {
        echo "<script type='text/javascript'>window.location='index.php?seccion=index&er';</script>";
    }
}
?>