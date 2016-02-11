<?php include("head.php"); ?>
<?php include("header.php"); ?>
<section>		
    <div class="con-section">
        <div class="mg-section clearfix">
            <h2>
                Promociones
                <a href="javascript:history.back()" id="an-info"><div class="back-vn"><div class="back-bt"></div><span></span></div></a>
            </h2>
            <div class="pager-pro clearfix pager-pro-1">
                <div class="pager-nav"></div>
                <ul class="con-pager clearfix">
                    <?php
                    $promociones = DbHandler::GetAll("SELECT * FROM promociones");
                    for ($a = 0, $b = count($promociones); $a < $b; $a++) {
                        echo ($a == 0) ? "<li>" : "";
                        
                        ?>
                    <div class="con-item-promo">
                        <h1><?php echo utf8_encode($promociones[$a]["titulo"]) ?></h1>
                            <div class="img-promo">
                                <img src="img/promociones/166_151_<?php echo $promociones[$a]["img"] ?>" width="166" height="151" alt="">
                                <a href="#modal-promo<?php echo $promociones[$a]["id"] ?>" class="modals-act"><div class="promo-vn"><div class="promo-bt"></div><span></span></div></a>
                            </div>
                            <div class="tx-promo"><?php //echo utf8_decode(nl2br($promociones[$a]["texto"])) ?>
                                <?php
                                if(strlen($promociones[$a]["texto"])<237){?>
                                    <p><?php echo utf8_encode($promociones[$a]["texto"]) ?></p>
                                <?php }else{?>
                                <p><?php echo  utf8_encode(substr($promociones[$a]["texto"], ((strlen($promociones[$a]["texto"])) * -1), 237) . '...') ?></p>
                                <?php }?>
                            </div>
                    </div>
                    <?php 
                    
                    echo ($a % 2 == 1 && $a != 0) ? "</li><li>" : "";
                    }
                    ?>                  
                </ul>
            </div>
        </div>
    </div>
</section>

<?php include("footer.php"); ?>