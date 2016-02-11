<?php
require_once 'core/validation.php';
require_once 'procesos/class_procesos.php';
$object = new Procesos();

if(isset($_POST["nombrecliente"])){
    $object->SetVenta($_SESSION["session_user"],$_POST["nombrecliente"],$_POST["celularcliente"],$_SESSION["session_tienda"],$_POST['idplan']);
    //echo json_encode(array('respuesta' => "ok"));
}

if (isset($_POST["año1"])) {
    
        $result = $object->GetReporteVenta($_POST['año1']);
        $html = '{ "tablita":'.
                '"<div style=\"width: 100%;float: left;\"><a onclick=\"Enviarexcel2();\"  style=\"float: right;\"><img src=\"img/excel.jpg\" width=\"25\"/> Exportar excel</a></div>'.
                '<table cellpadding=\"0\" cellspacing=\"0\" border=\"0\" class=\"display\" id=\"example\" width=\"100%\">'.
                '<thead>'.
                '<tr>'.
                
                '<th>Cliente</th>'.
                '<th>N Celular</th>'.
                '<th>Plan</th>'.
                '<th>Codigo</th>'.
                '<th>Fecha y Hora</th>'.
                '</tr>'.
                '</thead>'.
                '<tbody>';
        for ($i = 0, $fin = count($result); $i < $fin; $i++) {
                
                $html .= '<tr class=\"odd gradeB\">'.
                
                '<td>'.$result[$i]['nombre_Cliente'].'</td>'.
                '<td>'.$result[$i]['celular_Cliente'].'</td>'.        
                '<td>'.$result[$i]['nombre_Plan'].'</td>'.
                '<td>'.$result[$i]['codigo_Venta'].'</td>'.
                '<td>'.$result[$i]['fecha_Venta'].'</td>'.
                '</tr>';
             }
             $html .= '</tbody>'.
                '</table>"}';
         echo $html;
        
    }
    
if (isset($_POST["año2"])) {
        $concatena = $_POST['año2'].'-'.$_POST['mes2']; 
        $result = $object->GetReporteVenta($concatena);
        $html = '{ "tablita":'.
                '"<div style=\"width: 100%;float: left;\"><a onclick=\"Enviarexcel3();\"  style=\"float: right;\"><img src=\"img/excel.jpg\" width=\"25\"/> Exportar excel</a></div>'.
                '<table cellpadding=\"0\" cellspacing=\"0\" border=\"0\" class=\"display\" id=\"example\" width=\"100%\">'.
                '<thead>'.
                '<tr>'.
                
                '<th>Cliente</th>'.
                '<th>N Celular</th>'.
                '<th>Plan</th>'.
                '<th>Codigo</th>'.
                '<th>Fecha y Hora</th>'.
                '</tr>'.
                '</thead>'.
                '<tbody>';
        for ($i = 0, $fin = count($result); $i < $fin; $i++) {
                
                $html .= '<tr class=\"odd gradeB\">'.
                
                '<td>'.$result[$i]['nombre_Cliente'].'</td>'.
                '<td>'.$result[$i]['celular_Cliente'].'</td>'.        
                '<td>'.$result[$i]['nombre_Plan'].'</td>'.
                '<td>'.$result[$i]['codigo_Venta'].'</td>'.
                '<td>'.$result[$i]['fecha_Venta'].'</td>'.
                '</tr>';
             }
             $html .= '</tbody>'.
                '</table>"}';
         echo $html;
        
    } 
if (isset($_POST["fecha3"])) {
        
        $result = $object->GetReporteVenta($_POST["fecha3"]);
        $html = '{ "tablita":'.
                '"<div style=\"width: 100%;float: left;\"><a onclick=\"Enviarexcel4();\"  style=\"float: right;\"><img src=\"img/excel.jpg\" width=\"25\"/> Exportar excel</a></div>'.
                '<table cellpadding=\"0\" cellspacing=\"0\" border=\"0\" class=\"display\" id=\"example\" width=\"100%\">'.
                '<thead>'.
                '<tr>'.
                
                '<th>Cliente</th>'.
                '<th>N Celular</th>'.
                '<th>Plan</th>'.
                '<th>Codigo</th>'.
                '<th>Fecha y Hora</th>'.
                '</tr>'.
                '</thead>'.
                '<tbody>';
        for ($i = 0, $fin = count($result); $i < $fin; $i++) {
                
                $html .= '<tr class=\"odd gradeB\">'.
                
                '<td>'.$result[$i]['nombre_Cliente'].'</td>'.
                '<td>'.$result[$i]['celular_Cliente'].'</td>'.        
                '<td>'.$result[$i]['nombre_Plan'].'</td>'.
                '<td>'.$result[$i]['codigo_Venta'].'</td>'.
                '<td>'.$result[$i]['fecha_Venta'].'</td>'.
                '</tr>';
             }
             $html .= '</tbody>'.
                '</table>"}';
         echo $html;
        
    }        
?>