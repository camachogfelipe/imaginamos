	<div class="header">
  	<div class="con-header">
    	<div class="header-logo"><a href="<?php echo Link::ToSection(array("seccion" => "home")) ?>"><img src="<?php echo Link::Build() ?>/imagenes/header-logo.png" width="220" height="152" alt=""></a></div>
      <div class="con-header-nav">
      	<a href="<?php echo Link::ToSection(array("seccion" => "home")) ?>" class="nav-bt-1" id="<?php if ($_GET['seccion'] == 'home'){echo 'nav-activo';}?>"><div class="nav-tx">HOME</div><span></span></a>
        <a href="<?php echo Link::ToSection(array("seccion" => "ubicacion")) ?>" class="nav-bt-2" id="<?php if ($_GET['seccion'] == 'ubicacion'){echo 'nav-activo';}?>"><div class="nav-tx">D&Oacute;NDE ESTAMOS</div><span></span></a>
        <a href="<?php echo Link::ToSection(array("seccion" => "soluciones-1")) ?>" class="nav-bt-3" id="<?php if ($_GET['seccion'] == 'soluciones-1'){echo 'nav-activo';}?>"><div class="nav-tx">SOLUCIONES</div><span></span></a>
        <a href="<?php echo Link::ToSection(array("seccion" => "contacto")) ?>" class="nav-bt-6" id="<?php if ($_GET['seccion'] == 'contacto'){echo 'nav-activo';}?>"><div class="nav-tx">CONT&Aacute;CTENOS</div><span></span></a>
        <a href="<?php echo Link::ToSection(array("seccion" => "especiales")) ?>" class="nav-bt-5" id="<?php if ($_GET['seccion'] == 'especiales'){echo 'nav-activo';}?>"><div class="nav-tx">ESPECIALES</div><span></span></a>
        <a href="<?php echo Link::ToSection(array("seccion" => "recetas")) ?>" class="nav-bt-4" id="<?php if ($_GET['seccion'] == 'recetas'){echo 'nav-activo';}?>"><div class="nav-tx">RECETAS</div><span></span></a>
        <div class="mas-nav-bg"></div>
      </div>
    </div>
  </div>