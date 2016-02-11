<div class="content left">
<div class="content_home">
    <h2 class="bebas main_title_home"><span>diseño de papelería para eventos sociales</span></h2>
    <div class="content_slider_home">
      <div class="slider">
        <ul>
           <?php foreach ($banners as $banner) : ?> 
          <li>
              <img width="940" height="433" src="<?php echo base_url().$banner->imagen_path; ?>" />
            <div class="slide_caption bebas">
              <h3><?php echo $banner->titulo; ?></h3>
              <h4><?php echo $banner->subtitulo; ?></h4>
              <a href="<?php echo $banner->link; ?>" class="btn_vermas_slide"></a>
            </div>
          </li>
           <?php endforeach; ?> 
          <!--<li>
            <img src="<?php echo base_url(); ?>assets/img/img_slider1.jpg" />
            <div class="slide_caption bebas">
              <h3>RHONCUS AMET</h3>
              <h4>ELITER NULLAM AMET CONSEQUT</h4>
              <a href="#" class="btn_vermas_slide"></a>
            </div>
          </li>
          <li>
            <img src="<?php echo base_url(); ?>assets/img/img_slider1.jpg" />
            <div class="slide_caption bebas">
              <h3>RHONCUS AMET</h3>
              <h4>ELITER NULLAM AMET CONSEQUT</h4>
              <a href="#" class="btn_vermas_slide"></a>
            </div>
          </li> -->
        </ul>
      </div>
    </div>
    <hr class="sep-rom">
    <h2 class="title_pasos bebas">Pasos para comprar</h2>
    <div class="clearfix">
      <img src="<?php echo base_url(); ?>assets/img/steps.png" class="steps left" />
      <iframe class="right" src="<?php echo "http://".str_replace("http://","",$video->link); ?>" width="520" height="380" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
    </div>
    
    <hr class="sep-rom">
    
    <div class="destacados clearfix">
       <?php 
      $i = 1; 
      foreach ($destacados as $destacado) :?>
        <?php if($i != 4): ?>  
      <div class="<?php echo (($i==1) OR ($i==2))?"left":"";  echo ($i==3)?"right":""; ?>">
          <?php endif ?>  
        <?php if($i==1):?>
          <a  href="<?php echo base_url()."servicios"; ?>" class="box_services"><span></span></a>
        <?php endif ?>  
          <a <?php echo ($i==2)?"style=\"width:460px; height:460;\" ":"style=\"width:220px; height:220;\" ";  ?> href="<?php echo "http://".str_replace("http://","",$destacado->link); ?>" target="blank" class="item_dest <?php  echo (($i==1)OR($i==4))?"item_dest1":""; echo ($i ==2)?"item_dest2":""; ?>">
            <img  <?php echo ($i==2)?"width=\"460\" height=\"460\" ":" width=\"220\" height=\"220\" ";  ?> src="<?php echo base_url().$destacado->imagen_path; ?>" />
          <div class="over_dest bebas">
            <div class="table_over">
              <div class="cell_over">
                <span class="icon_vermas_dest"></span>
                <h4><?php echo $destacado->titulo; ?></h4>
              </div>
            </div>
          </div>
        </a>
      <?php if($i != 3): ?>  
       </div>
      <?php endif ?> 
     
     <?php
     $i++;
     endforeach; ?>  
       
    </div>
  </div>
 </div>   


