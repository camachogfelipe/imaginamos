<?php

include "admin/core/class/db.class.php";
include "admin/modules/class/ClassFile.class.php";

$nombre = $_POST["nombre"];
$institucion = $_POST["institucion"];
$email = $_POST["email"];
$direccion = $_POST["direccion"];
$telefono = $_POST["telefono"];
$celular = $_POST["celular"];
$zona = $_POST["zona"];
$cedula = $_POST["cedula"];
$db = new Database();

//Conectamos
$db->connect();
//echo "UPDATE cotizaciones SET estado='revisando' WHERE id=".$bandera;exti
$db->doQuery("INSERT INTO cotizaciones(
                                        id,
                                        nombre,
                                        institucion,
                                        email,
                                        direccion,
                                        telefono,
                                        celular,
                                        ubicacion,
                                        estado,
                                        fecha,
                                        cedula
                                        )VALUES
                                        (
                                        NULL,
                                        '" . $nombre . "',
                                        '" . $institucion . "',
                                        '" . $email . "',
                                        '" . $direccion . "',
                                        '" . $telefono . "',
                                        '" . $celular . "',
                                        '" . $zona . "',
                                        'incompleto',
                                        '" . date("Y-m-d") . "',
                                        '" . $cedula . "'
                                        )", INSERT_QUERY);

$idf = $db->getLastId();
if (isset($_SESSION["id_productos"])) {
// echo $_SESSION["id_productos"][2];exit;                                         
    $arrayfinal = array();
    $arrayfinalcant = array();
    //se hace segun el numero de veces que este en la consulta
    for ($i = 0, $tot = count($_SESSION["id_productos"]); $i < $tot; $i++) {
        //if resultados[posicion] esta en arrayfinal
        if (in_array($_SESSION["id_productos"][$i], $arrayfinal)) {
            // se evalua o se busca en todas las posiciones
            for ($j = 0, $tot2 = count($arrayfinal); $j < $tot2; $j++) {
                //si la posicion es verdadera entonces se suma en 1 la cantidad
                if ($arrayfinal[$j] == $_SESSION["id_productos"][$i]) {
                    $arrayfinalcant[$j] = (int) $arrayfinalcant[$j] + 1;
                }
            }
        } else {
            $arrayfinal[] = $_SESSION["id_productos"][$i];
            $arrayfinalcant[] = 1;
            //   $arrayId[]=$resultados[$i]["id_productos"];
        }
    }
}
for ($j = 0, $h = count($_SESSION["id_productos"]); $j < $h; $j++) {
    $db = new Database();
    $db->connect();
    $db->doQuery("INSERT INTO cantidad_cotizacion(
                                        id,
                                        id_cotizacion,
                                        id_productos                                        
                                        )VALUES(
                                        
                                        NULL,
                                        " . $idf . ",
                                        " . $_SESSION["id_productos"][$j] . "                                                                              
                                        )", INSERT_QUERY);
    $db->disconnect();

    //    }
}
session_destroy();
echo "<script>window.location.href = 'index.php?seccion=cotizar&apr'</script>";
?>