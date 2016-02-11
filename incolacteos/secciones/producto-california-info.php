<?php include("head.php"); ?>
<a id="sec-com-1"></a>
<?php
include("header-california.php");
$var = $_GET["ids"];
if (!isset($_GET["idp"])) {
    echo "<script>window.location.href='index.php?seccion=productos-california'</script>";
    exit;
}

//$detalle = DbHandler::GetRow("SELECT * FROM productos_detalles WHERE id_productos=" . $_GET["idp"]);
$detalle = DbHandler::GetRow("SELECT * FROM subproductos_detalles WHERE id_subproducto=" . $_GET["ids"]);
$producto = DbHandler::GetRow("SElECT * FROM subproductos WHERE id =" . $_GET["ids"]);

if (count($detalle) == 0) {
    echo "<script>window.location.href='index.php?seccion=productos-california'</script>";
    exit;
}
?>

<div class="con-slider">
    <div class="sliderContainer fullWidth clearfix">
        <div id="full-width-slider" class="royalSlider heroSlider rsMinW">
            <!--Slide-->
            <?php
            $banner = DbHandler::GetAll("SELECT * FROM banner WHERE posicion = 3 ORDER BY id DESC");

            for ($a = 0, $b = count($banner); $a < $b; $a++) {
                ?>
                <div class="rsContent" data-rsDelay="6000">
                	<img class="rsImg" src="img/banner/1349_516_<?php echo $banner[$a]["img"] ?>" height="516" alt="">
                </div>
            <?php } ?>

        </div>
    </div>
</div>
<section>
    <div class="con-section">
        <div class="mg-section-other clearfix">
            <h2 id="sec-com-2">
                <?php  echo utf8_encode($producto["titulo"]);?>
                <a href="javascript:history.back()" id="an-info"><div class="back-vn"><div class="back-bt"></div><span></span></div></a>
                <a name="an-info" id="an-info"></a>
            </h2>
            <div class="con-info-pro">
                <div class="info-pro-img"><img src="img/subproductos/california/520_300_<?php echo $detalle["img"] ?>" width="520" height="300" alt=""></div>
                <div class="info-pro-tx">
                    <div class="scroll-wrap">
                        <p><?php echo utf8_encode(nl2br($detalle["texto"])) ?></p>
                    </div>
                </div>
            </div>
        </div>


        <?php
        if ($detalle["receta"] != 0) {
            $receta = DbHandler::GetRow("SELECT * FROM recetas WHERE id=" . $detalle["receta"]);
            if (count($receta) > 0) {
                ?>
                <div class="mg-section-other clearfix">
                    <h2 id="sec-rec">
                        Receta
                        <a class="fx-nav" href="#sec-rec"><div class="receta-vn"><div class="receta-bt"></div><span></span></div></a>
                    </h2>
                    <h3><?php echo utf8_encode($receta["titulo"]) ?></h3>
                    <div class="con-info-rec">
                        <div class="info-rec-img"><img src="img/recetas/350_300_<?php echo $receta["img"] ?>" width="350" height="300" alt=""></div>
                        <div class="info-rec-tx-2">
                            <?php
                            $paso = DbHandler::GetAll("SELECT * FROM recetas_preparacion WHERE id_receta=" . $receta["id"]);
                            ?>
                            <div class="scroll-wrap">
                                <h4>Preparaci&oacute;n</h4>
                                <?php for ($a1 = 0, $b1 = count($paso); $a1 < $b1; $a1++) { ?>
                                    <h5>Paso <?php echo $a1 + 1 ?></h5>
                                    <p><?php echo utf8_encode(nl2br($paso[$a1]["pasos"])) ?></p>

                                <?php }
                                ?>
                            </div>
                        </div>

                        <div class="info-rec-tx-1">
                            <div class="scroll-wrap">

                                <?php
                                $ingre = DbHandler::GetAll("SELECT ingrediente FROM ingredientes WHERE id_recetas=" . $receta["id"]);
                                if (count($ingre) > 0) {
                                    echo "  <h4>Ingredientes</h4><ul class='scroll-list'>";
                                }
                                for ($in = 0, $on = count($ingre); $in < $on; $in++) {
                                    echo "<li>" . $ingre[$in]["ingrediente"] . "</li>";
                                }
                                if (count($ingre) > 0) {
                                    echo "</ul>";
                                }echo "<br>";
                                echo "<p>" . utf8_encode(nl2br($receta["texto_ingredientes"])) . "</p>";
                                ?>
                            </div>
                        </div>
                    </div>
                    <div class="more-rec">
                        <a class="fx-nav" href="index.php?seccion=recetas-california"><div class="receta-mas-vn"><div class="receta-mas-bt"></div><span></span></div></a>
                    </div>
                </div> 
                <?php
            }
        }
        ?>






    </div>
</section>
<div class="con-fx-nav">
    <a class="fx-nav" href="#sec-com-1"><div class="fx-pick fx-pick-8"><div class="fx-nav-tip">Galería<span></span></div></div></a>
    <a class="fx-nav" href="#sec-com-2"><div class="fx-pick fx-pick-2"><div class="fx-nav-tip">Producto<span></span></div></div></a>
</div>

<?php include("footer.php"); ?>