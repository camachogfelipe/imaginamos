<?php include("head.php"); ?>
<style type="text/css">.header-logos {margin: 0; height:165px;} .header-logo-2 {width:220px; height:165px;} .header-logo-2 img {width:220px; height:165px;}</style>
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
            <h2 id="sec-com-2">Productos Lechesan</h2>
            <div class="pager-pro clearfix pager-pro-1">
                <div class="pager-nav"></div>
                <ul class="con-pager clearfix">
                    <?php
                    $california = DbHandler::GetAll("SELECT * FROM productos WHERE posicion=2");
                    for ($a = 0, $b = count($california); $a < $b; $a++) {
                        echo ($a == 0) ? "<li>" : "";
                        
                        ?>

                        <!--Product-->
                        <div class="item-pro-t2 pro-t1">
                            <h1><?php echo utf8_encode($california[$a]["titulo"]) ?></h1>
                            <div class="con-pro-img-t2">
                                <img src="img/productos/lechesan/144_136_<?php echo $california[$a]["img"] ?>" width="190" height="180" alt="">
                            </div>
                            <div class="sub-items-pro">
                                <div class="scroll-wrap">
                                    <?php
                                    $sub = DbHandler::GetAll("SELECT * FROM subproductos WHERE id_productos=" . $california[$a]["id"]);
                                    for ($ji = 0, $jo = count($sub); $ji < $jo; $ji++) {
                                        ?>
                                        <div class="subitem-info">
                                            <a href="index.php?seccion=producto-lechesan-info&idp=<?php echo $california[$a]["id"] ?>&ids=<?php echo $sub[$ji]["id"]?>#an-info">
                                                <div class="subitem-tx">
                                                    <h1><?php echo utf8_encode($sub[$ji]["titulo"]) ?></h1>
                                                    <p><?php echo utf8_encode(nl2br($sub[$ji]["texto"])) ?></p>
                                                </div>
                                            </a>
                                        </div>
                                    <?php }
                                    ?>


                                </div>
                            </div>
                        </div>
                        <!--Product-->
                        <?php
                        
                        echo ($a % 4 == 3 && $a != 0) ? "</li><li>" : "";
                    }
                    ?>


                </ul>
            </div>
        </div>
    </div>
</section>
<div class="con-fx-nav">
    <a class="fx-nav" href="#sec-com-1"><div class="fx-pick fx-pick-8"><div class="fx-nav-tip">Galería<span></span></div></div></a>
    <a class="fx-nav" href="#sec-com-2"><div class="fx-pick fx-pick-2"><div class="fx-nav-tip">Productos<span></span></div></div></a>
</div>

<?php include("footer.php"); ?>