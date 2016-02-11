
<!-- Buscador -->
<div class="selectores">
  <form action="<?php echo site_url('audiciones/buscar') ?>" method="get" accept-charset="utf8" class="busc-big">
    <input name="s" class="campo-custom" type="text" placeholder="Ingrese su búsqueda por título, ciudad, palabra clave. Ej: Bogotá" value="<?php echo $this->input->get('s') ?>">
    <input class="bot-buscar" type="submit" value="buscar" style="margin-bottom: 60px; float:left; margin-left: 8px;">
    <div class="clr"></div>
  </form>
  <div class="clr"></div>
</div>
<!-- // Buscador -->

<?php if ($datos->exists()) : ?>

  <div class="ordena-lista">
    <div class="ordena-lista-tit">Ordenar resultados por:</div>
    <div class="ordena-lista-filtro"><a href="?order=numero_aplicaciones&type=<?php echo $this->input->get('order') == 'numero_aplicaciones' ? ($this->input->get('type') == 'asc' ? 'desc' : 'asc') : 'asc' ?>">No. Aplicaciones</a></div>
    <div class="ordena-lista-filtro"><a href="?order=ciudad&type=<?php echo $this->input->get('order') == 'ciudad' ? ($this->input->get('type') == 'asc' ? 'desc' : 'asc') : 'asc' ?>">Ciudad</a></div>
    <div class="ordena-lista-filtro"><a href="?order=fecha_inicio&type=<?php echo $this->input->get('order') == 'fecha_inicio' ? ($this->input->get('type') == 'asc' ? 'desc' : 'asc') : 'asc' ?>">Fecha de inicio</a></div>
    <div class="ordena-lista-filtro" style="margin-right:0;"><a href="?order=fecha_cierre&type=<?php echo $this->input->get('order') == 'fecha_cierre' ? ($this->input->get('type') == 'asc' ? 'desc' : 'asc') : 'asc' ?>">Fecha de cierre</a></div>
    <div class="clear"></div>
  </div>
  <div class="clear"></div>
  <div class="nuevas-audiciones">
    <div id="contenu3" style="z-index:600 !important;">
      <?php foreach ($datos as $dato) : ?>
        <div class="audicion">
          <div class="audicion-info">
            <?php if (!empty($dato->imagen)){ ?>
              <div class="audicion-ico">
                <img src="<?php echo uploads_url($dato->imagen) ?>" width="41" />
              </div>
            <?php }else{ ?>
             <div class="audicion-ico">
                 <img src="<?php echo site_url('assets/images/imagensino.png') ?>" width="41" />
              </div>               
              <?php
            } ?>
            <div class="audicion-tit"><a href="<?php echo sprintf($urls->audicion_detalle, $dato->id, $dato->var) ?>"><?php echo $dato->titulo ?></a>
              <div class="audicion-post">Creado el <?php echo fecha_spanish_full($dato->created_on) ?></div>
              
			  <div class="fb-like" data-href="<?php echo sprintf($urls->audicion_detalle, $dato->id, $dato->var) ?>" data-layout="button_count" data-width="100" data-show-faces="false" style="margin:10px 0 0 0;"></div>
			  
            </div>
            <div class="audicion-datos">
              <div class="num-cupos">No. Aplicaciones
                <b>
                  <?php if ($dato->total_aplicaciones <= $dato->numero_aplicaciones) : ?>
                    <?php echo $dato->audiciones_aplicacion->count() ?>/<?php echo $dato->numero_aplicaciones ?>
                  <?php else: ?>
                    Sin cupo
                  <?php endif; ?>
                </b>
              </div>
              <div class="audicion-lugar">Ciudad </br><b><?php echo $dato->ciudad ?></b></div>
              <div class="audicion-fecha1">Fecha de inicio </br><b><?php echo fecha_spanish_full_short($dato->fecha_inicio) ?></b></div>
              <div class="audicion-fecha2">Fecha de cierre </br><b><?php echo fecha_spanish_full_short($dato->fecha_cierre) ?></b></div>
            </div>
          </div>
          <div class="clr"></div>
          <div class="audicion-txt"><?php echo $dato->introduccion ?>.</div>
          <div class="ver-mas"><a href="<?php echo sprintf($urls->audicion_detalle, $dato->id, $dato->var) ?>">Ver más</a></div>
          <div class="clr"></div>
        </div>

      <?php endforeach; ?>

    </div>
    
  </div>


<?php endif; ?>

<div class="clr"></div>


