<?php
if( !isset($_SESSION['admin']) ){
    header("location: ./index.php");
    exit;
}
include ("../php/dao/terminosDAO.php");
include ("../php/entities/terminos.php");
$id = $_GET['id'];
$productoDAO = new TerminosDAO;
$terminos = $productoDAO->getTerminos($id);

include("fckeditor/fckeditor.php") ;

$daoConnection = new DAO;
$daoConnection->conectar();

?>
                    <div class="titulos">
                      <div class="titulos_texto1">Bienvenidas<div class="cerrar"><a href="../php/action/logout.php"><img src="imagenes/contenido/cerrar.png" alt="Cerrar Sesi&oacute;n" border="0" /></a></div></div>
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
            Editar Terminos
        </td>
        <td align="right">
            <a href="menuAdmin.php?s=TerminosVer&id=<?php echo $id;?>">Atrás</a>
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
            <td class="EstiloGreen" colspan="2">Terminos editada correctamente</td>
        </tr>
      <?php }?>
    <?php if( isset($_GET['ok2']) ){ ?>
        <tr>
            <td class="EstiloGreen" colspan="2">Terminos creada correctamente</td>
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
      <form action="./../php/action/editTerminos.php?id=<?php echo $id;?>" method="post" enctype="multipart/form-data">
                <table border="0" align="center" width="720" border="0" cellspacing="4" cellpadding="4">
                   <tr>
                        <td>
	                        <span class="Estilo3">PDF:</span><br />
                             <!--<img src="../docpdf/<?php// echo $terminos->getPdf()?>" width="300" height="100" alt="<?php//echo $terminos->getPdf()?>"/>-->
                            <a href="../docpdf/<?php echo $terminos->getPdf(); ?>" target="_blank"><img src="imagenes/ver_pdf.png" width="165" height="53" /></a><br />
                            <input type="file" name="pdf"><br>
                            <span style="font-size:small;">
                            solo se permiten archivos en fomato PDF
                            </span>
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
