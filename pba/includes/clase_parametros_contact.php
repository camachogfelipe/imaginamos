<?PHP

require_once("conexion.php");

// $id = $_POST["country"];
//     echo $id;
class ParametrosContact {
    /*  Banner Principal */

    static function getContenidoContact() {

        global $conexion;

        if (!is_object($conexion))
            trigger_error("Failed to connect to 'database' "
                    . " | Error = $conexion", E_USER_ERROR);

        $sql = "select * from cms_contact;";
        $dbRS = $conexion->query($sql);
        $row = $dbRS->fetchAll();

        return $row;
    }

    /*  Banner Principal */

    static function getPaises() {

        global $conexion;

        if (!is_object($conexion))
            trigger_error("Failed to connect to 'database' "
                    . " | Error = $conexion", E_USER_ERROR);

        $sql = "select * from Country ORDER BY Country.Name ASC ;";
        $dbRS = $conexion->query($sql);
        $row = $dbRS->fetchAll();

        return $row;
    }
    

    static function getCiudad($id) {

        global $conexion;

        if (!is_object($conexion))
            trigger_error("Failed to connect to 'database' "
                    . " | Error = $conexion", E_USER_ERROR);

        $sql = "select * from City where CountryCode = '$id' ;";
        $dbRS = $conexion->query($sql);
        $row = $dbRS->fetchAll();

        return $row;
    }
      static function country ($pais){

        global $conexion;

        if (!is_object($conexion))
            trigger_error("Failed to connect to 'database' "
                    . " | Error = $conexion", E_USER_ERROR);

        $sql = "select * from Country where Code = '$pais';";
        $dbRS = $conexion->query($sql);
        $row = $dbRS->fetchAll();

        return $row;
   }

}

?>