	<div id="loader"></div>
	<!--<div class="head-borde"><div class="head-borde-1"></div><div class="head-borde-2"></div><div class="head-borde-3"></div><div class="head-borde-4"></div></div>-->
  <div class="header">
		<div class="mg-header clearfix">
			<div class="header-logo"><a href="home"><img src="img/header-logo.png" height="90" width="288"></a></div>
			<!--<div class="con-info-head">
				<div class="esp-tels">
					<p class="numero">(311)<strong>200 2714</strong></p>
					<p class="ubicacion">Todo Colombia</p>
				</div>
				<div class="esp-tels">
					<p class="numero">(1)<strong>611 4050</strong></p>
					<p class="ubicacion">Bogotá</p>
				</div>
				<div class="preguntas"><a href="faq.php?seccion=2" class="<?php /*?><?php if ($_GET['seccion'] == '2'){echo 'faq-act';}?><?php */?>">¿Preguntas?</a></div>
			</div>-->
      <div class="con-info-head">
				<?php echo $contacto->telefono;  ?> - <?php echo $contacto->movil;  ?> Bogotá
			</div>
			<div class="con-nav">
				<div class="bt-nav <?php echo  ($this->session->userdata('page_act') == 'DRA. ROSALINDA')?"nav-act":""; ?>"><a href="doctora">DRA. ROSALINDA</a></div>
				<div class="bt-nav <?php echo  ($this->session->userdata('page_act') == 'SEDE CAMPESTRE')?"nav-act":""; ?>"><a href="lugar">SEDE CAMPESTRE</a></div>
				<div class="bt-nav <?php echo  ($this->session->userdata('page_act') == 'ESTÉTICA')?"nav-act":""; ?>"><a href="corporal">ESTÉTICA</a></div>
                                <div class="bt-nav <?php echo  ($this->session->userdata('page_act') == 'ADELGAZAR')?"nav-act":""; ?>"><a href="tratamiento">ADELGAZAR</a></div>
			</div>
      
      <?php /*?>
			
			<div class="con-nav">
				<div class="bt-nav <?php if ($_GET['seccion'] == '6'){echo 'nav-act';}?>"><a href="doctora.php?seccion=6">Dra. Rosalinda</a></div>
				<div class="bt-nav-more <?php if ($_GET['seccion'] == '5'){echo 'nav-act';}?>">
        	<a href="campestre.php?seccion=5">Sede Campestre</a>
          <div class="con-sub-nav">
            <ul>
              <li id="sub-9"><a href="lugar.php?seccion=5">El Lugar</a></li>
              <li id="sub-10"><a href="adelgazamiento.php?seccion=5">Adelgazamiento</a></li>
              <li id="sub-11"><a href="desintoxicacion.php?seccion=5">Desintoxicación</a></li>
              <li id="sub-12"><a href="retiros.php?seccion=5">Retiros</a></li>
              <li id="sub-13"><a href="jovenes.php?seccion=5">Niños y Adolescentes</a></li>
              <li id="sub-14"><a href="empresas.php?seccion=5">Empresas</a></li>
            </ul>
          </div>
        </div>
				<div class="bt-nav-more <?php if ($_GET['seccion'] == '4'){echo 'nav-act';}?>">
        	<a href="estetica.php?seccion=4">Estética</a>
          <div class="con-sub-nav">
            <ul>
              <li id="sub-6"><a href="corporal.php?seccion=4">Diseño Corporal</a></li>
              <li id="sub-7"><a href="faciales.php?seccion=4">Tratamientos Faciales</a></li>
              <li id="sub-8"><a href="cirugia.php?seccion=4">Cirugía Estética</a></li>
            </ul>
          </div>
        </div>
        <div class="bt-nav-more <?php if ($_GET['seccion'] == '3'){echo 'nav-act';}?>">
          <a href="adelgazar.php?seccion=3">Adelgazar</a>
          <div class="con-sub-nav">
            <ul>
              <li id="sub-1"><a href="tratamiento.php?seccion=3">El Tratamiento</a></li>
              <li id="sub-2"><a href="testimonios.php?seccion=3">Testimonios</a></li>
              <li id="sub-3"><a href="alimentacion.php?seccion=3">Alimentación Inteligente</a></li>
              <li id="sub-4"><a href="banda.php?seccion=3">Banda Gástrica Virtual</a></li>
              <li id="sub-5"><a href="analisis.php?seccion=3">Análisis Gratuito</a></li>
            </ul>
          </div>
        </div>
			</div>
		
			<?php */?>
      
      
		</div>
  </div>