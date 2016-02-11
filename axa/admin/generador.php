<?php
if (!isset($_SESSION['admin'])) {
    header("location: ./index.php");
    exit;
}
include("fckeditor/fckeditor.php");
//include ("../php/dao/daoConnection.php");
$daoConnection = new DAO;
$daoConnection->conectar();
$query = 'SELECT * FROM empresa_url';
$result = $daoConnection->consultaObj($query);

$total = $daoConnection->numregistros();
?>
<div class="titulos">
    <div class="titulos_texto1">Generador url<div class="cerrar"><a href="../php/action/logout.php"><img src="imagenes/contenido/cerrar.png" alt="Cerrar Sesi&oacute;n" border="0" /></a></div></div>
    <div class="titulos_texto2">
    </div>
</div>
<!-- FIN TITULOS -->
<div class="contenido_marco_sup"></div>
<div class="contenido_fondo">
    <div class="subcontenido">

        <div class="subtitulos">Un total de <?php echo $total; ?> Urls Generadas<div class="subtitulos_menu">
        <!--  <form id="form_boton" ><input type="button" value="Adicionar Nuevo Equipo" id="nuevo" /></form> -->
            </div>
        </div>
        <div class="subcontenido2">
            <form runat="server">
                <table width="300" border="0" align="center" cellpadding="0" cellspacing="0">
                    <tr>
                        <td></td>
                    </tr>
                </table>
                <div id="buscador">
                    <div class="rowElem"></div>
                </div>
                <div class="enunciados"></div>
                <table width="100%" class="yui" id="tableOne">
                    <thead>
                        <tr>
                            <td width="16%" class="tableHeader">
                                <?php //if ($total<3) { ?>
                                <a href="menuAdmin.php?s=generadorAdd">Añadir Url[+]</a>
                                <?php //}?>
                            </td>
                            <td colspan="4" class="filter"><span class="rowElem">
                                    Buscar:
                                    <input id="filterBoxOne" value="" maxlength="30" size="30" type="text" />
                                </span>
                            </td>
                        </tr>
                        <?php if (isset($_GET['delete'])) { ?>
                            <tr>
                                <td class="EstiloGreen">Url eliminada</td>
                            </tr>
                        <?php } ?>
                        <tr>
                            <th><a href='#' title="Click para ordenar">Nombre Compañia</a></th>
                            <th><a href='#' title="Click para ordenar">Url Generada</a></th>
                            <th><a href='#' title="Click para ordenar">Acciones</a></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($result as $item) {
                            $dir = './../php/action/deleteurl.php?id=' . base64_encode($item['id']);
                            //$dir = './../php/action/deletecosto.php?id='.$item->getIdtbl_costos();
                            ?>
                            <tr>
                                <td width="25%" align="center"><?php echo  utf8_encode($item['nombre']); ?></td>
                                <td width="25%" align="center"><?php echo utf8_encode($item['url']); ?></td>

                                <td width="25%" align="center">
                                    <a href="javascript:confirmar('<?php echo $dir; ?>',' url de la empresa (<?php echo $item['nombre']; ?>)')" title="Eliminar">Eliminar</a>
                                    
                                    <!--a href="menuAdmin.php?s=generadorEditar&id=<?php echo base64_encode($item['id']); ?>">editar</a-->
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                    <tfoot>
                        <tr id="pagerOne">
                            <td colspan="5"><img src="jquery/jQueryTableSorterConPaging/_assets/img/first.png" class="first"/> <img src="jquery/jQueryTableSorterConPaging/_assets/img/prev.png" class="prev"/>
                                <input type="text" class="pagedisplay"/>
                                <img src="jquery/jQueryTableSorterConPaging/_assets/img/next.png" class="next"/> <img src="jquery/jQueryTableSorterConPaging/_assets/img/last.png" class="last"/>
                                <select name="select" class="pagesize">
                                    <option selected="selected"  value="10">10</option>
                                    <option value="20">20</option>
                                    <option value="30">30</option>
                                    <option  value="40">40</option>
                                </select>           
                            </td>
                        </tr>
                    </tfoot>

                </table>
            </form>

        </div>
    </div>
    <!-- FIN SUBCONTENIDO -->
    <!-- FIN SUBCONTENIDO -->
</div>
<!-- FIN CONTENIDO FONDO -->
<div class="contenido_marco_inf"></div>
