<?php include("head.php"); ?>
<?php include("header.php"); ?>
<?php
$cEmpre = new Dbsomos();
$somos = $cEmpre->getByPk(1);
?>
<section>
    <div class="con-section">
        <div class="mg-section clearfix">
            <h2 id="sec-com-1">Qui&eacute;nes somos</h2>
            <div class="main-img"><img src="img/somos/920_300_<?php echo $somos["img"] ?>" width="920" height="300" alt=""></div>
            <h2 id="sec-com-2"><?php echo utf8_encode($somos["titulo"]) ?></h2>
            <div class="empresa-tx">
                <div class="scroll-wrap"><?php echo utf8_encode($somos["texto"]) ?></div>
            </div>
            <h2 id="sec-com-3">Video corporativo</h2>
            <div class="con-corp-video">
                <?php if ($somos["pos_video"] == 1) { ?>
                    <iframe width="680" height="384" src="http://www.youtube.com/embed/<?php echo $somos["video"] ?>" frameborder="0" allowfullscreen></iframe>
                <?php } else { ?>
                    <iframe src="http://player.vimeo.com/video/<?php echo $somos["video"] ?>" width="680" height="384" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe></center>
                <?php } ?>
                
            </div>
            <h2 id="sec-com-4">Formulario de <strong>contacto</strong></h2>
            <div class="con-form-int clearfix">
                <form class="fm-int" action="contacto-ok.php" method="post">
                    <div class="form-db">
                        <fieldset>
                            <label>Nombre</label>
                            <input class="validate[required]">
                        </fieldset>
                        <fieldset>
                            <label>Correo electrónico</label>
                            <input class="validate[required, custom[email]]">
                        </fieldset>
                        <fieldset>
                            <label>Teléfono</label>
                            <input class="validate[required, custom[phone]]">
                        </fieldset>
                    </div>
                    <div class="form-db">
                        <fieldset>
                            <label>Comentario</label>
                            <textarea></textarea>
                        </fieldset>
                        <fieldset>
                            <input type="submit" class="bt-submit" value="ENVIAR">
                        </fieldset>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<div class="con-fx-nav">
    <a class="fx-nav" href="#sec-com-1"><div class="fx-pick fx-pick-1"><div class="fx-nav-tip">Nosotros<span></span></div></div></a>
    <a class="fx-nav" href="#sec-com-2"><div class="fx-pick fx-pick-2"><div class="fx-nav-tip">Valores<span></span></div></div></a>
    <a class="fx-nav" href="#sec-com-3"><div class="fx-pick fx-pick-3"><div class="fx-nav-tip">Video<span></span></div></div></a>
    <a class="fx-nav" href="#sec-com-4"><div class="fx-pick fx-pick-4"><div class="fx-nav-tip">Formulario<span></span></div></div></a>
</div>

<?php include("footer.php"); ?>