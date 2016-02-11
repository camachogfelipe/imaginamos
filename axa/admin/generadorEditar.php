<?php
if (!isset($_SESSION['admin'])) {
    header("location: ./index.php");
    exit;
}
include ("../php/dao/costoDAO.php");
include ("../php/entities/costo.php");
$id = $_GET['id'];
$id = base64_decode($id);
$costoDAO = new costoDAO;
$costo = $costoDAO->getcosto($id);

include("fckeditor/fckeditor.php");

$daoConnection = new DAO;
$daoConnection->conectar();
?>
<div class="titulos">
    <div class="titulos_texto1">Costo<div class="cerrar"><a href="../php/action/logout.php"><img src="imagenes/contenido/cerrar.png" alt="Cerrar Sesi&oacute;n" border="0" /></a></div></div>
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
                        Editar Costo
                    </td>
                    <td align="right">
                        <a href="menuAdmin.php?s=costoVer&id=<?php echo base64_encode($id); ?>">Atrás</a>
                    </td>
                </tr>
            </table>
            <div class="subtitulos_menu">
            <!--  <form id="form_boton" ><input type="button" value="Adicionar Nuevo Equipo" id="nuevo" /></form> -->
            </div>
        </div>
        <div class="subcontenido2">
            <table border="0" align="center" width="400" border="0" cellspacing="4" cellpadding="4">
                <?php if (isset($_GET['ok'])) { ?>
                    <tr>
                        <td class="EstiloGreen" colspan="2">Costo editada correctamente</td>
                    </tr>
                <?php } ?>
                <?php if (isset($_GET['ok2'])) { ?>
                    <tr>
                        <td class="EstiloGreen" colspan="2">Costo creada correctamente</td>
                    </tr>
                <?php } ?>
                <?php if (isset($_GET['error1'])) { ?>
                    <tr>
                        <td class="EstiloRed" colspan="2">Tienes que introducir todos los datos</td>
                    </tr>
                <?php } ?>
                <?php if (isset($_GET['errorImg'])) { ?>
                    <tr>
                        <td class="EstiloRed" colspan="2">La imagen debe tener un ancho inferior a 300 px</td>
                    </tr>
                <?php } ?>
                <?php if (isset($_GET['errorImg2'])) { ?>
                    <tr>
                        <td class="EstiloRed" colspan="2">Esta ciudad ya tiene una imagen asignada</td>
                    </tr>
                <?php } ?>
            </table>
            <div id="buscador">
                <div class="rowElem"></div>
            </div>
            <div class="enunciados"></div>
            <form action="./../php/action/editcosto.php?id=<?php echo base64_encode($id); ?>" method="post" enctype="multipart/form-data">
                <table border="0" align="center" width="720" border="0" cellspacing="4" cellpadding="4">
                    <tr>
                        <td>
                            <span class="Estilo3">Nombre Costo:</span><br />
                            <input type="text" value="<?php echo $costo->getDescripciontbl_costos() ?>" name="nombre" id="nombre" />

                        </td>
                    </tr>

                    <tr>
                        <td align="right">
                            <input type="hidden" name="id" value="<?php echo base64_encode($id); ?>">
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
<script type="text/javascript" language="javascript">
    $("#nombre").numeric();

</script>