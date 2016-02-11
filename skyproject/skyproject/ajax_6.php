<?php

require_once 'core/validation.php';
require_once 'procesos/class_procesos.php';
$objecta = new Procesos();
$result = $objecta->GetReporteVentaT();
$output_string = '';
$output_string .= "<table border='1'  width='982px' ><tr style='background-color:#E0E0E0 ;'>";
        $output_string .= "<td><center><b>Estado</b></center></td>";
        $output_string .= "<td><center><b>Tienda</b></center></td>";
        $output_string .= "<td><center><b>Celular</b></center></td>";
        $output_string .= "<td><center><b>Cliente</b></center></td>";
        $output_string .= "<td><center><b>Plan</b></center></td>";
        $output_string .= "<td><center><b>Fecha</b></center></td>";
        $output_string .= "<td><center><b>Nombre Usuario</b></center></td>";
        $output_string .= "<td><center><b>Administrador</b></center></td>";
        $output_string .= "</tr>";
for ($i = 0, $fin = count($result); $i < $fin; $i++) {
    $result2 = $objecta->Estadoventa($result[$i]['id_EstadoVenta']);
    $result3 = $objecta->UserAdmin($result[$i]['id_Admin']);
    if ($result2[0]['id_EstadoVenta'] == 1) {
        $output_string .= '<tr class="odd gradeX">';
        $output_string .= '<td style="font-size: 13px;">' . $result2[0]['nombre_Estado'] . '</td>';
        $output_string .= '<td style="font-size: 13px;">' . $result[$i]['nombre_Tienda'] . '</td>';
        $output_string .= '<td style="font-size: 13px;">' . $result[$i]['celular_Cliente'] . '</td>';
        $output_string .= '<td style="font-size: 13px;">' . $result[$i]['nombre_Cliente'] . '</td>';
        $output_string .= '<td style="font-size: 13px;">' . $result[$i]['nombre_Plan'] . '</td>';
        $output_string .= '<td style="font-size: 13px;">' . $result[$i]['fecha_Venta'] . '</td>';
        $output_string .= '<td style="font-size: 13px;">' . $result[$i]['nombre_Usuario'] . '</td>';
        $output_string .= '<td style="font-size: 13px;">' . $result3[0]['nombre_Usuario'] . '</td>';
        $output_string .= '</tr>';
    } elseif ($result2[0]['id_EstadoVenta'] == 2) {
        $output_string .= '<tr class="odd gradeA">';
        $output_string .= '<td style="font-size: 13px;">' . $result2[0]['nombre_Estado'] . '</td>';
        $output_string .= '<td style="font-size: 13px;">' . $result[$i]['nombre_Tienda'] . '</td>';
        $output_string .= '<td style="font-size: 13px;">' . $result[$i]['celular_Cliente'] . '</td>';
        $output_string .= '<td style="font-size: 13px;">' . $result[$i]['nombre_Cliente'] . '</td>';
        $output_string .= '<td style="font-size: 13px;">' . $result[$i]['nombre_Plan'] . '</td>';
        $output_string .= '<td style="font-size: 13px;">' . $result[$i]['fecha_Venta'] . '</td>';
        $output_string .= '<td style="font-size: 13px;">' . $result[$i]['nombre_Usuario'] . '</td>';
         $output_string .= '<td style="font-size: 13px;">' . $result3[0]['nombre_Usuario'] . '</td>';
        $output_string .= '</tr>';
    } else {
        $output_string .= '<tr class="odd gradeB">';
        $output_string .= '<td style="font-size: 13px;">' . $result2[0]['nombre_Estado'] . '</td>';
        $output_string .= '<td style="font-size: 13px;">' . $result[$i]['nombre_Tienda'] . '</td>';
        $output_string .= '<td style="font-size: 13px;">' . $result[$i]['celular_Cliente'] . '</td>';
        $output_string .= '<td style="font-size: 13px;">' . $result[$i]['nombre_Cliente'] . '</td>';
        $output_string .= '<td style="font-size: 13px;">' . $result[$i]['nombre_Plan'] . '</td>';
        $output_string .= '<td style="font-size: 13px;">' . $result[$i]['fecha_Venta'] . '</td>';
        $output_string .= '<td style="font-size: 13px;">' . $result[$i]['nombre_Usuario'] . '</td>';
         $output_string .= '<td style="font-size: 13px;">' . $result3[0]['nombre_Usuario'] . '</td>';
        $output_string .= '</tr>';
    }
}
echo json_encode($output_string);
?>
   