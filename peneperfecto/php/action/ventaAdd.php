<?php session_start();?>
<?php


include '../dao/daoConnection.php';
include '../dao/ventaDAO.php';
include '../entities/venta.php';
include '../functions/validar.php';
include '../functions/textoHTML.php';

$id = $_POST['id'];
$fecha = date('y-m-d');
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$pais = $_POST['pais'];
$mail = $_POST['mail'];
$telefono = "000 000 00 00";
$fpago = $_POST['fpago'];
$total = 98;
$descripcion = "Manual de ejercicios naturales para agrandar el pene.";
$confirmacion = 0;

$location = "location: ./../../registro_pagaduria.php?p";



if (!validarTexto($nombre)){
    header($location.'&error1');
    exit;
}

if (!validarTexto($apellido)){
    header($location.'&error1');
    exit;
}

if (!validarTexto($pais)){
    header($location.'&error1');
    exit;
}

if (!validarTexto($mail)){
    header($location.'&error1');
    exit;
}


if (!validarTexto($fpago)){
    header($location.'&error1');
    exit;
}




$controlefectivo = 0;
if($fpago == 1){
    $fpago = "Tarjeta de Cr&eacute;dito";
}
if($fpago == 2){
    $fpago = "Efectivo";
    $controlefectivo = 1;
}

$pass = rand(0,9).rand(100,9999).rand(100,9999);


$ventaDAO = new ventaDAO();

$venta = new venta();

$venta->setid($id);
$venta->setfecha($fecha);
$venta->setnombre($nombre);
$venta->setapellido($apellido);
$venta->setpais($pais);
$venta->setmail($mail);
$venta->settelefono($telefono);
$venta->setfpago($fpago);
$venta->settotal($total);
$venta->setdescripcion($descripcion);
$venta->setconfirmacion($confirmacion);
$venta->setpass(md5($pass));

$ventaDAO->save($venta);

$id = $ventaDAO->getLastId();



$mensaje = "Venta pagina PenePerfecto "."\r\n";
$mensaje .= ""."\r\n";
$mensaje .= ""."\r\n";
$mensaje .= "Fecha: $fecha"."\r\n";
$mensaje .= "Nombre: $nombre"." "."$apellido"."\r\n";
$mensaje .= "Pais: $pais"."\r\n";
$mensaje .= "Email: $mail"."\r\n";
$mensaje .= ""."\r\n";
$mensaje .= ""."\r\n";
$mensaje .= "Total compra: $ $total.oo USD"."\r\n";
$mensaje .= ""."\r\n";
$mensaje .= "Descripcion:"."\r\n";
$mensaje .= $descripcion."\r\n";

mail("artu200@hotmail.com", "Venta online PenePerfecto", $mensaje);

$mensaje .= ""."\r\n";
$mensaje .= ""."\r\n";
$mensaje .= "Usuario: ".$mail."\r\n";
$mensaje .= "Contraseña: ".$pass."\r\n";

mail($mail, "NO RESPONDER - Notificación de pedido", "Desde PenePerfecto.com te informamos que tu transacción está siendo procesada a través de pagosonline.com, el pago seguro en internet. 
Para mayor información sobre el estado de tu transacción electrónica, por favor consulta:  www.pagosonline.com 
Si tienes alguna duda relacionada con tu pedido, por favor comunícate con nosotros a través de nuestro portal: www.peneperfecto.com 
".$mensaje);


if($controlefectivo == 1){
    $location = "location: ./../../info_pagoefectivo.php";
    header($location);
    exit;
}
else{
    

//$ncliente = "49874";
    $ncliente = "45831";
$llave = "1244fb28ed4";


     $firma = "$llave"."~".$ncliente."~".$id."~".$total.".00"."~USD";
     $firma = md5($firma);
     
     //action pruebas :     action="https://gateway2.pagosonline.net/apps/gateway/index.html"
     //action produccion:   action="https://gateway.pagosonline.net/apps/gateway/index.html"
?>
<form name="pago" method="post" action="https://gateway.pagosonline.net/apps/gateway/index.html" >
    
    <input name="usuarioId" type="hidden" value="<?=$ncliente ?>">
    <input name="refVenta" type="hidden" value="<?=$id ?>">
    <input name="descripcion" type="hidden" value="<?=$descripcion ?>">
    <input name="valor" type="hidden" value="<?=$total ?>.00">
    <input name="moneda" type="hidden" value="USD">
    <input name="firma" type="hidden" value="<?=$firma ?>">
    <input name="emailComprado" type="hidden" value="<?=$mail ?>">
    <input name="url_respuesta" type="hidden" value="http://vidapublica.com/penePerfecto/pagina-respuesta.php">
    <input name="url_confirmacion" type="hidden" value="http://vidapublica.com/penePerfecto/php/action/ventaConfirmar.php">
</form>
<script type="text/javascript">
    document.pago.submit();
</script>

<?
}
?>