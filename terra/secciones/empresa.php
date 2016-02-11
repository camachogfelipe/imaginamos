<?php include("head.php"); ?>
<?php include("header.php"); ?>
<?php
$cNosotros = new Dbnosotros();
$nosotros = $cNosotros->getByPk(1);
?>
<section>
    <div class="con-section">
        <div class="mg-section section-info clearfix">
            <div class="con-company">
                <h1>ACERCA DE NOSOTROS</h1>
                <div class="con-company-info" id="valor-t">
                    <h1><?php echo utf8_encode($nosotros["titulo1"]) ?></h1>
                    <div class="company-tx">
                        <p><?php echo utf8_encode(nl2br($nosotros["texto"])) ?></p>
                    </div>
                    <div class="company-img-s"><img src="img/nosotros/500_150_<?php echo $nosotros["img1"] ?>" width="500" height="150" alt=""><a id="valor-b"></a></div>
                    <h1><?php echo utf8_encode($nosotros["titulo2"]) ?></h1>
                    <div class="company-tx">
                        <p><?php echo utf8_encode(nl2br($nosotros["texto2"])) ?></p>
                    </div>
                    <div class="company-img-s"><img src="img/nosotros/500_150_<?php echo $nosotros["img2"] ?>" width="500" height="150" alt=""></div>
                </div>
                <div class="con-company-img">
                	<img src="img/nosotros/400_610_<?php echo $nosotros["img3"] ?>" width="400" height="440" alt="">
                  <div class="con-rsc">
                  	<h1><?php echo utf8_encode($nosotros["titulo3"]) ?></h1>
                    <div class="rsc-tx">
                        <p><?php echo utf8_encode(nl2br($nosotros["texto3"])) ?></p>
                    </div>                    
                  </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include("footer.php"); ?>