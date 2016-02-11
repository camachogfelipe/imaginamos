<?php session_start();?>
<?php

if( !isset($_SESSION['admin']) ){
    header("location: ./index.php");
    exit;
}

$ventaDAO = new ventaDAO();
$venta = new venta();
$ventas = $ventaDAO->gets();
$total = $ventaDAO->total();


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

    <div class="subtitulos">Un total de <?php echo $total;?> Usuarios<div class="subtitulos_menu">
<!--  <form id="form_boton" ><input type="button" value="Adicionar Nuevo Equipo" id="nuevo" /></form> -->

</div>
</div>
<div class="subcontenido2">
<form runat="server">
<table width="300" border="0" align="center" cellpadding="0" cellspacing="0">
<tr>
<td></td>
</tr>
</table>
<div id="buscador">
<div class="rowElem"></div>
</div>
</div><div class="enunciados"></div>
<table width="100%" class="yui" id="tableOne">
<thead>
<tr>
<td width="16%" class="tableHeader">

    <!--<a href="menuAdmin.php?s=ventaAdd">A&ntilde;adir USUARIOS [+]</a>-->

</td>
<td colspan="4" class="filter"><span class="rowElem">
Buscar:
<input id="filterBoxOne" value="" maxlength="30" size="30" type="text" />
</span>
</td>
</tr>

    <?php if( isset($_GET['ok']) ){ ?>
        <tr>
            <td class="EstiloGreen">venta eliminado</td>
        </tr>
    <?php }?>
    <?php if( isset($_GET['error']) ){ ?>
        <tr>
            <td class="EstiloRed">Error al eliminar venta</td>
        </tr>
    <?php }?>

<tr>

<th><a href='#' title="Click para ordenar"># REF. PagosOnline</a></th>
<th><a href='#' title="Click para ordenar">Fecha Ingreso</a></th>
<th><a href='#' title="Click para ordenar">Nombres</a></th>
<th><a href='#' title="Click para ordenar">Apellidos</a></th>
<th><a href='#' title="Click para ordenar">Pa&iacute;s</a></th>
<th><a href='#' title="Click para ordenar">Estado</a></th>

<th><a href='#' title="Click para ordenar">Acci&oacute;n</a></th>
</tr>
 </thead>

<tbody>
  <?php if($total>0): ?>
    <?php foreach ($ventas as $venta): ?>
      <tr>
        <td width="" align="center"><?=$venta->getid() ?></td>
        <td width="" align="center"><?=$venta->getfecha() ?></td>
        <td width="" align="center"><?=$venta->getnombre() ?></td>
        <td width="" align="center"><?=$venta->getapellido() ?></td>
        <td width="" align="center"><?=$venta->getpais() ?></td>
        <td width="" align="center"><?=$respuesta[$venta->getconfirmacion()] ?></td>
        <td width="20%" align="center">
          <a href="menuAdmin.php?s=ventaVer&a=<?=$venta->getid() ?>" title="Ver" >Ver</a>
           | 
          <a href="menuAdmin.php?s=ventaEstado&a=<?=$venta->getid() ?>" title="Modificar Estado" >Modificar Estado</a>
          <!-- | 
          <a href="menuAdmin.php?s=ventaEdit&a=<?=$venta->getid() ?>" title="Modificar" >Modificar</a>
           | 
          <a href="./../php/action/ventaDelete.php?id=<?=$venta->getid() ?>" onClick="return confirm('Desea eliminar este item?')" title="Eliminar">Eliminar</a>-->
        </td>
      </tr>
    <?php endforeach; ?>
  <?php endif; ?>
</tbody>

</table>
</form>
</div>
</div>
<!-- FIN SUBCONTENIDO -->
<!-- FIN SUBCONTENIDO -->
</div>
<!-- FIN CONTENIDO FONDO -->
<div class="contenido_marco_inf"></div>
