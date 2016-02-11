	<style type="text/css">#f-act-home {color:#0061a6;}</style>
  <div class="banner-home">
    <div class="mg-banner-home clearfix">
      <div class="pos-banner-home">
        <div id="slider-rangel" class="royalSlider contentSlider rsDefault">
          <!--Slide 1-->
          
          <?php foreach ($barner as $val) : ?>
          <div data-rsDelay="6000">
            <span class="rsTmb"><?php echo $val->titulo;  ?></span>
            <div class="slide-bg">
            	<div class="slide-img">
              	<?php if(!empty($val->imagen1_path)) : ?>
              	<img src="<?php echo base_url().$val->imagen1_path;  ?>" height="400" width="700" alt="">
                <?php endif; ?>
                <a href="<?php echo base_url().$val->link;  ?>"><div class="slider-bt">Ver más</div></a>
              </div>
              <div class="con-slide-bg"><img src="<?php echo base_url().$val->imagen_path;  ?>" height="400" width="1054" alt=""></div>
            </div>
          </div>
           <?php endforeach; ?>
          
          <!--
          <div data-rsDelay="6000">
            <span class="rsTmb">Alimentación inteligente</span>
            <div class="slide-bg">
            	<div class="slide-img">
              	<img src="img/slide-img-2.png" height="400" width="700" alt="">
                <a href="#"><div class="slider-bt">Ver más</div></a>
              </div>
              <div class="con-slide-bg"><img src="img/slide-bg-2.png" height="400" width="1054" alt=""></div>
            </div>
          </div>
          <div data-rsDelay="6000">
            <span class="rsTmb">Banda gástrica virtual</span>
            <div class="slide-bg">
            	<div class="slide-img">
              	<img src="img/slide-img-1.png" height="400" width="700" alt="">
                <a href="#"><div class="slider-bt">Ver más</div></a>
              </div>
              <div class="con-slide-bg"><img src="img/slide-bg-1.png" height="400" width="1054" alt=""></div>
            </div>
          </div>
          <div data-rsDelay="6000">
            <span class="rsTmb">Resultados comprobados</span>
            <div class="slide-bg">
            	<div class="slide-img">
              	<img src="img/slide-img-2.png" height="400" width="700" alt="">
                <a href="#"><div class="slider-bt">Ver más</div></a>
              </div>
              <div class="con-slide-bg"><img src="img/slide-bg-2.png" height="400" width="1054" alt=""></div>
            </div>
          </div>
          <div data-rsDelay="6000">
            <span class="rsTmb">ANÁLISIS GRATUITO</span>
            <div class="slide-bg">
            	<div class="slide-img">
              	<img src="img/slide-img-1.png" height="400" width="700" alt="">
                <a href="#"><div class="slider-bt">Ver más</div></a>
              </div>
              <div class="con-slide-bg"><img src="img/slide-bg-1.png" height="400" width="1054" alt=""></div>
            </div>
          </div>
          -->
        </div>
      </div>
      <!--div class="banner-nav-sombra"></div-->
    </div>
  </div>
  <div class="destacados-home">
  	<div class="mg-destacados-home clearfix">
            
      <?php foreach ($destacado as $val) : ?>      
      <div class="destacado">
        <div class="destacado-imagen">
            <img src="<?php echo base_url().$val->imagen_path;  ?>" width="288" height="130">
        </div>
        <h2><?php echo $val->titulo;  ?></h2>
        <p><?php echo $val->texto;  ?></p>
      </div>
      <?php endforeach; ?>
       
            
            
      <div class="destacado item-home-video">
      	<a href="<?php echo $video->link; ?>" class="modal-media">
          <div class="destacado-video">
          	<div class="con-icon-des-v">
                    <div class="img-des-t"><img src="<?php echo base_url().$video->imagen_path; ?>" width="288" height="162" alt=""></div><div class="vn-des-t"></div><div class="icon-des-v"></div>
            </div>
          </div>
          <h2><?php echo $video->titulo; ?></h2>
        </a>
      </div>
            
            
    </div>
  </div>
  <section>
    <div class="info">
      <div class="mg-info clearfix">
          
          
        <div class="top-razones">
          <h2><?php echo $text_page->titulo;  ?></h2>
          <p><?php echo $text_page->texto;  ?></p>
        </div>
          
        <?php $i = 1; foreach ($contenedor as $val) : ?>    
        <div class="razon">
          <img src="<?php echo base_url().$val->imagen_path;  ?>" width="382" height="200" alt="">
          <div class="info-razon">
            <span class="num-razon"><?php echo $i; $i++ ?>.</span>
            <div class="con-tt-ab">
            	<h1><?php echo $val->titulo;  ?></h1>
            </div>
            <p><?php echo $val->texto;  ?></p>
          </div>
        </div>
        <?php endforeach; ?>  
          
      
      </div>
    </div>   
</section>