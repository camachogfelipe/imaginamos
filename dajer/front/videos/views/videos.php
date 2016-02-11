<style type="text/css">#nav-bt3 {background: #f3f3f3; box-shadow: inset 0px 3px 0px 0px rgba(237, 88, 88, 1); -webkit-box-shadow: inset 0px 3px 0px 0px rgba(237, 88, 88, 1);}</style>
  <section>
    <div class="con-section">
      <div class="mg-section cfx">
      	<h1>Videos</h1>
        <!--Paginador-->
        <div class="con-pag-pro fl">
       <?php if($num_pages > 1){ ?>
           <a href="<?php echo $ultimo; ?>">Último</a>
          <?php if($sig != false){ ?>
           <a href="<?php echo $sig; ?>">Sig.</a>
          <?php } ?>
           <p>...</p>
         <?php 
           $n_p = ($num_pages < 3)?$num_pages:3;   
           $s= round(($cur-1)/$n_p);
           $ini=($s*$n_p)+1;
           if($cur<$num_pages)
           {
             $f=$ini+$n_p-1;
           }else{
             $f=$n_p;
             $ini = $ini-1;
           } 
         for ($i = $f; $i >= $ini ; $i--){ ?>
          <a class="<?php echo($i == $cur)?"pag-act":""; ?>" href="<?php echo $base_url.$i; ?>"><?php echo $i; ?></a>
         <?php } ?>  
          <p>...</p>
           <?php if($ant != false){ ?>
           <a href="<?php echo $ant; ?>">Ant.</a>
          <?php } ?>
          <a href="<?php echo $primero; ?>">Primero</a> 
       <?php } ?>
        </div>
        <!--Fin paginador-->
        <ul class="con-videos-s fl">
         <?php 
           if(!empty($videos))
           foreach ($videos as $video):  ?>
            <!--Video item-->
            <a href="<?php echo base_url();?>videos/info/<?php echo $video->id; ?>">
          	<li class="fl">
                    <div class="video-s-img" style="background:url(<?php echo base_url().$video->imagen_path; ?>);"><div class="video-over"></div><span></span></div>
              <h1><?php echo $video->titulo; ?></h1>
              <h2><?php echo $video->fecha; ?></h2>
              <p><?php echo substr(strip_tags($video->texto),0, 109)."..."; ?></p>
            </li>
          </a>
            <?php endforeach;  ?>
        
          <!-- 
        	<a href="videos/info/5">
          	<li class="fl">
            	<div class="video-s-img" style="background:url(assets/img/video-img.jpg);"><div class="video-over"></div><span></span></div>
              <h1>Lorem Ipsum</h1>
              <h2>31/12/2013</h2>
              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
            </li>
          </a>

        	<a href="videos/info/4">
          	<li class="fl">
            	<div class="video-s-img" style="background:url(assets/img/video-img.jpg);"><div class="video-over"></div><span></span></div>
              <h1>Lorem Ipsum</h1>
              <h2>31/12/2013</h2>
              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
            </li>
          </a>

        	<a href="videos/info/3">
          	<li class="fl">
            	<div class="video-s-img" style="background:url(assets/img/video-img.jpg);"><div class="video-over"></div><span></span></div>
              <h1>Lorem Ipsum</h1>
              <h2>31/12/2013</h2>
              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
            </li>
          </a>

        	<a href="videos/info/2">
          	<li class="fl">
            	<div class="video-s-img" style="background:url(assets/img/video-img.jpg);"><div class="video-over"></div><span></span></div>
              <h1>Lorem Ipsum</h1>
              <h2>31/12/2013</h2>
              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
            </li>
          </a>

        	<a href="videos/info/1">
          	<li class="fl">
            	<div class="video-s-img" style="background:url(assets/img/video-img.jpg);"><div class="video-over"></div><span></span></div>
              <h1>Lorem Ipsum</h1>
              <h2>31/12/2013</h2>
              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
            </li>
          </a>
        </ul> -->
        <!--Paginador-->
        <div class="con-pag-pro fl">
               <a href="<?php echo $ultimo; ?>">Último</a>
          <?php if($sig != false){ ?>
           <a href="<?php echo $sig; ?>">Sig.</a>
          <?php } ?>
           <p>...</p>
         <?php 
           $n_p = ($num_pages < 3)?$num_pages:3;   
           $s= round(($cur-1)/$n_p);
           $ini=($s*$n_p)+1;
           if($cur<$num_pages)
           {
             $f=$ini+$n_p-1;
           }else{
             $f=$n_p;
             $ini = $ini-1;
           } 
         for ($i = $f; $i >= $ini ; $i--){ ?>
          <a class="<?php echo($i == $cur)?"pag-act":""; ?>" href="<?php echo $base_url.$i; ?>"><?php echo $i; ?></a>
         <?php } ?>  
          <p>...</p>
           <?php if($ant != false){ ?>
           <a href="<?php echo $ant; ?>">Ant.</a>
          <?php } ?>
          <a href="<?php echo $primero; ?>">Primero</a> 
      </div>
    </div>
  </section>