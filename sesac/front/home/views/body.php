  <div class="con-header-home">
    <div class="mg-header-home">
      <div class="logo-home">
          <a href="index.php"><img src="<?= front_asset("img/header-logo-home.png") ?>" height="150" width="225" alt=""></a>
      </div>
      <a class="login-home-bt" href="zona-segura.php"><span class="icon-user"></span> Ingresar</a>
    </div>
  </div>
  <div class="con-slider">
    <div class="slider-wrapper">
      <div class="slider">
        <div class="fs_loader"></div>
        <!--Slide-->
        <?php foreach ($banners as $banner) :?>
        <div class="slide" data-in="fade" data-out="fade">
        <div class="slide-sep" data-delay="3000" data-in="fade" data-out="fade" data-position="290,125"></div>
        <div class="slide-bg" data-in="fade" data-out="fade"><div class="slider-pt"></div><div class="slider-pt-s"></div></div>
        <img src="<?= $banner["imagenFrente"] ?>" data-delay="0" data-ease-in="easeInOutExpo" data-in="left" data-out="fade" data-position="0,720">
        <h1 data-position="180,120" data-ease-in="easeInOutExpo" data-in="right" data-out="fade"><strong><?= $banner["titulo1_blanco"] ?></strong><span></span></h1>
        <h1 data-position="260,120" data-delay="800" data-ease-in="easeInOutExpo" data-in="left" data-out="fade"><strong><?= $banner["titulo2_blanco"] ?></strong><span></span></h1>
        <h2 data-delay="5000" data-in="fade" data-out="fade" data-position="100,260"><?= $banner["titulo1_amarillo"] ?></h2>
        <h2 data-delay="6000" data-in="fade" data-out="fade" data-position="400,120" style="text-align:center;"><?= $banner["titulo2_amarillo"] ?></h2>
        <h2 data-delay="7000" data-in="fade" data-out="fade" data-position="150,290" style="text-align:center;"><?= $banner["titulo3_blanco"] ?></h2>
        <img class="slide-img-bg" data-fixed src="<?= $banner["imagenFondo"] ?>" height="508" width="2000">
        </div>
        <?php endforeach; ?>
        <!--Slide-->
      </div>
    </div>
  </div>
  <div class="con-nav-home">
    <ul class="nav-home">
        <li><a href="<?= base_url("empresa") ?>">Nuestra compañía</a></li>
        <li class="nav-home-sep"></li>
        <li><a href="<?= base_url("servicios") ?>">Servicios</a></li>
        <li class="nav-home-sep"></li>
        <li><a href="<?= base_url("clientes") ?>">Clientes</a></li>
        <li class="nav-home-sep"></li>
        <li><a href="<?= base_url("noticias") ?>">Noticias</a></li>
        <li class="nav-home-sep"></li>
        <li><a href="<?= base_url("trabajo") ?>">Trabaje con nosotros</a></li>
        <li class="nav-home-sep"></li>
        <li><a href="<?= base_url("contacto") ?>">Contáctenos</a></li>
    </ul>
  </div>
  <section>
    <div class="con-section">
      <div class="mg-section cfx">
        <div class="bien-tx">
          <h1><strong>BIENVENIDOS SESAC, </strong><?= $bienvenida["titulo"] ?></h1>
          <p>
            <?= $bienvenida["texto"] ?>
          </p>
        </div>
        <div class="sep-grl"><span></span></div>
        <div class="con-des-home">
          <div class="des-ll fl">
            <h1><span></span>Destacados</h1>
            <?php
            $current = 1;
            foreach($destacados as $destacado) { ?>
            <div class="des-item <?php if($current == 1){ echo "fl"; }  else { echo "fr"; } ?>">
              <a href="<?= $destacado["enlace"] ?>" target="<?= $destacado["target"] ?>">
                <div class="des-img">
                    <img src="<?= $destacado["imagen"] ?>" height="150" width="272" alt="">
                  <span class="icon-zoom"></span>
                </div>
                <div class="des-cp">
                  <h1><?= $destacado["titulo"] ?></h1>
                  <p>
                    <?= $destacado["texto"] ?>
                  </p>
                </div>
              </a>
            </div>
            <?php
            $current++;
            } ?>
          </div>
          <div class="des-lr fr">
            <h1><span></span>Trabaje con nosotros</h1>
            <p>Lorem ipsum dolor sit amet, siter siters consectetuer adipiscing elit. Aenean siter siters consectetuer adipiscing elit. Aenean</p>
            <div class="con-item-tra">
              <p>Lorem ipsum dolor sit amet, siter siters consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque</p>
              <a href="<?= base_url("trabajo") ?>"><div class="work-bt">Trabaje con Nosotros</div></a>
              <div class="arrow-tl"></div>
              <div class="arrow-br"></div>
            </div>
          </div>
        </div>
        <div id="bgBody" class="bgCarouselH">
            <script type="text/javascript">
                // <![CDATA[
                var bgHost = "http://www.applab.in/";
                var bgType = "CO-19288-1";
                var bgIndi = "1|2|9|10|8|7";
                (function(d){ var f = bgHost+ "apps/indicators/"+bgType+"/"+bgIndi+"/functions.js"; d.write(unescape("%3Cscript src='"+f+"' type='text/javascript'%3E%3C/script%3E")); })(document);
                // ]]>
          </script>
          <div class="arrow-tl"></div>
          <div class="arrow-br"></div>
        </div>
      </div>
    </div>
  </section>