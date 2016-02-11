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

include("fckeditor/fckeditor.php") ;

$daoConnection = new DAO;
$daoConnection->conectar();

?>
                    <div class="titulos">
                      <div class="titulos_texto1">Url del restricionpaisplan<div class="cerrar"><a href="../php/action/logout.php"><img src="imagenes/contenido/cerrar.png" alt="Cerrar Sesi&oacute;n" border="0" /></a></div></div>
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
            Editar restrición país plan
        </td>
        <td align="right">
            <a href="menuAdmin.php?s=restricionpaisplanVer&id=<?php echo $id;?>">Atrás</a>
        </td>
    </tr>
 </table>
<div class="subtitulos_menu">
<!--  <form id="form_boton" ><input type="button" value="Adicionar Nuevo Equipo" id="nuevo" /></form> -->
</div>
</div>
<div class="subcontenido2">
<table border="0" align="center" width="400" border="0" cellspacing="4" cellpadding="4">
    <?php if( isset($_GET['ok']) ){ ?>
        <tr>
            <td class="EstiloGreen" colspan="2">restrición país plan editada correctamente</td>
        </tr>
      <?php }?>
    <?php if( isset($_GET['ok2']) ){ ?>
        <tr>
            <td class="EstiloGreen" colspan="2">restrición país plan creada correctamente</td>
        </tr>
      <?php }?>
      <?php if( isset($_GET['error1']) ){ ?>
        <tr>
            <td class="EstiloRed" colspan="2">Tienes que introducir todos los datos</td>
        </tr>
    <?php }?>
    <?php if( isset($_GET['errorImg']) ){ ?>
        <tr>
            <td class="EstiloRed" colspan="2">La imagen debe tener un ancho inferior a 300 px</td>
        </tr>
    <?php }?>
  </table>
	  <div id="buscador">
      <div class="rowElem"></div>
      </div>
      <div class="enunciados"></div>
      <form action="./../php/action/editrestricionpaisplan.php?id=<?php echo $id;?>" method="post" enctype="multipart/form-data">
                <table border="0" align="center" width="720" border="0" cellspacing="4" cellpadding="4">
                   <tr>
                        <td>
                            <span class="Estilo3">Nombre del plan:</span><br />
                            <select name="idtbl_plan">
                            	<?php 
								foreach ($listaPlanes as $plan)
								{
								?>
                                <option value="<?php echo $plan->getIdtbl_plan() ?>" <?php if ($plan->getIdtbl_plan()== $restricionpaisplan->getTbl_plan_idtbl_plan()){?> selected="selected"<?php } ?>><?php echo $plan->getDescripciontbl_plan() ?></option>
                                <?php
								}
								?>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <span class="Estilo3">Nombre del pais:</span><br />
                            <select name="idtbl_destino">
                            	<?php 
								foreach ($listaCostos as $pais)
								{
								?>
                                	<option value="<?php echo $pais->getIdtbl_destino()?>" <?php if ($pais->getIdtbl_destino() == $restricionpaisplan->getTbl_destino_idtbl_destino()){?> selected="selected"<?php } ?>><?php echo utf8_encode($pais->getDescripciontbl_destino())?></option>
                                <?php
								}
								?>
                            </select>
                        </td>
                    </tr>
                   
                    <tr>
                        <td align="right">
                            <input type="hidden" name="id" value="<?php echo $id;?>">
                            <input type="hidden" name="s" value="832">
                            <input type="image" src="imagenes/botones/bt_modificar1.png">
                        </td>
                    </tr>
                </table>
      </form>
    </div>
  </div>
  <!-- FIN SUBCONTENIDO -->
  <!-- FIN SUBCONTENIDO -->
</div>
<!-- FIN CONTENIDO FONDO -->
<div class="contenido_marco_inf"></div>
