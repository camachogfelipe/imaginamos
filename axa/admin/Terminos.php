<?php

if( !isset($_SESSION['admin']) ){
    header("location: ./index.php");
    exit;
}
include("fckeditor/fckeditor.php") ;
include ("../php/dao/terminosDAO.php");
include ("../php/entities/terminos.php");
$productoDAO = new TerminosDAO;
$listaNoticias = $productoDAO->getTerminoses("pdftbl_terminos", "ASC");
$total = $productoDAO->totalTerminoses();

?>
                    <div class="titulos">
                      <div class="titulos_texto1">Terminos<div class="cerrar"><a href="../php/action/logout.php"><img src="imagenes/contenido/cerrar.png" alt="Cerrar Sesi&oacute;n" border="0" /></a></div></div>
                      <div class="titulos_texto2">
                      </div>
                    </div>
                    <!-- FIN TITULOS -->
                    <div class="contenido_marco_sup"></div>
                    <div class="contenido_fondo">
                      <div class="subcontenido">

<div class="subtitulos">Un total de <?php echo $total;?> secciones publicadas<div class="subtitulos_menu">
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
      <div class="enunciados"></div>
      <table width="100%" class="yui" id="tableOne">
        <thead>
          <tr>
            <td width="16%" class="tableHeader">
            <?php if($total < 1){ ?>
                <a href="menuAdmin.php?s=TerminosAdd">Añadir PDF [+]</a>
            <?php } ?>
            </td>
            <td colspan="4" class="filter"><span class="rowElem">
              Buscar Terminos:
              <input id="filterBoxOne" value="" maxlength="30" size="20" type="text" />
              </span>
            </td>
          </tr>
          <?php if( isset($_GET['ok']) ){ ?>
            <tr>
                <td class="EstiloGreen">Sección eliminada</td>
            </tr>
          <?php }?>
          <tr>
            <th><a href='#' title="Click para ordenar">Nombre PDF</a></th>
            <th><a href='#' title="Click para ordenar">Acciones</a></th>
          </tr>
        </thead>
        <tbody>
        <?php
        foreach ($listaNoticias as $item) {
        $dir = './../php/action/deleteBienvenidaLineas.php?id='.$item->getId();
        ?>
          <tr>
            <td width="25%" align="center"><?php echo $item->getPdf();?></td>
            <td width="25%" align="center">
                <!--<a href="javascript:confirmar('<?php echo $dir; ?>',' Noticia (<?php echo $item->getId();?>)')" title="Eliminar">Eliminar</a>
                |-->
                <a href="menuAdmin.php?s=TerminosEditar&id=<?php echo $item->getId(); ?>">Editar</a>
            </td>
          </tr>
      <?php } ?>
        </tbody>
<!--
        <tfoot>
          <tr id="pagerOne">
            <td colspan="5"><img src="jquery/jQueryTableSorterConPaging/_assets/img/first.png" class="first"/> <img src="jquery/jQueryTableSorterConPaging/_assets/img/prev.png" class="prev"/>
                <input type="text" class="pagedisplay"/>
                <img src="jquery/jQueryTableSorterConPaging/_assets/img/next.png" class="next"/> <img src="jquery/jQueryTableSorterConPaging/_assets/img/last.png" class="last"/>
                <select name="select" class="pagesize">
                  <option selected="selected"  value="10">10</option>
                  <option value="20">20</option>
                  <option value="30">30</option>
                  <option  value="40">40</option>
                </select>            </td>
          </tr>
        </tfoot>
-->
      </table>
    </form>

    </div>
  </div>
  <!-- FIN SUBCONTENIDO -->
  <!-- FIN SUBCONTENIDO -->
</div>
<!-- FIN CONTENIDO FONDO -->
<div class="contenido_marco_inf"></div>
