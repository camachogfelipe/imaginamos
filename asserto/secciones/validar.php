<?php
if (!isset($_SESSION['Nombre'])) {
    include("admin/core/class/db.class.php");
    $db = new Database();
    $db->connect();
    $nombre = $_POST['user'];
    $pass = md5($_POST['pass']);
		//echo "SELECT * FROM usuarios WHERE email='$nombre' and password='$pass' AND activo='S'";exit;
    $db->doQuery("SELECT * FROM usuarios WHERE email='$nombre' and password='$pass' AND activo='S'", SELECT_QUERY);
    $resultado = $db->results;
    if (count($resultado) > 0) {
        $_SESSION['id'] = $resultado[0]["id"];
        $_SESSION['Nombre'] = $resultado[0]["nombre"];
        $_SESSION['usuario'] = $resultado[0]["usuario"];
        echo "Cargando ... "; //. utf8_encode($_SESSION['Nombre'])
        echo "<script type='text/javascript'>window.location='index.php?seccion=zona-usuario';</script>";
    } else {
        echo "<script type='text/javascript'>window.location='index.php?seccion=index&er';</script>";
    }
}
if (isset($_SESSION['Nombre'])) {
    echo "<script type='text/javascript'>window.location='index.php?seccion=zonasegura';</script>";
}
?>