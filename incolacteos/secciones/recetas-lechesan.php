<?php include("head.php"); ?>
<style type="text/css">.header-logos {margin: 0; height:165px;} .header-logo-2 {width:220px; height:165px;} .header-logo-2 img {width:220px; height:165px;} .rec-act {border:4px solid #00a4c7;}</style>
<a id="sec-com-1"></a>
<?php include("header-lechesan.php"); ?>

<div class="con-slider">
    <div class="sliderContainer fullWidth clearfix">
        <div id="full-width-slider" class="royalSlider heroSlider rsMinW">
            <!--Slide-->
            <?php
            $banner = DbHandler::GetAll("SELECT * FROM banner WHERE posicion = 2 ORDER BY id DESC");
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
            <h2 id="sec-com-2"><div class="receta_titulo">
            <?php
			$recetas = DbHandler::GetAll("SELECT * FROM recetas");
			if(!empty($recetas)) : echo $recetas[0]['titulo'];
			else : ?>Recetas<?php endif; ?></div>
                <a href="javascript:history.back()" id="an-info"><div class="back-vn"><div class="back-bt"></div><span></span></div></a>
            </h2>
            <div class="con-recetas-b">
                <div class="info-recetas">
                    <!--Receta info-->
                    <?php
                    for ($a = 0, $b = count($recetas); $a < $b; $a++) {
                        ?>
                        <div class="receta-b receta-b<?php echo $recetas[$a]["id"] ?>">
                            <div class="con-info-rec">
                                <div class="info-rec-img"><img src="img/recetas/350_300_<?php echo $recetas[$a]["img"] ?>" width="350" height="300" alt=""></div>
                                <div class="info-rec-tx-2">
                                    <?php
                                    $paso = DbHandler::GetAll("SELECT * FROM recetas_preparacion WHERE id_receta=" . $recetas[$a]["id"]);
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
                                $ingre = DbHandler::GetAll("SELECT ingrediente FROM ingredientes WHERE id_recetas=" . $recetas[$a]["id"]);
                                if (count($ingre) > 0) {
                                    echo "  <h4>Ingredientes</h4><ul class='scroll-list'>";
                                }
                                for ($in = 0, $on = count($ingre); $in < $on; $in++) {
                                    echo "<li>" . $ingre[$in]["ingrediente"] . "</li>";
                                }
                                if (count($ingre) > 0) {
                                    echo "</ul>";
                                }echo "<br>";
                                echo "<p>" . utf8_encode(nl2br($recetas[$a]["texto_ingredientes"])) . "</p>";
                                ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Receta info-->
                    <?php } ?>
                </div>
            </div>
            <div class="con-recetas-s">
                <ul class="car-recetas">
                    <?php for ($a = 0, $b = count($recetas); $a < $b; $a++) { ?>
                        <li class="slide">
                            <a href="#an-info" class="fx-nav">
                                <div class="item-rec-small" data-id="receta-b<?php echo $recetas[$a]["id"] ?>" data-title="<?php echo utf8_encode($recetas[$a]["titulo"]) ?>">
                                    <h1><?php echo utf8_encode($recetas[$a]["titulo"]) ?></h1>
                                    <div class="servicio-img-s"><img src="img/recetas/162_152_<?php echo $recetas[$a]["img"] ?>" width="180" height="154" alt=""></div>
                                </div>
                            </a>
                        </li>  
                    <?php }
                    ?>

                </ul>
            </div>
        </div>
    </div>
</section>
<div class="con-fx-nav">
    <a class="fx-nav" href="#sec-com-1"><div class="fx-pick fx-pick-8"><div class="fx-nav-tip">Galería<span></span></div></div></a>
    <a class="fx-nav" href="#sec-com-2"><div class="fx-pick fx-pick-2"><div class="fx-nav-tip">Recetas<span></span></div></div></a>
</div>

<?php include("footer.php"); ?>