
<script type="text/javascript">
  $(document).ready(function() {
    $(".comboBox1").msDropDown().data("dd");


    $("#contenu3").scrollbar(430);
  });
</script>


<style>
  .bgSlider{
    display:none;
  }
  .login{
    display:none;
  }
  .b2{
    color:#333 !important;	
  }
  .c5{
    color:#333 !important;	
  }
  .t4{
    display:none !important;		
  }
  .t4-active{
    display:none !important;	
  }
  #contenu3 {
    margin-bottom: 40px;
    width: 990px !important;
    margin-top: 40px;
  }
  #contenu3 #englobe {
    width: 970px !important;
  }
  .nuevas-audiciones {
    margin-top: 0;

  }
</style>


<div class="contenido" id="page-mis-audiciones">
  <div class="mis-audiciones-cont">
    <ul class="tabs">
      <li class="t1 active"><a href="#">Mis Clasificados</a></li>
      <li class="t2"><a href="<?php echo site_url('clasificados/crear_anuncio') ?>">Crear</a></li>
    </ul>
  </div>

  <div class="clear"></div>
  <div class="tab_container">
    <div id="tab1" class="tab_content">

      <?php if ($datos->exists()) : ?>

        <div class="nuevas-audiciones">
          <div id="contenu3">
            <?php foreach ($datos as $dato) : ?>


              <div class="resultado">
                <div class="audicion-info">
                  <div class="resultado-tit"><a href="<?php echo sprintf($urls->clasificado_detalle, $dato->id, $dato->var) ?>"><?php echo $datos->titulo ?></a></div>
                  <div class="audicion-datos">

                    <div class="audicion-lugar">Ciudad </br><b><?php echo $dato->ciudad ?></b></div>
                    <div class="audicion-fecha1">Fecha de inicio </br><b><?php echo fecha_spanish_full_short($dato->fecha_inicio) ?></b></div>
                    <div class="audicion-fecha2">Fecha de cierre </br><b><?php echo fecha_spanish_full_short($dato->fecha_cierre) ?></b></div>
                  </div>
                  <div class="clear"></div>
                </div>
                <div class="clr"></div>
                <div class="resultado-desc2"><?php echo $dato->introduccion ?></div>

                <div class="clr"></div>
                <div class="opciones-ico">
                  <div class="ver-mas"><a href="<?php echo sprintf($urls->clasificado_detalle, $dato->id, $dato->var) ?>">Ver más</a></div>
                  <a href="<?php echo site_url('perfil/clasificados/eliminar/' . $dato->id) ?>" onclick="return confirm('¿Está seguro de eliminar el clasificado?')"><div class="borrar">Borrar</div></a>
                  <a href="<?php echo site_url('clasificados/editar/' . $dato->id) ?>"><div class="editar">Editar</div></a>
                </div>

                <div class="clr"></div>
              </div>
            <?php endforeach; ?>

          </div>
        </div>
        <?php if ($datos->paged->total_pages > 1) : ?>
          <!-- Paginador -->
          <div class="paginador">
            <?php if ($datos->paged->has_previous) : ?>
              <a href="<?php echo sprintf($paginator_url, $datos->paged->previous_page) ?>"><div class="pag-prev"></div></a>
            <?php endif; ?>

            <div class="numeros">
              <?php for ($i = 1, $total_pages = $datos->paged->total_pages; $i <= $total_pages; $i++) : ?>
                <div class="<?php echo $i == $datos->paged->current_page ? 'numero-act' : 'numero' ?>">
                  <a href="<?php echo $i != $datos->paged->current_page ? sprintf($paginator_url, $i) : 'javascript:;' ?>">
                    <?php echo $i ?>
                  </a>
                </div>
              <?php endfor; ?>
            </div>

            <?php if ($datos->paged->has_next) : ?>
              <a href="<?php echo sprintf($paginator_url, $datos->paged->next_page) ?>"><div class="pag-next"></div></a>
            <?php endif; ?>
          </div>
          <!-- // Paginador -->
        <?php endif; ?>

      <?php endif; ?>

      <div class="clr"></div>
    </div>



    <div class="clr"></div>
  </div>
  <div class="clr"></div>
</div>