<?php session_start();?>
<?php

if( !isset($_SESSION['admin']) ){
    header("location: ./index.php");
    exit;
}
include("fckeditor/fckeditor.php") ;

$id = $_GET['a'];
$ventaDAO = new ventaDAO();
$venta = $ventaDAO->getById($id);


$respuesta [0] = "SIN RESPUESTA";
$respuesta [1] = "Transacción aprobada";
$respuesta [2] = "Pago cancelado por el usuario";
$respuesta [3] = "Pago cancelado por el usuario durante validación";
$respuesta [4] = "Transacción rechazada por la entidad";
$respuesta [5] = "Transacción declinada por la entidad";
$respuesta [6] = "Fondos insuficientes";
$respuesta [7] = "Tarjeta invalida";
$respuesta [8] = "Acuda a su entidad";
$respuesta [9] = "Tarjeta vencida";
$respuesta [10] = "Tarjeta restringida";
$respuesta [11] = "Discrecional POL";
$respuesta [12] = "Fecha de expiración o campo seg. Inválidos";
$respuesta [13] = "Repita transacción";
$respuesta [14] = "Transacción inválida";
$respuesta [15] = "Transacción en proceso de validación";
$respuesta [16] = "Combinación usuario-contraseña inválidos";
$respuesta [17] = "Monto excede máximo permitido por entidad";
$respuesta [18] = "Documento de identificación inválido";
$respuesta [19] = "Transacción abandonada capturando datos TC";
$respuesta [20] = "Transacción abandonada";
$respuesta [21] = "Imposible reversar transacción";
$respuesta [22] = "Tarjeta no autorizada para realizar compras por internet";
$respuesta [23] = "Transacción rechazada";
$respuesta [24] = "Transacción parcial aprobada";
$respuesta [25] = "Rechazada por no confirmación";
$respuesta [26] = "Comprobante generado, esperando pago en banco";
$respuesta [9994] = "Transacción pendiente por confirmar";
$respuesta [9995] = "Certificado digital no encontrado";
$respuesta [9996] = "Entidad no responde";
$respuesta [9997] = "Error de mensajería con la entidad financiera";
$respuesta [9998] = "Error en la entidad financiera";
$respuesta [9999] = "Error no especificado";
$respuesta [2012] = "Confirmado, pago en Efectivo";
$respuesta [2013] = "Bloqueado";
?>

<div class="titulos">
    <div class="titulos_texto1">USUARIOS<div class="cerrar"><a href="../php/action/logout.php"><img src="imagenes/contenido/cerrar.png" alt="Cerrar Sesi&oacute;n" border="0" /></a></div></div>
<div class="titulos_texto2">
</div>
</div>
<!-- FIN TITULOS -->

<div class="contenido_marco_sup"></div>
<div class="contenido_fondo">
<div class="subcontenido">

<div class="subtitulos">
<table width="700">
<tr>
<td>
    MODIFICAR USUARIO
</td>
<td align="right">
    <a href="menuAdmin.php?s=venta">Atr&aacute;s</a>
</td>
</tr>
</table>
<div class="subtitulos_menu">
<!--  <form id="form_boton" ><input type="button" value="Adicionar Nuevo Equipo" id="nuevo" /></form> -->
</div>
</div>

<div class="subcontenido2">
    <table border="0" align="center" width="400" cellspacing="4">
        <?php if( isset($_GET['error1']) ){ ?>
            <tr>
                <td class="EstiloRed" colspan="2">Tienes que introducir todos los datos</td>
            </tr>
        <?php }?>
        <?php if( isset($_GET['error10']) ){ ?>
            <tr>
                <td class="EstiloRed" colspan="2">El tipo de archivo no es valido</td>
            </tr>
        <?php }?>
        <?php if( isset($_GET['ok']) ){ ?>
            <tr>
                <td class="EstiloGreen" colspan="2">USUARIO, agregado correctamente</td>
            </tr>
        <?php }?>
        <?php if( isset($_GET['ok2']) ){ ?>
            <tr>
                <td class="EstiloGreen" colspan="2">USUARIO, modificado correctamente</td>
            </tr>
        <?php }?>
    </table>

<div id="buscador">
<div class="rowElem"></div>
</div>
<div class="enunciados"></div>
<table border="0" align="center" width="700" cellspacing="4" >
<tr>
<td>

    <form action="./../php/action/ventaConfirmar.php" method="post" enctype="multipart/form-data">
<table width="500">
    <input name="ref_venta" type="hidden" value="<?=$venta->getid() ?>" />
    <input name="control" type="hidden" value="1" />
<tr>
    <td>
        <span class="Estilo3">Nuevo Estado:</span><br />
        <select name="codigo_respuesta_pol">
            <option value="0">SIN RESPUESTA</option>
            <option value="2012">Confirmado, pago en Efectivo</option>
            <option value="2013">Bloqueado</option>
            <option value="1">Transacción aprobada</option>
        </select>
    </td>
</tr>

<tr>
<td align="right">
<input type="hidden" name="id" value="<?=$id ?>">
<input type="submit" value="Guardar">
</td>
</tr>

<tr>
    <td>
      <br/>
      <h3># Referencia PagosOnline: </h3>
      <p><?=$venta->getid() ?></p>
    </td>
</tr>

<tr>
    <td>
      <br/>
      <h3>Confirmaci&oacute;n PagosOnline: </h3>
      <p><?=$respuesta[$venta->getconfirmacion()] ?></p>
    </td>
</tr>

<tr>
    <td>
      <br/>
      <h3>Fecha Ingreso: </h3>
      <p><?=$venta->getfecha() ?></p>
    </td>
</tr>
<tr>
    <td>
      <br/>
      <h3>Nombres: </h3>
      <p><?=$venta->getnombre() ?></p>
    </td>
</tr>
<tr>
    <td>
      <br/>
      <h3>Apellidos: </h3>
      <p><?=$venta->getapellido() ?></p>
    </td>
</tr>
<tr>
    <td>
      <br/>
      <h3>Pa&iacute;s: </h3>
      <p><?=$venta->getpais() ?></p>
    </td>
</tr>
<tr>
    <td>
      <br/>
      <h3>E-Mail: </h3>
      <p><?=$venta->getmail() ?></p>
    </td>
</tr>
<tr>
    <td>
      <br/>
      <h3>Tel&eacute;fono: </h3>
      <p><?=$venta->gettelefono() ?></p>
    </td>
</tr>
<tr>
    <td>
      <br/>
      <h3>Forma De Pago: </h3>
      <p><?=$venta->getfpago() ?></p>
    </td>
</tr>
<tr>
    <td>
      <br/>
      <h3>Total: </h3>
      <p>$<?=$venta->gettotal() ?>.oo</p>
    </td>
</tr>
<tr>
    <td>
      <br/>
      <h3>Descripci&oacute;n Del Paquete: </h3>
      <p><?=$venta->getdescripcion() ?></p>
    </td>
</tr>




</table>
</form>
</td>
</tr>
</table>
</div>
</div>
<!-- FIN SUBCONTENIDO -->
<!-- FIN SUBCONTENIDO -->
</div>
<!-- FIN CONTENIDO FONDO -->
<div class="contenido_marco_inf"></div>
