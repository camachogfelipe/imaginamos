<?php

require_once('conexion.php');

class desplegables {

    public static function productos() {
        global $conexion;
        if (!is_object($conexion))
            trigger_error("Failed to connect to 'database' " . " | Error = $conexion", E_USER_ERROR);
        $sql = "SELECT * FROM cms_categoria WHERE id_padre = 0 ORDER BY cms_categoria.categoria_id DESC  LIMIT 0 , 5";
        $dbRS = $conexion->query($sql);
        $row = $dbRS->fetchAll();

        return $row;
    }
     public static function distribuidor() {
        global $conexion;
        if (!is_object($conexion))
            trigger_error("Failed to connect to 'database' " . " | Error = $conexion", E_USER_ERROR);
        $sql = "SELECT * FROM cms_distribuidor LIMIT 0 , 5";
        $dbRS = $conexion->query($sql);
        $row = $dbRS->fetchAll();

        return $row;
    }
     public static function Nosotros() {
        global $conexion;
        if (!is_object($conexion))
            trigger_error("Failed to connect to 'database' " . " | Error = $conexion", E_USER_ERROR);
        $sql = "SELECT * FROM cms_nosotros LIMIT 0 , 5";
        $dbRS = $conexion->query($sql);
        $row = $dbRS->fetchAll();

        return $row;
    }
     public static function catalogo() {
        global $conexion;
        if (!is_object($conexion))
            trigger_error("Failed to connect to 'database' " . " | Error = $conexion", E_USER_ERROR);
        $sql = "SELECT * FROM cms_catalogo ORDER BY catalogo_id DESC LIMIT 0 , 5";
        $dbRS = $conexion->query($sql);
        $row = $dbRS->fetchAll();

        return $row;
    }
}
?>