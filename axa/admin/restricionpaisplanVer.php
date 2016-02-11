<?php
if( !isset($_SESSION['admin']) ){
    header("location: ./index.php");
    exit;
}
include ("../php/dao/restricionpaisplanDAO.php");
include ("../php/entities/restricionpaisplan.php");

include '../php/dao/paisDAO.php';
include '../php/entities/pais.php';

include ("../php/dao/PlanDAO.php");
include ("../php/entities/Plan.php");

$planDAO = new PlanDAO;
$listaPlanes = $planDAO->getPlanes("idtbl_plan", "ASC");

$paisDAO = new paisDAO;
$listaCostos = $paisDAO->getpaises("descripciontbl_destino", "ASC");

$id = $_GET['id'];
$restricionpaisplanDAO = new restricionpaisplanDAO;
$restricionpaisplan = $restricionpaisplanDAO->getrestricionpaisplan($id);
$listaNoticias = $restricionpaisplanDAO->getrestricionpaisplanes("idtbl_restircpaises", "ASC");

$total = $restricionpaisplanDAO->totalrestricionpaisplanes();

?>
                    <div class="titulos">
                      <div class="titulos_texto1">restricionpaisplan<div class="cerrar"><a href="../php/action/logout.php"><img src="imagenes/contenido/cerrar.png" alt="Cerrar Sesi&oacute;n" border="0" /></a></div></div>
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
            Ver restricionpaisplan
        </td>
        <td align="right">
            <a href="menuAdmin.php?s=restricionpaisplan">Atrás</a>
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
								if ($plan->getIdtbl_plan()== $restricionpaisplan->getTbl_plan_idtbl_plan())
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
                            Nombre del pais :<br />
                            <?php
                            foreach ($listaCostos as $pais)
							{
								if ($pais->getIdtbl_destino() == $restricionpaisplan->getTbl_destino_idtbl_destino())
								{
									?>
									<span class="Estilo4"><?php echo utf8_encode($pais->getDescripciontbl_destino());?></span>
                                    <?php
								}
							}
							?>
                        </td>
                    </tr>
                    
                                                            
                    <tr>
                        <td align="right">
                            <a href="menuAdmin.php?s=restricionpaisplanEditar&id=<?php echo $restricionpaisplan->getIdtbl_valorpais();?>"><font style="font-size:large;color:#154894">Editar</font></a>
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
