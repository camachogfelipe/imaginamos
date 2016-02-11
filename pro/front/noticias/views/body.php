



<div class="bgEncabezado">
  <div class="conEncabezado">
    <div id="txSeccion">
      <div class="encabezado-tit">Noticias</div>
      <div class="encabezado-subtit"></div>
    </div>
  </div>
</div>

<div class="contenido">


  <div class="clear"></div>
  <div class="tab_container">
    <div id="tab1" class="tab_content">
      

        <?php foreach ($datos as $noticia) : ?>
      <div class="selectores-directorio">
          <article class="noticia-mini">
            <header class="publi-header">
              <div class="publi-tit"><?php echo $noticia->title ?> </div>
            </header>
            <div class="publi-subtit" style="margin-left: -105px;"><time datetime="<?php echo $noticia->created_on ?>" pubdate="pubdate"><?php echo fecha_spanish_full($noticia->created_on, true) ?></time></div>
            <div class="noticias-info">
              <div class="publi-nom"><?php echo $noticia->content ?></div>
              <div class="audicion-img"><img style="position: absolute;margin-left: 142px;margin-top: -104px;width: 400px;height: 209px;" src="<?php echo cms_upload_url($datos->news_images->image) ?>" /></div>
              <div class="clr"></div>
              <!--<a href="<?php echo site_url(array('noticias', $noticia->var)) ?>"><div class="ver-mas2">Ver más</div></a>-->
            </div>
          </article>
        <div class="clr"></div>
      </div>
        <?php endforeach; ?>        
    </div>
    <div class="clr"></div>
  </div>
</div>