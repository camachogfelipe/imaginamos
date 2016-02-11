


<div class="bgEncabezado">
  <div class="conEncabezado">
    <div id="txSeccion">
      <div class="encabezado-tit">Audiciones</div>
      <div class="encabezado-subtit">&nbsp;</div>
    </div>
  </div>
</div>

<div class="contenido">
  <div class="clear"></div>
  <div class="tab_container">

    <div id="tab3" class="tab_content">

      <div class="nuevas-audiciones">
        <div class="audicion">
          <?php if (!empty($datos->imagen)) { ?>
            <div class="audicion-img">
              <img src="<?php echo uploads_url($datos->imagen) ?>" alt="" width="200" />
            </div>
          <?php } else { ?>
            <div class="audicion-img">
              <img src="<?php echo site_url('assets/images/imagensino.png') ?>" width="200" />
            </div>
          <?php }
          ?>
          <div class="audicion-info2">
            <div class="audicion-tit2"><?php echo $datos->titulo ?>
              <div class="audicion-post">Creado el <?php echo fecha_spanish_full($datos->created_on) ?></div>
            </div>
            <div class="audicion-datos2">
              <div class="num-cupos">No. Aplicaciones</br><b><?php echo $datos->total_aplicaciones ?>/<?php echo $datos->numero_aplicaciones ?></b></div>
              <div class="audicion-lugar">Ciudad </br><b><?php echo $datos->ciudad ?></b></div>
              <div class="audicion-fecha1">Fecha de inicio </br><b><?php echo fecha_spanish_full_short($datos->fecha_inicio) ?></b></div>
              <div class="audicion-fecha2">Fecha de cierre </br><b><?php echo fecha_spanish_full_short($datos->fecha_cierre) ?></b></div>
              <div class="audicion-fecha2" style="position: absolute;margin-left: 679px;">Número de Contacto </br><b><?php echo $datos->contacto ?></b></div>
            </div>
          </div>
          <div class="audicion-txt2">
			  <?php echo $datos->introduccion ?>
			<br>
			  <?php echo $datos->descripcion ?>
            <br>
            <br>

            <!--  <div id="final_apps" class="audicion-tit2" style="position: absolute;margin-left: -210px;margin-top: 14px;">hola a todso jejejje</div>  -->



          </div>

          <div class="fb-like"  data-send="false" data-layout="button_count" data-width="100" data-show-faces="false"></div>
          <div class="clr"></div>
        </div>
        <?php if (false === $is_owner) : ?>
          <?php if (true === $can_apply) : ?>
            <div class="regis-tit">Aplicar a audición</div>

            <?php echo form_open('audiciones/aplicar', null, array('audicion_id' => $datos->id)) ?>
            <div class="area-cont2">
            <textarea style="resize: none;" name="presentacion" class="area2" placeholder="Escribe aquí tu carta de presentación (Opcional)"></textarea>
            </div>
            <div class="clear"></div>
            <input class="bot-publicar" type="submit" value="aplicar" style="margin-top:10px;">
            <?php echo form_close() ?>

            <div class="clr"></div>
          <?php else: ?>
            <div class="regis-subtit">Faltan <?php echo $dias_restantes ?> para poder aplicar a esta audición.</div>
          <?php endif; ?>
        <?php endif; ?>
      </div>
    </div>


    <div class="clr"></div>
  </div>
</div>