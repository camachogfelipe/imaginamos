<?php include("head.php"); ?>
<?php include("header.php"); ?>

<div class="con-slider">
    <div class="sliderContainer fullWidth clearfix">
        <div id="full-width-slider" class="royalSlider heroSlider rsMinW">
            <!--Slide-->
            <?php
            $banner = DbHandler::GetAll("SELECT * FROM banner WHERE posicion = 1 ORDER BY id DESC");

            for ($a = 0, $b = count($banner); $a < $b; $a++) {
                ?>
                <div class="rsContent" data-rsDelay="6000">
                	<img class="rsImg" src="img/banner/1349_516_<?php echo $banner[$a]["img"] ?>" width="940" height="476" alt="">
                </div>
            <?php } ?>

        </div>
    </div>
</div>
<div class="con-destacados">
    <div class="mg-destacados clearfix">
        <div class="destacados">
            <?php
            $cDest = new Dbdestacados_home();
            $destacado = $cDest->getList();
            for ($j = 0, $h = count($destacado); $j < $h; $j++) {
                ?>
                <div class="info-destacado">
                    <h1><?php echo utf8_encode($destacado[$j]["titulo"]) ?> <strong><?php echo utf8_encode($destacado[$j]["subtitulo"]) ?></strong></h1>
                    <div class="destacado-img">
                        <div class="destacado-pro"><img src="img/destacados/270_168_<?php echo $destacado[$j]["img"] ?>" width="270" height="168" alt=""></div>
                        <div class="destacado-img-sw"></div>
                        <a href="<?php echo $destacado[$j]["link"] ?>"><div class="destacado-vn"><div class="destacado-bt"></div><span></span></div></a>
                    </div>
                </div>
            <?php }
            ?>
        </div>
    </div>
</div>

<?php include("footer.php"); ?>