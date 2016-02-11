<?php include("head.php"); ?>
	<style type="text/css">body {background-color:#fff; background-image:none;} #nav-home, #map-home {color:#ff444b !important;} #nav-home {background:url(assets/img/nav-main-arrow-2.png) right center no-repeat !important;}</style>
	<?php include("header.php"); 
        $cBanner = new Dbbanner();
        $banner = $cBanner->getList();
        $cant = count($banner);
        $cBienvenida = new Dbbienvenida();
        $mData = array("where"=>"idbienvenida=1");
        $bienvenida = $cBienvenida->getListOne($mData);
        $cDestacados = new Dbdestacados();
        $destacados = $cDestacados ->getList();
        ?>
    
  <div class="con-slider">
    <div class="mg-slider clearfix">
      <div class="header-logo-home"><a href="index.php"><img src="assets/img/header-logo.jpg" width="100" height="120" alt=""></a></div>
      <div class="con-login">
      	<!--h1>Bienvenido usuario</h1-->
        <form id="site-login" method="post" action="index.php?base&seccion=zona-segura">
          <fieldset>
            <input type="submit" value="" class="submit-login">
          </fieldset>
          <fieldset class="campo-fs-p">
            <input type="password" id="contrasena" name="contrasena" class="campo-src validate[required]" placeholder="Contrase&#241;a...">
          </fieldset>
          <fieldset class="campo-fs-u">
            <input type="text" id="correo" name="correo" class="campo-src validate[required]" placeholder="Usuario...">
          </fieldset>
        </form>
      </div>
      <div class="con-src">
        <form id="site-src" method="post" action="resultados.php">
          <fieldset>
            <input type="submit" value="" class="submit-src">
          </fieldset>
          <fieldset class="campo-fs">
            <input type="text" class="campo-src" value="Buscar...xxx" onblur="javascript:if(this.value=='') this.value='Buscar...';" onfocus="javascript:if(this.value=='Buscar...') this.value='';">
          </fieldset>
        </form>
      </div>
      <ul class="slider-home">
       <?php for($i = 0 ; $i < $cant ; $i++){ ?>
        <li class="slide">
          <div class="slider-img"><img src="assets/img/banner/<?php echo $banner[$i]["imagen"] ?>" width="640" height="438" alt=""></div>
          <div class="slider-info">
            <h1><?php echo $banner[$i]["titulo"] ?></h1>
            <h2><?php echo $banner[$i]["subtitulo1"] ?></h2>
            <h1><?php echo $banner[$i]["subtitulo2"] ?></h1>
            <ul>
              <?php echo $banner[$i]["texto"] ?>
            </ul>
          </div>
        </li>  
          
       <?php  } ?>
      </ul>
    </div>
  </div>
  <div class="section-sep"></div>
  <section>
    <div class="con-section con-destacados-top">
      <div class="mg-section mg-destacado-top clearfix">
        <h1>Bienvenidos a Metal<strong>Cut</strong>, <?php echo $bienvenida['titulo'] ?></h1>
        <p><?php echo $bienvenida['texto'] ?></p>
      </div>
    </div>
  </section>
  <section>
    <div class="con-section con-destacados-bottom">
      <div class="mg-section clearfix">
        <div class="destacados-fila">
          <div class="destacado-info">
            <a href="<?php echo $destacados[0]['link'] ?>">
              <div class="destacado-globo">
                <div class="con-globo">
                  <div class="globo-img"><img src="assets/img/destacados/<?php echo $destacados[0]['imagen'] ?>" width="126" height="126" alt=""></div>
                  <!--<div class="globo-fx"><img src="assets/img/destacado-img-1o.png" width="126" height="126" alt=""></div>-->
                  <div class="globo-fx"></div>
                </div>
              </div>
              <h1><?php echo $destacados[0]['titulo'] ?></h1>
              <p><?php echo $destacados[0]['texto'] ?></p>
            </a>
          </div>
          <div class="destacado-info">
            <a href="<?php echo $destacados[1]['link'] ?>">
              <div class="destacado-globo">
                <div class="con-globo">
                  <div class="globo-img"><img src="assets/img/destacados/<?php echo $destacados[1]['imagen'] ?>"" width="126" height="126" alt=""></div>
                  <div class="globo-fx"></div>
                </div>
              </div>
              <h1><?php echo $destacados[1]['titulo'] ?></h1>
              <p><?php echo $destacados[1]['texto'] ?></p>
            </a>
          </div>
          <div class="destacado-info">
            <a href="<?php echo $destacados[2]['link'] ?>">
              <div class="destacado-globo">
                <div class="con-globo">
                  <div class="globo-img"><img src="assets/img/destacados/<?php echo $destacados[2]['imagen'] ?>"" width="126" height="126" alt=""></div>
                  <div class="globo-fx"></div>
                </div>
              </div>
              <h1><?php echo $destacados[2]['titulo'] ?></h1>
              <p><?php echo $destacados[2]['texto'] ?></p>
            </a>
          </div>
          <div class="destacado-info">
            <a href="<?php echo $destacados[3]['link'] ?>">
              <div class="destacado-globo">
                <div class="con-globo">
                  <div class="globo-img"><img src="assets/img/destacados/<?php echo $destacados[3]['imagen'] ?>"" width="126" height="126" alt=""></div>
                  <div class="globo-fx"></div>
                </div>
              </div>
              <h1><?php echo $destacados[3]['titulo'] ?></h1>
              <p><?php echo $destacados[3]['texto'] ?></p>
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <div class="section-sep"></div>
					
<?php include("footer.php"); ?>