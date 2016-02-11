<?php
if( !isset($_SESSION['admin']) ){
    header("location: ./index.php");
    exit;
}

include("fckeditor/fckeditor.php") ;

include '../php/dao/costoDAO.php';
include '../php/entities/costo.php';

include ("../php/dao/PlanDAO.php");
include ("../php/entities/Plan.php");

$planDAO = new PlanDAO;
$listaPlanes = $planDAO->getPlanes("idtbl_plan", "ASC");
$costoDAO = new costoDAO;
$listaCostos = $costoDAO->getcostoes("idtbl_costos", "ASC");

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
            Nueva Valor costo/plan
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
<table border="0" align="center" width="400" border="0" cellspacing="4" cellpadding="4">
      <?php if( isset($_GET['error1']) ){ ?>
        <tr>
            <td class="EstiloRed" colspan="2">Tienes que introducir todos los datos</td>
        </tr>
  <?php }?>
  <?php if( isset($_GET['error2']) ){ ?>
        <tr>
            <td class="EstiloRed" colspan="2">No se ha realizado la grabación del valor costo/plan.</td>
        </tr>
  <?php }?>
  <?php if( isset($_GET['error3']) ){ ?>
        <tr>
            <td class="EstiloRed" colspan="2">Esta ciudad ya tiene un valor costo/plan asignado</td>
        </tr>
  <?php }?>
  </table>
	  <div id="buscador">
      <div class="rowElem"></div>
      </div>
      <div class="enunciados"></div>
      <table border="0" align="center" width="700" border="0" cellspacing="4" cellpadding="4">
          <tr>
            <td>
                <form action="./../php/action/addvalorcostoplan.php" method="post" enctype="multipart/form-data">
                <table width="500">
                    
                    <tr>
                        <td>
                            <span class="Estilo3">Nombre del plan:</span><br />
                            <select name="idtbl_plan">
                            	<?php 
								foreach ($listaPlanes as $plan)
								{
								?>
                                <option value="<?php echo $plan->getIdtbl_plan() ?>"><?php echo $plan->getDescripciontbl_plan() ?></option>
                                <?php
								}
								?>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <span class="Estilo3">Nombre del costo:</span><br />
                            <select name="idtbl_costos">
                            	<?php 
								foreach ($listaCostos as $costo)
								{
								?>
                                	<option value="<?php echo $costo->getIdtbl_costos()?>"><?php echo $costo->getDescripciontbl_costos()?></option>
                                <?php
								}
								?>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <span class="Estilo3">Valor :</span><br />
                            <input type="text" name="valortbl_valorcosto" />
                            <br>
                        </td>
                    </tr>
                    <tr>
                        <td align="right">
                            <input type="submit" value="Guardar">
                        </td>
                    </tr>
                </table>
                </form>
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
