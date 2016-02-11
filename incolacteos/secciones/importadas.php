<?php include("head.php"); ?>
<?php include("header.php"); ?>

<section>		
    <div class="con-section">
        <div class="mg-section clearfix">
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
                                    <img src="img/productos/importados/144_136_<?php echo $importados[$a]["img"] ?>" width="144" height="136" alt="">
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

<?php include("footer.php"); ?>