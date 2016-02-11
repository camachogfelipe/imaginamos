<?php
require_once 'procesos/class_procesos.php';
$objecta = new Procesos();
/* Se establecen los encabezados para que el navegador interprete que descargar� un archivo de Excel. */
header('Content-type: application/vnd.ms-excel;charset=utf-8');
header("Content-Disposition: attachment; filename=Formulario_contactenos.xls");
header("Pragma: no-cache");
header("Expires: 0");

if (isset($_GET["año1"])) {
    

/* Se construye una tabla HTML */

$result = $objecta->GetReporteTienda($_GET['año1'],$_GET['idtienda1'],$_GET['vendedor1']);
        $html = '<table cellpadding=\"0\" cellspacing=\"0\" border=\"0\" class=\"display\" id=\"example\" width=\"100%\">'.
                '<thead>'.
                '<tr>'.
                '<th>Tienda</th>'.
                '<th>Vendedor</th>'.
                '<th>N Celular</th>'.
                '<th>Plan</th>'.
                '<th>Codigo</th>'.
                '<th>Fecha y Hora</th>'.
                '</tr>'.
                '</thead>'.
                '<tbody>';
        for ($i = 0, $fin = count($result); $i < $fin; $i++) {
                $html .= '<tr class=\"odd gradeB\">'.
                '<td>'.$result[$i]['nombre_Tienda'].'</td>'.
                '<td>'.$result[$i]['nombre_Usuario'].'</td>'.
                '<td>'.$result[$i]['celular_Usuario'].'</td>'.        
                '<td>'.$result[$i]['nombre_Plan'].'</td>'.
                '<td>'.$result[$i]['codigo_Venta'].'</td>'.
                '<td>'.$result[$i]['fecha_Venta'].'</td>'.
                '</tr>';
             }
             $html .= '</tbody>'.
                '</table>';
         echo $html;
}
if (isset($_GET["año2"])) {
    

/* Se construye una tabla HTML */

$result = $objecta->GetReporteTiendaMes($_GET['año2'],$_GET['mes2'],$_GET['idtienda2'],$_GET['vendedor2']);
        $html = '<table cellpadding=\"0\" cellspacing=\"0\" border=\"0\" class=\"display\" id=\"example\" width=\"100%\">'.
                '<thead>'.
                '<tr>'.
                '<th>Tienda</th>'.
                '<th>Vendedor</th>'.
                '<th>N Celular</th>'.
                '<th>Plan</th>'.
                '<th>Codigo</th>'.
                '<th>Fecha y Hora</th>'.
                '</tr>'.
                '</thead>'.
                '<tbody>';
        for ($i = 0, $fin = count($result); $i < $fin; $i++) {
                $html .= '<tr class=\"odd gradeB\">'.
                '<td>'.$result[$i]['nombre_Tienda'].'</td>'.
                '<td>'.$result[$i]['nombre_Usuario'].'</td>'.
                '<td>'.$result[$i]['celular_Usuario'].'</td>'.        
                '<td>'.$result[$i]['nombre_Plan'].'</td>'.
                '<td>'.$result[$i]['codigo_Venta'].'</td>'.
                '<td>'.$result[$i]['fecha_Venta'].'</td>'.
                '</tr>';
             }
             $html .= '</tbody>'.
                '</table>';
         echo $html;
}
if (isset($_GET["ano3"])) {
    

/* Se construye una tabla HTML */

$result = $objecta->GetReporteTiendadia($_GET['ano3'],$_GET['idtienda3'],$_GET['vendedor3']);
        $html = '<table cellpadding=\"0\" cellspacing=\"0\" border=\"0\" class=\"display\" id=\"example\" width=\"100%\">'.
                '<thead>'.
                '<tr>'.
                '<th>Tienda</th>'.
                '<th>Vendedor</th>'.
                '<th>N Celular</th>'.
                '<th>Plan</th>'.
                '<th>Codigo</th>'.
                '<th>Fecha y Hora</th>'.
                '</tr>'.
                '</thead>'.
                '<tbody>';
        for ($i = 0, $fin = count($result); $i < $fin; $i++) {
                $html .= '<tr class=\"odd gradeB\">'.
                '<td>'.$result[$i]['nombre_Tienda'].'</td>'.
                '<td>'.$result[$i]['nombre_Usuario'].'</td>'.
                '<td>'.$result[$i]['celular_Usuario'].'</td>'.        
                '<td>'.$result[$i]['nombre_Plan'].'</td>'.
                '<td>'.$result[$i]['codigo_Venta'].'</td>'.
                '<td>'.$result[$i]['fecha_Venta'].'</td>'.
                '</tr>';
             }
             $html .= '</tbody>'.
                '</table>';
         echo $html;
  
   // print_r($_GET);
}
if (isset($_GET["admin1"])) {
    

/* Se construye una tabla HTML */

$result = $objecta->GetVentas2($_GET['admin1'],$_GET['ano1']);
        $html = '<table cellpadding=\"0\" cellspacing=\"0\" border=\"0\" class=\"display\" id=\"example\" width=\"100%\">'.
                '<thead>'.
                '<tr>'.
                '<th>Tienda</th>'.
                '<th>Vendedor</th>'.
                '<th>N Celular</th>'.
                '<th>Plan</th>'.
                '<th>Codigo</th>'.
                '<th>Fecha y Hora</th>'.
                '</tr>'.
                '</thead>'.
                '<tbody>';
        for ($i = 0, $fin = count($result); $i < $fin; $i++) {
                $html .= '<tr class=\"odd gradeB\">'.
                '<td>'.$result[$i]['nombre_Tienda'].'</td>'.
                '<td>'.$result[$i]['nombre_Usuario'].'</td>'.
                '<td>'.$result[$i]['celular_Usuario'].'</td>'.        
                '<td>'.$result[$i]['nombre_Plan'].'</td>'.
                '<td>'.$result[$i]['codigo_Venta'].'</td>'.
                '<td>'.$result[$i]['fecha_Venta'].'</td>'.
                '</tr>';
             }
             $html .= '</tbody>'.
                '</table>';
         echo $html;
  
   // print_r($_GET);
}
if (isset($_GET["admin2"])) {
    

/* Se construye una tabla HTML */

$result = $objecta->GetVentas3($_GET['admin2'],$_GET['ano2'],$_GET['mes2']);
        $html = '<table cellpadding=\"0\" cellspacing=\"0\" border=\"0\" class=\"display\" id=\"example\" width=\"100%\">'.
                '<thead>'.
                '<tr>'.
                '<th>Tienda</th>'.
                '<th>Vendedor</th>'.
                '<th>N Celular</th>'.
                '<th>Plan</th>'.
                '<th>Codigo</th>'.
                '<th>Fecha y Hora</th>'.
                '</tr>'.
                '</thead>'.
                '<tbody>';
        for ($i = 0, $fin = count($result); $i < $fin; $i++) {
                $html .= '<tr class=\"odd gradeB\">'.
                '<td>'.$result[$i]['nombre_Tienda'].'</td>'.
                '<td>'.$result[$i]['nombre_Usuario'].'</td>'.
                '<td>'.$result[$i]['celular_Usuario'].'</td>'.        
                '<td>'.$result[$i]['nombre_Plan'].'</td>'.
                '<td>'.$result[$i]['codigo_Venta'].'</td>'.
                '<td>'.$result[$i]['fecha_Venta'].'</td>'.
                '</tr>';
             }
             $html .= '</tbody>'.
                '</table>';
         echo $html;
  
   // print_r($_GET);
}
if (isset($_GET["dia"])) {
    

/* Se construye una tabla HTML */

$result = $objecta->GetVentas4($_GET['admin3'],$_GET['tiendaadmin'],$_GET['dia']);
        $html = '<table cellpadding=\"0\" cellspacing=\"0\" border=\"0\" class=\"display\" id=\"example\" width=\"100%\">'.
                '<thead>'.
                '<tr>'.
                '<th>Tienda</th>'.
                '<th>Vendedor</th>'.
                '<th>N Celular</th>'.   
                '<th>Plan</th>'.
                '<th>Codigo</th>'.
                '<th>Fecha y Hora</th>'.
                '</tr>'.
                '</thead>'.
                '<tbody>';
        for ($i = 0, $fin = count($result); $i < $fin; $i++) {
                $html .= '<tr class=\"odd gradeB\">'.
                '<td>'.$result[$i]['nombre_Tienda'].'</td>'.
                '<td>'.$result[$i]['nombre_Usuario'].'</td>'.
                '<td>'.$result[$i]['celular_Usuario'].'</td>'.        
                '<td>'.$result[$i]['nombre_Plan'].'</td>'.
                '<td>'.$result[$i]['codigo_Venta'].'</td>'.
                '<td>'.$result[$i]['fecha_Venta'].'</td>'.
                '</tr>';
             }
             $html .= '</tbody>'.
                '</table>';
         echo $html;
  
   // print_r($_GET);
}

if (isset($_GET["excel2"])) {
    
        
        $result = $objecta->GetVendedorVentas($_GET['vendedor1'],$_GET['excel2']);
        $html = '<table cellpadding=\"0\" cellspacing=\"0\" border=\"0\" class=\"display\" id=\"example\" width=\"100%\">'.
                '<thead>'.
                '<tr>'.
                '<th>Tienda</th>'.
                '<th>Vendedor</th>'.
                '<th>N Celular</th>'.
                '<th>Plan</th>'.
                '<th>Codigo</th>'.
                '<th>Fecha y Hora</th>'.
                '</tr>'.
                '</thead>'.
                '<tbody>';
        for ($i = 0, $fin = count($result); $i < $fin; $i++) {
                $html .= '<tr class=\"odd gradeB\">'.
                '<td>'.$result[$i]['nombre_Tienda'].'</td>'.
                '<td>'.$result[$i]['nombre_Usuario'].'</td>'.
                '<td>'.$result[$i]['celular_Usuario'].'</td>'.        
                '<td>'.$result[$i]['nombre_Plan'].'</td>'.
                '<td>'.$result[$i]['codigo_Venta'].'</td>'.
                '<td>'.$result[$i]['fecha_Venta'].'</td>'.
                '</tr>';
             }
             $html .= '</tbody>'.
                '</table>';
         echo $html;
        
    }
    
if (isset($_GET["excel3"])) {
    
        
        $result = $objecta->GetVendedorVentasMes($_GET['vendedor2'],$_GET['excel3'],$_GET['mes2']);
        $html = '<table cellpadding=\"0\" cellspacing=\"0\" border=\"0\" class=\"display\" id=\"example\" width=\"100%\">'.
                '<thead>'.
                '<tr>'.
                '<th>Tienda</th>'.
                '<th>Vendedor</th>'.
                '<th>N° Celular</th>'.
                '<th>Plan</th>'.
                '<th>Codigo</th>'.
                '<th>Fecha y Hora</th>'.
                '</tr>'.
                '</thead>'.
                '<tbody>';
        for ($i = 0, $fin = count($result); $i < $fin; $i++) {
                $html .= '<tr class=\"odd gradeB\">'.
                '<td>'.$result[$i]['nombre_Tienda'].'</td>'.
                '<td>'.$result[$i]['nombre_Usuario'].'</td>'.
                '<td>'.$result[$i]['celular_Usuario'].'</td>'.        
                '<td>'.$result[$i]['nombre_Plan'].'</td>'.
                '<td>'.$result[$i]['codigo_Venta'].'</td>'.
                '<td>'.$result[$i]['fecha_Venta'].'</td>'.
                '</tr>';
             }
             $html .= '</tbody>'.
                '</table>';
         echo $html;
        
    } 
 if (isset($_GET["excel4"])) {
    
        
        $result = $objecta->GetVendedorVentas($_GET['vendedor3'],$_GET['excel4']);
        $html = '<table cellpadding=\"0\" cellspacing=\"0\" border=\"0\" class=\"display\" id=\"example\" width=\"100%\">'.
                '<thead>'.
                '<tr>'.
                '<th>Tienda</th>'.
                '<th>Vendedor</th>'.
                '<th>N Celular</th>'.
                '<th>Plan</th>'.
                '<th>Codigo</th>'.
                '<th>Fecha y Hora</th>'.
                '</tr>'.
                '</thead>'.
                '<tbody>';
        for ($i = 0, $fin = count($result); $i < $fin; $i++) {
                $html .= '<tr class=\"odd gradeB\">'.
                '<td>'.$result[$i]['nombre_Tienda'].'</td>'.
                '<td>'.$result[$i]['nombre_Usuario'].'</td>'.
                '<td>'.$result[$i]['celular_Usuario'].'</td>'.        
                '<td>'.$result[$i]['nombre_Plan'].'</td>'.
                '<td>'.$result[$i]['codigo_Venta'].'</td>'.
                '<td>'.$result[$i]['fecha_Venta'].'</td>'.
                '</tr>';
             }
             $html .= '</tbody>'.
                '</table>';
         echo $html;
        
    } 
if (isset($_GET["anocliente"])) {
    
        $result = $objecta->GetReporteVenta($_GET["anocliente"]);
        $html = '<table cellpadding=\"0\" cellspacing=\"0\" border=\"0\" class=\"display\" id=\"example\" width=\"100%\">'.
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
                '</table>';
         echo $html;
        
    }
    if (isset($_GET["anocliente2"])) {
        $concatena = $_GET["anocliente2"].'-'.$_GET["mes2"];
        $result = $objecta->GetReporteVenta($concatena);
        $html = '<table cellpadding=\"0\" cellspacing=\"0\" border=\"0\" class=\"display\" id=\"example\" width=\"100%\">'.
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
                '</table>';
         echo $html;
        
    }
if (isset($_GET["fechacliente"])) {
    
        $result = $objecta->GetReporteVenta($_GET["fechacliente"]);
        $html = '<table cellpadding=\"0\" cellspacing=\"0\" border=\"0\" class=\"display\" id=\"example\" width=\"100%\">'.
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
                '</table>';
         echo $html;
        
    }    
?>