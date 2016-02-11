<?php

require_once 'core/validation.php';
require_once 'procesos/class_procesos.php';
$objecta = new Procesos();
$result = $objecta->EstadoventaAdmin();
$output_string = '';

for ($i = 0, $fin = count($result); $i < $fin; $i++) {
    $output_string .= '<tr class="odd gradeX">';
    $output_string .= '<td>Pendiente</td>';
    $output_string .= '<td>' . $result[$i]['nombre_Cliente'] . '</td>';
    $output_string .= '<td>' . $result[$i]['celular_Cliente'] . '</td>';
    $output_string .= '<td>' . $result[$i]['nombre_Plan'] . '</td>';
    $output_string .= '<td>' . $result[$i]['fecha_Venta'] . '</td>';
    $output_string .=  '<td><input type="button" id="enviar" name="enviar" class="btn-small btn-primary" onclick="llenar()" data-toggle="modal" href="#cont-' . $result[$i]['id_Venta'] . '" value="Tomar pedido">
							<span><input type="hidden" name="control"  class="amt" value=""></span>
						</td>';
    $output_string .= '</tr>';
}


echo json_encode($output_string);

$result2 = $objecta->SetControlSol($fin);
?>
   