<?php
if( !isset($_SESSION['admin']) ){
    header("location: ./index.php");
    exit;
}

include("fckeditor/fckeditor.php") ;


$aspectoNombre = $_GET['a'];

$aspectoDAO= new AspectsDAO;
$aspecto = $aspectoDAO->getAspect($aspectoNombre);

$type = 1;
if(isset ($_GET['type'])){
    $type = $_GET['type'];
}

?>
                    <div class="titulos">
                      <div class="titulos_texto1">Editar Zonas<div class="cerrar"><a href="../php/action/logout.php"><img src="imagenes/contenido/cerrar.png" alt="Cerrar Sesi&oacute;n" border="0" /></a></div></div>
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
            Editar Zonas > <?php echo $aspecto->getDescrip(); ?>
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

      <table border="0" align="center" width="400" border="0" cellspacing="4" cellpadding="4">
      <?php if( isset($_GET['ok']) ){ ?>
            <tr>
                <td class="EstiloGreen" colspan="2">Zona Editada correctamente</td>
            </tr>
          <?php }?>
          <?php if( isset($_GET['error1']) ){ ?>
            <tr>
                <td class="EstiloRed" colspan="2">Tienes que introducir algo</td>
            </tr>
      <?php }?>
      </table>


      <form action="../php/action/aspectEdit.php" name="0" method="post">
      <table border="0" align="center" width="400" border="0" cellspacing="4" cellpadding="4">
          <tr>
            <td colspan="2">
                <?php if( $type == 1 ){ ?>
                <?php
                    $oFCKeditor_es = new FCKeditor($aspecto->getName()) ;
                    $oFCKeditor_es->BasePath = 'fckeditor/';
                    $oFCKeditor_es->Width  = '600' ;
                    $oFCKeditor_es->Height = '400' ;
                    $oFCKeditor_es->ToolbarSet = 'custom';
                    $oFCKeditor_es->Value = $aspecto->getValue();
                    $oFCKeditor_es->Create() ;
                ?>
                <?php } ?>
                <?php if( $type == 2 ){ ?>
                <input type="text" name="descri" value="<?php echo $aspecto->getDescrip();?>" size="40">
                :
                <br />
                <font style="font-size:small;color:red">[dd-mm-aaaa hh:mm]</font> <input type="text" name="<?php echo $aspecto->getName();?>" value="<?php echo $aspecto->getValue();?>" size="18">
                <input type="hidden" name="type" value="2">
                <?php } ?>
                <?php if( $type == 3 ){ ?>
                <font style="font-size:small;color:red">[cantidad numérica]</font><br /> <input type="text" name="<?php echo $aspecto->getName();?>" value="<?php echo $aspecto->getValue();?>" size="30">
                <input type="hidden" name="type" value="3" >
                <?php } ?>
                <?php if( $type == 31 ){ ?>
                <font style="font-size:small;color:red">[cantidad numérica]</font><br />
                <textarea name="<?php echo $aspecto->getName();?>" rows="2" cols="30"><?php echo $aspecto->getValue();?></textarea>
                <input type="hidden" name="type" value="3" >
                <?php } ?>
                <?php if( $type == 4 ){ ?>
                Descuento sobre el total de sus compras:<br />
                <font style="font-size:small;color:red">[cantidad numérica]</font><br /> <input type="text" name="<?php echo $aspecto->getName();?>" value="<?php echo $aspecto->getValue();?>" size="18">
                %<input type="hidden" name="type" value="4">
                <?php } ?>
                <?php if( $type == 5 ){ ?>
                <br />
                <font style="font-size:small;color:red">Eliga Fecha:</font><br /> <input type="text" name="<?php echo $aspecto->getName();?>" value="<?php echo $aspecto->getValue();?>" id="datepicker" size="18">
                <input type="hidden" name="type" value="5">
                <?php } ?>
                 <?php if( $type == 7 ){ ?>
                <font style="font-size:small;color:red"></font><br /> <input type="text" name="<?php echo $aspecto->getName();?>" value="<?php echo $aspecto->getValue();?>" size="30">
                <input type="hidden" name="type" value="7" >
                <?php } ?>
                 <?php if( $type == 8 ){ ?>
                <br />
                <font style="font-size:small;color:red">Eliga Hora:</font><br /> <input type="text" name="<?php echo $aspecto->getName();?>" value="<?php echo $aspecto->getValue();?>" id="timepicker" size="18">
                <input type="hidden" name="type" value="8">
                <?php } ?>
               <?php if( $type == 6 ){ ?>
                Activado [SI/NO] :<br />
                <font style="font-size:small;color:red"></font><br />
                    Portal activado para ventas:
                    <select name="<?php echo $aspecto->getName();?>">
                        <option value="si" <?php if($aspecto->getValue() == "si") echo "selected"; ?> >Si</option>
                        <option value="no" <?php if($aspecto->getValue() == "no") echo "selected"; ?>>No</option>
                    </select>
                <input type="hidden" name="type" value="6">
                <?php } ?>
            </td>
          </tr>
          <tr>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <td colspan="2" align="right">
                <input type="hidden" name="nombre" value="<?php echo $aspecto->getName();?>">
                <input type="hidden" name="s" value="aspecto">
                <input type="hidden" name="a" value="<?php echo $aspectoNombre; ?>">
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
