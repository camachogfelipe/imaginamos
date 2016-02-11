<?php

if( !isset($_SESSION['admin']) ){
    header("location: ./index.php");
    exit;
}

include("fckeditor/fckeditor.php") ;

include '../php/dao/paisDAO.php';
include '../php/entities/pais.php';

include ("../php/dao/PlanDAO.php");
include ("../php/entities/Plan.php");

$planDAO = new PlanDAO;
$listaPlanes = $planDAO->getPlanes("idtbl_plan", "ASC");

$paisDAO = new paisDAO;
$listaPais = $paisDAO->getpaises("descripciontbl_destino", "ASC");

function accents2HTML($mensaje){
    $mensaje = str_replace("á","&aacute;",$mensaje);
    $mensaje = str_replace("é","&eacute;",$mensaje);
    $mensaje = str_replace("í","&iacute;",$mensaje);
    $mensaje = str_replace("ó","&oacute;",$mensaje);
    $mensaje = str_replace("ú","&uacute;",$mensaje);
    $mensaje = str_replace("ñ","&ntilde;",$mensaje);
    return $mensaje;
}

?>
                    <div class="titulos">
                      <div class="titulos_texto1">Valor pais plan<div class="cerrar"><a href="../php/action/logout.php"><img src="imagenes/contenido/cerrar.png" alt="Cerrar Sesi&oacute;n" border="0" /></a></div></div>
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
            Nueva Valor pais plan
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
<table border="0" align="center" width="400" border="0" cellspacing="4" cellpadding="4">
      <?php if( isset($_GET['error1']) ){ ?>
        <tr>
            <td class="EstiloRed" colspan="2">Tienes que introducir todos los datos</td>
        </tr>
  <?php }?>
  <?php if( isset($_GET['error2']) ){ ?>
        <tr>
            <td class="EstiloRed" colspan="2">No se ha realizado la grabación del restricionpaisplan.</td>
        </tr>
  <?php }?>
  <?php if( isset($_GET['error3']) ){ ?>
        <tr>
            <td class="EstiloRed" colspan="2">Esta ciudad ya tiene un restricionpaisplan asignado</td>
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
                <form action="./../php/action/addrestricionpaisplan.php" method="post" enctype="multipart/form-data">
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
                            <span class="Estilo3">Nombre del pais:</span><br />
                            <select name="idtbl_destino">
                            	<?php 
								foreach ($listaPais as $pais)
								{
								?>
                                	<option value="<?php echo $pais->getIdtbl_destino()?>"><?php echo utf8_encode( $pais->getDescripciontbl_destino())?></option>
                                <?php
								}
								?>
                            </select>
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
