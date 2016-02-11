<?php session_start();?>
<?php

if( !isset($_SESSION['admin']) ){
    header("location: ./index.php");
    exit;
}

$homerecomendadoDAO = new homerecomendadoDAO();
$homerecomendado = new homerecomendado();
$homerecomendados = $homerecomendadoDAO->gets();
$total = $homerecomendadoDAO->total();

?>

<div class="titulos">
    <div class="titulos_texto1">HOME RECOMENDADO<div class="cerrar"><a href="../php/action/logout.php"><img src="imagenes/contenido/cerrar.png" alt="Cerrar Sesi&oacute;n" border="0" /></a></div></div>
<div class="titulos_texto2">
</div>
</div>
<!-- FIN TITULOS -->
<div class="contenido_marco_sup"></div>
<div class="contenido_fondo">
<div class="subcontenido">

    <div class="subtitulos"><div class="subtitulos_menu">
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

    

</td>
<td colspan="4" class="filter"><span class="rowElem">
Buscar:
<input id="filterBoxOne" value="" maxlength="30" size="30" type="text" />
</span>
</td>
</tr>

    <?php if( isset($_GET['ok']) ){ ?>
        <tr>
            <td class="EstiloGreen">homerecomendado eliminado</td>
        </tr>
    <?php }?>
    <?php if( isset($_GET['error']) ){ ?>
        <tr>
            <td class="EstiloRed">Error al eliminar homerecomendado</td>
        </tr>
    <?php }?>

<tr>


<th><a href='#' title="Click para ordenar">Imagen</a></th>
<th><a href='#' title="Click para ordenar">Link</a></th>

<th><a href='#' title="Click para ordenar">Acci&oacute;n</a></th>
</tr>
 </thead>

<tbody>
  <?php if($total>0): ?>
    <?php foreach ($homerecomendados as $homerecomendado): ?>
      <tr>
        
        <td width="" align="center"><img src="./..<?=$homerecomendado->getimagen() ?>" width="246" height="212" /></td>
        <td width="" align="center"><?=$homerecomendado->getlink() ?></td>
        <td width="20%" align="center">
          <a href="menuAdmin.php?s=homerecomendadoVer&a=<?=$homerecomendado->getid() ?>" title="Ver" >Ver</a>
           | 
          <a href="menuAdmin.php?s=homerecomendadoEdit&a=<?=$homerecomendado->getid() ?>" title="Modificar" >Modificar</a>
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
