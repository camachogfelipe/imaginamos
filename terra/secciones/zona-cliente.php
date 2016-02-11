<?php
if (!isset($_SESSION["id"])) {
    echo "<script>window.location.href='index.php?seccion=index'</script>";
}
?>
<?php include("head.php"); ?>
<?php include("header.php"); ?>
<?php
$cZS = new Dbparrafo_zs();
$zona = $cZS->getByPk(1);
?>
<script>
    function cambioEstado(valor){
        $.post("index.php?seccion=ajax",{id:valor},function(){
            $('#td'+valor).empty().html('Leído');
        });
    }
</script>
<section>
    <div class="con-section">
        <div class="mg-section section-info clearfix">
            <div class="con-zona">
                <h1>ZONA SEGURA</h1>
                <div class="zona-box">
                    <h1>Bienvenido, <?php echo ($_SESSION["Nombre"]) ?></h1>
                    <div class="zona-tx">
                        <p><?php echo utf8_encode(nl2br($zona["texto"])) ?></p>
                    </div>
                    <div id="con-tabla">
                        <div class="mg-tabla">
                            <table cellpadding="0" cellspacing="0" border="0" class="display" id="tabla-zona">
                                <thead>
                                    <tr>
                                        <th>Fecha</th>
                                        <th>Nombre</th>
                                        <th>Estado</th>
                                        <th style="cursor:default;">Descargar</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $archivos = DbHandler::GetAll("SELECT * FROM archivos WHERE usuario='".$_SESSION["id"]."' ORDER BY id DESC");
                                    if (count($archivos) > 0) {
                                        for ($a = 0, $b = count($archivos); $a < $b; $a++) {
                                            $leidos = DbHandler::GetAll("SELECT * FROM leidos WHERE id_usuario=" . $_SESSION["id"] . " AND leido=" . $archivos[$a]["id"] . " ORDER BY id DESC");
                                            $fecha = explode("-", $archivos[$a]["fecha"]);
                                            ?>
                                            <tr class="gradeA">
                                                <td><?php echo $fecha[0] ?>/<?php echo $fecha[1] ?>/<?php echo $fecha[2] ?></td>
                                                <td><?php echo utf8_encode($archivos[$a]["titulo"]) ?></td>
                                                <?php if (count($leidos) > 0) { ?>
                                                     <td id="td<?php echo $archivos[$a]["id"] ?>">Le&iacute;do</td>
                                                <?php } else { ?>
                                                       <td id="td<?php echo $archivos[$a]["id"] ?>">No le&iacute;do</td>  
                                                <?php }
                                                ?>

                                                <td class="center"><a onclick="cambioEstado(<?php echo $archivos[$a]["id"] ?>)" href="img/pdf/<?php echo $archivos[$a]["pdf"] ?>" target="_blank"><div class="download-icon"></div></a></td>
                                            </tr> 
                                            <?php
                                        }
                                    }
                                    ?>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="con-col-zona">
                    <div class="con-logout">
                        <a href="index.php?seccion=salir"><div class="logout-bt"></div></a>
                        <div class="logout-tx">
                            <h1>ZONA EXCLUSIVA PARA CLIENTES</h1>
                            <p><?php echo utf8_encode(nl2br($zona["exclusiva"])) ?></p>
                        </div>
                    </div>
                    <div class="con-terms">
                        <p><?php echo utf8_encode(nl2br($zona["condiciones"])) ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include("footer.php"); ?>