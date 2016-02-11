<?php

if( !isset($_SESSION['admin']) ){
    header("location: ./index.php");
    exit;
}
include("fckeditor/fckeditor.php") ;
include ("../php/dao/titulosDAO.php");
include ("../php/entities/titulos.php");
$tituloDAO = new TituloDAO;
$listaNoticias = $tituloDAO->getTituloes("id", "ASC");
$total = $tituloDAO->totalTituloes();

?>
                    <div class="titulos">
                      <div class="titulos_texto1">Títulos<div class="cerrar"><a href="../php/action/logout.php"><img src="imagenes/contenido/cerrar.png" alt="Cerrar Sesi&oacute;n" border="0" /></a></div></div>
                      <div class="titulos_texto2">
                      </div>
                    </div>
                    <!-- FIN TITULOS -->
                    <div class="contenido_marco_sup"></div>
                    <div class="contenido_fondo">
                      <div class="subcontenido">

<div class="subtitulos">Un total de <?php echo $total;?> títulos publicados<div class="subtitulos_menu">
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
                <a href="menuAdmin.php?s=descripcionsAdd">Añadir Títulos [+]</a>
            <?php } ?>
            </td>
            <td colspan="4" class="filter"><span class="rowElem">
              Buscar Línea:
              <input id="filterBoxOne" value="" maxlength="30" size="20" type="text" />
              </span>
            </td>
          </tr>
          <?php if( isset($_GET['ok']) ){ ?>
            <tr>
                <td class="EstiloGreen">Títulos eliminados</td>
            </tr>
          <?php }?>
          <tr>
            <th><a href='#' title="Click para ordenar">Título Línea1</a></th>
           <th><a href='#' title="Click para ordenar">Img. 1</a></th>
            <th><a href='#' title="Click para ordenar">Título Línea2</a></th>
            <th><a href='#' title="Click para ordenar">Img. 2</a></th>
            <th><a href='#' title="Click para ordenar">Título Línea3</a></th>
            <th><a href='#' title="Click para ordenar">Img. 3</a></th>
            <th><a href='#' title="Click para ordenar">Título Línea4</a></th>
            <th><a href='#' title="Click para ordenar">Img. 4</a></th>
           </tr>
        </thead>
        <tbody>
        <?php
        foreach ($listaNoticias as $item) {
        $dir = './../php/action/deleteDescripcion.php?id='.$item->getId();
        ?>
          <tr>
            <td width="25%" align="center"><?php echo $item->getTitulo1();?></td>
            <td width="25%" align="center"><img src="imagenes/thumbs/<?php echo $item->getImagentitulo1();?>" width="50px" height="50px"/></td>
            <td width="25%" align="center"><?php echo $item->getTitulo2();?></td>
            <td width="25%" align="center"><img src="imagenes/thumbs/<?php echo $item->getImagentitulo2();?>" width="50px" height="50px"/></td>
            <td width="25%" align="center"><?php echo $item->getTitulo3();?></td>
            <td width="25%" align="center"><img src="imagenes/thumbs/<?php echo $item->getImagentitulo3();?>" width="50px" height="50px"/></td>
            <td width="25%" align="center"><?php echo $item->getTitulo4();?></td>
            <td width="25%" align="center"><img src="imagenes/thumbs/<?php echo $item->getImagentitulo4();?>" width="50px" height="50px"/></td>
            <td width="25%" align="center">
                <a href="javascript:confirmar('<?php echo $dir; ?>',' Noticia (<?php echo $item->getId();?>)')" title="Eliminar">Eliminar</a>
                |
                <a href="menuAdmin.php?s=descripcionsVer&id=<?php echo $item->getId(); ?>">ver</a>
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
