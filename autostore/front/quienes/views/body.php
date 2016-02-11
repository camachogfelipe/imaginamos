<div class="container contenidos clearfix">
  <div class="div_gris  "></div>
  <h2 class="tit_secciones">
    ¿QUIÉNES SOMOS?
  </h2>
  <div class="div_gris margin_bottom"></div>
  <div class="cont_imagentexto960">
    <img src="<?php echo base_url().$quienes->imagen_path; ?>">
    <?php echo $quienes->texto;  ?>  
  </div>
  <div class="div_gris"></div>
  <h3 class="subtitsecciones">
    Nuestros vehículos
  </h3>
  <div class="div_gris margin_bottom"></div>
  <div class="cont_slidermarcas">
    <ul class="slider_marcas">
     <?php foreach ($marcas as $marca): ?>
        <li>
        <img src="<?php echo base_url().$marca->imagen_path; ?>">
        <div class="contenido_slidermarcas">
          <h2 class="tit_nombremarca">
            <?php echo $marca->nombre; ?>
          </h2>
        </div>
      </li>
      <?php endforeach; ?>
    </ul>
  </div>
  <div class="div_gris"></div>
  <h3 class="subtitsecciones">
    Nuestros productos
  </h3>
  <div class="div_gris margin_bottom"></div>
  <div class="cont_slidermarcas">
    <ul class="slider_marcas2">
      
      <?php foreach ($patrocinadores as $patrocinador): ?>  
        <li>
        <img src="<?php echo base_url().$patrocinador->imagen_path; ?>">
        <div class="contenido_slidermarcas">
          <h2 class="tit_nombremarca">
            <?php echo $patrocinador->nombre; ?>
          </h2>
        </div>
      </li>
      <?php endforeach; ?>
      
    </ul>
  </div>
</div><!-- contenidos -->