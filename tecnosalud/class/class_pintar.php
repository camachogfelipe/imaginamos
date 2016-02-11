<?php

require_once('conexion.php');

class Pintar {

    public function Pintarfooter() {
        global $conexion;
        if (!is_object($conexion))
            trigger_error("Failed to connect to 'database' " . " | Error = $conexion", E_USER_ERROR);
        $sql = "select * from cms_nosotros WHERE nosotros_id = 7";
        $dbRS = $conexion->query($sql);
        $row = $dbRS->fetchAll();

        return $row;
    }
    public function PintarContactenos() {
        global $conexion;
        if (!is_object($conexion))
            trigger_error("Failed to connect to 'database' " . " | Error = $conexion", E_USER_ERROR);
        $sql = "select * from cms_contacto";
        $dbRS = $conexion->query($sql);
        $row = $dbRS->fetchAll();

        return $row;
    }
     public function PintarContacto() {
        global $conexion;
        if (!is_object($conexion))
            trigger_error("Failed to connect to 'database' " . " | Error = $conexion", E_USER_ERROR);
        $sql = "select * from cms_contacto ";
        $dbRS = $conexion->query($sql);
        $row = $dbRS->fetchAll();

        return $row;
    }
    public function Pintarnovedad() {
        global $conexion;
        if (!is_object($conexion))
            trigger_error("Failed to connect to 'database' " . " | Error = $conexion", E_USER_ERROR);
        $sql = "select * from cms_novedades order by novedad_id desc ";
        $dbRS = $conexion->query($sql);
        $row = $dbRS->fetchAll();

        return $row;
    }
    public function Pintarnovedadmodal($id) {
        global $conexion;
        if (!is_object($conexion))
            trigger_error("Failed to connect to 'database' " . " | Error = $conexion", E_USER_ERROR);
        $sql = "select * from cms_novedades WHERE novedad_id =".$id;
        $dbRS = $conexion->query($sql);
        $row = $dbRS->fetchAll();

        return $row;
    }
    public function Pintardistribuidor() {
        global $conexion;
        if (!is_object($conexion))
            trigger_error("Failed to connect to 'database' " . " | Error = $conexion", E_USER_ERROR);
        $sql = "select * from cms_distribuidor ";
        $dbRS = $conexion->query($sql);
        $row = $dbRS->fetchAll();

        return $row;
    }
    public function PintarPaisdistribuidor($id) {
        global $conexion;
        if (!is_object($conexion))
            trigger_error("Failed to connect to 'database' " . " | Error = $conexion", E_USER_ERROR);
        $sql = "select * from cms_pais WHERE pais_id = ".$id;
        $dbRS = $conexion->query($sql);
        $row = $dbRS->fetchAll();
        //$imag= $row->;
        return $row;
    }
    public function Pintarcatalogo() {
        global $conexion;
        if (!is_object($conexion))
            trigger_error("Failed to connect to 'database' " . " | Error = $conexion", E_USER_ERROR);
        $sql = "select * from cms_catalogo ORDER BY catalogo_id DESC ";
        $dbRS = $conexion->query($sql);
        $row = $dbRS->fetchAll();

        return $row;
    }
    public function Pintarcatalogo_pics($id) {
        global $conexion;
        if (!is_object($conexion))
            trigger_error("Failed to connect to 'database' " . " | Error = $conexion", E_USER_ERROR);
        $sql = "select * from cms_catalogo_pics where catalogo_id = '".$id."' ORDER BY catalogo_id DESC ";
        $dbRS = $conexion->query($sql);
        $row = $dbRS->fetchAll();

        return $row;
    }
    public function Pintarcatalogo_pics2($id) {
        global $conexion;
        if (!is_object($conexion))
            trigger_error("Failed to connect to 'database' " . " | Error = $conexion", E_USER_ERROR);
        $sql = "select * from cms_catalogo_pics where catalogo_id = '".$id."'  LIMIT 0,1";
        $dbRS = $conexion->query($sql);
        $row = $dbRS->fetchAll();

        return $row;
    }
     public function PintarProducto() {
        global $conexion;
        if (!is_object($conexion))
            trigger_error("Failed to connect to 'database' " . " | Error = $conexion", E_USER_ERROR);
        $sql = "select * from cms_categoria where id_padre = 0 order by categoria_id DESC";
        $dbRS = $conexion->query($sql);
        $row = $dbRS->fetchAll();

        return $row;
    }
    public function PintarProducto_info($id) {
        global $conexion;
        if (!is_object($conexion))
            trigger_error("Failed to connect to 'database' " . " | Error = $conexion", E_USER_ERROR);
        $sql = "select * from cms_categoria where id_padre = ".$id." order by categoria_id DESC";
        $dbRS = $conexion->query($sql);
        $row = $dbRS->fetchAll();

        return $row;
    }
    public function PintarProductos($id) {
        global $conexion;
        if (!is_object($conexion))
            trigger_error("Failed to connect to 'database' " . " | Error = $conexion", E_USER_ERROR);
        $sql = "select * from cms_productos where id_subcategoria = ".$id." order by productos_id DESC";
        $dbRS = $conexion->query($sql);
        $row = $dbRS->fetchAll();

        return $row;
    }
    public function PintarProductos_pics($id) {
        global $conexion;
        if (!is_object($conexion))
            trigger_error("Failed to connect to 'database' " . " | Error = $conexion", E_USER_ERROR);
        $sql = "select * from cms_productos_pics where productos_id = '".$id."'  LIMIT 0,1";
        $dbRS = $conexion->query($sql);
        $row = $dbRS->fetchAll();

        return $row;
    }
    public function PintarProductos2($id) {
        global $conexion;
        if (!is_object($conexion))
            trigger_error("Failed to connect to 'database' " . " | Error = $conexion", E_USER_ERROR);
        $sql = "select * from cms_productos where productos_id = ".$id." order by productos_id DESC";
        $dbRS = $conexion->query($sql);
        $row = $dbRS->fetchAll();

        return $row;
    }
   public function PintarProductopadre($id) {
        global $conexion;
        if (!is_object($conexion))
            trigger_error("Failed to connect to 'database' " . " | Error = $conexion", E_USER_ERROR);
        $sql = "select * from cms_categoria where categoria_id = ".$id." order by categoria_id DESC";
        $dbRS = $conexion->query($sql);
        $row = $dbRS->fetchAll();

        return $row;
    }
    public function Pintarcatalogo_picssebas($id) {
        global $conexion;
        if (!is_object($conexion))
            trigger_error("Failed to connect to 'database' " . " | Error = $conexion", E_USER_ERROR);
        $sql = "select * from cms_productos_pics where productos_id = '".$id."' ORDER BY productos_id DESC ";
        $dbRS = $conexion->query($sql);
        $row = $dbRS->fetchAll();

        return $row;
    }
    public function Pintarcatalogo_pics2sebas($id) {
        global $conexion;
        if (!is_object($conexion))
            trigger_error("Failed to connect to 'database' " . " | Error = $conexion", E_USER_ERROR);
        $sql = "select * from cms_productos_pics where productos_id = '".$id."'  LIMIT 0,1";
        $dbRS = $conexion->query($sql);
        $row = $dbRS->fetchAll();

        return $row;
    }
    public function PintarcatarNosotros() {
        global $conexion;
        if (!is_object($conexion))
            trigger_error("Failed to connect to 'database' " . " | Error = $conexion", E_USER_ERROR);
        $sql = "select * from cms_nosotros ";
        $dbRS = $conexion->query($sql);
        $row = $dbRS->fetchAll();

        return $row;
    }
    public function PintarcatarNosotrosBanner() {
        global $conexion;
        if (!is_object($conexion))
            trigger_error("Failed to connect to 'database' " . " | Error = $conexion", E_USER_ERROR);
        $sql = "select * from cms_bannernosotros ";
        $dbRS = $conexion->query($sql);
        $row = $dbRS->fetchAll();

        return $row;
    }
    public function PintarcatarBanner() {
        global $conexion;
        if (!is_object($conexion))
            trigger_error("Failed to connect to 'database' " . " | Error = $conexion", E_USER_ERROR);
        $sql = "select * from cms_news ";
        $dbRS = $conexion->query($sql);
        $row = $dbRS->fetchAll();

        return $row;
    }
    public function PintarcatarDestacado() {
        global $conexion;
        if (!is_object($conexion))
            trigger_error("Failed to connect to 'database' " . " | Error = $conexion", E_USER_ERROR);
        $sql = "select * from cms_destacados ";
        $dbRS = $conexion->query($sql);
        $row = $dbRS->fetchAll();

        return $row;
    }

}
 
?>
