<div class="seccion_imagenequipo" style="top: -1500px;">
  <div class="cont_940 cont_infoemergentes clearfix">
    <div class="clear espacio_en_blanco"></div>
    <div class="cont60big">
      <div class="cont_videoizq">
      	<p class="logo_internas logo_internas2"><img src="img/logos/la_campana_basico.png" alt=""></p>
        	<div class="cont_tittrabaje">
            <h1 id="nombre"></h1>
            <h2 id="cargo"></h2>
          </div>
          <h4>comentarios personales</h4>
          <div class="parrafo_detalletrabaje cont_scroll">
             <p id="comentario"></p>
      	</div>
      </div>   
    </div>
    <div class="cont40big">
      <div class="cont_imagenequipo">
        <img id="imagen" src="" alt="">
      </div>
    </div>
  </div>

  <a href="#" id="cerrar_seccion_imagenequipo"></a>
</div>

<div class="cont_940 contenedor_internas clearfix">
	<div class="conttabs_general sec_trabajoequipo" style="opacity: 1; height: auto; overflow: visible; padding: 0px;">
    <div class="grillados tit_equipotrabajo">
      <h1>equipo de <span>trabajo</span></h1>
    </div>
    <div class="clear"></div>
    <div class="cont_trabajoenequipo">
      <div class="rectangulo_equipo inline">
        <p>el talento de nuestro equipo significa todo para nosotros. nos presentamos a nuestros clientes de la misma manera como lo hacemos con nuestro equipo. nos <span>apasiona</span> lo que hacemos y queremos que todos tengan una idea de porque la campana es un excelente lugar para trabajar.</p>
     </div>
      <?php if(!empty($datos['datos'])) : $i = 0; ?>
      	<?php foreach($datos['datos'] as $dato) : ?>
      
      <a href="#" class="cuadradaoequipo bt_fotoequipo inline" data-id="<?= $dato->id; ?>">
        <img src="<?= base_url() . $dato->img ?>" alt="">
        <div class="img_grisequipo">
          <img src="<?= base_url() . $dato->img_min ?>" alt="">
        </div>
      </a>
      		<?php if($i == 0) : ?>
      <div class="cuadradaoequipo cuadrotit_equipotrabajo inline">
        <h1>tenemos <br> <span>talento</span></h1>
        <div class="clear"></div>
        <div class="icono float_right"><img src="img/iconos/icono_equipo.png" alt=""></div>
      </div>
      		<?php endif; ?>
          <?php if($i == 7) : ?>
      <div class="cuadradaoequipo cuadrotit_equipotrabajo inline">
        <div class="icono float_left"><img src="img/iconos/icono_talento.png" alt=""></div>
        <div class="clear"></div>
        <h1 class="inline float_right">nuestro <br> <span>equipo</span></h1>
      </div> 
          <?php endif; ?>
          <?php $i++; ?>
      	<?php endforeach; ?>
      <?php endif; ?>
      
    </div>
  </div>
</div>