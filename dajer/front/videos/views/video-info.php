<style type="text/css">#nav-bt3 {background: #f3f3f3; box-shadow: inset 0px 3px 0px 0px rgba(237, 88, 88, 1); -webkit-box-shadow: inset 0px 3px 0px 0px rgba(237, 88, 88, 1);}</style>
  <section>
    <div class="con-section">
      <div class="mg-section cfx">
          <h1><?php echo $video->titulo; ?><!--Video info--><a class="back-bt" href="<?php echo base_url()."videos/index" ?>">« Volver</a></h1>
        <div class="con-pro-datos cfx">
          <div class="con-video-b">
          	<iframe src="<?php echo $video->link; ?>" frameborder="0" allowfullscreen></iframe>
          </div>
        	<div class="con-info-b fr">
          	<p><strong class="com-red"><?php echo $video->fecha; ?></strong></p>
                <div><?php echo $video->texto; ?></div>
          </div>
        </div>
      </div>
    </div>
  </section>
    
