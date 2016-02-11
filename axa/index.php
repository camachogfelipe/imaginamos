<?php
session_start();
$uniqidcompra = uniqid();
$uniqid = rand(0, 100);
if (!isset($_SESSION['user'])) {
    $_SESSION['user'] = serialize($uniqid);
}
if (!isset($_SESSION['refcompra'])) {
    $_SESSION['refcompra'] = serialize($uniqidcompra . $uniqid);
}
include_once ('inicios.php');
$idplan = 7;
$planB = $planDAO->getPlan($idplan);
$idplan = 12;
$planA = $planDAO->getPlan($idplan);
if (isset($_GET['rede'])) {
    $_SESSION['rede'] = $_GET['rede'];
}
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta http-equiv="X-UA-Compatible" content="IE=9" />
        <meta http-equiv="content-type" content="text/html; charset=UTF-8" />    
<!--<title>Tarjetas de Asistencia y Requisitos Visa AXA Assistance</title>-->
        <title>AXA assistance tarjetas asistencia y requisitos visa </title>
        <meta name="description" content="Cumple con los requisitos para tu visa Schengen. Adquiere tu tarjeta de asistencia en 3 simples pasos. ¡te tomar&aacute; menos de 5 minutos!. Requisitos Visa.">
        <meta name="keywords" content="Tarjetas de asistencia, requisitos visa, tarjeta schengen, visa" >
        <link rel="icon" type="image/gif" href="images/layout/favicon.ico" />
        <link rel="shortcut icon" href="images/layout/favicon.ico" />
        <link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
        <link href="css/emergentes.css" rel="stylesheet" type="text/css" media="all"/>
    <!--[if lt IE 9]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js" type="text/javascript"></script><![endif]-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js" type="text/javascript"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.13/jquery-ui.min.js" type="text/javascript"></script>
        <script src="js/actions-botones.js" type="text/javascript"></script>
        <script src="js/chat.js" type="text/javascript"></script>
        <script src="js/mapa_pop.js" type="text/javascript"></script>
<?php include ('analytics.php'); ?>
        <!-- METAS SEO -->
        <meta name="keywords" content=" asistencia, medica, accidente, enfermedad, gastos, farmaceuticos, odontologicos, repatriacion, sanitaria, traslado, medico, hospitalizacion, hospital, hospitalario, traslado, familiar, hotel, acompañante, convalecencia, menores, acompañantes, fallecimiento, entierro, local, regreso, siniestro, domicilio, mensajes, urgentes, ejecutivo, substituci&oacute;n, administrativa, indemnizaci&oacute;n, perdida, equipaje, complementaria, compensaci&oacute;n, demora, fondos, fianza, legal, referencia, viajar, pais, america, seguro, vida, muerte, accidental, transporte, p&uacute;blico, coordinaci&oacute;n, compra, env&iacute;o, flores, chocolates, informaci&oacute;n, eventos, espect&aacute;culos, culturales, principales, ciudades, mundo, recordaci&oacute;n, fechas, importantes, cancelaci&oacute;n, interrupci&oacute;n, viaje, maximo, dias, limite, edad, costos, beneficios, seguro, viaje, medico, internacional, canada, USA, mexico, guatemala, Honduras, El Salvador, Cuba, Haiti, Jamaica, Republica Dominicana, Puerto Rico, Nicaragua, Costa Rica, Panama, venezuela, Ecuador,  Peru, Brasil, Bolivia, Chile, Argentina, Uruguay, Paraguay,  ">
        <meta name="description" content="Cumpla con los requisitos para tu visa Schengen. Adquiere tu tarjeta de asistencia en 3 simples pasos. ¡te tomar&aacute; menos de 5 minutos!. Requisitos Visa.">
        <!-- FIN METAS SEO -->

    </head>
    <!-- emergente -->
    <div class="fondo-emergente" style="display:none">
        <div class="contenedoremergente">
            <div id="tabla_clasico">
                <div class="titulo_emergente">
                    <p>COBERTURA  DE  ASISTENCIA  EN  EL  EXTERIOR</p>
                </div>
                <table class="tabla_emergente" width="950" border="1">
                    <tr>
                        <td class="titulos_clasico_emergente" width="600px">COBERTURAS</td>
                        <td class="titulos_clasico_emergente" width="345px">CRUCEROS Y DEPORTES</td>
                    </tr>
                    <tr>
                        <td class="tabla_arriba_blanco_emergente" width="600px">Asistencia M&eacute;dica por Accidente</td>
                        <td class="tabla_arriba_blanco_emergente" width="345px">30.000 EUR / 50.000 CHF en Suiza</td>
                    </tr>
                    <tr>
                        <td class="tabla_arriba_blanco_emergente" width="600px">Asistencia M&eacute;dica por Enfermedad</td>
                        <td class="tabla_arriba_blanco_emergente" width="345px">30.000 EUR / 50.000 CHF en Suiza</td>
                    </tr>
                    <tr>
                        <td class="tabla_arriba_blanco_emergente" width="600px">Preexistencias</td>
                        <td class="tabla_arriba_blanco_emergente" width="345px">-</td>
                    </tr>
                    <tr>
                        <td class="tabla_arriba_blanco_emergente" width="600px">Gastos farmac&eacute;uticos</td>
                        <td class="tabla_arriba_blanco_emergente" width="345px">-</td>
                    </tr>
                    <tr>
                        <td class="tabla_arriba_blanco_emergente" width="600px">Gastos Odontol&oacute;gicos</td>
                        <td class="tabla_arriba_blanco_emergente" width="345px">150 EUR</td>
                    </tr>
                    <tr>
                        <td class="tabla_arriba_blanco_emergente" width="600px">Traslado M&eacute;dico local (ordenado por un M&eacute;dico)</td>
                        <td class="tabla_arriba_blanco_emergente" width="345px">-</td>
                    </tr>
                    <tr>
                        <td class="tabla_arriba_blanco_emergente" width="600px">Traslado de familiar por hospitalizaci&oacute;n</td>
                        <td class="tabla_arriba_blanco_emergente" width="345px">-</td>
                    </tr>
                    <tr>
                        <td class="tabla_arriba_blanco_emergente" width="600px">Hotel para acompañante</td>
                        <td class="tabla_arriba_blanco_emergente" width="345px">-</td>
                    </tr>
                    <tr>
                        <td class="tabla_arriba_blanco_emergente" width="600px">Hotel por convalecencia</td>
                        <td class="tabla_arriba_blanco_emergente" width="345px">-</td>
                    </tr>
                    <tr>
                        <td class="tabla_arriba_blanco_emergente" width="600px">Acompañamiento de menores</td>
                        <td class="tabla_arriba_blanco_emergente" width="345px">-</td>
                    </tr>
                    <tr>
                        <td class="tabla_arriba_blanco_emergente" width="600px">Traslados de Acompañantes por fallecimiento</td>
                        <td class="tabla_arriba_blanco_emergente" width="345px">-</td>
                    </tr>
                    <tr>
                        <td class="tabla_arriba_blanco_emergente" width="600px">Repatriaci&oacute;n por fallecimiento &oacute; Entierro local</td>
                        <td class="tabla_arriba_blanco_emergente" width="345px">3.000 EUR</td>
                    </tr>
                    <tr>
                        <td class="tabla_arriba_blanco_emergente" width="600px">Regreso por siniestro a domicilio</td>
                        <td class="tabla_arriba_blanco_emergente" width="345px">-</td>
                    </tr>
                    <tr>
                        <td class="tabla_arriba_blanco_emergente" width="600px">Mensajes urgentes</td>
                        <td class="tabla_arriba_blanco_emergente" width="345px">-</td>
                    </tr>
                    <tr>
                        <td class="tabla_arriba_blanco_emergente" width="600px">Ejecutivo en substituci&oacute;n</td>
                        <td class="tabla_arriba_blanco_emergente" width="345px">-</td>
                    </tr>
                    <tr>
                        <td class="tabla_arriba_blanco_emergente" width="600px">Asistencia administrativa</td>
                        <td class="tabla_arriba_blanco_emergente" width="345px">-</td>
                    </tr>
                    <tr>
                        <td class="tabla_arriba_blanco_emergente" width="600px">Indemnizaci&oacute;n por perdida de equipaje complementaria</td>
                        <td class="tabla_arriba_blanco_emergente" width="345px">-</td>
                    </tr>
                    <tr>
                        <td class="tabla_arriba_blanco_emergente" width="600px">Compensaci&oacute;n por demora de equipaje</td>
                        <td class="tabla_arriba_blanco_emergente" width="345px">-</td>
                    </tr>
                    <tr>
                        <td class="tabla_arriba_blanco_emergente" width="600px">Transferencia de fondos para fianza legal</td>
                        <td class="tabla_arriba_blanco_emergente" width="345px">-</td>
                    </tr>
                    <tr>
                        <td class="tabla_arriba_blanco_emergente" width="600px">Referencia legal</td>
                        <td class="tabla_arriba_blanco_emergente" width="345px">-</td>
                    </tr>
                    <tr>
                        <td class="tabla_arriba_blanco_emergente" width="600px">Asistencia legal</td>
                        <td class="tabla_arriba_blanco_emergente" width="345px">-</td>
                    </tr>
                    <tr>
                        <td class="tabla_arriba_blanco_emergente" width="600px">Seguro de vida por muerte accidental en transporte p&uacute;blico</td>
                        <td class="tabla_arriba_blanco_emergente" width="345px">-</td>
                    </tr>
                    <tr>
                        <td class="tabla_arriba_blanco_emergente" width="600px">Coordinaci&oacute;n compra y env&iacute;o de flores y chocolates</td>
                        <td class="tabla_arriba_blanco_emergente" width="345px">-</td>
                    </tr>
                    <tr>
                        <td class="tabla_arriba_blanco_emergente" width="600px">Informaci&oacute;n de eventos y espect&aacute;culos culturales en las principales ciudades del mundo</td>
                        <td class="tabla_arriba_blanco_emergente" width="345px">-</td>
                    </tr>
                    <tr>
                        <td class="tabla_arriba_blanco_emergente" width="600px">Recordaci&oacute;n de 3 fechas importantes</td>
                        <td class="tabla_arriba_blanco_emergente" width="345px">-</td>
                    </tr>
                    <tr>
                        <td class="tabla_arriba_blanco_emergente" width="600px">Seguro de cancelaci&oacute;n o interrupci&oacute;n de viaje</td>
                        <td class="tabla_arriba_blanco_emergente" width="345px">-</td>
                    </tr>
                    <tr>
                        <td class="tabla_arriba_blanco_emergente" width="600px">Producto anual</td>
                        <td class="tabla_arriba_blanco_emergente" width="345px">NO</td>
                    </tr>
                    <tr>
                        <td class="tabla_arriba_blanco_emergente" width="600px">M&aacute;ximo de d&iacute;as por viaje</td>
                        <td class="tabla_arriba_blanco_emergente" width="345px">90</td>
                    </tr>
                    <tr>
                        <td class="tabla_arriba_blanco_emergente" width="600px">Limite de edad</td>
                        <td class="tabla_arriba_blanco_emergente" width="345px">65 años</td>
                    </tr>
                    <tr>
                        <td class="tabla_arriba_blanco_emergente" width="600px">Deducible</td>
                        <td class="tabla_arriba_blanco_emergente" width="345px">100 EUR</td>
                    </tr>
                    <tr>
                        <td class="titulos_clasico_emergente" width="950px" colspan="2">COBERTURA GEOGRAFICA           * * *    PAÍSES TERRITORIO SCHENGEN - Excepto el pa&iacute;s de residencia * * *</td>
                    </tr>

                </table>

                <div class="titulo_emergente">
                    <p>NUEVO PRODUCTO SCHENGEN</p>
                </div>

                <div class="titulo_emergente">
                    <p>TARIFAS POR DIAS, VALOR EXPRESADO EN DOLARES</p>
                </div>

                <table class="tabla_emergente" width="950" border="1">
                    <tr>
                        <td class="titulos_clasico_emergente" width="600px">DIAS</td>
                        <td class="titulos_clasico_emergente" width="345px">VALOR EN USD</td>
                    </tr>
                    <tr>
                        <td class="tabla_arriba_blanco_emergente" width="600px">5</td>
                        <td class="tabla_arriba_blanco_emergente" width="345px">22</td>
                    </tr>
                    <tr>
                        <td class="tabla_arriba_blanco_emergente" width="600px">10</td>
                        <td class="tabla_arriba_blanco_emergente" width="345px">38</td>
                    </tr>
                    <tr>
                        <td class="tabla_arriba_blanco_emergente" width="600px">15</td>
                        <td class="tabla_arriba_blanco_emergente" width="345px">42</td>
                    </tr>
                    <tr>
                        <td class="tabla_arriba_blanco_emergente" width="600px">20</td>
                        <td class="tabla_arriba_blanco_emergente" width="345px">51</td>
                    </tr>
                    <tr>
                        <td class="tabla_arriba_blanco_emergente" width="600px">30</td>
                        <td class="tabla_arriba_blanco_emergente" width="345px">60</td>
                    </tr>
                    <tr>
                        <td class="tabla_arriba_blanco_emergente" width="600px">45</td>
                        <td class="tabla_arriba_blanco_emergente" width="345px">70</td>
                    </tr>
                    <tr>
                        <td class="tabla_arriba_blanco_emergente" width="600px">60</td>
                        <td class="tabla_arriba_blanco_emergente" width="345px">79</td>
                    </tr>
                    <tr>
                        <td class="tabla_arriba_blanco_emergente" width="600px">75</td>
                        <td class="tabla_arriba_blanco_emergente" width="345px">102</td>
                    </tr>
                    <tr>
                        <td class="tabla_arriba_blanco_emergente" width="600px">90</td>
                        <td class="tabla_arriba_blanco_emergente" width="345px">119</td>
                    </tr>
                    <tr>
                        <td class="titulos_clasico_emergente" width="600px">DIA ADICIONAL</td>
                        <td class="titulos_clasico_emergente" width="345px">3</td>
                    </tr>
                </table> 
            </div> <!--contenido Schengen-->  
            <div id="tabla_europa">
                <div class="titulo_emergente">
                    <p>COBERTURA  DE  ASISTENCIA  EN  EL  EXTERIOR</p>
                </div>
                <table class="tabla_emergente" width="950" border="1">
                    <tr>
                        <td class="titulos_clasico_emergente" width="600px">COBERTURAS</td>
                        <td class="titulos_clasico_emergente" width="345px">EUROPA Y RESTO DEL MUNDO</td>
                    </tr>
                    <tr>
                        <td class="tabla_arriba_blanco_emergente" width="600px">Asistencia M&eacute;dica por Accidente</td>
                        <td class="tabla_arriba_blanco_emergente" width="345px">€ 40.000 / Resto del mundo USD 55.000</td>
                    </tr>
                    <tr>
                        <td class="tabla_arriba_blanco_emergente" width="600px">Asistencia M&eacute;dica por Enfermedad</td>
                        <td class="tabla_arriba_blanco_emergente" width="345px">€ 40.000 / Resto del mundo USD 55.000</td>
                    </tr>
                    <tr>
                        <td class="tabla_arriba_blanco_emergente" width="600px">Preexistencias</td>
                        <td class="tabla_arriba_blanco_emergente" width="345px">USD 500</td>
                    </tr>
                    <tr>
                        <td class="tabla_arriba_blanco_emergente" width="600px">Gastos farmac&eacute;uticos</td>
                        <td class="tabla_arriba_blanco_emergente" width="345px">USD 1.000</td>
                    </tr>
                    <tr>
                        <td class="tabla_arriba_blanco_emergente" width="600px">Gastos Odontol&oacute;gicos</td>
                        <td class="tabla_arriba_blanco_emergente" width="345px">USD 500</td>
                    </tr>
                    <tr>
                        <td class="tabla_arriba_blanco_emergente" width="600px">Traslado M&eacute;dico (al centro hospitalario mas cercano)</td>
                        <td class="tabla_arriba_blanco_emergente" width="345px">€ 40.000 / Resto del mundo USD 55.000</td>
                    </tr>
                    <tr>
                        <td class="tabla_arriba_blanco_emergente" width="600px">Traslado de familiar por hospitalizaci&oacute;n</td>
                        <td class="tabla_arriba_blanco_emergente" width="345px">ILIMITADOS</td>
                    </tr>
                    <tr>
                        <td class="tabla_arriba_blanco_emergente" width="600px">Hotel para acompañante</td>
                        <td class="tabla_arriba_blanco_emergente" width="345px">100 USD POR DIA MAXIMO 10 DÍAS</td>
                    </tr>
                    <tr>
                        <td class="tabla_arriba_blanco_emergente" width="600px">Hotel por convalecencia</td>
                        <td class="tabla_arriba_blanco_emergente" width="345px">USD 1.000</td>
                    </tr>
                    <tr>
                        <td class="tabla_arriba_blanco_emergente" width="600px">Acompañamiento de menores</td>
                        <td class="tabla_arriba_blanco_emergente" width="345px">ILIMITADOS</td>
                    </tr>
                    <tr>
                        <td class="tabla_arriba_blanco_emergente" width="600px">Traslados de Acompañantes por fallecimiento</td>
                        <td class="tabla_arriba_blanco_emergente" width="345px">MÁXIMO DOS PERSONAS</td>
                    </tr>
                    <tr>
                        <td class="tabla_arriba_blanco_emergente" width="600px">Repatriaci&oacute;n por fallecimiento &oacute; Entierro local</td>
                        <td class="tabla_arriba_blanco_emergente" width="345px">€ 40.000 / Resto del mundo USD 55.000</td>
                    </tr>
                    <tr>
                        <td class="tabla_arriba_blanco_emergente" width="600px">Regreso por siniestro a domicilio</td>
                        <td class="tabla_arriba_blanco_emergente" width="345px">SI</td>
                    </tr>
                    <tr>
                        <td class="tabla_arriba_blanco_emergente" width="600px">Mensajes urgentes</td>
                        <td class="tabla_arriba_blanco_emergente" width="345px">ILIMITADOS</td>
                    </tr>
                    <tr>
                        <td class="tabla_arriba_blanco_emergente" width="600px">Ejecutivo en substituci&oacute;n</td>
                        <td class="tabla_arriba_blanco_emergente" width="345px">NO</td>
                    </tr>
                    <tr>
                        <td class="tabla_arriba_blanco_emergente" width="600px">Asistencia administrativa</td>
                        <td class="tabla_arriba_blanco_emergente" width="345px">ILIMITADOS</td>
                    </tr>
                    <tr>
                        <td class="tabla_arriba_blanco_emergente" width="600px">Indemnizaci&oacute;n por perdida de equipaje complementaria</td>
                        <td class="tabla_arriba_blanco_emergente" width="345px">USD 1.200</td>
                    </tr>
                    <tr>
                        <td class="tabla_arriba_blanco_emergente" width="600px">Compensaci&oacute;n por demora de equipaje</td>
                        <td class="tabla_arriba_blanco_emergente" width="345px">USD 500</td>
                    </tr>
                    <tr>
                        <td class="tabla_arriba_blanco_emergente" width="600px">Transferencia de fondos para fianza legal</td>
                        <td class="tabla_arriba_blanco_emergente" width="345px">USD 15.000</td>
                    </tr>
                    <tr>
                        <td class="tabla_arriba_blanco_emergente" width="600px">Referencia legal</td>
                        <td class="tabla_arriba_blanco_emergente" width="345px">ILIMITADOS</td>
                    </tr>
                    <tr>
                        <td class="tabla_arriba_blanco_emergente" width="600px">Asistencia legal</td>
                        <td class="tabla_arriba_blanco_emergente" width="345px">USD 5.000</td>
                    </tr>
                    <tr>
                        <td class="tabla_arriba_blanco_emergente" width="600px">Seguro de vida por muerte accidental en transporte p&uacute;blico</td>
                        <td class="tabla_arriba_blanco_emergente" width="345px">USD 20.000</td>
                    </tr>
                    <tr>
                        <td class="tabla_arriba_blanco_emergente" width="600px">Coordinaci&oacute;n compra y env&iacute;o de flores y chocolates</td>
                        <td class="tabla_arriba_blanco_emergente" width="345px">COSTO BENEFICIO</td>
                    </tr>
                    <tr>
                        <td class="tabla_arriba_blanco_emergente" width="600px">Informaci&oacute;n de eventos y espect&aacute;culos culturales en las principales ciudades del mundo</td>
                        <td class="tabla_arriba_blanco_emergente" width="345px">ILIMITADOS</td>
                    </tr>
                    <tr>
                        <td class="tabla_arriba_blanco_emergente" width="600px">Recordaci&oacute;n de 3 fechas importantes</td>
                        <td class="tabla_arriba_blanco_emergente" width="345px">ILIMITADOS</td>
                    </tr>
                    <tr>
                        <td class="tabla_arriba_blanco_emergente" width="600px">Seguro de cancelaci&oacute;n o interrupci&oacute;n de viaje</td>
                        <td class="tabla_arriba_blanco_emergente" width="345px">USD 500</td>
                    </tr>
                    <tr>
                        <td class="tabla_arriba_blanco_emergente" width="600px">Producto anual</td>
                        <td class="tabla_arriba_blanco_emergente" width="345px">NO</td>
                    </tr>
                    <tr>
                        <td class="tabla_arriba_blanco_emergente" width="600px">M&aacute;ximo de d&iacute;as por viaje</td>
                        <td class="tabla_arriba_blanco_emergente" width="345px">90</td>
                    </tr>
                    <tr>
                        <td class="tabla_arriba_blanco_emergente" width="600px">Limite de edad</td>
                        <td class="tabla_arriba_blanco_emergente" width="345px">65 años</td>
                    </tr>
                    <tr>
                        <td class="tabla_arriba_blanco_emergente" width="600px">Deducible</td>
                        <td class="tabla_arriba_blanco_emergente" width="345px">NO</td>
                    </tr>
                    <tr>
                        <td class="titulos_clasico_emergente" width="950px" colspan="2">COBERTURA GEOGRAFICA           * * *   MUNDIAL - EXCEPTO COLOMBIA * * *</td>
                    </tr>
                </table>
                <div class="titulo_emergente">
                    <p>EUROPA Y RESTO DEL MUNDO TARIFAS POR DÍAS, VALOR EXPRESADO EN DOLARES</p>
                </div>
                <table class="tabla_emergente" width="950" border="1">
                    <tr>
                        <td class="titulos_clasico_emergente" width="600px">DÍAS</td>
                        <td class="titulos_clasico_emergente" width="345px">VALOR EN USD</td>
                    </tr>
                    <tr>
                        <td class="tabla_arriba_blanco_emergente" width="600px">0 A 5 </td>
                        <td class="tabla_arriba_blanco_emergente" width="345px">50</td>
                    </tr>
                    <tr>
                        <td class="tabla_arriba_blanco_emergente" width="600px">6 A 10</td>
                        <td class="tabla_arriba_blanco_emergente" width="345px">90</td>
                    </tr>
                    <tr>
                        <td class="tabla_arriba_blanco_emergente" width="600px">11 A 15</td>
                        <td class="tabla_arriba_blanco_emergente" width="345px">110</td>
                    </tr>
                    <tr>
                        <td class="tabla_arriba_blanco_emergente" width="600px">16 A 20</td>
                        <td class="tabla_arriba_blanco_emergente" width="345px">130</td>
                    </tr>
                    <tr>
                        <td class="tabla_arriba_blanco_emergente" width="600px">21 A 30</td>
                        <td class="tabla_arriba_blanco_emergente" width="345px">140</td>
                    </tr>
                    <tr>
                        <td class="tabla_arriba_blanco_emergente" width="600px">45</td>
                        <td class="tabla_arriba_blanco_emergente" width="345px">200</td>
                    </tr>
                    <tr>
                        <td class="tabla_arriba_blanco_emergente" width="600px">60</td>
                        <td class="tabla_arriba_blanco_emergente" width="345px">260</td>
                    </tr>
                    <tr>
                        <td class="tabla_arriba_blanco_emergente" width="600px">75</td>
                        <td class="tabla_arriba_blanco_emergente" width="345px">320</td>
                    </tr>
                    <tr>
                        <td class="tabla_arriba_blanco_emergente" width="600px">90</td>
                        <td class="tabla_arriba_blanco_emergente" width="345px">380</td>
                    </tr>
                </table> 
            </div> <!--contenido EUROPA-->
            <div class="vacio"> </div>
        </div>
        <div id="cerrar">
        </div> <!-- cerrar -->
    </div>
    <!-- emergente -->
    <body>
        <header>
            <div id="logo">
                <a href="http://www.axa-assistance.com.co/"><img src="images/layout/logo.png" /></a>
            </div>
            <div id="copy_home">
                <h1>
                    <p class="copy_grande">Cumple con los requisitos para tu visa Schengen.</p>
                    <p class="copy_peque">Adquiere tu tarjeta de asistencia en 3 simples pasos. &iexcl;te tomar&aacute; menos de 5 minutos!</p>
                </h1>
            </div>
        </header>
        <section class="contenedor_contenido_home">
            <div class="header_contenidos">
                <img src="images/direct/uno.png" />
                <p class="header_contenidos_copy">Selecciona tu plan:</p>
            </div>
            <div class="planes1">
                <div class="contenedor_planes">
                    <div class="plan1">
                        <p class="titulo_planes1">Plan <?php echo $planA->getDescripciontbl_plan(); ?></p>
                        <p class="copy_contenidos_grande">Desde 1,3 USD diarios <br />Cobertura &euro;30.000</p>
                        <p class="copy_contenidos_peque">La seguridad m&aacute;s econ&oacute;mica en los pa&iacute;ses schengen</p>
                        <a href="#" class="link_peque" id="informacion_clasico">» M&aacute;s informaci&oacute;n</a> <br />
                        <a href="index2.php?idplan=<?php echo $planA->getIdtbl_plan() ?>" class="link_grande">» Comprar</a>
                    </div>
                </div>
            </div>
            <div class="planes2">
                <div class="contenedor_planes">
                    <div class="plan2">
                        <p class="titulo_planes2">Plan <?php echo $planB->getDescripciontbl_plan() ?></p>
                        <p class="copy_contenidos_grande">Desde $4,22 USD diarios<br />Cobertura &euro;40.000</p>
                        <p class="copy_contenidos_peque">Obt&eacute;n la mayor seguridad en tu viaje a Europa</p>
                        <a href="#" class="link_peque"   id="informacion_europa">» M&aacute;s informaci&oacute;n</a> <br />
                        <a href="index2.php?idplan=<?php echo $planB->getIdtbl_plan() ?>" class="link_grande">» Comprar</a>
                    </div>            
                </div>
            </div>
        </div>    
    </div>   
</section>
<section class="contenedor_bordes">
    <p class="copy_contenidos_grande_rojo">No viajas a Europa?</p> <br />
    <a href="index5.php" class="link_peque_azul">» Otros planes</a>
</section>
<?php
include ('footer.php');
?>
</body>
</html>