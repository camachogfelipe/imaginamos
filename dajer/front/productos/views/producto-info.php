<style type="text/css">#nav-bt1 {background: #f3f3f3; box-shadow: inset 0px 3px 0px 0px rgba(237, 88, 88, 1); -webkit-box-shadow: inset 0px 3px 0px 0px rgba(237, 88, 88, 1);}</style>
 <section>
    <div class="con-section">
      <div class="mg-section cfx">
      	<h1><?php echo $producto_info->titulo; ?><a class="back-bt" href="javascript:history.back()">« Volver</a></h1>
        <div class="con-pro-datos cfx">
          <div class="con-slider-pro fl">
            <div class="pro-slider">
              <?php foreach ($producto_info->get_galeria() as $img): ?>
                <div style="background:url(<?php echo base_url().$img->imagen_path; ?>);"></div>
               <?php endforeach; ?>
            </div>
            <div class="pro-slide-br pro-slide-br-t"></div><div class="pro-slide-br pro-slide-br-r"></div><div class="pro-slide-br pro-slide-br-b"></div><div class="pro-slide-br pro-slide-br-l"></div>
          </div>
        	<div class="pro-datos fr">
          	<div class="scroll-wrap">
          	  <?php echo $producto_info->texto; ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>