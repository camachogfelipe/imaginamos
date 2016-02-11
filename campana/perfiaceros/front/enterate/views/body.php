<div class="seccion_video" style="top: -1500px;">
  <div class="cont_940 cont_infoemergentes clearfix">
    <div class="cont_titemergentes">
      <div class="icovideoemergente inline midle"></div>
    	<div class="logo_internas"><img src="img/logos/la_campana_basico.png" alt=""></div>
      <h1 class="inline midle">video</h1>
    </div>
    <div class="clear espacio_en_blanco"></div>
    <div class="cont60big">
      <div class="cont_videoizq">
           <iframe id="video_enterate" width="560" height="315" src="" frameborder="0" allowfullscreen=""></iframe>
      </div>   
    </div>
    <div class="cont40big cont_infoizq">
        <div class="cont40small imgcont_infoizq">
          <img id="img_enterate_min" src="<?= site_url(); ?>assets/img/enterate/peque.jpg" alt="" width="136" height="136">
        </div>
        <div class="cont60small titcont_infoizq">
          <h1 id="titulo_enterate"></h1>
          <h2 id="subtitulo_enterate"></h2>
        </div>
        <div class="clear espacio_en_blanco"></div>
        <p id="texto_enterate"></p>
      </div>
  </div>

  <a href="#" id="cerrar_video"></a>
</div>

<div class="seccion_imagen" style="top: -1500px;">
  <div class="cont_940 cont_infoemergentes clearfix">
    <div class="cont_titemergentes">
      <div class="icoimagenemergente inline midle"></div>
      <div class="logo_internas"><img src="img/logos/la_campana_basico.png" alt=""></div>
      <h1 class="inline midle">imagen</h1>
      <div class="clear espacio_en_blanco"></div>
      <div class="imagen_emergente">
        <img id="img_enterate" src="img/enterate/img_emergente.jpg" alt="">
      </div>
    </div>
  </div>
  <a href="#" id="cerrar_video"></a>
</div>

<div class="cont_940 contenedor_internas clearfix">
  <div class="conttabs_general  sec_enterate" style="opacity: 1; height: auto; overflow: visible; padding: 0px;"> 
    <div class="grillados tit_secciones">
      <h1>entérate</h1>
    </div>
        <div class="clear"></div>
        <p>si tu negocio es el <span>acero</span>, te informamos de lo que pasa en colombia y el mundo.</p>
      <div class="cont_940">
      	<?php if(!empty($datos['enterate'])) : ?>
					<div class="centrar_contenido" id="container_enterate">
          	<?php foreach($datos['enterate'] as $enterate) : ?>
            <div class="botones_enterate inline">
              <div class="cont_pequenterate">
                <div class="hover_botones_enterate">
                  <div class="cont_titblanco inline tit_carruselenterate">
                    <h1><?= $enterate->titulo ?></h1>
                    <h2><?= $enterate->subtitulo ?></h2>
                  </div>
                  <p><?= $enterate->intro_text ?></p>
                  <a class="bt_blanco bt_mas inline mas_enterate" href="#">ver más</a>
                  <?php if(!empty($enterate->video)) : ?>
                  <a class="bt_blanco bt_video margin_left inline" href="#" data-id="<?= $enterate->id ?>">ver video</a>
                  <?php endif; ?>
                </div>
                <div class="cont_botones_enterate" style="background:url('<?= base_url() . $enterate->img_min ?>');">
                  <div class="cont_titblanco inline tit_carruselenterate">
                    <h1><?= $enterate->titulo ?></h1>
                    <h2><?= $enterate->subtitulo ?></h2>
                  </div>
                </div>
              </div>
              <div class="cont_grandenterate cont_infoenterate">
                <div class="cont_titblanco">
                  <h1><?= $enterate->titulo ?></h1>
                  <h2><?= $enterate->subtitulo ?></h2>
                </div>
                <!--div class="clear espacio_en_blanco"></div-->

                <div class="cont_scroll enterate-p">
                	<p id="description" class="over-entx">
	                	<?= nl2br($enterate->texto) ?>
                  </p>
                </div>  
                
                <div class="clear espacio_en_blanco" style="margin-top:10px;"></div>
                <div class="cont_botonesenterategrande">
                <?php if(!empty($enterate->video)) : ?>
                <a href="#" class="bt_blanco bt_video inline" data-id="<?= $enterate->id ?>">ver video</a>
                <?php endif; ?>
                <a href="#" class="bt_blanco bt_imagen bt_imagenenterate margin_left inline" data-rel="<?= $enterate->img ?>">ver imagen</a>
                <div class="grilla235 cont_seccionesfooter inline redes_footer">
      <a onClick="windowopen(this)" href="#" data-link="//twitter.com/home?status=<?= $enterate->titulo ?> - <?= current_url() ?>"><img src="img/iconos/redes_footer/twiter_white.png" alt=""></a>
      <a onClick="windowopen(this)" href="#" data-link="http://www.facebook.com/sharer.php?s=100&amp;p[title]=<?php echo urlencode($enterate->titulo);?>&amp;p[summary]=<?php echo urlencode($enterate->intro_text) ?>&amp;p[url]=<?php echo urlencode(current_url()); ?>&amp;p[images][0]=<?php echo urlencode(base_url() . $enterate->img_min); ?>" title="<?= $enterate->titulo ?>" data-img="<?= base_url() . $enterate->img_min ?>" data-description="<?= $enterate->intro_text ?>" id="facebook"><img src="img/iconos/redes_footer/face_white.png" alt=""></a>
      <a onClick="windowopen(this)" href="#" data-link="//plus.google.com/share?url=<?= current_url() ?>"><img src="img/iconos/redes_footer/google_white.png" alt=""></a>
      <a onClick="windowopen(this)" href="#" data-link="//www.linkedin.com/cws/share?url=<?= current_url() ?>"><img src="img/iconos/redes_footer/linkedin_white.png" alt=""></a>
      <a href="mailto:<?= $datos['footer']->email ?>"><img src="img/iconos/redes_footer/carta-icono2_white.png" alt=""></a>
    </div> 
                </div>
              </div>
            </div>
            <?php endforeach; ?>
          </div>
          <div class="clear espacio_en_blanco"></div>
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