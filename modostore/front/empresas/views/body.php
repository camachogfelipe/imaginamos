
	<style type="text/css">#nav-act-1 {color:#ff902c;} #nav-act-1 span {opacity:1; filter:alpha(opacity=99); -ms-filter:"progid:DXImageTransform.Microsoft.Alpha(Opacity=99)";}</style>
	
  
  <section>
    <div class="con-section">
      <div class="mg-section cfx">
        <h1 class="pro-title">Nuestra compañia</h1>
        <div class="con-grl-tx">
          <h1>Historia</h1>
          <p><?php echo $empresa->historia; ?></p>
          <img src="<?php echo base_url().$empresa->imagen_path; ?>" class="emp-img fl" height="250" width="350" alt="">
          <h1>Misión y Visión</h1>
          <?php echo $empresa->mision_vision; ?>
          <h1>Puntos diferenciadores</h1>
           <?php
           $i = 1; 
           foreach ($puntos as $punto): ?>
              <p><strong><?php echo $i; $i++; ?>.</strong><?php echo $punto->texto; ?></p>
           <?php endforeach; ?>
              
              
         <h1>Nuestros valores</h1>
          <div class="con-values cfx">
          	<!--Valor-->
                <?php foreach ($valores as $valor): ?>
          	<div class="item-value">
            	<div class="item-value-img"><img src="<?php echo base_url().$valor->imagen_path; ?>" height="216" width="216" alt=""></div>
              <div class="item-value-tx">
              	<h1><?php echo $valor->titulo; ?></h1>
                <p><?php echo $valor->texto; ?></p>
              </div>
            </div>
                 <?php endforeach; ?>
            <!--

          	<div class="item-value">
            	<div class="item-value-img"><img src="<?php echo base_url(); ?>assets/img/valor-2.jpg" height="216" width="216" alt=""></div>
              <div class="item-value-tx">
              	<h1>Compromiso</h1>
                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.</p>
              </div>
            </div>

          	<div class="item-value">
            	<div class="item-value-img"><img src="<?php echo base_url(); ?>assets/img/valor-3.jpg" height="216" width="216" alt=""></div>
              <div class="item-value-tx">
              	<h1>Puntualidad</h1>
                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.</p>
              </div>
            </div>

          	<div class="item-value">
            	<div class="item-value-img"><img src="<?php echo base_url(); ?>assets/img/valor-4.jpg" height="216" width="216" alt=""></div>
              <div class="item-value-tx">
              	<h1>Responsabilidad</h1>
                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.</p>
              </div>
            </div>
            -->
          </div>
        </div>
      </div>
    </div>
  </section>

