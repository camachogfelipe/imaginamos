<style type="text/css">#nav-bt2 {background: #f3f3f3; box-shadow: inset 0px 3px 0px 0px rgba(237, 88, 88, 1); -webkit-box-shadow: inset 0px 3px 0px 0px rgba(237, 88, 88, 1);}</style>

  <section>
    <div class="con-section">
      <div class="mg-section cfx">
          <h1>Catálogo info<a class="back-bt" href="<?php echo base_url()."catalogos"; ?>">« Volver</a></h1>
		    <div class="an-sp" id="an-cat"></div>
        <div class="con-catalogo-info">
        	<!--Fotos catálogo grandes-->
          <div class="con-catalogo-img fl">
               <?php
                if(!empty($catalogos)) 
                foreach ($catalogos as $catalogo): ?>
            	<div class="catalogo-img catalogo-img-<?php echo $catalogo->imagen_id; ?>" style="background:url(<?php echo base_url().$catalogo->imagen_path; ?>);"><a class="catalogo-bt" href="<?php echo base_url().$catalogo->file_path; ?>" target="_blank"><span></span>Descargar archivo</a></div>
               <?php endforeach; ?>
           <!--   
            <div class="catalogo-img catalogo-img-1" style="background:url(assets/img/catalogo-img-1.jpg);"><a class="catalogo-bt" href="pdf.pdf" target="_blank"><span></span>Descargar archivo</a></div>
            <div class="catalogo-img catalogo-img-2" style="background:url(assets/img/catalogo-img-2.jpg);"><a class="catalogo-bt" href="pdf.pdf" target="_blank"><span></span>Descargar archivo</a></div>
            <div class="catalogo-img catalogo-img-3" style="background:url(assets/img/catalogo-img-3.jpg);"><a class="catalogo-bt" href="pdf.pdf" target="_blank"><span></span>Descargar archivo</a></div>
            <div class="catalogo-img catalogo-img-4" style="background:url(assets/img/catalogo-img-4.jpg);"><a class="catalogo-bt" href="pdf.pdf" target="_blank"><span></span>Descargar archivo</a></div>
           -->
           </div>
          <!--Fin fotos catálogo grandes-->
          <div class="con-catalogo-car fl">
            <ul class="cat-slider">
              
                <?php
                 //if(!empty($catalogos)) 
                  $i = 1;   
                 foreach ($catalogos as $catalogo): ?>
            	<a class="an-din <?php echo ($i == 1)?"cat-act":""; ?>" data-id="catalogo-img-<?php echo $catalogo->imagen_id; ?>" href="#an-cat">
                <li>
                    <div class="car-thum" style="background:url(<?php echo base_url().$catalogo->imagen_path; ?>);"></div>
                  <h1><?php echo $catalogo->titulo; ?></h1>
                  <p><?php echo $catalogo->texto.$i; $i++; ?></p>
                </li>
               </a>
               <?php endforeach; ?>
            	
            <!--    <a class="an-din" data-id="catalogo-img-2" href="#an-cat">
                <li>
                  <div class="car-thum" style="background:url(assets/img/catalogo-img-2.jpg);"></div>
                  <h1>Lorem ipsum</h1>
                  <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                </li>
              </a>
              <a class="an-din" data-id="catalogo-img-3" href="#an-cat">
                <li>
                  <div class="car-thum" style="background:url(assets/img/catalogo-img-3.jpg);"></div>
                  <h1>Lorem ipsum</h1>
                  <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                </li>
              </a>
              <a class="an-din" data-id="catalogo-img-4" href="#an-cat">
                <li>
                  <div class="car-thum" style="background:url(assets/img/catalogo-img-4.jpg);"></div>
                  <h1>Lorem ipsum</h1>
                  <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                </li>
              </a> -->
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>