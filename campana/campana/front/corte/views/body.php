<?php
	if(!empty($datos['datos'])) :
		$datoInicial = $datos['datos'][0];
	else : $datoInicial = NULL;
	endif;
?>
<div class="cont_940 contenedor_internas clearfix">
	<div class="conttabs_general sec_servicioscorte" style="opacity: 1; height: auto; overflow: visible; padding: 0px;">
      <div class="cont40big float_left">
        <div class="tit_secciones tit_servicios_corte">
          <h1>servicios de corte</h1>
        </div>
        <div class="clear"></div>
        <p>
          te <span>ayudamos</span> a bajar tus costos entregando productos a la medida de manera rápida, segura y bajo estándares de la norma ASTM A6.
        </p>
        <a class="bt_rojodescarga" id="linkFile" target="_blank" href="<?php
        	if(!empty($datos['datos'])) :
						echo $datos['datos'][0]->files;
					endif;
				?>">especificaciones técnicas</a>
      </div>
      <div class="cont60big float_right clearfix">
        <div class="cont_video">
             <?php if(!empty($datos['datos'])) : ?>
               <iframe id="linkVideo" width="560" height="315" src="<?php echo $datos['datos'][0]->vid; ?>" frameborder="0" allowfullscreen=""></iframe>
             <?php endif; ?>
          </div>  
      </div>
      <div class="clear espacio_en_blanco"></div>
      <div class="cont_btvideoscorte">
      	<?php if(!empty($datos['datos'])) : ?>
      	<ul class="slidervideos">
        	<?php foreach($datos['datos'] as $dato) : ?>
          <li>
            <a href="#" class="bt_videocorte inline" data-id="<?= $dato->vid ?>" data-type="<?= $dato->files ?>">
              <div class="cont_imgvideocorte">
                <?php
                  $tmp = explode("/", $dato->vid);
                  $imagen = $tmp[count($tmp) - 1];
                ?>
                <img src="http://img.youtube.com/vi/<?= $imagen ?>/0.jpg" alt="">
                <div class="hover_imgvideocorte"></div>
              </div>
              <div class="clear espacio_en_blanco"></div>
              <h1><?= $dato->titulo ?></h1>
              <p><?= $dato->texto ?></p>
            </a>
          </li>
        	<?php endforeach; ?>
        </ul>
				<?php endif; ?> 
      </div>
  </div>
</div>