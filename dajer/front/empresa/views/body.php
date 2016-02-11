<style type="text/css">#nav-bt5 {background: #f3f3f3; box-shadow: inset 0px 3px 0px 0px rgba(237, 88, 88, 1); -webkit-box-shadow: inset 0px 3px 0px 0px rgba(237, 88, 88, 1);}</style>
 <section>
    <div class="con-section">
      <div class="mg-section cfx">
      	<h1>Acerca de Dajer</h1>
        
        <?php 
        if(!empty($acerca))
        foreach ($acerca as $de): ?>
        <div class="con-com-datos cfx">
            <div class="empresa-img fl" style="background:url(<?php echo base_url().$de->imagen_path; ?>);"></div>
        	<div class="com-datos fr">
                    <p><span class="empresa-logo"><img src="<?php echo assets_url("img/empresa-logo.png"); ?>" height="28" width="140" alt="">
                    <div>
                        <?php echo $de->texto; ?>
                    </div>        
            </p>
          </div>
        </div>
         <?php endforeach; ?>
        
        <div class="con-com-datos cfx">
          <h1>Nuestros principales proveedores</h1>
          <div class="con-slider-clients">
            <div class="clients-slider">
              <?php
               if(!empty($logos))
               foreach ($logos as $logo): ?>   
                <div style="background:url(<?php echo base_url().$logo->imagen_path ?>);"></div>
              <?php endforeach; ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>