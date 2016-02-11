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

include("fckeditor/fckeditor.php") ;

$daoConnection = new DAO;
$daoConnection->conectar();

?>
                    <div class="titulos">
                      <div class="titulos_texto1">Descripción del Plan<div class="cerrar"><a href="../php/action/logout.php"><img src="imagenes/contenido/cerrar.png" alt="Cerrar Sesi&oacute;n" border="0" /></a></div></div>
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
            Editar Descripción del Plan
        </td>
        <td align="right">
            <a href="menuAdmin.php?s=PlanVer&id=<?php echo $id;?>">Atrás</a>
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
            <td class="EstiloGreen" colspan="2">Descripción del Plan editada correctamente</td>
        </tr>
      <?php }?>
    <?php if( isset($_GET['ok2']) ){ ?>
        <tr>
            <td class="EstiloGreen" colspan="2">Descripción del Plan creada correctamente</td>
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
      <form action="./../php/action/editPlan.php?id=<?php echo $id;?>" method="post" enctype="multipart/form-data">
                <table border="0" align="center" width="720" border="0" cellspacing="4" cellpadding="4">
                   
                   <tr>
                        <td>
                            <span class="Estilo3">Nombre:</span><br />
                            <input type="text" name="nombre" id="nombre" value="<?php echo $plan->getDescripciontbl_plan(); ?>" />
                        </td>
                    </tr>
                   <tr>
                        <td>
                            <span class="Estilo3">Producto anual:</span><br />
                            <input type="text" name="panual" value="<?php echo $plan->getProductoanualtbl_plan(); ?>">
							
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <span class="Estilo3">Días Maximos Viaje:</span><br />
                            <input type="numeric" name="diasmax" value="<?php echo $plan->getDiasmaxtbl_plan(); ?>">
							
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <span class="Estilo3">Edad Mínima:</span><br />
                            <input type="numeric" name="edadmin" value="<?php echo $plan->getEdadmintbl_plan(); ?>">
							
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <span class="Estilo3">Edad Máxima:</span><br />
                            <input type="numeric" name="edadmax" value="<?php echo $plan->getEdamaxtbl_plan(); ?>">
							
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <span class="Estilo3">Valor día adicional:</span><br />
                            <input type="numeric" name="valordia" value="<?php echo $plan->getValordiaAddtbl_plan(); ?>">
							
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
