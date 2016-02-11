<?php
require_once("conexion.php");
class cons{
     public function Pintartabla($id) {
        global $conexion;
        if (!is_object($conexion))
            trigger_error("Failed to connect to 'database' " . " | Error = $conexion", E_USER_ERROR);
        $sql = "select * from cms_productos2 WHERE idcms = ".$id;
        $dbRS = $conexion->query($sql);
        $row = $dbRS->fetchAll();

        return $row;
    }
    
}



?>
