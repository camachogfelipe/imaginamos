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
            <p><?php echo $datos->introduccion ?></p>
			<p><?php echo $datos->descripcion ?></p>
            <div class="anuncio-datos">
              <div><b>Publicado por:</b> <?php echo $datos->user->first_name, ' ', $datos->user->last_name ?></div>
              <div><b>Ciudad:</b> <?php echo $datos->ciudad ?></div>
              <div><b>Fecha:</b> <?php echo fecha_spanish_full($datos->created_on) ?></div>
              <?php if (!empty($datos->precio)) : ?>
                <div><b>Precio:</b> <?php echo price_format($datos->precio) ?></div>
              <?php endif; ?>
              <div><b>Fecha de cierre:</b> <?php echo fecha_spanish_full($datos->fecha_cierre) ?></div>
              <?php
              // dia actual y dia anterior
              $hoy = date("d-m-Y");
              $ant = $datos->fecha_cierre;
              $hoy1 = explode("-", $hoy);
              $diahoy = $hoy1[0];
              $meshoy = $hoy1[1];
              $anohoy = $hoy1[2];
              $diaant = explode("-", $ant);
              $anoant = $diaant[0];
              $mesant = $diaant[1];
              $diaant = $diaant[2];
              $timestamp1 = mktime(0, 0, 0, $meshoy, $diahoy, $anohoy);
              $timestamp2 = mktime(0, 0, 0, $mesant, $diaant, $anoant);
              //resto a una fecha la otra 
              $segundos_diferencia = $timestamp2 - $timestamp1;
              //  echo $segundos_diferencia; 
              //var_dump($diaant[2]);                                             
              //convierto segundos en días 
              $dias_diferencia = $segundos_diferencia / (60 * 60 * 24);
              //echo $dias_diferencia;                       
              if ($dias_diferencia > 0) {
                ?>
                <div class="regis-subtit"><b>Faltan <?php echo $dias_diferencia ?> para poder aplicar a esta audición.</b></div> 
              <?php } else { ?>
                <div class="regis-subtit"><b>Tiempo agotado para aplicar a esta audicion</b></div> 
              <?php } ?>
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
              <?php
            else:
              // dia actual y dia anterior
              $hoy = date("d-m-Y");
              $ant = $datos->fecha_cierre;
              $hoy1 = explode("-", $hoy);
              $diahoy = $hoy1[0];
              $meshoy = $hoy1[1];
              $anohoy = $hoy1[2];
              $diaant = explode("-", $ant);
              $anoant = $diaant[0];
              $mesant = $diaant[1];
              $diaant = $diaant[2];

              $timestamp1 = mktime(0, 0, 0, $meshoy, $diahoy, $anohoy);
              $timestamp2 = mktime(0, 0, 0, $mesant, $diaant, $anoant);

              //resto a una fecha la otra 
              $segundos_diferencia = $timestamp2 - $timestamp1;
              //  echo $segundos_diferencia; 
              //var_dump($diaant[2]);                                             
              //convierto segundos en días 
              $dias_diferencia = $segundos_diferencia / (60 * 60 * 24);
              //echo $dias_diferencia;                       
              if ($dias_diferencia > 0) {
                ?>
                <!--  <div class="regis-subtit">Faltan <?php echo $dias_diferencia ?> para poder aplicar a esta audición.</div> -->
              <?php } else { ?>
                <!--   <div class="regis-subtit">Tiempo agotado para aplicar a esta audicion</div> --><b>
                <?php } ?>

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