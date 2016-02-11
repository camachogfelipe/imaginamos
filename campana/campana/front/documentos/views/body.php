<div class="cont_940 contenedor_internas clearfix">
	<div class="conttabs_general sec_documentos" style="opacity: 1; height: auto; overflow: visible; padding: 0px;"> 
    <div class="grillados tit_secciones">
      <h1>documentos</h1>
    </div>
    <div class="clear"></div>
    <p>conoce un poco más sobre las diferentes calidades, normas y usos del <span>acero</span>.</p>
    <br>
    <div class="cont_sliderdocumentos">
    	<?php if(!empty($datos['documentos'])) : ?>
      <ul class="slider_documentos">
      	<?php foreach($datos['documentos'] as $documento) : ?>
        <li>
          <div class="cont_documentos clearfix">
            <img src="<?= base_url() . $documento->img ?>" alt="">
            <div class="cont_documentosder">
              <h1><?= $documento->titulo_funte1 ?> <span><?= $documento->titulo_funte2 ?></span></h1>
              <?= nl2br($documento->texto); ?>
            </div>
          </div>
          <div class="inline redes_footer documentos">
      <a onClick="windowopen(this)" href="#" data-link="//twitter.com/home?status=<?= $documento->titulo_funte1 ?> <?= $documento->titulo_funte2 ?> - <?= base_url() ?>"><img src="img/iconos/redes_footer/twiter_red.png" alt=""></a>
      <a onClick="windowopen(this)" href="#" data-link="http://www.facebook.com/sharer.php?s=100&amp;p[title]=<?php echo urlencode($documento->titulo_funte1." ".$documento->titulo_funte2);?>&amp;p[summary]=<?php echo urlencode(strip_tags($documento->texto)) ?>&amp;p[url]=<?php echo urlencode(current_url()); ?>&amp;p[images][0]=<?php echo urlencode(base_url() . $documento->img); ?>"><img src="img/iconos/redes_footer/face_red.png" alt=""></a>
      <a onClick="windowopen(this)" href="#" data-link="//plus.google.com/share?url=<?= current_url() ?>"><img src="img/iconos/redes_footer/google_red.png" alt=""></a>
      <a onClick="windowopen(this)" href="#" data-link="//www.linkedin.com/cws/share?url=<?= current_url() ?>"><img src="img/iconos/redes_footer/linkedin_red.png" alt=""></a>
      <a href="mailto:<?= $datos['footer']->email ?>"><img src="img/iconos/redes_footer/carta-icono.png" alt=""></a>
      </div>
    
          <a class="bt_rojodescarga" target="_blank" href="<?= $documento->file ?>">ver documento</a>
        </li>
        <?php endforeach; ?>
      </ul>
      <?php endif; ?>
    </div>
  </div>
</div>
<script type="text/javascript">
function windowopen(a) {
	var enlace = jQuery(a).attr("data-link");
	window.open(enlace, "_blank", "width=650,height=250");
}
</script>