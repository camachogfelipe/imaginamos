<?php if(!isset($_SESSION)) session_start(); ?>
<div id="loader"><div id="progress"></div></div>
    <header>
      <div class="con-header">
        <nav>
          <div class="con-nav">
            <div class="mg-nav clearfix">
              <ul class="nav-main">
                <li><a href="index.php?base&seccion=contacto" class="<?php if ($_GET['seccion'] == '3'){echo 'nav-act';}?>">CONT&#193;CTENOS</a></li>
                <li class="main-nav-sep"></li>
                <li><a href="index.php?base&seccion=servicios" class="<?php if ($_GET['seccion'] == '2'){echo 'nav-act';}?>" id="nav-services">PORTAFOLIO DE SERVICIOS</a>
                	<div class="con-nav-sub">
                    <ul class="nav-sub">
                      <li>
                        <a href="index.php?base&seccion=servicio-1">
                        	<img src="assets/img/sub-nab-img-1.png" width="100" height="100" alt="">
                          <h1 class="<?php if ($_GET['seccion'] == 's1'){echo 'sub-act';}?>">TORNEADO</h1>
                        </a>
                      </li>
                      <li>
                        <a href="index.php?base&seccion=servicio-2">
                        	<img src="assets/img/sub-nab-img-2.png" width="100" height="100" alt="">
                          <h1 class="<?php if ($_GET['seccion'] == 's2'){echo 'sub-act';}?>">TALADRADO</h1>
                        </a>
                      </li>
                      <li>
                        <a href="index.php?base&seccion=servicio-3">
                        	<img src="assets/img/sub-nab-img-3.png" width="100" height="100" alt="">
                          <h1 class="<?php if ($_GET['seccion'] == 's3'){echo 'sub-act';}?>">FRESADO</h1>
                        </a>
                      </li>
                      <li>
                        <a href="index.php?base&seccion=servicio-4">
                        	<img src="assets/img/sub-nab-img-4.png" width="100" height="100" alt="">
                          <h1 class="<?php if ($_GET['seccion'] == 's4'){echo 'sub-act';}?>">ACCESORIOS</h1>
                        </a>
                      </li>
                    </ul>
                  </div>
                </li>
                <li class="main-nav-sep"></li>
                <li><a href="index.php?base&seccion=empresa" class="<?php if ($_GET['seccion'] == '1'){echo 'nav-act';}?>">QUI&#201;NES SOMOS</a></li>
                <li class="main-nav-sep"></li>
                <li><a href="index.php?base&seccion=index" id="nav-home">INICIO</a></li>
              </ul>
        		</div>
          </div>
        </nav>
      </div>
    </header>