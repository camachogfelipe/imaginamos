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
<?php
$textosc = new Dbtextos();
$textof = $textosc->getByPk(2);
?>
<section>
    <div class="con-section">
        <div class="mg-section-other clearfix">
            <h2 id="sec-com-2">Quiénes somos</h2>
            <div class="empresa-tx">
                <div class="scroll-wrap">
                    <?php echo utf8_encode(nl2br($textof["texto"])) ?>   
                </div>
            </div>
        </div>
    </div>
</section>
<div class="con-fx-nav">
    <a class="fx-nav" href="#sec-com-1"><div class="fx-pick fx-pick-8"><div class="fx-nav-tip">Galería<span></span></div></div></a>
    <a class="fx-nav" href="#sec-com-2"><div class="fx-pick fx-pick-2"><div class="fx-nav-tip">Valores<span></span></div></div></a>
</div>

<?php include("footer.php"); ?>