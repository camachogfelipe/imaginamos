    <div id="loader"></div>
    <header>
      <div class="con-header">
        <div class="mg-header clearfix">
          <div class="nav-sup">
            <a href="<?php echo base_url()?>contactenos"><div class="nav-sup-icon nav-icon-2"></div></a>
            <a href="<?php echo base_url()?>quienes"><div class="nav-sup-icon nav-icon-1"></div></a>
          </div>
          <nav>
          	<div class="con-nav">
            	<ul>
                    <a href="<?php echo base_url()?>que?seccion=2"><li class="<?php if (@$_GET['seccion'] == '2'){echo 'nav-act';}?>">¿QUÉ HACEMOS?<span></span></li></a>
                <a href="<?php echo base_url()?>como?seccion=3"><li class="<?php if (@$_GET['seccion'] == '3'){echo 'nav-act';}?>">¿CÓMO LO HACEMOS?<span></span></li></a>
                <a href="<?php echo base_url()?>aplica?seccion=4"><li class="<?php if (@$_GET['seccion'] == '4'){echo 'nav-act';}?>">APLICACIONES NOVEDOSAS<span></span></li></a>
                <a href="<?php echo base_url()?>calidadservicio?seccion=5"><li class="<?php if (@$_GET['seccion'] == '5'){echo 'nav-act';}?>">CALIDAD DE NUESTRO SERVICIO<span></span></li></a>
                <a href="<?php echo base_url()?>beneficiate?seccion=6"><li class="<?php if (@$_GET['seccion'] == '6'){echo 'nav-act';}?>">BENEFICIATE CON NOSOTROS<span></span></li></a>
              </ul>
            </div>
          </nav>
          <div class="con-header-logo"><div class="header-logo"><a href="<?php echo base_url()?>"><img src="<?php echo base_url()?>assets/img/header-logo.png" width="344" height="114" alt=""></a></div></div>
        </div>
      </div>
    </header>