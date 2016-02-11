<?php include("head.php"); ?>
<?php include("header.php"); ?>
<?php

if (!isset($_GET["idp"])) {
    echo "<script>window.location.href='index.php?seccion=productos'</script>";
    exit;
}
$detalle = DbHandler::GetRow("SELECT * FROM productos_detalles WHERE id_productos=" . $_GET["idp"]);
if (count($detalle) == 0) {
    echo "<script>window.location.href='index.php?seccion=productos'</script>";
    exit;
}
$pof = DbHandler::GetRow("SELECT * FROM productos WHERE id=" . $_GET["idp"]);
if($pof["posicion"] == 1){
    $carpeta = "california";
}
if($pof["posicion"] == 2){
    $carpeta = "lechesan";
}
if($pof["posicion"] == 3){
    $carpeta = "importados";
}
?>
<section>		
    <div class="con-section">
        <div class="mg-section clearfix">
            <h2>
               <?php echo utf8_encode($detalle["titulo"]) ?>
                <a href="javascript:history.back()" id="an-info"><div class="back-vn"><div class="back-bt"></div><span></span></div></a>
            </h2>
            <div class="con-info-pro">
                <div class="info-pro-img"><img src="img/productos/<?php echo $carpeta ?>/520_300_<?php echo $detalle["img"] ?>" width="520" height="300" alt=""></div>
                <div class="info-pro-tx">
                    <div class="scroll-wrap">
                        <p><?php echo utf8_encode(nl2br($detalle["texto"])) ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include("footer.php"); ?>