<section  id="sec_home1" class="cont100 clearfix">
  <div class="cont">
    <div class="container">
      <div class="cont_tit">
        <h1 class="inline"><?php echo $firma[0]['cms_titulo1'] ?> <span><?php echo $firma[0]['cms_titulo2'] ?></span></h1>
      </div>
      <p><?php echo $firma[0]['cms_texto'];
unset($firma[0]); ?></p>
      <div class="clear espacio_en_blanco"></div>
      <a class="btn btn-primary btn-large float_right marginleft" href="<?php echo base_url('articulos'); ?>">Explorar ahora</a>
      <div class="clear espacio_en_blanco"></div>
      <div class="row clearfix">
        <?php if (!empty($blog)) : ?>
  <?php foreach ($blog as $texto) : ?>
            <a href="<?php echo base_url('internageneral/' . $texto['id']); ?>" class="span3 destacados220">
              <h2 class="color_rojo"><?php echo $texto['cms_titulo']; ?></h2>
              <img src="<?php echo base_url($texto['imagen_path']); ?>" alt="">
              <p><?php echo substr(strip_tags($texto['cms_texto']), 0, 200); ?>...</p>
              <div class="hover220">
                <h2><?php echo $texto['cms_titulo']; ?></h2>
                <div class="division_blanca"></div>
              </div>
            </a>
          <?php endforeach; ?>
<?php endif; ?>
      </div>
      <div class="clear espacio_en_blanco"></div>
      <form class="centrar_contenido">
        <p class="inline">Deseo recibir información en mi correo electrónico sobre <span>Constitucionaldia.com.co</span></p> 
        <input type="checkbox" value="option1" class="inline" id="check_newsletter">
        <div style="display:none;"> 
          <a href="<?php echo base_url('modal_newsletter'); ?>" class="carga_modalmediana3" id="oculto_link">Click</a>
        </div>
      </form>
      <div class="clear espacio_en_blanco"></div>
      <div class="centrar_inline">
        <a class="btn inline carga_modalmediana2" href="<?php echo base_url('modal_planes'); ?>">Ver planes</a>
      </div>
    </div>
  </div>
</section>

<section  id="sec_home2" class="cont100  clearfix">
  <div class="cont">
    <div class="container">
      <div class="cont_tit">
        <h1 class="inline">CORTE <span>CONSTITUCIONAL</span></h1>
      </div>

      <div class="clear espacio_en_blanco"></div>
      <div class="row clearfix">
        <div class="span6 centrar_contenido">
          <div class="div_corte">
            <h1>JURISPRUDENCIA DE <br> CONSTITUCIONALIDAD</h1>
            <p>Seleccione el tipo de documento que desea buscar:</p>
          </div>
          <div class="clear espacio_en_blanco"></div>
          <a class="inline bt_rojo conttoltip" href="<?php echo base_url(); ?>sentencia_constitucional" data-original-title="Sentencia">Sentencia de Constitucionalidad</a>
          <div class="bt_rojoborde inline"></div>
          <a class="inline bt_rojo conttoltip" href="<?php echo base_url(); ?>demanda_constitucional" data-original-title="Demanda">Demanda</a>
          <div class="bt_rojoborde inline"></div>
          <a class="inline bt_rojo conttoltip" href="<?php echo base_url(); ?>comunicados_constitucional" data-original-title="Comunicado de prensa">Comunicado de prensa</a>
        </div>

        <div class="span6 centrar_contenido">
          <div class="div_corte">
            <h1>JURISPRUDENCIA DE <br> TUTELAS</h1>
            <p>Seleccione el tipo de documento que desea buscar:</p>
          </div>
          <div class="clear espacio_en_blanco"></div>
          <a class="inline bt_rojo conttoltip" href="<?php echo base_url(); ?>sentenciatutela_constitucional" data-original-title="Sentencia">Sentencia</a>
          <div class="bt_rojoborde inline"></div>
          <a class="inline bt_rojo conttoltip" href="<?php echo base_url(); ?>tutela_constitucional" data-original-title="Tutelas">Tutelas</a>
        </div>
      </div>
      <div class="clear espacio_en_blancogrande"></div>
      <p class="inline ancho100 text_centrado">Disponible para usuarios pagos. Ver planes <a class="inline carga_modalmediana2" href="<?php echo base_url('modal_planes'); ?>">AQUÍ.</a></p> 

    </div>
  </div>
</section>

<section  id="sec_home3" class="cont100  clearfix">
  <div class="cont">
    <div class="container">
      <div class="cont_tit">
        <h1 class="inline">NUESTRA <span>FIRMA</span></h1>
      </div>
      <div class="clear espacio_en_blanco"></div>
      <div class="botones_generaltabs">
        <a class="btn btn-primary btn-large float_right marginleft bt_tabsgeneral" id="tab_nosotros2" href="#">Nuestros Abogados</a>
        <a class="btn btn-primary btn-large float_right bt_tabsgeneral" id="tab_nosotros1" href="#" style="top:0;">Nosotros</a>
      </div>
      <div class="cont_gris clearfix">
        <div class="cont_gris940 conttabs_general tab_nosotros1 clearfix" style="height:auto; overflow:visible; padding:0 20px;">
          <div class="cont_botonesmision">
            <a href="#" class="bt_tabmision bt_tabmisionactivo" id="tab_mision1">
              <h2 class="color_blanco inline">Quienes Somos</h2>
            </a>
            <div class="clear"></div>
            <a href="#" class="bt_tabmision" id="tab_mision2">
              <h2 class="color_blanco inline">Nuestra Experiencia</h2>
            </a>
            <div class="clear"></div>
            <a href="#" class="bt_tabmision" id="tab_mision3">
              <h2 class="color_blanco inline">Nuestros servicios</h2>
            </a>
            <div class="clear"></div>
          </div>
          <div class="cont_mision">
            <div class="cont_tabmision tab_mision1" style="display:block;">
              <h1>QUIENES SOMOS</h1>
              <div class="clear"></div>
              <div class="cont_textomision cont_scroll">
<?php echo $firma[1]['cms_texto'] ?>
              </div>
            </div>
            <div class="cont_tabmision tab_mision2">
              <h1>NUESTRA EXPERIENCIA</h1>
              <div class="clear"></div>
              <div class="cont_textomision cont_scroll">
<?php echo $firma[2]['cms_texto'] ?>
              </div>
            </div>
            <div class="cont_tabmision tab_mision3">
              <h1>NUESTROS SERVICIOS</h1>
              <div class="clear"></div>
              <div class="cont_textomision cont_scroll">
<?php echo $firma[3]['cms_texto'] ?>
              </div>
            </div>
          </div>
        </div>
        <div class="cont_gris940 conttabs_general tab_nosotros2 clearfix">
          <div class="cont_sliderperfiles">
            <ul id="slide_perfiles">
              <?php if (!empty($abogados)) : ?>
  <?php foreach ($abogados as $abogado) : ?>
                  <li>
                    <a href="#" class="bt_perfiles">
                      <img src="<?php echo base_url() . $abogado['imagen_path']; ?>" alt="">
                      <h1><?php echo $abogado['cms_nombre']; ?></h1>
                      <h2><?php echo $abogado['cms_especialidad']; ?></h2>
                    </a>
                  </li>
                <?php endforeach; ?>
<?php endif; ?>
            </ul>
          </div>
          <?php if (!empty($abogados)) : ?>
  <?php foreach ($abogados as $abogado) : ?>
              <div class="detalle_abogado">
                <div class="header_abogado"></div>
                <div class="cuerpo_abogado clearfix">
                  <h2 class="color_rojo"><?php echo $abogado['cms_nombre']; ?></h2>
                  <h3><?php echo $abogado['cms_especialidad']; ?></h3>
                  <p><?php echo $abogado['cms_descripcion']; ?></p>
                </div>
                <div class="footer_abogado"></div>
              </div>
            <?php endforeach; ?>
<?php endif; ?>
        </div>
      </div>


    </div>
  </div>
</section>

<section  id="sec_home4" class="cont100  clearfix">
  <div class="cont">
    <div class="container">
      <div class="cont_tit">
        <h1 class="inline">LIBROS</h1>
      </div>

      <div class="clear espacio_en_blanco"></div>

      <div class="contslider_productos">
        <ul id="slider_productos1">
          <?php if (!empty($libros)) : ?>
  <?php foreach ($libros as $libro) : ?>
              <li class="destacados220">
                <img src="<?php echo base_url($libro['imagen_path']); ?>" alt="<?php echo $libro['cms_titulo']; ?>">
                <h2 class="color_rojo"><?php echo $libro['cms_titulo']; ?></h2>
                <h3>
                  Autor: <?php echo $libro['cms_autor']; ?><br>
                  PDF: CO$ <?php echo number_format($libro['cms_preciopdf'], 0, ".", ","); ?> | 
                  Impreso: CO$ <?php echo number_format($libro['cms_precioimpreso'], 0, ".", ","); ?><br>
    <?php echo date("d/m/Y", strtotime($libro['cms_fecha'])); ?>
                </h3>
                <p><?php echo strip_tags($libro['cms_descripcion']); ?>
                <div class="clear"></div>
                <a class="btn ancho100 carga_modalpequealta" href="<?php echo base_url('modal_comprar/' . $libro['id']); ?>">Comprar libro</a>
              </li>
            <?php endforeach; ?>
<?php endif; ?>
        </ul>
      </div>


      <div class="clear espacio_en_blanco"></div>
    </div>
  </div>
</section>

<section  id="sec_home5" class="cont100  clearfix">
  <div class="cont">
    <div class="container">
      <div class="cont_tit">
        <h1 class="inline">BLOG</h1>
      </div>
      <p><?php echo $firma[4]['cms_texto'] ?></p>
      <div class="clear espacio_en_blanco"></div>
      <div class="row clearfix">
        <div class="span3">
          <div class="cont_grissintextura clearfix">
            <div class="contgris220">
              <ul class="topnav">
                <?php if (!empty($blog)) : ?>
                  <?php
                  foreach ($categorias as $categoria) :
                    ?>
                    <li><a href="#"><?php echo $categoria['cms_categoria'] ?></a>
                      <ul>
                        <?php
                        foreach ($blog as $texto) :
                          if ($categoria['id'] == $texto['categorias_blog_id']) :
                            ?>
                            <li><a href="<?php echo base_url('internageneral/' . $texto['id']) ?>"><?php echo $texto['cms_titulo'] ?></a></li>
                            <?php
                          endif;
                        endforeach;
                        ?>
                      </ul>
                      <?php
                    endforeach;
                    ?>
                  </li>
<?php endif; ?>
              </ul>
            </div>

          </div>

        </div>
        <div class="span9">
          <div class="row clearfix">
            <?php if (!empty($blog)) : $x = 1; ?>
  <?php foreach ($blog as $texto) : if ($x < 4) : ?>
                  <a href="<?php echo base_url('internageneral/' . $texto['id']); ?>" class="span3 destacados220">
                    <h2 class="color_rojo"><?php echo $texto['cms_titulo']; ?></h2>
                    <h3><?php echo date("d/m/Y", strtotime($texto['cms_fecha'])); ?></h3>
                    <img src="<?php echo base_url($texto['imagen_path']); ?>" alt="">
                    <p><?php echo substr(strip_tags($texto['cms_titulo']), 0, 50); ?></p>
                    <div class="hover220">
                      <h2><?php echo $texto['cms_titulo']; ?></h2>
                      <h3><?php echo date("d/m/Y", strtotime($texto['cms_fecha'])); ?></h3>
                      <div class="division_blanca"></div>
                    </div>
                  </a>
                  <?php $x++;
                endif;
              endforeach; ?>
<?php endif; ?>
          </div>
        </div>
      </div>
      <div class="clear espacio_en_blanco"></div>
    </div>
  </div>
</section>

