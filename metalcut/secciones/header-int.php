<?php if(!isset($_SESSION)) session_start(); ?>   
<div id="loader"><div id="progress"></div></div>
    <div class="site-mark"></div>
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
        <div class="mg-header clearfix">
        	<div class="header-logo"><a href="index.php?base&seccion=index"><img src="assets/img/header-logo.jpg" width="100" height="120" alt=""></a></div>
          <div class="con-login">
                <?php 
                if (!empty($_SESSION['nombre'])){
                         $nom_user=$_SESSION['nombre'];
                      }else{
                         $nom_user=''; 
                      } 
                     ?>
          	<h1>Bienvenido <?php echo $nom_user ?></h1>
            <!--form id="site-login" method="post" action="zona-segura.php">
              <fieldset>
                <input type="submit" value="" class="submit-login">
              </fieldset>
              <fieldset class="campo-fs-p">
                <input type="password" class="campo-src validate[required]" placeholder="Contraseña...">
              </fieldset>
              <fieldset class="campo-fs-u">
                <input type="text" class="campo-src validate[required]" placeholder="Usuario...">
              </fieldset>
            </form-->
          </div>
          <div class="con-src">
            <form id="site-src" method="post" action="index.php?base&seccion=anywhereindb">
              <fieldset>
                <input type="submit" value="" class="submit-src">
              </fieldset>
              <fieldset class="campo-fs">
                <input type="text" class="campo-src" id="texto" name="texto" value="Buscar..." onblur="javascript:if(this.value=='') this.value='Buscar...';" onfocus="javascript:if(this.value=='Buscar...') this.value='';">
              </fieldset>
            </form>
          </div>
        </div>
      </div>
    </header>