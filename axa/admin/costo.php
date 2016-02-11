<?php

if( !isset($_SESSION['admin']) ){
    header("location: ./index.php");
    exit;
}
include("fckeditor/fckeditor.php") ;
include ("../php/dao/costoDAO.php");
include ("../php/entities/costo.php");
$costoDAO = new costoDAO;
$listaNoticias = $costoDAO->getcostoes("descripciontbl_costos", "ASC");
$total = $costoDAO->totalcostoes();

?>
                    <div class="titulos">
                      <div class="titulos_texto1">Costos<div class="cerrar"><a href="../php/action/logout.php"><img src="imagenes/contenido/cerrar.png" alt="Cerrar Sesi&oacute;n" border="0" /></a></div></div>
                      <div class="titulos_texto2">
                      </div>
                    </div>
                    <!-- FIN TITULOS -->
                    <div class="contenido_marco_sup"></div>
                    <div class="contenido_fondo">
                      <div class="subcontenido">

<div class="subtitulos">Un total de <?php echo $total;?> Costos publicada<div class="subtitulos_menu">
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
            	<?php //if ($total<3) {?>
                <a href="menuAdmin.php?s=costoAdd">Añadir Costos[+]</a>
            	<?php //}?>
            </td>
            <td colspan="4" class="filter"><span class="rowElem">
              Buscar:
              <input id="filterBoxOne" value="" maxlength="30" size="30" type="text" />
              </span>
            </td>
          </tr>
          <?php if( isset($_GET['ok']) ){ ?>
            <tr>
                <td class="EstiloGreen">Costo eliminada</td>
            </tr>
          <?php }?>
          <tr>
            <th><a href='#' title="Click para ordenar">Costo</a></th>
            <th><a href='#' title="Click para ordenar">Acciones</a></th>
          </tr>
        </thead>
        <tbody>
        <?php
        foreach ($listaNoticias as $item) {
        $dir = './../php/action/deletecosto.php?id='.base64_encode($item->getIdtbl_costos());
		//$dir = './../php/action/deletecosto.php?id='.$item->getIdtbl_costos();
        ?>
          <tr>
            <td width="25%" align="center"><?php echo $item->getDescripciontbl_costos();?></td>
            
            <td width="25%" align="center">
                <a href="javascript:confirmar('<?php echo $dir; ?>',' costo (<?php echo $item->getIdtbl_costos();?>)')" title="Eliminar">Eliminar</a>
                |
                <a href="menuAdmin.php?s=costoEditar&id=<?php echo base64_encode($item->getIdtbl_costos()); ?>">editar</a>
            </td>
          </tr>
      <?php } ?>
        </tbody>
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
                </select>           
              </td>
          </tr>
        </tfoot>
        
      </table>
    </form>

    </div>
  </div>
  <!-- FIN SUBCONTENIDO -->
  <!-- FIN SUBCONTENIDO -->
</div>
<!-- FIN CONTENIDO FONDO -->
<div class="contenido_marco_inf"></div>
