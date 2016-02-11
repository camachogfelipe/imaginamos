


<div class="bgEncabezado">
  <div class="conEncabezado">
    <div id="txSeccion">
      <div class="encabezado-tit">Noticias</div>
      <div class="encabezado-subtit">Lorem ipsum dolor sit amet</div>
    </div>
  </div>
</div>

<div class="contenido">


  <div class="clear"></div>
  <div class="tab_container">

    <div id="tab3" class="tab_content">
      <div class="nuevas-audiciones">
        <div class="audicion">
          <div class="audicion-img"><img src="<?php echo cms_upload_url($datos->news_image->thumb) ?>" /></div>
          <div class="audicion-info2">

            <div class="audicion-tit2"><?php echo $datos->title ?>
              <div class="audicion-post">Creado el <?php echo fecha_spanish_full($datos->created_on, true) ?></div>
            </div>
          </div>
          <div class="audicion-txt2"> <?php echo $datos->content ?></div>
          <div class="bot-like" style="float:right;"></div>
          <div class="clr"></div>
        </div>


        <div class="clr"></div>
      </div>


      <div class="clr"></div>
    </div>
  </div>
</div>