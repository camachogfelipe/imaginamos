    <header>
      <div class="con-header">
        <div class="mg-header cfx">
            <div class="header-logo"><a href="index.php"><img src="<?php echo base_url("assets/img/header-logo.png");?>"></a></div>
         <div class="con-src fr">
          	<form action="<?php echo base_url(); ?>search" class="src-form cfx" method="post">
                    <input name="q" placeholder="Buscador..." type="text">
              <input class="src-submit" type="submit" value="">
            </form>
          </div>

          <div class="con-src-mob fr">
            <form action="<?php echo base_url(); ?>search" class="src-form fr cfx" method="post">
              <input name="q" placeholder="Buscador..." type="text">
              <input class="src-submit" type="submit" value="">
            </form>
          </div>
          <nav>
          	<div class="con-nav">
            	<ul class="main-nav">
              	<li><a href="<?php echo base_url(); ?>" id="nav-bt0">Inicio</a></li>
                <li><a href="<?php echo base_url(); ?>productos" id="nav-bt1">Productos</a></li>
                <li><a href="<?php echo base_url(); ?>catalogos" id="nav-bt2">Catálogos</a></li>
                <li><a href="<?php echo base_url(); ?>videos" id="nav-bt3">Videos</a></li>
                <li><a href="<?php echo base_url(); ?>servicios" id="nav-bt4">Servicios</a></li>
                <li><a href="<?php echo base_url(); ?>empresa" id="nav-bt5">Acerca de Dajer</a></li>
                <li><a href="<?php echo base_url(); ?>contactos" id="nav-bt6">Contáctenos</a></li>
              </ul>
            </div>
          </nav>
          <div class="mini-nav">
            <div id="dl-menu" class="dl-menuwrapper">
            	<h1>Menú</h1>
              <button class="dl-trigger fr"></button>
              <ul class="dl-menu">
              	<li><a href="<?php echo base_url(); ?>">Inicio</a></li>
              	<li><a href="<?php echo base_url(); ?>productos">Productos</a></li>
                <li><a href="<?php echo base_url(); ?>catalogos">Catálogos</a></li>
                <li><a href="<?php echo base_url(); ?>videos">Videos</a></li>
                <li><a href="<?php echo base_url(); ?>servicios">Servicios</a></li>
                <li><a href="<?php echo base_url(); ?>empresa">Acerca de Dajer</a></li>
                <li><a href="<?php echo base_url(); ?>contacto">Contáctenos</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </header>