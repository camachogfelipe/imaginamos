<?php

if (isset($_POST["cantidad"])) {
    $cantidad = $_POST["cantidad"];
    $id = $_POST["id"];
} else {
    $cantidad = "otra";
}
if ($cantidad != "otra") {
    if (!isset($_SESSION["id_productos"])) {
        $_SESSION['id_productos'] = array();
        array_push($_SESSION['id_productos'], $id);
        $vartodo = array("val" => 1);
    } else {
//si existe entonces aumentamos un valor en el ultimo en id y en cantidad
        array_push($_SESSION['id_productos'], $id);
        $vartodo = array("val" => 1);
    }
}



if (isset($_POST["cantidad2"])) {
    $cantidad2 = $_POST["cantidad2"];
    $id2 = $_POST["id2"];
} else {
    $cantidad2 = "otra";
}

if ($cantidad2 != "otra") {
    //var_dump($_POST);
    $total = (int)$cantidad2;
   // var_dump($total);
    if (in_array((int) $id2, $_SESSION["id_productos"])) {
        for ($i = 0, $tot = count($_SESSION["id_productos"]); $i < $tot; $i++) {
            if ($_SESSION["id_productos"][$i] == $id2) {
                unset($_SESSION["id_productos"][$i]);
            }
            $_SESSION["id_productos"] = array_values($_SESSION["id_productos"]);
        }


        for ($a = 0, $b = $total; $a < $b; $a++) {
          //  $_SESSION['id_productos'][] = $id2;
           array_push($_SESSION['id_productos'], $id2);
           // var_dump($_SESSION['id_productos']);
        }
        $vartodo = array("val" => $cantidad2);
    }
}
//var_dump($_SESSION['id_productos']);

echo json_encode($vartodo);
?>

