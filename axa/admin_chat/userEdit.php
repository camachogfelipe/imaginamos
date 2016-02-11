<?php
if( !isset($_SESSION['admin']) ){
    header("location: ./index.php");
    exit;
}

$id = $_GET['id'];
$userDAO = new userDAO;
$usuario = $userDAO->getById($id);

$daoConnection = new DAO;
$daoConnection->conectar();
?>

                    <div class="titulos">
                      <div class="titulos_texto1">Usuario<div class="cerrar"><a href="../php/action/logout.php"><img src="imagenes/contenido/cerrar.png" alt="Cerrar Sesi&oacute;n" border="0" /></a></div></div>
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
            Editar Usuario
        </td>
        <td align="right">
            <a href="menuAdmin.php?s=userVer&id=<?php echo $id; ?>">Atrás</a>
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
      <form action="../php/action/userEdit.php" method="post">
      <table border="0" align="center" width="400" border="0" cellspacing="4" cellpadding="4">
         <?php if( isset($_GET['ok']) ){ ?>
            <tr>
                <td class="EstiloGreen" colspan="2">Usuario Editado correctamente</td>
            </tr>
          <?php }?>
      <?php if( isset($_GET['ok2']) ){ ?>
            <tr>
                <td class="EstiloGreen" colspan="2">Privilegios de usuario editados correctamente</td>
            </tr>
          <?php }?>
          <?php if( isset($_GET['error1']) ){ ?>
            <tr>
                <td class="EstiloRed" colspan="2">Tienes que introducir el E-Mail</td>
            </tr>
          <?php }?>
          <?php if( isset($_GET['error2']) ){ ?>
            <tr>
                <td class="EstiloRed" colspan="2">El E-Mail introducido ya está asociado a otro usuario</td>
            </tr>
          <?php }?>
          <tr>
            <td colspan="2"><b><font style="font-size:large;color:#154894">Información general</font></b></td>
          </tr>
          <tr>
            <td  width="150"  >Nombre:</td>
            <td><?php echo $usuario->getNombre();?></td>
          </tr>
          <tr>
            <td>Apellidos:</td>
            <td><?php echo $usuario->getApellidos();?></td>
          </tr>
          <tr>
            <td>E-mail:</td>
            <td><?php echo $usuario->getEmail();?></td>
          </tr>
          <tr>
            <td>Empresa:</td>
            <td><input size="35" name="empresa" value="<?php echo $usuario->getEmpresa();?>"></td>
          </tr>
          <tr>
            <td>Cargo:</td>
            <td><input size="35" name="cargo" value="<?php echo $usuario->getCargo();?>"></td>
          </tr>
          <tr>
            <td>Dirección:</td>
            <td><input size="35" name="dir" value="<?php echo $usuario->getDir();?>"></td>
          </tr>
          <tr>
            <td>Teléfono:</td>
            <td><input size="35" name="tel" value="<?php echo $usuario->getTel();?>"></td>
          </tr>
          <tr>
            <td>Ciudad:</td>
            <td><select name="ciudad" id="ciudad">
          	<option value="0">Seleccione..</option>
        <?php
		$sql = "SELECT * FROM City Order By Name";
		$query = $daoConnection->consulta($sql);
		while($item = mysql_fetch_array($query)){
		?>
        	<option value="<?php echo $item['ID']; ?>"<?php if($usuario->getCiudad()==$item['ID']) echo 'selected="selected"'; ?>><?php echo utf8_encode($item['Name']); ?></option>
        <?php } ?>
            </select>
            </td>
          </tr>
          <tr>
            <td>Pais:</td>
            <td><select name="pais" id="pais">
          	<option value="0">Seleccione..</option>
        <?php
		$sql = "SELECT * FROM Country Order By Name";
		$query = $daoConnection->consulta($sql);
		while($item = mysql_fetch_array($query)){
		?>
        	<option value="<?php echo $item['Code']; ?>"<?php if($usuario->getPais()==$item['Code']) echo 'selected="selected"'; ?>><?php echo utf8_encode($item['Name']); ?></option>
        <?php } ?>
            </select></td>
          </tr>
          <tr>
            <td></td>
            <td></td>
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
    </div>
  </div>
  <!-- FIN SUBCONTENIDO -->
  <!-- FIN SUBCONTENIDO -->
</div>
<!-- FIN CONTENIDO FONDO -->
<div class="contenido_marco_inf"></div>
