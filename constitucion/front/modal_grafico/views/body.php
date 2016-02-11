<?php echo $template['partials']['header']; ?>
<div class="cont_emergente600">
  <div class="cont_tit">
    <h1 class="inline"><?php
			$tit = explode(" ", $comentario['cms_titulo']);
			echo $tit[0];
			if(count($tit) > 1) :?> <span>GRÁFICO</span><?php endif; ?></h1>
  </div>
  <div class="clear"></div>
  <div class="imagen_grafico"> <img src="<?php echo base_url($comentario['imagen_path']); ?>" alt=""> </div>
  <p><?php echo $comentario['cms_comentario'] ?></p>
</div>
