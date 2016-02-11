<?php

if( !isset($_SESSION['admin']) ){
    header("location: ./index.php");
    exit;
}
include("fckeditor/fckeditor.php") ;
include ("../php/dao/PlanDAO.php");
include ("../php/entities/Plan.php");
$planDAO = new PlanDAO;
$listaNoticias = $planDAO->getPlanes("idtbl_plan", "ASC");
$total = $planDAO->totalPlanes();

?>
                    <div class="titulos">
                      <div class="titulos_texto1">Descripción para Plan<div class="cerrar"><a href="../php/action/logout.php"><img src="imagenes/contenido/cerrar.png" alt="Cerrar Sesi&oacute;n" border="0" /></a></div></div>
                      <div class="titulos_texto2">
                      </div>
                    </div>
                    <!-- FIN TITULOS -->
                    <div class="contenido_marco_sup"></div>
                    <div class="contenido_fondo">
                      <div class="subcontenido">

<div class="subtitulos">Un total de <?php echo $total;?> Descripción del Plan publicada<div class="subtitulos_menu">
<!--  <form id="form_boton" ><input type="button" value="Adicionar Nuevo Equipo" id="nuevo" /></form> -->
</div>
</div>
<div class="subcontenido2">
<form runat="server">
<table width="300" border="0" align="center" cellpadding="0" cellspacing="0">
  
</table>
	  <div id="buscador">
      <div class="rowElem"></div>
      </div>
      <div class="enunciados"></div>
      <table width="100%" class="yui" id="tableOne">
        <thead>
          <tr>
            <td width="19%" class="tableHeader">
            <?php //if($total < 3){ ?>
                <a href="menuAdmin.php?s=PlanAdd">Añadir Descripción para Plan[+]</a>
            <?php //} ?>
            </td>
            <td>
            </td>
            <td colspan="4" class="filter"><span class="rowElem">
              Buscar:
              <input id="filterBoxOne" value="" maxlength="30" size="30" type="text" />
              </span>
            </td>
          </tr>
          <?php if( isset($_GET['ok']) ){ ?>
            <tr>
                <td class="EstiloGreen">Descripción de Plan eliminada</td>
            </tr>
          <?php }?>
          <tr>
            <th><a href='#' title="Click para ordenar">Nombre</a></th>
            <th><a href='#' title="Click para ordenar">P. anual</a></th>
            <th><a href='#' title="Click para ordenar">Días Máx</a></th>
            <th><a href='#' title="Click para ordenar">Edad Mín.</a></th>
            <th><a href='#' title="Click para ordenar">Edad Máx.</a></th>
            <th><a href='#' title="Click para ordenar">Valor día</a></th>
            <th><a href='#' title="Click para ordenar">Acciones</a></th>
            
          </tr>
        </thead>
        <tbody>
        <?php
        foreach ($listaNoticias as $item) {
        $dir = './../php/action/deletePlan.php?id='.$item->getIdtbl_plan();
        ?>
          <tr>
            <td width="19%" align="center"><?php echo $item->getDescripciontbl_plan();?></td>
            <td width="11%" align="center"><?php echo $item->getProductoanualtbl_plan();?></td>
            <td width="13%" align="center"><?php echo $item->getDiasmaxtbl_plan();?></td>
            <td width="16%" align="center"><?php echo $item->getEdadmintbl_plan();?></td>
            <td width="15%" align="center"><?php echo $item->getEdamaxtbl_plan();?></td>
            <td width="15%" align="center"><?php echo $item->getValordiaAddtbl_plan();?></td>
            <td width="26%" align="center">
                <a href="menuAdmin.php?s=PlanEditar&id=<?php echo $item->getIdtbl_plan(); ?>">Editar</a>
            </td>
          </tr>
      <?php } ?>
        </tbody>
        <tfoot>
          <tr id="pagerOne">
          <td></td>
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
