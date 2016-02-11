<?php
if( !isset($_SESSION['admin']) ){
    header("location: ./index.php");
    exit;
}
if (isset($_GET['id']))
{
	$id = $_GET['id'];
	$userDAO = new userDAO;
	$usuario = $userDAO->getById($id);
}


?>
                    <div class="titulos">
                      <div class="titulos_texto1">Bienvenido<div class="cerrar"><a href="../php/action/logout.php"><img src="imagenes/contenido/cerrar.png" alt="Cerrar Sesi&oacute;n" border="0" /></a></div></div>
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
            Cambio Contraseña
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
       <table align="center" width="750">
        <tr>
            <td>
            
      <form action="../php/action/editUserPass.php" method="post">


      <table border="0" align="left" width="400" border="0" cellspacing="4" cellpadding="4">
         <?php if( isset($_GET['ok']) ){ ?>
            <tr>
                <td class="EstiloGreen" colspan="2">Contraseña actualizada correctamente</td>
            </tr>
          <?php }?>
      <?php if( isset($_GET['error0']) ){ ?>
            <tr>
                <td class="EstiloRed" colspan="2">Tienes que introducir todos los datos</td>
            </tr>
          <?php }?>
            <?php if( isset($_GET['error1']) ){ ?>
            <tr>
                <td class="EstiloRed" colspan="2">Contraseña antigua invalida</td>
            </tr>
          <?php }?>
          <?php if( isset($_GET['error2']) ){ ?>
            <tr>
                <td class="EstiloRed" colspan="2">No coinciden las contraseñas</td>
            </tr>
          <?php }?>
          <tr>
            <td  width="150">Contraseña Actual:</td>
            <td><input size="35" type="password" name="pass_old"> </td>
          </tr>
          <tr>
            <td>Contraseña Nueva:</td>
            <td><input size="35" type="password"  name="pass_new"></td>
          </tr>
          <tr>
            <td>Repita:</td>
            <td><input size="35" type="password"  name="pass_new2"></td>
          </tr>
          <tr>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <td colspan="2" align="right">
                <input type="hidden" name="id" value="<?php echo $id;?>">
                <input type="image" src="imagenes/botones/bt_modificar1.png">
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
