<?php

ini_set("display_errors", "on");

include("admin/core/class/db.class.php");
require_once'pdfs/html2pdf.class.php';
include( 'business/class/Correo.class.php' );
include( 'business/class/PHPMailer.class.php' );
$db = new Database();
$db->connect();
$db->doQuery("SELECT * FROM cotizaciones WHERE id=" . $_GET["user"], SELECT_QUERY);
$resultado = $db->results[0];
$id = explode("-", $_GET["idf"]);
$cant = explode("-", $_GET["cantidadf"]);
$iva = explode("-", $_GET["ivaf"]);
$precio = explode("-", $_GET["valoruf"]);
if ($resultado["ubicacion"] == "FBogot�") {
    $ubicacion = "Fuera de Bogot&aacute;";
} else {
    $ubicacion = "Bogot&aacute;";
}
$ivas = array();
$preciofinal = array();
for ($c = 0, $d = count($iva); $c < $d; $c++) {
    if ($iva[$c] == "no") {
        // $ivas[$c]=0;
        $total = ((int) $precio[$c] * (int) $cant[$c]);
        $iva1 = (int) $total / 1.16;
        $ivas[$c] = 0;
        //  $preciofinal[$c] = ((int) $total + (int) $ivas[$c]);
        $preciofinal[$c] = round((int) $total);
    } else {

        $total = (int) $precio[$c] * (int) $cant[$c];
        $iva1 = (int) $total / 1.16;
        $ivas[$c] = (int) $total - (int) $iva1;
        // $preciofinal[$c] = ((int) $total + (int) $ivas[$c]);
        $preciofinal[$c] = round((int) $total * 1.16);
    }
}
$condiciones = explode("%", $_GET["cond"]);
$observaciones = explode("%", $_GET["comnet"]);
$condfi = "";
$obserfi = "";
for ($j = 0, $h = count($condiciones); $j < $h; $j++) {
    $condfi .= $condiciones[$j] . " ";
}
for ($e = 0, $r = count($observaciones); $e < $r; $e++) {
    $obserfi .= $observaciones[$e] . " ";
}
if ($obserfi == "Observaciones ") {
    $obserfi = "";
}
if ($condfi == "Condiciones de venta ") {
    $condfi = "";
}

$dias = $_GET["dias"];
$vali = $_GET["validez"];
$condici = $_GET["condiciones"];
$division = count($id) / 5;
$modular = count($id) % 5;


$bandera2 = 0;
$content = "";
$hasdf = 1;
$posicion = 0;
$posicion2 = 0;
for ($p = 0, $z = $division; $p < $z; $p++) {

    $content .= ' <link href="css/norquimicos.css" rel="stylesheet" type="text/css" />
    <div id="preview">
        <div class="con-pre-cot">
        <div class="cotizacion-esq"><img src="imagenes/cotizacion.jpg" width="900" height="1165" alt=""></div>
             <div class="con-campos">
                <!--Expedición -->
                <div class="campo-1" style="font-size: 9px;margin-top:4px;color:#666;" >' . date("Y-m-d") . '</div>
                <!--Vencimiento-->
                <div class="campo-2">' . $vali . '</div>
                <!--Cot. No-->
                <div class="campo-3" style="font-size: 9px;margin-top:4px;color:#666;">' . $_GET["user"] . '</div>
                <!--Señores-->
                <div class="campo-4" style="font-size: 9px;margin-top:4px;color:#666;">' . $resultado["nombre"] . '</div>
								<!--NIT-->
                <div class="campo-4-nit" style="font-size: 9px;margin-top:4px;color:#666;">' . $resultado["cedula"] . '</div> 
                <!--Dirección-->
                <div class="campo-5" style="font-size: 9px;margin-top:4px;color:#666;">' . $resultado["direccion"] . '</div>
                <!--Entrega  (Nuevo) -->
                <div class="campo-6" style="font-size: 9px;margin-top:4px;color:#666;">' . $dias . '</div> 
                <!--Teléfono-->
                <div class="campo-7" style="font-size: 9px;margin-top:4px;color:#666;">' . $resultado["telefono"] . '</div>
                <!--Ciudad-->
                <div class="campo-8" style="font-size: 9px;margin-top:4px;color:#666;">' . $ubicacion . '</div>
                <!--E-mail-->
                
                <div class="campo-9" style="font-size: 9px;margin-top:4px;color:#666;">' . $resultado["email"] . '</div>
                <!--Listado productos-->
                <div class="campo-10">
                    <!--Los campos dentro de la cotizacion-->
                    <table width="900" border="0">';


//no se puede asignar variables en el pdf


    for ($bandera = $posicion, $b = $posicion2+4; $bandera <= $b; $bandera++) {    
       //$posicion2 = $bandera;
//        if (isset($id[$bandera])) {
//     
           $db->doQuery("SELECT * FROM productos WHERE id=" . $id[$bandera], SELECT_QUERY);
           $prod = $db->results[0];
//
            $content .='<tr>
           
            
                <td><div class="ct10" style="font-size: 9px;">' . $prod["referencia"] . '</div></td>';
//                <td><div class="ct10" style="font-size: 9px;">' . $prod["referencia"] . '</div></td>';
//                <td><div class="ct20" style="font-size: 9px;">' . $cant[$bandera] . '</div></td>
//                <td><div class="ct30" style="font-size: 9px;">' . $prod["presentacion"] . '</div></td>
//                <td><div class="ct40" style="font-size: 9px;">' . $prod["texto"] . '</div></td>
//                <td><div class="ct50" style="font-size: 9px;"><img src="imagenes/productos/' . $prod["img"] . '" width="128" height="70"></div></td>
//            ';
//            if ($iva[$bandera] == "no") {
//                $content .='<td><div class="ct60" style="font-size: 9px;"></div></td>';
//            } else {
//                $content .='<td><div class="ct60" style="font-size: 9px;">16%</div></td>';
//            }
//            $content .='      
//                        <td><div class="ct70" style="font-size: 9px;">' . $precio[$bandera] . '</div></td>
//                        <td><div class="ct80" style="font-size: 9px;">' . $preciofinal[$bandera] . '</div></td>
//                    </tr>';
//         
//        }


       
    
       
    }
    
    
    if ($posicion2+1 == count($id)) {
        $content .='                    
                    </table>                                              
                </div>
                <!--Observaciones-->
                <div class="campo-11" style="font-size: 9px;margin-top:4px;color:#666;" id="camp11">' . $condici . '</div>
                <!--Condiciones-->
                
                <!--Aceptada-->
                <div style="font-size: 9px;margin-top:4px;color:#666;" class="campo-13"></div>
                <!--Sello-->
                <div style="font-size: 9px;margin-top:4px;color:#666;" class="campo-14"></div>
                <!--Subtotal-->
                <div class="campo-15" style="font-size: 9px;margin-top:8px;margin-left:10px;color:#666;" id="subtotje">' . $_GET["subenviototal1"] . '</div>
                <!--IVA-->
                <div class="campo-16" style="font-size: 9px;margin-top:8px;margin-left:10px;color:#666;" id="ivaje">' . $_GET["ivatotal1"] . '</div>
                <!--Total-->
                <div class="campo-17" style="font-size: 9px;margin-top:8px;margin-left:10px;color:#666;" id="campsfinals">' . $_GET["totaltotal1"] . '</div>
              </div> 
    </div> 
</div> 
';
    }
//    else if ($division <= 1) {
//
//        $content .='                    
//                    </table>                                              
//                </div>
//                <!--Observaciones-->
//                <div class="campo-11" style="font-size: 9px;margin-top:4px;color:#666;" id="camp11">' . $condici . '</div>
//                <!--Condiciones-->
//                
//                <!--Aceptada-->
//                <div style="font-size: 9px;margin-top:4px;color:#666;" class="campo-13"></div>
//                <!--Sello-->
//                <div style="font-size: 9px;margin-top:4px;color:#666;" class="campo-14"></div>
//                <!--Subtotal-->
//                <div class="campo-15" style="font-size: 9px;margin-top:8px;margin-left:10px;color:#666;" id="subtotje">' . $_GET["subenviototal1"] . '</div>
//                <!--IVA-->
//                <div class="campo-16" style="font-size: 9px;margin-top:8px;margin-left:10px;color:#666;" id="ivaje">' . $_GET["ivatotal1"] . '</div>
//                <!--Total-->
//                <div class="campo-17" style="font-size: 9px;margin-top:8px;margin-left:10px;color:#666;" id="campsfinals">' . $_GET["totaltotal1"] . '</div>
//              </div> 
//    </div> 
//</div> 
//';
//    }
    else {

        $content .='                    
                    </table>                                              
                </div>
                <!--Observaciones-->
                <div class="campo-11" style="font-size: 9px;margin-top:4px;color:#666;" id="camp11"></div>
                <!--Condiciones-->
                
                <!--Aceptada-->
                <div style="font-size: 9px;margin-top:4px;color:#666;" class="campo-13"></div>
                <!--Sello-->
                <div style="font-size: 9px;margin-top:4px;color:#666;" class="campo-14"></div>
                <!--Subtotal-->
                <div class="campo-15" style="font-size: 9px;margin-top:8px;margin-left:10px;color:#666;" id="subtotje"></div>
                <!--IVA-->
                <div class="campo-16" style="font-size: 9px;margin-top:8px;margin-left:10px;color:#666;" id="ivaje"></div>
                <!--Total-->
                <div class="campo-17" style="font-size: 9px;margin-top:8px;margin-left:10px;color:#666;" id="campsfinals"></div>
              </div> 
    </div> 
</div> 
';
    }
}







$html2pdf = new HTML2PDF('P', 'A3', 'fr');
$html2pdf->WriteHTML($content);
//$html2pdf->Output('PDFCotizacion.pdf');
$html2pdf->Output('imagenes/pdfs/PDFUSER' . $_GET["user"] . '.pdf'); //, 'F'
//$db->doQuery("UPDATE cotizaciones SET  estado ='completo' WHERE id=" . $_GET["user"], 4);



$db->doQuery("SELECT * FROM cotizaciones WHERE id=" . $_GET["user"], SELECT_QUERY);
$resultado = $db->results[0];
//para el cotizante
$body = '
            <img src="imagenes/logo.png">
            <br><br>
            <h1><font style="font-size: 33px;" color="#7ebe57">Cotizaci&oacute;n realizada</font></h1><br>
            Hola ' . $resultado["nombre"] . '<br>   <br>   
           Tu solicitud de cotizaci&oacute;n ha sido realizada correctamente<br>
            Para ver y descargar la cotizaci&oacute;n haga click aqu&iacute;: <a href="http://www.norquimicos.com.co/imagenes/pdfs/PDFUSER' . $_GET["user"] . '.pdf">PDF</a><br><br>            
            Para m&aacute;s informaci&oacute;n ingrese a : <a href="http://www.norquimicos.com.co/">Norquimicos</a>
              <br><br><br><br>
            Gracias.
            <br><br>
            Dr: CARRERA 56 A No 4D-19<br>
            TEL: <a href="+57(1)4143089">+57(1)4143089</a><br>
            FAX: <a href="+57(1)4143938">+57(1)4143938</a><br><br>
             <a href="www.norquimicos.com.co">www.norquimicos.com.co </a><br>
            Bogot&aacute; - Colombia  South America.
            <br><br>
           <img src="imagenes/skype12.png"> norquimicos.ltd
           <img src="imagenes/facebook12.png">/norquimicos.ltda
           <img src="imagenes/twitter12.png">@norquimicos.ltda
           <img src="imagenes/bb12.png">29E958F9
           ';
$asunto = utf8_decode("Solicitud de cotizaci&oacute;n");
$cCorreo = new Correo();
//$cCorreo->SendEmail($resultado["email"], $asunto, $body);
//para el cotizador
$db->doQuery("SELECT * FROM user WHERE id=" . $_GET["asesor"], SELECT_QUERY);
$je = $db->results[0];
$body1 = '
    
<img src="imagenes/logo.png">
            <br><br>
            <h1><font style="font-size: 33px;" color="#7ebe57">Cotizaci&oacute;n realizada</font></h1><br>
            Hola ' . $je["nombre"] . '<br>   <br>   
           Tu solicitud de cotizaci&oacute;n ha sido realizada correctamente<br>
            Para ver y descargar la cotizaci&oacute;n haga click aqu&iacute;: <a href="http://www.norquimicos.com.co/imagenes/pdfs/PDFUSER' . $_GET["user"] . '.pdf">PDF</a><br><br>            
            Para m&aacute;s informaci&oacute;n ingrese a : <a href="http://www.norquimicos.com.co/">Norquimicos</a>
              <br><br><br><br>
            Gracias.
            <br><br>
            Dr: CARRERA 56 A No 4D-19<br>
            TEL: <a href="+57(1)4143089">+57(1)4143089</a><br>
            FAX: <a href="+57(1)4143938">+57(1)4143938</a><br><br>
             <a href="www.norquimicos.com.co">www.norquimicos.com.co </a><br>
            Bogota - Colombia  South America.
            <br><br>
           <img src="imagenes/skype12.png"> norquimicos.ltd
           <img src="imagenes/facebook12.png">/norquimicos.ltda
           <img src="imagenes/twitter12.png">@norquimicos.ltda
           <img src="imagenes/bb12.png">29E958F9

            
';
$asunto1 = utf8_decode("Cotizaci&oacute;n");
$cCorreo1 = new Correo();
//$cCorreo1->SendEmail($je["correo"], $asunto1, $body1);
//$db->doQuery("INSERT INTO consulta_final (
//                                          id,
//                                          id_cotizacion,
//                                          asesor,
//                                          email,
//                                          valor_cotizacion,
//                                          telefono,
//                                          celular,
//                                          comentario,
//                                          condiciones,
//                                          fecha
//                                          ) VALUES(
//                                          NULL,
//                                          '" . $_GET["user"] . "',                                          
//                                          '" . $je["nombre"] . "',
//                                          '" . $je["correo"] . "',
//                                          '" . $_GET["totaltotal1"] . "',
//                                          '" . $je["telefono"] . "',
//                                          '" . $je["celular"] . "',
//                                          '" . $obserfi . "',
//                                          '" . $condfi . "',
//                                          '" . date("Y-m-d") . "'
//                                          );", 4);
//echo "<script>window.location.href = 'index.php?seccion=zonasegura&comp'</script>";   //mensaje creado
?>