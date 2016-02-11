<?php

/*
 * @file               : Ajax.php
 * @brief              : Clase interaccion consultas Ajax
 * @version            : 1.0
 * @ultima_modificacion: 02-feb-2012
 * @author             : Ruben Dario Cifuentes T
 */

/*
 * @class: Ajax
 * @brief: Clase interaccion consultas Ajax
 */

class Ajax {
    /*
     * Metodo Publico para Inicializar las variables necesarias de la clase
     * @fn __construct
     * @brief Inicializa variables necesarias de la clase
     */

    public function __construct($mSecurity = NULL) {
        
    }

    // Funcion po defecto
    public function FunctDefault() {
        echo json_encode(array("title" => "Error", "message" => "Funcion por defecto en el ajax"));
    }

    // Funcion para registrar mi voto en una foto

    public function FunctCiudades() {
        // Aca puede ir todo el PHP, consultas a DB y ejecucion de operaciones del lado del servidor  
        $valor = GetData("valor");

        /* $consulta = array("CountryCode" => $valor);
          $cCity = new Dbcity();
          $city = $cCity->getList($consulta); */
        $city = DbHandler::GetAll("SELECT nombre FROM ciudades WHERE idDepartamento='" . $valor . "' ORDER BY nombre");

        for ($i = 0, $tot = count($city); $i < $tot; $i++) {

            $city[$i]["nombre"] = utf8_encode($city[$i]["nombre"]);
        }

        $datos = json_encode(array("count" => count($city), "ciudad" => $city));

        echo json_encode(array("event" => "CiudadesJS(" . $datos . ")"));
    }

    public function FunctLetras() {
        // Aca puede ir todo el PHP, consultas a DB y ejecucion de operaciones del lado del servidor  
        $valor = GetData("valor");

        /* $consulta = array("CountryCode" => $valor);
          $cCity = new Dbcity();
          $city = $cCity->getList($consulta); */
        $buscador = DbHandler::GetAll("SELECT * FROM productos WHERE nombre LIKE '" . $valor . "%' ORDER BY nombre DESC");

        for ($i = 0, $tot = count($buscador); $i < $tot; $i++) {

            $buscador[$i]["nombre"] = utf8_encode($buscador[$i]["nombre"]);
            $buscador[$i]["img"] = utf8_encode($buscador[$i]["img"]);
            $buscador[$i]["referencia"] = utf8_encode($buscador[$i]["referencia"]);
            $buscador[$i]["texto"] = utf8_encode(nl2br($buscador[$i]["texto"]));
        }

        $datos = json_encode(array("count" => count($buscador), "productos" => $buscador));

        echo json_encode(array("event" => "LetrasJS(" . $datos . ")"));
    }

    public function FunctBuscar() {
        // Aca puede ir todo el PHP, consultas a DB y ejecucion de operaciones del lado del servidor  
        $valor = GetData("valor");

        /* $consulta = array("CountryCode" => $valor);
          $cCity = new Dbcity();
          $city = $cCity->getList($consulta); */
        $buscador = DbHandler::GetAll("SELECT * FROM productos WHERE nombre LIKE '%" . $valor . "%' ORDER BY nombre DESC");

        for ($i = 0, $tot = count($buscador); $i < $tot; $i++) {

            $buscador[$i]["nombre"] = utf8_encode($buscador[$i]["nombre"]);
            $buscador[$i]["img"] = utf8_encode($buscador[$i]["img"]);
            $buscador[$i]["referencia"] = utf8_encode($buscador[$i]["referencia"]);
            $buscador[$i]["texto"] = utf8_encode(nl2br($buscador[$i]["texto"]));
        }
        $datos = json_encode(array("count" => count($buscador), "productos" => $buscador));
        echo json_encode(array("event" => "BuscarJS(" . $datos . ")"));
    }

    public function FunctEliminarItem() {
        // Aca puede ir todo el PHP, consultas a DB y ejecucion de operaciones del lado del servidor  
        $valor = GetData("valor");


        if (in_array((int) $valor, $_SESSION["id_productos"])) {
            for ($i = 0, $tot = count($_SESSION["id_productos"]); $i < $tot; $i++) {
                if ($_SESSION["id_productos"][$i] == $valor) {
                    unset($_SESSION["id_productos"][$i]);
                }
            }
            $_SESSION["id_productos"] = array_values($_SESSION["id_productos"]);
            if (count($_SESSION["id_productos"]) == 0) {
                session_destroy($_SESSION["id_productos"]);
            }
        }


        echo json_encode(array("event" => "FinalEliminar(1)"));
    }

    public function FunctCambiarValor() {
        echo "<script>alert('hola')</script>";
    }

}

?>
