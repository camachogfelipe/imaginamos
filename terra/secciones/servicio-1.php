<?php include("head.php"); ?>
<style type="text/css">#serv-id {background-color: #808534 !important; -webkit-border-radius: 8px; -moz-border-radius: 8px; border-radius: 8px;}</style>
<?php include("header.php"); ?>

<section>
    <div class="con-section section-int-ct1">
        <div class="mg-section section-info clearfix">
            <a id="anchor-top"></a>
            <div class="con-info-b">
                <div class="info-services">
                    <!--Servicio info-->
                    <?php
                    $cSrv = new Dbservicios();
                    $serv = $cSrv->getByPk(1);
                    ?>
                    <div class="info-b info-b1">
                        <div class="con-service-img con-service-img-1">
                            <div class="service-head"><h1>GANADERÍA Y EQUINOS</h1></div>
                            <div class="service-img"><img src="img/servicios/equinos/434_374_<?php echo $serv["img"] ?>" width="434" height="374" alt=""></div>
                        </div>

                        <h3><?php echo utf8_encode($serv["titulo"]) ?></h3>
                        <div class="servicio-tx">
                            <p><?php echo utf8_encode(nl2br($serv["texto_largo"])) ?></p>
                        </div>
                    </div>

                    <?php
                    $img_ser = DbHandler::GetAll("SELECT * FROM servicios_imagenes WHERE id_servicios =1");
                    if (count($img_ser) > 0) {
                        $bandera = 2;
                        for ($a = 0, $b = count($img_ser); $a < $b; $a++) {
                            ?>
                            <!--Servicio info-->
                            <div class="info-b info-b<?php echo $bandera ?>">
                                <div class="con-service-img con-service-img-1">
                                    <div class="service-head"><h1>GANADERÍA Y EQUINOS</h1></div>
                                    <div class="service-img"><img src="img/servicios/equinos/img/434_374_<?php echo $img_ser[$a]["img"] ?>" width="434" height="374" alt=""></div>
                                </div>
                                <h3><?php echo utf8_encode($img_ser[$a]["titulo"]) ?></h3>
                                <div class="servicio-tx">
                                    <p><?php echo utf8_encode(nl2br($img_ser[$a]["texto"])) ?></p>
                                </div>
                            </div>
                            <?php
                            $bandera++;
                        }
                    }
                    ?>
                </div>
            </div>
            <div class="con-info-s">
                <ul class="car-service">
                    <!--Servicio info peq-->
                    <li class="slide">
                        <a href="#anchor-top" class="anchor-ct">
                            <div class="con-item-car">
                                <div class="item-small-1 sev-active-1" data-id="info-b1"><div class="item-info"><strong>i</strong></div></div>
                                <div class="servicio-img-s"><img src="img/servicios/equinos/434_374_<?php echo $serv["img"] ?>" width="180" height="156" alt=""></div>
                            </div>
                        </a>
                    </li>
                    <?php
                    if (count($img_ser) > 0) {
                        $bande2 = 2;
                        for ($a = 0, $b = count($img_ser); $a < $b; $a++) {
                            ?>
                            <!--Servicio info peq-->
                            <li class="slide">
                                <a href="#anchor-top" class="anchor-ct">
                                    <div class="con-item-car">
                                        <div class="item-small-1" data-id="info-b<?php echo $bande2 ?>"><div class="item-info"><?php echo $bande2 - 1; ?></div></div>
                                        <div class="servicio-img-s"><img src="img/servicios/equinos/img/434_374_<?php echo $img_ser[$a]["img"] ?>" width="180" height="156" alt=""></div>
                                    </div>
                                </a>
                            </li>
                            <?php
                              $bande2++;
                        }
                    }
                    ?>

                </ul>
            </div>
            <div class="con-back-bt">
                <a href="index.php?seccion=servicio-2#anchor-top"><div class="bt-next bt-next-1"></div></a>
                <a href="javascript:history.back()"><div class="bt-back bt-back-1"></div></a>
            </div>
        </div>
    </div>
</section>

<?php include("footer.php"); ?>