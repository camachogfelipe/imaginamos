<?php

if( !isset($_SESSION['admin']) ){
    header("location: ./index.php");
    exit;
}
include("fckeditor/fckeditor.php") ;

include ("../php/dao/valorcostoplanDAO.php");
include ("../php/entities/valorcostoplan.php");

include '../php/dao/costoDAO.php';
include '../php/entities/costo.php';

include ("../php/dao/PlanDAO.php");
include ("../php/entities/Plan.php");

$planDAO = new PlanDAO;
$listaPlanes = $planDAO->getPlanes("idtbl_plan", "ASC");

$costoDAO = new costoDAO;
$listaCostos = $costoDAO->getcostoes("descripciontbl_costos", "ASC");

$valorcostoplanDAO = new valorcostoplanDAO;
$listaNoticias = $valorcostoplanDAO->getvalorcostoplanes("idtbl_valorcosto", "ASC");
$total = $valorcostoplanDAO->totalvalorcostoplanes();

?>
                    <div class="titulos">
                      <div class="titulos_texto1">Valor costo/plan<div class="cerrar"><a href="../php/action/logout.php"><img src="imagenes/contenido/cerrar.png" alt="Cerrar Sesi&oacute;n" border="0" /></a></div></div>
                      <div class="titulos_texto2">
                      </div>
                    </div>
                    <!-- FIN TITULOS -->
                    <div class="contenido_marco_sup"></div>
                    <div class="contenido_fondo">
                      <div class="subcontenido">

<div class="subtitulos">Un total de <?php echo $total;?> Valor costo/plan publicada<div class="subtitulos_menu">
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
            <?php //if($total < 3){ ?>
                <a href="menuAdmin.php?s=valorcostoplanAdd">Añadir valor costo/plan[+]</a>
            <?php //} ?>
            </td>
            <td colspan="4" class="filter"><span class="rowElem">
              Buscar:
              <input id="filterBoxOne" value="" maxlength="30" size="30" type="text" />
              </span>
            </td>
          </tr>
          <?php if( isset($_GET['ok']) ){ ?>
            <tr>
                <td class="EstiloGreen">Valor costo/plan eliminada</td>
            </tr>
          <?php }?>
          <tr>
            <th><a href='#' title="Click para ordenar">Plan</a></th>
            <th><a href='#' title="Click para ordenar">Días</a></th>
            <th><a href='#' title="Click para ordenar">Valor</a></th>
            <th><a href='#' title="Click para ordenar">Acciones</a></th>
            
          </tr>
        </thead>
        <tbody>
        <?php
        foreach ($listaNoticias as $item) {
        $dir = './../php/action/deletevalorcostoplan.php?id='.$item->getIdtbl_valorcosto();
        ?>
          <tr>
            <td width="25%" align="center">
				<?php 
					foreach ($listaPlanes as $plan)
							{
								if ($plan->getIdtbl_plan()== $item->getIdtbl_plan())
								{
									echo $plan->getDescripciontbl_plan();
								}
							}
                ?>
            </td>
            <td width="25%" align="center">
				<?php 
	                foreach ($listaCostos as $costo)
							{
								if ($costo->getIdtbl_costos()== $item->getIdtbl_costos())
								{
									echo $costo->getDescripciontbl_costos();
								}
							}
                ?>
            </td>
			<td><?php echo $item->getValortbl_valorcosto();?></td>
            
            <td width="25%" align="center">
                
                <a href="menuAdmin.php?s=valorcostoplanEditar&id=<?php echo $item->getIdtbl_valorcosto(); ?>">editar</a>
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
                  <option  value="60">60</option>
                  <option  value="80">80</option>
                  <option  value="<?php echo $total?>">Todos</option>
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
