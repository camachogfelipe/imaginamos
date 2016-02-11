		<div id="loader"><div id="progress"></div></div>
    <header>
      <div class="con-header">
        <div class="header-top">
        	<div class="mg-header-top">
          	<div class="top-bt top-bt-1"><span></span>Llámenos<script type="text/javascript" src="http://cdn.dev.skype.com/uri/skype-uri.js"></script><div id="call-bt"><script type="text/javascript">Skype.ui({"name":"call", "element":"call-bt","participants":["setronics"], "imageColor":"white", "imageSize":0});</script></div></div>
            <a href="contacto.php"><div class="top-bt top-bt-2"><span></span>Contáctenos</div></a>
          </div>
        </div>
        <div class="mg-header cfx">
        	<div class="con-info-header cfx">
            <div class="header-logo"><a href="<?php echo site_url('home') ?>"><img src="<?php echo global_asset('img/header-logo.png') ?>" width="204" height="92" alt=""></a></div>
            <div class="con-info-header-nav">
            	<a href="#modal-reg" class="modals-act"><div class="zona-bt-2"></div></a>
              <a href="#modal-login" class="modals-act"><div class="zona-bt-1"></div></a>
              <div class="login-tx">Ingresa a la zona segura</div>
              <?php foreach ($datos as $redes_sociales) : ?>
                	<?php $rs[] = $redes_sociales['link'] ?>
              	<?php endforeach; ?>
              <a href="<?php echo $rs[1]; ?>" target="_blank"><div class="header-red"><span><img src="<?php echo global_asset('img/header-red-tw.png') ?>"></span></div></a>
              <a href="<?php echo $rs[0]; ?>" target="_blank"><div class="header-red"><span><img src="<?php echo global_asset('img/header-red-fb.png') ?>"></span></div></a>
            </div>
          </div>
          <nav>
          	<div class="con-nav">
              <ul class="nav-main">
              	<li class="nav-first" id="nav-bt-1"><a href="<?php echo site_url('nosotros') ?>">NOSOTROS</a><span class="nav-arrow-t1"></span></li>
                <li class="nav-sep"></li>
                <li class="con-nav-sub" id="nav-bt-2">
                	<a href="<?php echo site_url('comunicaciones') ?>">COMUNICACIONES</a>
                	<ul class="nav-sub">
                  	<div class="sub-nav-arrow-1"></div>
                  	<li class="con-nav-sub-nav">
                    	<a href="#">Hytera</a>
                    	<ul class="nav-sub-nav">
                      	<li><a href="#">Análogos</a></li>
                        <li><a href="#">Digitales</a></li>
                        <li><a href="#">Tetra</a></li>
                      </ul>
                    </li>
                    <li class="con-nav-sub-nav">
                    	<a href="#">EfJohson</a>
                      <ul class="nav-sub-nav">
                      	<li><a href="#">Op. 1</a></li>
                        <li><a href="#">Op. 2</a></li>
                        <li><a href="#">Op. 3</a></li>
                      </ul>
                    </li>
                    <li><a href="#">Enlaces</a></li>
                  </ul>
                </li>
                <li class="nav-sep"></li>
                <li class="con-nav-sub" id="nav-bt-3">
                  <a href="seguridad.php">SISTEMAS ELECTRÓNICOS DE SEGURIDAD</a>
                  <ul class="nav-sub">
                    <div class="sub-nav-arrow-2"></div>
                    <li><a href="#">CCTV</a></li>
                    <li><a href="#">Detección</a></li>
                    <li><a href="#">Controles</a></li>
                    <li><a href="#">Alarmas</a></li>
                    <li><a href="#">Enlaces</a></li>
                  </ul>
                </li>
                <li class="nav-sep"></li>
                <li id="nav-bt-4"><a href="integracion.php">INTEGRACIÓN</a><span class="nav-arrow-t4"></span></li>
                <li class="nav-sep"></li>
                <li class="con-nav-sub" id="nav-bt-5">
                  <a href="tecnico.php">SERVICIO TÉCNICO</a>
                  <ul class="nav-sub">
                    <div class="sub-nav-arrow-3"></div>
                    <li><a href="certificaciones.php">Certificaciones</a></li>
                    <li><a href="propuestas.php">Propuestas de valor</a></li>
                    <li><a href="servicios.php">Servicios</a></li>
                  </ul>
                </li>
                <li class="nav-sep"></li>
                <li class="nav-last" id="nav-bt-6"><a href="gestion.php">GESTIÓN DE FLOTA</a><span class="nav-arrow-t6"></span></li>
              </ul>
            </div>
          </nav>
        </div>
      </div>
    </header>