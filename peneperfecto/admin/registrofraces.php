<?php session_start();?>
<?php

if( !isset($_SESSION['admin']) ){
    header("location: ./index.php");
    exit;
}

$registrofracesDAO = new registrofracesDAO();
$registrofraces = new registrofraces();
$registrofracess = $registrofracesDAO->gets();
$total = $registrofracesDAO->total();

?>

<div class="titulos">
    <div class="titulos_texto1">REGISTRO FRACES<div class="cerrar"><a href="../php/action/logout.php"><img src="imagenes/contenido/cerrar.png" alt="Cerrar Sesi&oacute;n" border="0" /></a></div></div>
<div class="titulos_texto2">
</div>
</div>
<!-- FIN TITULOS -->
<div class="contenido_marco_sup"></div>
<div class="contenido_fondo">
<div class="subcontenido">

    <div class="subtitulos">Un total de <?php echo $total;?> publicaciones<div class="subtitulos_menu">
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

    <a href="menuAdmin.php?s=registrofracesAdd">A&ntilde;adir registro fraces [+]</a>

</td>
<td colspan="4" class="filter"><span class="rowElem">
Buscar:
<input id="filterBoxOne" value="" maxlength="30" size="30" type="text" />
</span>
</td>
</tr>

    <?php if( isset($_GET['ok']) ){ ?>
        <tr>
            <td class="EstiloGreen">registro fraces eliminado</td>
        </tr>
    <?php }?>
    <?php if( isset($_GET['error']) ){ ?>
        <tr>
            <td class="EstiloRed">Error al eliminar registro fraces</td>
        </tr>
    <?php }?>

<tr>

<th><a href='#' title="Click para ordenar">Texto</a></th>

<th><a href='#' title="Click para ordenar">Acci&oacute;n</a></th>
</tr>
 </thead>

<tbody>
  <?php if($total>0): ?>
    <?php foreach ($registrofracess as $registrofraces): ?>
      <tr>
        <td width="" align="center"><?=$registrofraces->gettexto() ?></td>
        <td width="20%" align="center">
          <a href="menuAdmin.php?s=registrofracesVer&a=<?=$registrofraces->getid() ?>" title="Ver" >Ver</a>
           | 
          <a href="menuAdmin.php?s=registrofracesEdit&a=<?=$registrofraces->getid() ?>" title="Modificar" >Modificar</a>
           | 
          <a href="./../php/action/registrofracesDelete.php?id=<?=$registrofraces->getid() ?>" onClick="return confirm('Desea eliminar este item?')" title="Eliminar">Eliminar</a>
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