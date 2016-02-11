<div class="content_int clearfix">
  <h1 class="bebas main-title"><span>Servicios</span></h1>
  <img src="<?php echo base_url().$servicios->imagen_path; ?>" class="img_serv1" width="940" />
  <div class="main_p">
    <?php echo $servicios->texto_primcipal; ?>
    
  </div>
  <hr class="sep-rom">
  <div class="clearfix">
    <div class="left left_serv">
        <h3 class="bebas"><?php echo strtoupper($servicios->titulo_segundario); ?></h3>
     <div class="main_p">
       <?php echo $servicios->texto_segundario; ?>
      
    </div>
    </div>
    <img src="<?php echo base_url().$servicios->imagen1_path; ?>" class="right" width="280" />
  </div>
</div>