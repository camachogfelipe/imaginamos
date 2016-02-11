<?php include("head.php"); ?>
<?php include("header.php"); ?>

<section>		
    <div class="con-section">
        <div class="mg-section clearfix">
            <!--Products pag.-->
            <h2 id="sec-pro-1"><span><img src="assets/img/products-logo-1.png" width="80" height="60" alt=""></span>California</h2>
            <div class="pager-pro clearfix pager-pro-1">
                <div class="pager-nav"></div>
                <ul class="con-pager clearfix">
                    <?php
                    $california = DbHandler::GetAll("SELECT * FROM productos WHERE posicion=1");
                    for ($a = 0, $b = count($california); $a < $b; $a++) {
                        echo ($a == 0) ? "<li>" : "";
                        
                        ?>
                        <a href="index.php?seccion=producto-info&idp=<?php echo $california[$a]["id"] ?>">
                            <div class="item-pro pro-t1">
                                <h1><?php echo utf8_encode($california[$a]["titulo"]) ?></h1>
                                <div class="con-pro-img">
                                    <img src="img/productos/california/144_136_<?php echo $california[$a]["img"]?>" width="144" height="136" alt="">
                                </div>
                            </div>
                        </a>
                    <?php
                    
                    echo ($a % 5 == 4 && $a != 0) ? "</li><li>" : "";
                    } ?>
                    </li>
                </ul>                
            </div>






            <!--Products pag.-->
            <h2 id="sec-pro-2"><span><img src="assets/img/products-logo-2.png" width="80" height="60" alt=""></span>Lechesan</h2>
            <div class="pager-pro clearfix pager-pro-2">
                <div class="pager-nav"></div>
                <ul class="con-pager clearfix">
                    <?php
                    $lechesan = DbHandler::GetAll("SELECT * FROM productos WHERE posicion=2");
                    for ($a = 0, $b = count($lechesan); $a < $b; $a++) {
                        echo ($a == 0) ? "<li>" : "";
                        
                        ?>
                        <a href="index.php?seccion=producto-info&idp=<?php echo $lechesan[$a]["id"] ?>">
                            <div class="item-pro pro-t1">
                                <h1><?php echo utf8_encode($lechesan[$a]["titulo"]) ?></h1>
                                <div class="con-pro-img">
                                    <img src="img/productos/lechesan/144_136_<?php echo $lechesan[$a]["img"]?>" width="144" height="136" alt="">
                                </div>
                            </div>
                        </a>
                    <?php
                    
                    echo ($a % 5 == 4 && $a != 0) ? "</li><li>" : "";
                    } ?>
                    </li>
                </ul>    
            </div>
            <!--Products pag.-->
            <h2 id="sec-pro-3">Marcas importadas</h2>
            <div class="pager-pro clearfix pager-pro-3">
                <div class="pager-nav"></div>
                <ul class="con-pager clearfix">
                    <?php
                    $importados = DbHandler::GetAll("SELECT * FROM productos WHERE posicion=3");
                    for ($a = 0, $b = count($importados); $a < $b; $a++) {
                        echo ($a == 0) ? "<li>" : "";
                        
                        ?>
                        <a href="index.php?seccion=producto-info&idp=<?php echo $importados[$a]["id"] ?>">
                            <div class="item-pro pro-t1">
                                <h1><?php echo utf8_encode($importados[$a]["titulo"]) ?></h1>
                                <div class="con-pro-img">
                                    <img src="img/productos/importados/144_136_<?php echo $importados[$a]["img"]?>" width="144" height="136" alt="">
                                </div>
                            </div>
                        </a>
                    <?php 
                    echo ($a % 5 == 4 && $a != 0) ? "</li><li>" : "";
                    } ?>
                    </li>
                </ul>  
            </div>
        </div>
    </div>
</section>
<div class="con-fx-nav">
    <a class="fx-nav" href="#sec-pro-1"><div class="fx-pick fx-pick-5"><div class="fx-nav-tip">California<span></span></div></div></a>
    <a class="fx-nav" href="#sec-pro-2"><div class="fx-pick fx-pick-6"><div class="fx-nav-tip">Lechesan<span></span></div></div></a>
    <a class="fx-nav" href="#sec-pro-3"><div class="fx-pick fx-pick-7"><div class="fx-nav-tip">Importados<span></span></div></div></a>
</div>

<?php include("footer.php"); ?>