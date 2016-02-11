<?php include("head.php"); ?>

<style type="text/css">.bx-wrapper .bx-prev {left:-15px; top:395px;} .bx-wrapper .bx-next {right:-15px; top:395px;} .bx-wrapper .bx-pager {bottom: -30px;}</style>

<?php include("header.php");
$cBanner = new Dbbanner_sirius();
$banner = $cBanner->getList();
$cant = count($banner);
$cCaracteristicas = new Dbcaracteristicas_sirius();
$carateristicas = $cCaracteristicas->getList();
$num = count($carateristicas);
$cVentajas = new Dbventajas_sirius();
$ventajas = $cVentajas->getList();
$total = count($ventajas);
$cSirius = new Dbsirius_des();
$mData = array("where"=>"idsirius_des=1");
$sirius = $cSirius->getListOne($mData);
?>

<div class="con-content">
    <div class="mg-content">
        <div class="info-content">
            <div class="sirius-logo"><img src="assets/img/sirius-logo.png" width="220" height="100" alt=""></div>
            <div class="con-info-gral">
                <h2>Su mejor alternativa en puentes modulares en acero</h2>

                <div class="destacado-sirius">
                    <div class="sirius-slider">
                        <?php for($i = 0 ; $i < $cant ; $i++){ ?>
                        <div class="slide">
                            <div class="con-slide-sirius">
                                <div class="img-sirius"><img src="assets/img/banner_sirius/520_392_<?php echo $banner[$i]["imagen"] ?>" width="520" height="380" alt=""></div>
                                <div class="caption-sirius">
                                    <h3><?php echo utf8_encode($banner[$i]["titulo"]) ?></h3>
                                    <p><?php echo utf8_encode($banner[$i]["subtitulo"]) ?></p>
                                </div>
                            </div>
                        </div>
                        <?php } ?>                        
                    </div>
                </div>

                <div class="col-sirius-2">
                    <h1>Características</h1>
                    <ul class="list-destacado">
                        <?php for($i = 0 ; $i < $num ; $i++){ ?>
                        <li><?php echo utf8_encode($carateristicas[$i]["texto"]) ?></li>
                        <?php } ?>
                    </ul>
                </div>

            </div>
            <div class="con-info-gral">

                <div class="paging_servs">
                    <p align="justify"><?php echo utf8_encode(nl2br($sirius["texto"])) ?></p> 
                </div>

                <div class="col-sirius-1">
                    <h1>Ventajas</h1>
                    <ul class="list-destacado">
                        <?php for($i = 0 ; $i < $total ; $i++){ ?>
                        <li><?php echo utf8_encode($ventajas[$i]["texto"]) ?></li>
                        <?php } ?>
                    </ul>
                </div>

            </div>
        </div>
    </div>
</div>

<?php include("footer.php"); ?>