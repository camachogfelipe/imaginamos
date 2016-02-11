<?php include("head.php"); ?>
<?php include("header.php"); ?>

<section>
    <div class="con-section">
        <div class="mg-section section-info clearfix">
            <div class="con-main-services">
                <?php
                $cServicios = new Dbservicios();
                $servicios = $cServicios->getList();
                ?>
                <div class="main-service main-s1">
                    <div class="main-service-head"><h1>GANADERÍA Y EQUINOS</h1></div>
                    <div class="main-service-img"><img src="img/servicios/equinos/274_374_<?php echo $servicios[0]["img"] ?>" width="274" height="374" alt=""></div>
                    <div class="main-service-info">
                        <div class="main-service-tx">
                            <p><?php echo utf8_encode(nl2br($servicios[0]["texto_corto"])) ?></p>
                        </div>
                        <a href="index.php?seccion=servicio-1"><div class="main-service-bt main-service-bt-1"></div></a>
                    </div>
                </div>
                <div class="main-service main-s2">
                    <div class="main-service-head"><h1>PISCICULTURA</h1></div>
                    <div class="main-service-img"><img src="img/servicios/equinos/274_374_<?php echo $servicios[1]["img"] ?>" width="274" height="374" alt=""></div>
                    <div class="main-service-info">
                        <div class="main-service-tx">
                          <p><?php echo utf8_encode(nl2br($servicios[1]["texto_corto"])) ?></p>    
                        </div>
                        <a href="index.php?seccion=servicio-2"><div class="main-service-bt main-service-bt-2"></div></a>
                    </div>
                </div>
                <div class="main-service main-s3">
                    <div class="main-service-head"><h1>AGROINDUSTRIA</h1></div>
                    <div class="main-service-img"><img src="img/servicios/equinos/274_374_<?php echo $servicios[2]["img"] ?>" width="274" height="374" alt=""></div>
                    <div class="main-service-info">
                        <div class="main-service-tx">
                          <p><?php echo utf8_encode(nl2br($servicios[2]["texto_corto"])) ?></p>   
                        </div>
                        <a href="index.php?seccion=servicio-3"><div class="main-service-bt main-service-bt-3"></div></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include("footer.php"); ?>