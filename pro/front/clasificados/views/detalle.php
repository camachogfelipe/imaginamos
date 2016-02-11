<div class="bgEncabezado">
  <div class="conEncabezado">
    <div id="txSeccion">
      <div class="encabezado-tit">Clasificados</div>
      <div class="encabezado-subtit">Ofertas armónicas</div>
    </div>
  </div>
</div>
<div class="contenido">
  <div class="clear"></div>
  <div class="tab_container">
    <div id="tab6" class="tab_content">
      <div id="contenu3">
        <div class="resultado-detalle">
          <div class="resultado-tit"><?php echo $datos->titulo ?></div>
          <div class="clr"></div>
          <div class="resultado-desc3">
            <p><?php echo $datos->descripcion ?></p>
            <div class="anuncio-datos">
              <div><b>Publicado por:</b> <?php echo $datos->user->first_name, ' ', $datos->user->last_name ?></div>
              <div><b>Ciudad:</b> <?php echo $datos->ciudad ?></div>
              <div><b>Fecha:</b> <?php echo fecha_spanish_full($datos->created_on) ?></div>
              <?php if (!empty($datos->precio)) : ?>
                <div><b>Precio:</b> <?php echo price_format($datos->precio) ?></div>
              <?php endif; ?>
              <div><b>Fecha de cierre:</b> <?php echo fecha_spanish_full($datos->fecha_cierre) ?></div>
               <div class="regis-subtit">Faltan <?php echo $datos->dias_restantes  ?> para poder aplicar a esta audición.</div> 
              <div class="fb-like"  data-send="false" data-layout="button_count" data-width="100" data-show-faces="false"></div>
            </div>
            <div class="clr"></div>
          </div>
          <?php if (!empty($datos->imagen)) : ?>
            <div class="anuncio-img">
              <img src="<?php echo uploads_url($datos->imagen) ?>" />
            </div>
          <?php endif; ?>
          <div class="clr"></div>
          <?php if (false === $is_owner) : ?>
            <?php if (true === $can_apply) : ?>
              <div class="regis-tit">Contáctar al clasificado</div>
              <div class="regis-subtit">&nbsp;</div>
              <?php echo form_open('clasificados/aplicar', null, array('clasificado_id' => $datos->id)) ?>
              <textarea style="resize: none;" name="presentacion" class="area2" placeholder="Carta de presentación (opcional)"></textarea>
              <input class="bot-publicar" type="submit" value="contactar">
              <?php echo form_close() ?>
              <div class="clr"></div>
            <?php else: ?>
              <!--<div class="regis-subtit">Faltan <?php //echo $dias_restantes  ?> para poder aplicar a esta audición.</div> -->
            <?php endif; ?>
          <?php endif; ?>
        </div>
      </div>

      <div class="clr"></div>
    </div>
    <div class="clr"></div>
  </div>
</div>

<div class="clr"></div>