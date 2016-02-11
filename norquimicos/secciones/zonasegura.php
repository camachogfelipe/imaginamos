<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php
if (!isset($_SESSION["id"])) {
echo "<script type='text/javascript'>window.location='index.php?seccion=index';</script>";
} else {
$nombre = $_SESSION["Nombre"];
$sector = $_SESSION["sector"];
if ($sector == "FBogotá") {
$con = "Fuera de Bogotá";
} else {
$con = "Bogotá";
}
include("admin/core/class/db.class.php");
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Norquimicos</title>
<meta name="viewport" content="width=1024, maximum-scale=2">
<link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />
<meta http-equiv="content-language" content="es" />
<meta http-equiv="pragma" content="No-Cache" />
<meta name="Keywords" lang="es" content="" />
<meta name="Description" lang="es" content="" />
<meta name="copyright" content="imaginamos.com" />
<meta name="date" content="2011" />
<meta name="author" content="diseño web: imaginamos.com" />
<meta name="robots" content="All" />
<link href="css/norquimicos.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="jquery.ui.all.css">
    <link href="css/jquery.selectbox.css" rel="stylesheet" type="text/css" />
    <link href="css/tabla.css" rel="stylesheet" type="text/css" />
    <?php include 'scripst.php'; ?>
    <style type="text/css">
        .documentacion, .zona-seguridad {display:none !important;}
    </style>
    </head>
    <body onload="menuSlider.init('menu','slide')">
        <div class="principal">
            <?php include 'header.php'; ?>       
            <div class="titulo">
                <div class="contienetitulo"><h1>ZONA SEGURA</h1></div>
            </div>    
            <div class="contenido">
                <div class="contenedorcompany">
                    <div class="con-cerrar-zona">
                        <a id="btnmoreenviar" href="index.php?seccion=salir"><span id="bold">cerrar sesi&oacute;n</span></a>
                        <a id="btnmoreenviar" style="font-size: 11px;" href="index.php?seccion=hechas"><span id="bold">Cotizaciones realizadas</span></a>
                        <a id="btnmoreenviar" target="_blank" href="http://www.norquimicos.com.co/catalogo2013.pdf" ><span id="bold">Lista de precios</span></a><!--#recuperar//// class="zona-password" ////formulario comentado al final-->
                    </div>  
                    <h1 style="color: #ee3135;"> Hola,</h1>
                    <h1 class="t-zona"><?= $nombre ?>&nbsp;&nbsp; - &nbsp;&nbsp;<?= $con ?></h1>
                    <p>Su buen desempe&#241;o en este m&#243;dulo es importante para crecer y ser los mejores. Confiamos totalmente en usted</p>
                    <div class="con-table">
                        <?php
                        $db = new Database();
                        $db->connect();
                        $db->doQuery("SELECT * FROM cotizaciones WHERE ubicacion = '" . $con . "' ORDER BY id DESC", SELECT_QUERY);
                        $resultado1 = $db->results;
                        for ($a = 0, $b = count($resultado1); $a < $b; $a++) {
                            $resultados = DbHandler::GetAll("SELECT * FROM cantidad_cotizacion WHERE id_cotizacion='" . $resultado1[$a]["id"] . "' ORDER BY id DESC");
                            $arrayfinal = array();
                            $arrayfinalcant = array();
                            //se hace segun el numero de veces que este en la consulta
                            for ($i = 0, $tot = count($resultados); $i < $tot; $i++) {
                                //if resultados[posicion] esta en arrayfinal
                                if (in_array($resultados[$i]["id_productos"], $arrayfinal)) {
                                    // se evalua o se busca en todas las posiciones
                                    for ($j = 0, $tot2 = count($arrayfinal); $j < $tot2; $j++) {
                                        //si la posicion es verdadera entonces se suma en 1 la cantidad
                                        if ($arrayfinal[$j] == $resultados[$i]["id_productos"]) {
                                            $arrayfinalcant[$j] = (int) $arrayfinalcant[$j] + 1;
                                        }
                                    }
                                } else {
                                    $arrayfinal[] = $resultados[$i]["id_productos"];
                                    $arrayfinalcant[] = 1;
                                    //   $arrayId[]=$resultados[$i]["id_productos"];
                                }
                            }
                            ?>
                            <div style="display:none;">
                                <div  id="cot-no<?= $a ?>" style="width: 80%;background-color: #fff;padding: 10%;overflow: hidden;">
                                    <h2 style="font: 18px 'MyriadPro-Bold';color: #ee3135;text-align: center;">Lo sentimos la cotizaci&oacute;n se est&aacute; evaluando en este momento.</h2>
                                </div>
                                <div  id="ver-cot<?= $a ?>" style="background-color: #fff;width: 100%;height: 100%;">
                                    <h2 style="margin-left: 50px;padding-top: 20px;color: red;font: 18px 'MyriadPro-Bold';"><?= ($resultado1[$a]["nombre"]) ?></h2>
                                    <h3>Productos a cotizar:</h3>
                                    <div class="con-pro-cotizar">
                                        <div class="head-vista-c">

                                            <div class="head-vista-l">Producto</div>                                    
                                            <div class="head-vista-r">Referencia</div>
                                            <div class="head-vista-d">Cantidad</div>
                                        </div>
                                        <div class="fila-vista-c">
                                            <ul class="lista-rapida">
                                                <?php
                                                for ($c = 0, $d = count($arrayfinal); $c < $d; $c++) {
                                                    $produ = DbHandler::GetAll("SELECT * FROM productos WHERE id=" . $arrayfinal[$c]);
                                                    ?>
                                                    <li>
                                                        <div style="width: 247px!important;"><?= ($produ[0]["nombre"]) ?></div>                                                                                               
                                                        <div style="width: 107px;font-family: Helvetica, sans-serif;"><span ><?= $arrayfinalcant[$c] ?></span></div>
                                                        <div style="118px!important;font-family: Helvetica, sans-serif;"><?= ($produ[0]["referencia"]) ?></div>    
                                                    </li>
                                                <?php } ?>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                        <table cellpadding="0" cellspacing="0" border="0" class="display" id="tablaZona">
                            <!--Encabezado Tabla-->
                            <thead>
                                <tr>
                                    <th width="45%">Cliente</th>
                                    <th width="20%">Fecha</th>
                                    <th width="15%">Cantidad</th>
                                    <th width="10%" style="cursor:default;">Ver m&aacute;s</th>
                                    <th width="10%" style="cursor:default;">Responder</th>
                                </tr>
                            </thead>
                            <?php
                            $db = new Database();
                            $db->connect();
                            $db->doQuery("SELECT * FROM cotizaciones WHERE ubicacion = '" . $con . "' ORDER BY id DESC", SELECT_QUERY);
                            $resultado = $db->results;
                          
                            
                            ?>
                            <!--Contenido Tabla-->
                            <tbody style="position:relative;">
                                <?php
                                for ($a = 0, $b = count($resultado); $a < $b; $a++) {
                                    //  echo $resultado[$a]["nombre"];
                                    if ($resultado[$a]["estado"] == "completo") {

                                    } else {
                                        $db->connect();
                                        $db->doQuery("SELECT * FROM cantidad_cotizacion WHERE id_cotizacion = '" . $resultado[$a]["id"] . "' ORDER BY id DESC", SELECT_QUERY);
                                        $cant = $db->results;
                                        $fecha = explode("-", $resultado[$a]["fecha"]);
                                        $ano = $fecha[0];
                                        $mes = $fecha[1];
                                        $dia = $fecha[2];
                                        ?>
                                        <tr>
                                            <td class="center"><?= ($resultado[$a]["nombre"]); ?></td>
                                            <td class="center"><?= $mes ?> / <?= $dia ?> / <?= $ano ?></td>
                                            <td class="center"><?= count($cant) ?></td>
                                            <td class="center"><a id="btnmorerev-1" class="cot-desc" href="#ver-cot<?= $a ?>"></a></td>
                                            <?php if ($resultado[$a]["estado"] == "incompleto") { ?>
                                                <td class="center"><a id="btnmorerev-3" onclick="return cambiarestado(<?= $resultado[$a]["id"] ?>)" href="index.php?seccion=editar&ss=<?= $resultado[$a]["id"] ?>"></a></td>
                                            <?php } else { ?>
                                                <td class="center"><a id="btnmorerev-2" class="cot-nula" href="#cot-no<?= $a ?>"></a></td>
                                            <?php } ?>  
                                        </tr>
                                    <?php } ?>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>       
            <?php include 'footer.php'; ?>
        </div>
    </body>
    </html>
<?php } ?>
<?php
if (isset($_GET["comp"])) {
    echo utf8_encode('<script>setTimeout(\'alert("Cotizaci�n terminada con �xito");\',400);</script>');
}
?>