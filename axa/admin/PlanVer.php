<?php
if( !isset($_SESSION['admin']) ){
    header("location: ./index.php");
    exit;
}
include ("../php/dao/PlanDAO.php");
include ("../php/entities/Plan.php");
$id = $_GET['id'];
$planDAO = new PlanDAO;
$plan = $planDAO->getPlan($id);
$listaNoticias = $planDAO->getPlanes("idtbl_plan", "ASC");

$total = $planDAO->totalPlanes();

?>
                    <div class="titulos">
                      <div class="titulos_texto1">Plan<div class="cerrar"><a href="../php/action/logout.php"><img src="imagenes/contenido/cerrar.png" alt="Cerrar Sesi&oacute;n" border="0" /></a></div></div>
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
            Ver Plan
        </td>
        <td align="right">
            <a href="menuAdmin.php?s=Plan">Atrás</a>
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
                            Nombre :<br />
                            <span class="Estilo4"><?php echo $plan->getDescripciontbl_plan();?></span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Producto anual :<br />
                            <span class="Estilo4"><?php echo $plan->getProductoanualtbl_plan();?></span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Días máximos viaje :<br />
                            <span class="Estilo4"><?php echo $plan->getDiasmaxtbl_plan();?></span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Edad mínima :<br />
                            <span class="Estilo4"><?php echo $plan->getEdadmintbl_plan();?></span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Edad máxima :<br />
                            <span class="Estilo4"><?php echo $plan->getEdamaxtbl_plan();?></span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Valor día adicional :<br />
                            <span class="Estilo4"><?php echo $plan->getValordiaAddtbl_plan();?></span>
                        </td>
                    </tr>
                    <tr>
                        <td align="right">
                            <a href="menuAdmin.php?s=PlanEditar&id=<?php echo $plan->getIdtbl_plan();?>"><font style="font-size:large;color:#154894">Editar</font></a>
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
