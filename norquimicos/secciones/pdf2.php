<?php 
//set_time_limit(3600);
ini_set('max_execution_time', 3600);
ini_set("memory_limit", "100M");
set_time_limit(0);
ini_set("display_errors", "on");
 

include("admin/core/class/db.class.php");
require_once'pdfs/html2pdf.class.php';
include( 'business/class/Correo.class.php' );
include( 'business/class/PHPMailer.class.php' );
$db = new Database();
$db->connect();
$db->doQuery("SELECT * FROM cotizaciones WHERE id=" . $_REQUEST["user"], SELECT_QUERY);
$resultado = $db->results[0];
$id = explode("-", $_REQUEST["idf"]);
$cant = explode("-", $_REQUEST["cantidadf"]);
$iva = explode("-", $_REQUEST["ivaf"]);
$precio = explode("-", $_REQUEST["valoruf"]);
if ($resultado["ubicacion"] == "FBogot&aacute;") {
    $ubicacion = "Fuera de Bogot&aacute;";
} else {
    $ubicacion = "Bogot&aacute;";
}
$ivas = array();
$preciofinal = array();
for ($c = 0, $d = count($iva); $c < $d; $c++) {
    if ($iva[$c] == "no") {
        $total = ((int) $precio[$c] * (int) $cant[$c]);
        $iva1 = (int) $total / 1.16;
        $ivas[$c] = 0;
        $preciofinal[$c] = round((int) $total);
    } else {
        $total = (int) $precio[$c] * (int) $cant[$c];
        $iva1 = (int) $total / 1.16;
        $ivas[$c] = (int) $total - (int) $iva1;
        $preciofinal[$c] = round((int) $total * 1.16);
    }
}
$condiciones = explode("%", $_REQUEST["cond"]);
$observaciones = (isset($_REQUEST["observaciones"]))? $_REQUEST["observaciones"] :"";
$condfi = "";
$obserfi = "";
$condfi .= $condiciones . " ";
 $obserfi .= $observaciones . " ";
 
if ($obserfi == "Observaciones ") {
    $obserfi = "";
}
if ($condfi == "Condiciones de venta ") {
    $condfi = "";
}

$dias = $_REQUEST["dias"];
$vali = $_REQUEST["validez"];
$condici = $_REQUEST["condiciones"];

$content = "";



$content .= ' <link href="css/norquimicos.css" rel="stylesheet" type="text/css" />
                <div id="preview-2">
                    <div class="con-pre-cot">
                        <div><img src="imagenes/head-cotiza-bg.jpg" width="1020" alt=""></div>
                         <!--Expedición -->
                <div class="campo-1" style="font-size: 9px;margin-top:15px;color:#666;" >' . date("Y-m-d") . '</div>
                <!--Vencimiento-->
                <div class="campo-2" style="font-size: 9px;margin-top:15px;margin-left:100px;color:#666;">' . $vali . '</div>
                <!--Cot. No-->
                <div class="campo-3" style="font-size: 9px;margin-top:15px;color:#666;margin-left:100px;">' . $_REQUEST["user"] . '</div>
                <!--Señores-->
                <div class="campo-4" style="font-size: 9px;margin-top:30px;margin-left:15px;color:#666;">' . $resultado["nombre"] . '</div>
								<!--NIT-->
                <div class="campo-4-nit" style="font-size: 9px;margin-top:30;margin-left:150px;color:#666;">' . $resultado["cedula"] . '</div> 
                <!--Dirección-->
                <div class="campo-5" style="font-size: 9px;margin-top:30;margin-left:15px;color:#666;">' . $resultado["direccion"] . '</div>
                <!--Entrega  (Nuevo) -->
                <div class="campo-6" style="font-size: 9px;margin-top:40;margin-left:150px;color:#666;">' . $dias . '</div> 
                <!--Teléfono-->
                <div class="campo-7" style="font-size: 9px;margin-top:40;margin-left:25px;color:#666;">' . $resultado["telefono"] . '</div>
                <!--Ciudad-->
                <div class="campo-8" style="font-size: 9px;margin-top:40;margin-left:70px;color:#666;">' . $ubicacion . '</div>
                <!--E-mail-->
                
                <div class="campo-9" style="font-size: 9px;margin-top:40;margin-left:150px;color:#666;">' . $resultado["email"] . '</div>
                <!--Listado productos-->
                        <table width="1020" style="margin-left:100px;" border="0">';


for ($bandera = 0, $pro = count($id); $bandera < $pro; $bandera++) {



    if (isset($id[$bandera])) {
        $db->doQuery("SELECT * FROM productos WHERE id=" . $id[$bandera], SELECT_QUERY);
        
       // echo "SELECT * FROM productos WHERE id=" . $id[$bandera];
        $prod = $db->results[0];

        $referencia = isset($prod["referencia"]) ? $prod["referencia"] : null;
        $canbandera = isset($cant[$bandera]) ? $cant[$bandera] : null;
        $presentacion = isset($prod["presentacion"]) ? $prod["presentacion"] : null;
        $textos = isset($prod["texto"]) ? $prod["texto"] : null;
        $img = isset($prod["img"]) ? $prod["img"] : null;
        $ivabn = isset($iva[$bandera]) ? $iva[$bandera] : null;


        /*$content .='<tr>
                <td><div class="ct10" style="font-size: 9px;">' . $referencia . '</div></td>
                <td><div class="ct20" style="font-size: 9px;">' . $canbandera . '</div></td>
                <td><div class="ct30" style="font-size: 9px;">' . "" . '</div></td>
                <td><div class="ct40" style="font-size: 9px;">' . "" . '</div></td>
                <td><div class="ct50" style="font-size: 9px;"><img src="imagenes/productos/' . $img . '" width="128" height="70"></div></td>
                ';*/
         $content.='<tr>
                <td><div class="ct10" style="font-size: 9px;">'.$prod["referencia"].'</div></td>
                <td><div class="ct20" style="font-size: 9px;">'.$cant[$bandera].'</div></td>
                <td><div class="ct30" style="font-size: 9px;">'.$prod["presentacion"].'</div></td>
                <td><div class="ct40" style="font-size: 9px;">'.$prod["texto"].'</div></td>
                <td><div class="ct50" style="font-size: 9px;"><img src="imagenes/productos/'.$prod["img"].'" width="128" height="70"></div></td>';
         
        if ($ivabn == "no") {
            $content .='<td><div class="ct60" style="font-size: 9px;"></div></td>';
        } else {
            $content .='<td><div class="ct60" style="font-size: 9px;">16%</div></td>';
        }
        $content .=' 
                        <td><div class="ct70" style="font-size: 9px;">' . $precio[$bandera] . '</div></td>
                        <td><div class="ct80" style="font-size: 9px;">' . $preciofinal[$bandera] . '</div></td>
                    </tr>';
    }
}
//exit;
$content .='              </table>
                         <div><img src="imagenes/foot-cotiza-bg.jpg" width="1020" alt=""></div>
                         <!--Observaciones-->
                <div class="campo-11" style="font-size: 9px;margin-top:4px;color:#666;" id="camp11">' . "Condiciones" . '</div>
                <!--Condiciones-->
                
                <!--Aceptada-->
                <div style="font-size: 9px;margin-top:4px;color:#666;" class="campo-13"></div>
                <!--Sello-->
                <div style="font-size: 9px;margin-top:4px;color:#666;" class="campo-14"></div>
                <!--Subtotal-->
                <div class="campo-15" style="font-size: 9px;margin-top:8px;margin-left:10px;color:#666;" id="subtotje">' . $_REQUEST["subenviototal1"] . '</div>
                <!--IVA-->
                <div class="campo-16" style="font-size: 9px;margin-top:8px;margin-left:10px;color:#666;" id="ivaje">' . $_REQUEST["ivatotal1"] . '</div>
                <!--Total-->
                <div class="campo-17" style="font-size: 9px;margin-top:8px;margin-left:10px;color:#666;" id="campsfinals">' . $_REQUEST["totaltotal1"] . '</div>
              </div> 
                    </div>
                </div>
';


//$db->doQuery("UPDATE cotizaciones SET  estado ='completo' WHERE id=" . $_REQUEST["user"], 4);

$db->doQuery("SELECT * FROM cotizaciones WHERE id=" . $_REQUEST["user"], SELECT_QUERY);
$resultado = $db->results[0];
//para el cotizante
$body = '
            <img src="imagenes/logo.png">
            <br><br>
            <h1><font style="font-size: 33px;" color="#7ebe57">Cotizaci&oacute;n realizada</font></h1><br>
            Hola ' . $resultado["nombre"] . '<br>   <br>   
           Tu solicitud de cotizaci&oacute;n ha sido realizada correctamente<br>
            Para ver y descargar la cotizaci&oacute;n haga click aqu&iacute;: <a href="http://www.norquimicos.com.co/imagenes/pdfs/PDFUSER' . $_REQUEST["user"] . '.pdf">PDF</a><br><br>            
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



$cCorreo->SendEmail($resultado["email"], $asunto, $body);

//para el cotizador
$db->doQuery("SELECT * FROM user WHERE id=" . $_REQUEST["asesor"], SELECT_QUERY);
$je = $db->results[0];
$body1 = '
    
<img src="imagenes/logo.png">
            <br><br>
            <h1><font style="font-size: 33px;" color="#7ebe57">Cotizaci&oacute;n realizada</font></h1><br>
            Hola ' . $je["nombre"] . '<br>   <br>   
           Tu solicitud de cotizaci&oacute;n ha sido realizada correctamente<br>
            Para ver y descargar la cotizaci&oacute;n haga click aqu&iacute;: <a href="http://www.norquimicos.com.co/imagenes/pdfs/PDFUSER' . $_REQUEST["user"] . '.pdf">PDF</a><br><br>            
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

$asunto1 = utf8_decode("Cotizaci&oacute;n");
$cCorreo1 = new Correo();



$cCorreo1->SendEmail($je["correo"], $asunto1, $body1);
/*$db->doQuery("INSERT INTO consulta_final (
                                          id,
                                          id_cotizacion,
                                          asesor,
                                          email,
                                          valor_cotizacion,
                                          telefono,
                                          celular,
                                          comentario,
                                          condiciones,
                                          fecha
                                          ) VALUES(
                                          NULL,
                                          '" . $_REQUEST["user"] . "',                                          
                                          '" . $je["nombre"] . "',
                                          '" . $je["correo"] . "',
                                          '" . $_REQUEST["totaltotal1"] . "',
                                          '" . $je["telefono"] . "',
                                          '" . $je["celular"] . "',
                                          '" . $obserfi . "',
                                          '" . $condfi . "',
                                          '" . date("Y-m-d") . "'
                                          );", 4);

*/
$html2pdf = new HTML2PDF('P', 'A3', 'fr');
$html2pdf->WriteHTML($content);
$html2pdf->Output('imagenes/pdfs/PDFUSER' . $_REQUEST["user"] . '.pdf', 'F'); //

?>