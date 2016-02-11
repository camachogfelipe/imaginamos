<?php

require_once 'core/validation.php';
require_once 'procesos/class_procesos.php';
$objecta = new Procesos();
$result = $objecta->EstadoventaAdmin();
$output_string = '';
$le=$_REQUEST['le'];

for ($i = 0, $fin = count($result); $i < $fin; $i++) {
    $output_string .= '<div id="cont-' . $result[$i]['id_Venta'] . '" class="modal hide fade in" style="display: none;">';
    $output_string .= '<div class="modal-header" ><h3>Solicitud</h3></div>';
    $output_string .= '<div class="modal-body">';
    $output_string .= '<form action="solicitudes.php?seccion=7" method="POST" onsubmit="return validarForm(this);" id="form1">';
    $output_string .= '<div style="float: left;margin-left: 100px;margin-top: 20px;width: 350px;height: 270px;border: 1px solid #888;">';
    $output_string .= "<label style='float: left;margin-left: 30px;margin-top: 10px;'><strong>Tienda:</strong></label><label style='float: left;margin-left: 30px;margin-top: 10px'>" .$result[$i]['nombre_Tienda'] . "</label>";
    $output_string .= "<label style='float: left;margin-left: 30px;margin-top: 5px;'><strong>Vendedor:</strong></label><label style='float: left;margin-left: 30px;margin-top: 5px'>" .$result[$i]['nombre_Usuario'] . "</label>";
    $output_string .= "<label style='float: left;margin-left: 30px;margin-top: 5px;'><strong>Cliente:</strong></label><label style='float: left;margin-left: 30px;margin-top: 5px;'>" .$result[$i]['nombre_Cliente'] . "</label>";
    $output_string .= "<label style='float: left;margin-left: 30px;margin-top: 5px;'><strong>Celular:</strong></label><label style='float: left;margin-left: 30px;margin-top: 5px;'>" .$result[$i]['celular_Cliente'] . "</label>";
    $output_string .= "<label style='float: left;margin-left: 30px;margin-top: 5px;'><strong>Plan:</strong></label><label style='float: left;margin-left: 30px;margin-top: 5px;'>" . $result[$i]['nombre_Plan'] . "</label>";
    $output_string .= "<label style='float: left;margin-left: 30px;margin-top: 5px;'><strong>Inserte Codigo:</strong></label><input type='text' name='codigo' id='codigo' style='float: left;margin-left: 30px;margin-top: 5px;width: 120px;'/>";
    $output_string .= "<input type='submit' value='Enviar' id='enviar'  name='enviar'  style='height:26px; float: left;margin-left: 30px;margin-top: 5px;' class='btn-small btn-primary'/>";
    $output_string .= "<button data-dismiss='modal' style='height:26px; float: left;margin-left: 5px;margin-top: 5px;' class='btn-small btn-primary'>Cancelar</button>";
    $output_string .= "<input type='hidden' name='admin' value='" .  $_SESSION["session_tienda"] . "' />";
    $output_string .= "<input type='hidden' name='celular' value='" . $result[$i]['celular_Cliente'] . "' />";
    $output_string .= "<input type='hidden' name='plan' value='" .  $result[$i]['id_Plan'] ."' />";
    $output_string .= "<input type='hidden' name='cliente' value='" . $result[$i]['id_Cliente'] . "' />";
    $output_string .= "<input type='hidden' name='idventa' value='" . $result[$i]['id_Venta'] . "' />";
    $output_string .= "<input type='hidden' name='vendedor' value='" . $result[$i]['id_Usuario'] . "' />";
    $output_string .= "</div>";
    $output_string .= "</form>";
    $output_string .= "</div>";
    $output_string .= "</div>";
}

echo json_encode($output_string);
?>
