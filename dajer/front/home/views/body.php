<style type="text/css">#nav-bt0 {background: #f3f3f3; box-shadow: inset 0px 3px 0px 0px rgba(237, 88, 88, 1); -webkit-box-shadow: inset 0px 3px 0px 0px rgba(237, 88, 88, 1);}</style>
  <div class="con-slider-home">
    <ul class="main-slider">
      
        <?php foreach ($barners as $barner) : ?>
        <li class="cfx">
      	<div class="main-slide-img" style="background: url(<?php echo base_url().$barner->imagen_path; ?>);"></div>
        <div class="slide-cp">
        	<h1><?php echo strtoupper(strip_tags($barner->titulo)); ?></h1>
          <div class="slide-sep"></div>
          <p><?php echo strip_tags($barner->texto); ?></p>
          <a class="slide-bt" href="<?php echo (!empty($barner->link))?$barner->link:"#"; ?>"><span>MÁS INFORMACIÓN</span></a>
        </div>
      </li>
      <?php endforeach ?>
     <!-- 
      <li class="cfx">
      	<div class="main-slide-img" style="background: url(assets/img/slide-2.jpg);"></div>
        <div class="slide-cp">
        	<h1>2 IMPORTAMOS LOREM IPSUM</h1>
          <div class="slide-sep"></div>
          <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium dolorem laudantium, totam rem aperiam, eaque ipsa quaeab illo inventore veritatis et quasi beatae.</p>
          <a class="slide-bt" href="#"><span>MÁS INFORMACIÓN</span></a>
        </div>
      </li> -->
    </ul>
  </div>
  <div class="con-info-nav cfx">
  	
       <?php
            $i = 1; 
            foreach ($categorias as $cat): ?>	
                <div class="info-bt">
             <a href="<?php echo base_url(); ?>productos/subcategorias/<?php echo $cat->id ?>" >
                <div class="icon-info icon-info-<?php echo $i; $i++; ?>"></div>
              	<h1><?php
                    $zona = substr($cat->titulo, 0, 1);
                    echo 'Zona - '.$zona; 
                    ?></h1>
       		 <h2><?php echo $cat->titulo ?></h2>
            </a>
              </div>
        <?php endforeach; ?>   
      
      
      
    <!--  
    <div class="info-bt">
    	<a href="productos/categorias/1">
      	<div class="icon-info icon-info-2"></div>
        <h1>Zona - T</h1>
        <h2>Tiendas Café</h2>
      </a>
    </div>
    <div class="info-bt">
    	<a href="productos/categorias/3">
      	<div class="icon-info icon-info-3"></div>
        <h1>Zona - C</h1>
        <h2>Cool</h2>
      </a>
    </div>
    <div class="info-bt">
    	<a href="productos/categorias/4">
      	<div class="icon-info icon-info-4"></div>
        <h1>Zona - G</h1>
        <h2>Gourmet</h2>
      </a>
    </div>
    <div class="info-bt">
    	<a href="productos/categorias/5">
      	<div class="icon-info icon-info-5"></div>
        <h1>Zona - A</h1>
        <h2>Automatización</h2>
      </a>
    </div> -->
    <div class="info-bt">
        <a href="<?php echo base_url()."servicios"; ?>" >
      	<div class="icon-info icon-info-6"></div>
        <h1>Zona - S</h1>
        <h2>Servicios</h2>
      </a>
    </div>
  </div>
  <section>
    <div class="con-section">
      <div class="mg-section cfx">
        <div class="con-hi fl">
            <div class="hi-img fl"><img src="<?php echo base_url().$bienvenida->imagen_path; ?>" alt=""></div>
          <div class="hi-tx fr">
              <h1><?php echo strtoupper(strip_tags($bienvenida->titulo)); ?></h1>
          	<p><?php echo  strip_tags($bienvenida->texto) ?></p>
          </div>
        </div>
       
          <div class="con-hights fl">
        	<!--Destacado grande-->
        	<div class="hight hight-b fl">
          	<div class="con-slider-hight">
              <ul class="hight-slider">
                
                    <?php foreach ($destacados_slider as $destacado_s) : ?>    
                  <li class="cfx">
                	<div class="hight-img-b" style="background:url(<?php echo base_url().$destacado_s->imagen_path; ?>);"></div>
                  <div class="hight-tx">
                  	<h1><?php echo strip_tags($destacado_s->titulo); ?></h1>
                    <p><?php echo strip_tags($destacado_s->texto); ?></p>
                  </div>
                </li>
                  <?php endforeach; ?>
              <!--  <li class="cfx">
                	<div class="hight-img-b" style="background:url(assets/img/hight-b-img-2.jpg);"></div>
                  <div class="hight-tx">
                  	<h1>2 LOREM IPSUM</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed dapibus acsa lacus vitae ultricies. Sed nec euismod libero.</p>
                  </div>
                </li> -->
              </ul>
            </div>
          </div>
                
                <?php foreach ($destacados as $destacado) : ?>     
                <a class="hight fr" href="<?php echo (!empty($destacado->link))?$destacado->link:"#"; ?>">
              <div class="hight-img fl" style="background:url(<?php echo base_url().$destacado->imagen_path; ?>);"></div>
            <div class="hight-label fr">
            	<div class="hight-label-tx">
                    <h1><?php echo strip_tags($destacado->titulo); ?></h1>
                <p><?php echo strip_tags($destacado->texto); ?></p>
                <div class="hight-more">Más información<span></span></div>
              </div>
              <span class="hight-arrow"></span>
            </div>
          </a>
                <?php endforeach; ?>
         <!-- <a class="hight fr" href="#">
          	<div class="hight-img fl" style="background:url(assets/img/hight-img-2.jpg);"></div>
            <div class="hight-label fr">
            	<div class="hight-label-tx">
              	<h1>SIT EGET IPSUM</h1>
                <p>Lorem ipsum dolor sit amet, de los consectetuer adipiscing elit. Siter am Aenean commodo dolor sim dcador adpising lorem ipsum ligula amet eguet dolor.  ligula amet eguet dolor. fin</p>
                <div class="hight-more">Más información<span></span></div>
              </div>
              <span class="hight-arrow"></span>
            </div>
          </a> -->
                
                
        </div>
      </div>
    </div>
  </section>