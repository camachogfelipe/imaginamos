<?php include("head.php"); ?>
<?php include("header.php"); ?>

<section>
    <div class="con-section">
        <div class="mg-section section-info clearfix">
            <div class="con-news">
                <h1>NOTICIAS</h1>
                <div class="news-box">
                    <!--Noticia-->
                    <?php
                    //  $cNot = new Dbnoticias();
                    $not = DbHandler::GetAll("SELECT * FROM noticias ORDER BY id DESC");
                    if (count($not) > 0) {
                    for ($a = 0, $b = count($not);
                    $a < $b;
                    $a++) {
                    ?>
                    <div class="news-f">
                        <div class="news-img">
                            <div class="news-img-ps"><img src="img/noticias/300_200_<?php echo $not[$a]["img"] ?>" width="300" height="200" alt=""></div>
                            <a class="modal-news fancybox.iframe" href="index.php?seccion=noticia-tipo-1&not=<?php echo $not[$a]["id"] ?>">
                                <?php
                                if($not[$a]["posicion"]== 1){
                                echo '<div class="news-img-arrow news-t1"></div></a>';
                                }else if($not[$a]["posicion"]== 2){
                                echo '<div class="news-img-arrow news-t2"></div></a>';
                                }else{
                                echo '<div class="news-img-arrow news-t3"></div></a>';
                                }
                                
                                ?>


                        </div>
                        <?php
                        $fecha = explode("-", $not[$a]["fecha"]);
                        ?>
                        <div class="news-info">
                            <div class="news-date"><?php echo $fecha[2] ?>/<?php echo $fecha[1] ?>/<?php echo $fecha[0] ?></div>
                            <div class="news-tx">
                                <h1><?php echo utf8_encode($not[$a]["titulo"]) ?></h1>
                                <p><?php echo utf8_encode(nl2br((substr($not[$a]["texto"], ((strlen($not[$a]["texto"])) * -1), 400)) . '...')) ?></p>                                       
                            </div>
                            <a class="modal-news fancybox.iframe" href="index.php?seccion=noticia-tipo-1&not=<?php echo $not[$a]["id"] ?>"><div class="news-bt"></div></a>
                        </div>
                    </div>
                    <?php
                    }
                    }
                    ?>

                    <!--                    Noticia
                                        <div class="news-f">
                                            <div class="news-img">
                                                <div class="news-img-ps"><img src="assets/img/news-img-modal-t2.jpg" width="300" height="200" alt=""></div>
                                                <a class="modal-news fancybox.iframe" href="noticia-tipo-2.php"><div class="news-img-arrow news-t2"></div></a>
                                            </div>
                                            <div class="news-info">
                                                <div class="news-date">01/06/2.013</div>
                                                <div class="news-tx">
                                                    <h1>Lorem Ipsum is simply dummy Lorem Ipsum is simply dummy text</h1>
                                                    <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. In luctus tristique lectus non tristique. Integer ipsum ante, rutrum id fermentum id, ultrices vitae dolor. Aenean scelerisque ligula nec dui ultrices hendrerit convallis leo feugiat. In hac habitasse platea dictumst.</p>
                                                    <p>Pellentesque habitant morbi tristique senectus et netus...</p>
                                                </div>
                                                <a class="modal-news fancybox.iframe" href="noticia-tipo-2.php"><div class="news-bt"></div></a>
                                            </div>
                                        </div>
                                        Noticia
                                        <div class="news-f">
                                            <div class="news-img">
                                                <div class="news-img-ps"><img src="assets/img/news-img-modal-t3.jpg" width="300" height="200" alt=""></div>
                                                <a class="modal-news fancybox.iframe" href="noticia-tipo-3.php"><div class="news-img-arrow news-t3"></div></a>
                                            </div>
                                            <div class="news-info">
                                                <div class="news-date">24/05/2.013</div>
                                                <div class="news-tx">
                                                    <h1>Lorem Ipsum is simply dummy Lorem Ipsum is simply dummy text</h1>
                                                    <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. In luctus tristique lectus non tristique. Integer ipsum ante, rutrum id fermentum id, ultrices vitae dolor. Aenean scelerisque ligula nec dui ultrices hendrerit convallis leo feugiat. In hac habitasse platea dictumst.</p>
                                                    <p>Pellentesque habitant morbi tristique senectus et netus...</p>
                                                </div>
                                                <a class="modal-news fancybox.iframe" href="noticia-tipo-3.php"><div class="news-bt"></div></a>
                                            </div>
                                        </div>-->
                </div>
            </div>
        </div>
    </div>
</section>

<?php include("footer.php"); ?>