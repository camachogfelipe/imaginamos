<?php include("head.php"); ?>
<?php include("header.php"); ?>
<?php
$textoDestacado = '';
$webTracking = '';
$pagoFactura = '';
$itinerarios = '';
$imagenDestacado = '';
$pagoFacturaInterno = '';
$itinerariosInterno = '';
$webTrackingInterno = '';
?>
<?php if ($destacado != false): ?>
    <?php
    foreach ($destacado as $dato):
        $textoDestacado = $dato->texto;
        $webTracking = $dato->web_tracking;
        $pagoFactura = $dato->pago_factura;
        $itinerarios = $dato->itinerarios;
        $imagenDestacado = $dato->imagen;
        $pagoFacturaInterno = $dato->pago_factura_interno == 'SI' ? '' : 'target="_blank"';
        $itinerariosInterno = $dato->itinerarios_interno == 'SI' ? '' : 'target="_blank"';
        $webTrackingInterno = $dato->web_tracking_interno == 'SI' ? '' : 'target="_blank"';
    endforeach;
    ?>
<?php endif; ?>
<div class="con-slider-home">
    <ul class="main-slider">

        <?php if ($banner != false): ?>
            <?php foreach ($banner as $dato): ?>
                <li class="slide">
                    <img src="<?php echo base_url('uploads/front/banner/' . $dato->imagen) ?>">
                    <div class="slide-cp">
                        <h1><?php echo $dato->titulo; ?></h1>
                        <h2><?php echo $dato->texto; ?></h2>
                    </div>
                </li>
            <?php endforeach; ?>
        <?php endif; ?>
    </ul>
</div>
<h1 class="welcome-tx"><strong><?php echo substr($textoDestacado, 0, 44); ?></strong> 
    <?php echo substr($textoDestacado, 44); ?></h1>
<section class="cfx">
    <div class="con-info-destacada">
        <div class="con-menu-destacados fl">
            <div class="items-nav-ll fl">
                <div class="nav-des-bt-s1">
                    <a href="<?php echo $webTracking; ?>" <?php echo $webTrackingInterno; ?>>
                        <span></span>
                        <h1>WEB TRACKING</h1>
                    </a>
                </div>
                <div class="nav-des-bt-s2">
                    <a href="<?php echo $pagoFactura; ?>" <?php echo $pagoFacturaInterno; ?>>
                        <span></span>
                        <h1>PAGO EN LÍNEA</h1>
                    </a>
                </div>
            </div>
            <div class="item-nav-lr fr">
                <a href="<?php echo $itinerarios; ?>" <?php echo $itinerariosInterno; ?>>
                    <span></span>
                    <h1>NUESTROS ITINERARIOS</h1>
                </a>
            </div>
            <div class="img-nav-ll fl" style="background-image: url(<?php echo base_url('uploads/front/destacadohome/' . $imagenDestacado) ?>)"></div>
        </div>
        <div class="info-destacada-col info-col-trm">
            <div class="con-head-des">
                <span class="icon-tablet"></span>
                <h1>TRM</h1>
            </div>
            <div class="con-trm">
            
                <iframe width="274px" height="285px" scrolling="no" frameborder="0" marginheight="0" marginwidth="0" allowtransparency="true" src="http://static.dataifx.co/portafolio/widget.setfxmonedas.html"></iframe>
                <div class="con-precio <?php $trm = $trm[0]; if($trm->color == 'VERDE') echo "sube"; else echo "baja"; ?>"><!--sube o baja-->
                	<span></span><?php echo number_format($trm->trm, 2, ".", ",") ?>
                </div>
                
            </div>
        </div>
        <!--Tab desk-->
     <!--   <div class="info-destacada-col info-col-tw tab-desk">
          <div class="con-head-des">
            <div class="con-tab-share con-tab-share-1 share-tab-act" data-id="bq-tw">
              <span class="icon-tw"></span>
              <h1>TWEETS</h1>
            </div>
            <div class="con-tab-share con-tab-share-2" data-id="bq-fb">
              <span class="icon-fb"></span>
              <h1>FACEBOOK</h1>
            </div>
          </div>
          <div class="con-tw bq-tw">
              <a class="twitter-timeline" data-dnt="true" href="https://twitter.com/CONSOLCARGO" data-widget-id="363389746392731648"></a>
              <script>!function(d, s, id) {
                      var js, fjs = d.getElementsByTagName(s)[0], p = /^http:/.test(d.location) ? 'http' : 'https';
                      if (!d.getElementById(id)) {
                          js = d.createElement(s);
                          js.id = id;
                          js.src = p + "://platform.twitter.com/widgets.js";
                          fjs.parentNode.insertBefore(js, fjs);
                      }
                  }(document, "script", "twitter-wjs");</script>
          </div>
          <div class="con-tw bq-fb">
            <div class="fb-like-box" data-href="http://www.facebook.com/ConsolCargo" data-width="" data-height="400" data-colorscheme="light" data-show-faces="false" data-header="true" data-stream="true" data-show-border="false" style="margin: 8px 0 0;"></div>
            <div id="fb-root"></div>
            <script>(function(d, s, id) {
                var js, fjs = d.getElementsByTagName(s)[0];
                if (d.getElementById(id)) return;
                js = d.createElement(s); js.id = id;
                js.src = "//connect.facebook.net/es_LA/all.js#xfbml=1";
                fjs.parentNode.insertBefore(js, fjs);
              }(document, 'script', 'facebook-jssdk'));</script>
          </div>
        </div> -->
        <!--Tab device-->
        <div class="info-destacada-col info-col-tw">
          <div class="con-head-des">
            <span class="icon-tw"></span>
            <h1>TWEETS</h1>
          </div>
          <div class="con-tw" style="display:block; height:310px !important;">
            <a class="twitter-timeline" data-dnt="true" href="https://twitter.com/CONSOLCARGO" data-widget-id="363389746392731648"></a>
						<script>!function(d, s, id) {
                    var js, fjs = d.getElementsByTagName(s)[0], p = /^http:/.test(d.location) ? 'http' : 'https';
                    if (!d.getElementById(id)) {
                        js = d.createElement(s);
                        js.id = id;
                        js.src = p + "://platform.twitter.com/widgets.js";
                        fjs.parentNode.insertBefore(js, fjs);
                    }
                }(document, "script", "twitter-wjs");</script>
          </div>
        </div>  
        <!--Tab device-->
     <!--   <div class="tab-device info-destacada-col info-col-tw">
          <div class="con-head-des">
            <span class="icon-fb"></span>
            <h1>FACEBOOK</h1>
          </div>
          <div class="con-tw" style="display:block; height:310px !important;">
            <div class="fb-like-box" data-href="http://www.facebook.com/ConsolCargo" data-width="" data-height="400" data-colorscheme="light" data-show-faces="false" data-header="true" data-stream="true" data-show-border="false" style="margin: 8px 0 0;"></div>
            <div id="fb-root"></div>
            <script>(function(d, s, id) {
                var js, fjs = d.getElementsByTagName(s)[0];
                if (d.getElementById(id)) return;
                js = d.createElement(s); js.id = id;
                js.src = "//connect.facebook.net/es_LA/all.js#xfbml=1";
                fjs.parentNode.insertBefore(js, fjs);
              }(document, 'script', 'facebook-jssdk'));</script>
          </div>
        </div> -->

     <div class="info-destacada-col info-col-news">
           <div class="con-head-des">
            <span class="icon-fb"></span>
            <h1>FACEBOOK</h1>
          </div>
          <div class="con-tw" style="display:block; height:305px !important;">
            <div class="fb-like-box" data-href="http://www.facebook.com/ConsolCargo" data-width="" data-height="305" data-colorscheme="light" data-show-faces="false" data-header="true" data-stream="true" data-show-border="false" style="margin: 8px 0 0;"></div>
            <div id="fb-root"></div>
            <script>(function(d, s, id) {
                var js, fjs = d.getElementsByTagName(s)[0];
                if (d.getElementById(id)) return;
                js = d.createElement(s); js.id = id;
                js.src = "//connect.facebook.net/es_LA/all.js#xfbml=1";
                fjs.parentNode.insertBefore(js, fjs);
              }(document, 'script', 'facebook-jssdk'));</script>
          </div>
        </div>

        <!--
        <div class="info-destacada-col info-col-news">
            <div class="con-head-des">
                <span class="icon-news"></span>
                <h1>ÚLTIMAS NOTICIAS</h1>
            </div>
            <div class="con-news">
                <ul class="news-slider">

                    <?php if ($noticias != false): $contadorNoticias = 0; ?>
                        <?php foreach ($noticias as $dato):  ?>
                            <?php
                            if ($contadorNoticias % 2 == 0) {
                                ?> <li>
                                    <?php
                                }
                                ?>
                                <div class="item-news">
                                    <figure><img src="<?php echo base_url('uploads/front/noticias/' . $dato->imagen) ?>" height="68" width="68" alt=""></figure>
                                    <figcaption>
                                        <h1><?php echo $dato->titulo; ?></h1>
                                        <p><?php echo $dato->texto; ?></p>
                                    </figcaption>
                                    <a href="<?php echo $dato->link; ?>"><div class="item-bt-mas">MÁS INFORMACIÓN <span aria-hidden="true" class="icon-arrow-rg"></span></div></a>
                                </div>

                                <?php
                                $contadorNoticias++;
                                if ($contadorNoticias % 2 == 0) {
                                    ?> </li>
                                        <?php
                                    }
                                    ?>

                            <?php endforeach; ?>
                        <?php endif; ?>

                </ul>
            </div>
        </div>  -->
    </div>
</section>

<?php include("footer.php"); ?>