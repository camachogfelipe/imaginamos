<?php session_start();?>
<?php

if( !isset($_SESSION['admin']) ){
    header("location: ./index.php");
    exit;
}

$redesDAO = new redesDAO();
$redes = new redes();
$redess = $redesDAO->gets();
$total = $redesDAO->total();

$NOMBRE[1] = "FACEBOOK";
$NOMBRE[2] = "TWITTER";
$NOMBRE[3] = "YOUTUBE";
?>

<div class="titulos">
    <div class="titulos_texto1">REDES<div class="cerrar"><a href="../php/action/logout.php"><img src="imagenes/contenido/cerrar.png" alt="Cerrar Sesi&oacute;n" border="0" /></a></div></div>
<div class="titulos_texto2">
</div>
</div>
<!-- FIN TITULOS -->
<div class="contenido_marco_sup"></div>
<div class="contenido_fondo">
<div class="subcontenido">

    <div class="subtitulos"><!--Un total de <?php echo $total;?> publicaciones--><div class="subtitulos_menu">
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

<!--    <a href="menuAdmin.php?s=redesAdd">A&ntilde;adir redes [+]</a>-->

</td>
<td colspan="4" class="filter"><span class="rowElem">
Buscar:
<input id="filterBoxOne" value="" maxlength="30" size="30" type="text" />
</span>
</td>
</tr>

    <?php if( isset($_GET['ok']) ){ ?>
        <tr>
            <td class="EstiloGreen">redes eliminado</td>
        </tr>
    <?php }?>
    <?php if( isset($_GET['error']) ){ ?>
        <tr>
            <td class="EstiloRed">Error al eliminar redes</td>
        </tr>
    <?php }?>

<tr>

<th><a href='#' title="Click para ordenar">Red</a></th>
<th><a href='#' title="Click para ordenar">Link</a></th>

<th><a href='#' title="Click para ordenar">Acci&oacute;n</a></th>
</tr>
 </thead>

<tbody>
  <?php if($total>0): ?>
    <?php foreach ($redess as $redes): ?>
      <tr>
        <td width="" align="center"><?=$NOMBRE[$redes->getid()] ?></td>
        <td width="" align="center"><?=$redes->getlink() ?></td>
        <td width="20%" align="center">
          <a href="menuAdmin.php?s=redesVer&a=<?=$redes->getid() ?>" title="Ver" >Ver</a>
           | 
          <a href="menuAdmin.php?s=redesEdit&a=<?=$redes->getid() ?>" title="Modificar" >Modificar</a>
<!--           | 
          <a href="./../php/action/redesDelete.php?id=<?=$redes->getid() ?>" onClick="return confirm('Desea eliminar este item?')" title="Eliminar">Eliminar</a>-->
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
