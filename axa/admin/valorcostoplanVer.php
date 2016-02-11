<?php
if( !isset($_SESSION['admin']) ){
    header("location: ./index.php");
    exit;
}
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

$id = $_GET['id'];
$valorcostoplanDAO = new valorcostoplanDAO;
$valorcostoplan = $valorcostoplanDAO->getvalorcostoplan($id);
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

<div class="subtitulos">
 <table width="700">
    <tr>
        <td>
            Ver valor costo/plan
        </td>
        <td align="right">
            <a href="menuAdmin.php?s=valorcostoplan">Atrás</a>
        </td>
    </tr>
 </table>
<div class="subtitulos_menu">
<!--  <form id="form_boton" ><input type="button" value="Adicionar Nuevo Equipo" id="nuevo" /></form> -->
</div>
</div>
<div class="subcontenido2">
<table width="300" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td></td>
  </tr>
</table>
	  <div id="buscador">
      <div class="rowElem"></div>
      </div>
      <div class="enunciados"></div>
      <table border="0" align="center" width="700" border="0" cellspacing="4" cellpadding="4">
                    <tr>
                        <td>
                            Nombre del plan :<br />
                            <?php
                            foreach ($listaPlanes as $plan)
							{
								if ($plan->getIdtbl_plan()== $valorcostoplan->getIdtbl_plan())
								{
									?>
									<span class="Estilo4"><?php echo $plan->getDescripciontbl_plan();?></span>
                                    <?php
								}
							}
							?>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Nombre del costo :<br />
                            <?php
                            foreach ($listaCostos as $costo)
							{
								if ($costo->getIdtbl_costos()== $valorcostoplan->getIdtbl_costos())
								{
									?>
									<span class="Estilo4"><?php echo $costo->getDescripciontbl_costos();?></span>
                                    <?php
								}
							}
							?>
                        </td>
                    </tr>
                    
                    <tr>
                        <td>
                            Valor :<br />
                            <span class="Estilo4"><?php echo $valorcostoplan->getValortbl_valorcosto();?></span>
                        </td>
                    </tr>
                                        
                    <tr>
                        <td align="right">
                            <a href="menuAdmin.php?s=valorcostoplanEditar&id=<?php echo $valorcostoplan->getIdtbl_valorcosto();?>"><font style="font-size:large;color:#154894">Editar</font></a>
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
