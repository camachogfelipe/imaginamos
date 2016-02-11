<div class="container">
  <div class="row contenedor_internas">
    <div class="span12">
      <div class="cont_tit">
        <h1 class="inline">CONSTITUCIÓN</h1>
      </div>
    </div>
    <div class="clear"></div>
    <div class="span8">
      <div class="ancho100">
        <div class="globo_abajo inline"  id="abrir_indice">
          <div class="globo_abajoizq"></div>
          <div class="globo_abajocentro inline">
            <h2>Indice</h2>
          </div>
          <div class="globo_abajoder"></div>
          <div class="globo_indice">
            <div class="header_globoindice"></div>
            <div class="centro_globoindice">
              <ul class="topnav">
                <?php if (!empty($titulos)) : ?>
                  <?php foreach ($titulos as $titulo) : ?>
                    <li><a href="#"><?php echo $titulo['cms_titulo'] ?></a>
                      <ul>
                        <?php
                        foreach ($articulos as $articulo) :
                          if ($articulo['titulos_constitucion_id'] == $titulo['id']) :
                            ?>
                            <li><a href="<?php echo base_url('articulos/' . $articulo['id']) ?>"><?php echo $articulo['cms_articulo'] ?></a></li>
                            <?php
                          endif;
                        endforeach;
                        ?>
                      </ul>
                    </li>
                  <?php endforeach; ?>
                <?php endif; ?>
              </ul>
            </div>
            <div class="footer_globoindice"></div>
          </div>
        </div>
      </div>
      <div class="clear espacio_en_blanco"></div>
      <div class="cont_gris620 cont_gris clearfix">
        <div class="cont_articuloscons cont_scroll">
          <h2 class="inline tit_articulos" id="articulo_1"><?php if (isset($articulo_mostrar[0]['cms_articulo'])) echo $articulo_mostrar[0]['cms_articulo'] ?></h2>
          <?php
          if (isset($articulo_mostrar[0]['cms_articulo'])) :
            $text = substr($articulo_mostrar[0]['cms_texto'], 2);
            echo '<p id="parrafo_1"' . $text;
          else : echo "Artículo no existente o borrado";
          endif;
          ?>
        </div>
      </div>
    </div>
    <div class="span4">
      <form>
        <div class="input-append ancho100 relative cont_buscador">
          <input id="appendedInputButton" class="span2" type="text">
          <button class="btn" type="button">Buscar</button>
        </div>
      </form>
      <div class="clear espacio_en_blanco"></div>
      <h2>Cometarios:</h2>
      <div class="cont_grissintextura cont_comentarios">
        <div class="cont_gris300 caja_comentarios" id="caja_comentariosopciones" style="display:block;">
          <h2><?php echo $titulo['cms_titulo'] ?></h2>
          <a href="#" class="bt_rojo inline btarticulo" id="btarticulo_1">Articulo: <?php echo count($comentarios['A']) ?> mensajes</a>
          <div class="clear"></div>
          <a href="#" class="bt_rojo inline btparrafo" id="btparrafo_1">Inciso: <?php echo count($comentarios['I']) ?> mensajes</a>
          <div class="clear"></div>
          <a href="#" class="bt_rojo inline btexpresiones" id="btexpresiones_1">Expresión: <?php echo count($comentarios['E']) ?> comentarios</a>
        </div>
        <?php if ($logged != FALSE) : ?>
          <!-- Comentarios de clasificación Artículo -->
          <div class="cont_gris300 caja_comentarios caja_comentariosinactivo" id="caja_comentarioscontenido">
            <h2 class="float_left">Artículo</h2>
            <a href="#" class="btn float_right bt_regresarcomentario"> <i class="icon-circle-arrow-left icon-white"></i> Regresar </a>
            <div class="clear espacio_en_blancopeque"></div>
            <div class="masc_comentarios cont_scroll">
              <div class="accordion" id="accordion2">
                <?php
                $image = false;
                foreach ($comentarios['A'] as $key => $comart) :
                  if (!empty($comart['imagen_path'])) :
                    $image = true;
                    break;
                  else : $image = false;
                  endif;
                endforeach;
                ?>
                <?php if ($image == true) : ?>
                  <div class="accordion-group">
                    <div class="accordion-heading"> <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapse1" id="regresar_btcomentario"> Antecedentes </a> </div>
                    <div id="collapse1" class="accordion-body collapse in">
                      <div class="accordion-inner">
                        <div class="centrar_inline">
                          <?php foreach ($comentarios['A'] as $key => $comart) : ?>
                            <?php if (!empty($comart['imagen_path'])) : ?>
                              <a href="<?php echo base_url('modal_grafico/' . $comart['id']); ?>" class="bt_graficos carga_modalmediana inline"> <img src="<?php echo base_url($comart['imagen_path']); ?>" alt=""> </a>
                            <?php endif; ?>
                          <?php endforeach; ?>
                        </div>
                      </div>
                    </div>
                  </div>
                <?php endif; ?>
                <?php foreach ($comentarios['A'] as $key => $comart) : ?>
                  <?php if (!is_numeric($key)) : ?>
                    <div class="accordion-group">
                      <div class="accordion-heading"> <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapse3"> Concordancias </a> </div>
                      <div id="collapse3" class="accordion-body collapse">
                        <div class="accordion-inner">
                          <p>Art:
                            <?php
                            foreach ($comart as $con) :
                              $tmp = explode(",", $con['cms_concordancias']);
                              $dat = new constitucion();
                              $dat->select("id, cms_articulo");
                              $dat->where_in("id", $tmp)->get();
                              unset($tmp);
                              $datos1 = $dat->all_to_array(array("id", "cms_articulo"));
                              foreach ($datos1 as $dato) :
                                $tmp[] = '<a href="' . base_url("articulos/" . $dato['id']) . '">' . $dato['cms_articulo'] . '</a>';
                              endforeach;
                              echo implode(", ", $tmp);
                            endforeach;
                            ?>
                          </p>
                        </div>
                      </div>
                    </div>
                  <?php elseif ($comart['cms_tipo'] != "I") : ?>
                    <div class="accordion-group">
                      <div class="accordion-heading"> <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapse4"> <?php echo $comart['cms_titulo'] ?> </a> </div>
                      <div id="collapse4" class="accordion-body collapse">
                        <div class="accordion-inner"> <?php echo $comart['cms_comentario'] ?>
                          <div class="clear"></div>
                        </div>
                      </div>
                    </div>
                  <?php endif; ?>
                <?php endforeach; ?>
                <div class="accordion-group">
                  <div class="accordion-heading"> <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapse11"> Jurisprudencia de Constitucionalidad </a> </div>
                  <div id="collapse11" class="accordion-body collapse">
                    <div class="accordion-inner">
                      <ul class="lista_circulos">
                        <li><a href="<?php echo base_url('sentencia_constitucional'); ?>">Sentencia de Constitucionalidad</a></li>
                        <li><a href="<?php echo base_url('demanda_constitucional'); ?>">Demanda</a></li>
                        <li><a href="<?php echo base_url('comunicados_constitucional'); ?>">Comunicado de prensa</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="accordion-group">
                  <div class="accordion-heading"> <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapse12"> Jurisprudencia de Tutela </a> </div>
                  <div id="collapse12" class="accordion-body collapse">
                    <div class="accordion-inner">
                      <ul class="lista_circulos">
                        <li><a href="<?php echo base_url('sentenciatutela_constitucional'); ?>corte_constitucional">Sentencia</a></li>
                        <li><a href="<?php echo base_url('tutela_constitucional'); ?>">Tutelas</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Comentarios de clasificación Inciso -->
          <div class="cont_gris300 caja_comentarios caja_comentariosinactivo" id="caja_comentarioscontenido">
            <h2 class="float_left">Inciso</h2>
            <a href="#" class="btn float_right bt_regresarcomentario"> <i class="icon-circle-arrow-left icon-white"></i> Regresar </a>
            <div class="clear espacio_en_blancopeque"></div>
            <div class="masc_comentarios cont_scroll">
              <div class="accordion" id="accordion2">
                <?php
                foreach ($comentarios['I'] as $key => $comart) :
                  if (!empty($comart['imagen_path'])) :
                    $image = true;
                    break;
                  else : $image = false;
                  endif;
                endforeach;
                ?>
                <?php if ($image == true) : ?>
                  <div class="accordion-group">
                    <div class="accordion-heading"> <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapse1" id="regresar_btcomentario"> Antecedentes </a> </div>
                    <div id="collapse1" class="accordion-body collapse in">
                      <div class="accordion-inner">
                        <div class="centrar_inline">
                          <?php foreach ($comentarios['I'] as $key => $comart) : ?>
                            <?php if (!empty($comart['imagen_path'])) : ?>
                              <a href="<?php echo base_url('modal_grafico/' . $comart['id']); ?>" class="bt_graficos carga_modalmediana inline"> <img src="<?php echo base_url($comart['imagen_path']); ?>" alt=""> </a>
                            <?php endif; ?>
                          <?php endforeach; ?>
                        </div>
                      </div>
                    </div>
                  </div>
                <?php endif; ?>
                <?php foreach ($comentarios['I'] as $key => $comart) : ?>
                  <?php if (!is_numeric($key)) : ?>
                    <div class="accordion-group">
                      <div class="accordion-heading"> <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapse3"> Concordancias </a> </div>
                      <div id="collapse3" class="accordion-body collapse">
                        <div class="accordion-inner">
                          <p>Art:
                            <?php
                            foreach ($comart as $con) :
                              $tmp = explode(",", $con['cms_concordancias']);
                              $dat = new constitucion();
                              $dat->select("id, cms_articulo");
                              $dat->where_in("id", $tmp)->get();
                              unset($tmp);
                              $datos1 = $dat->all_to_array(array("id", "cms_articulo"));
                              foreach ($datos1 as $dato) :
                                $tmp[] = '<a href="' . base_url("articulos/" . $dato['id']) . '">' . $dato['cms_articulo'] . '</a>';
                              endforeach;
                              echo implode(", ", $tmp);
                            endforeach;
                            ?>
                          </p>
                        </div>
                      </div>
                    </div>
                  <?php elseif ($comart['cms_tipo'] != "I") : ?>
                    <div class="accordion-group">
                      <div class="accordion-heading"> <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapse4"> <?php echo $comart['cms_titulo'] ?> </a> </div>
                      <div id="collapse4" class="accordion-body collapse">
                        <div class="accordion-inner"> <?php echo $comart['cms_comentario'] ?>
                          <div class="clear"></div>
                        </div>
                      </div>
                    </div>
                  <?php endif; ?>
                <?php endforeach; ?>
                <div class="accordion-group">
                  <div class="accordion-heading"> <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapse11"> Jurisprudencia de Constitucionalidad </a> </div>
                  <div id="collapse11" class="accordion-body collapse">
                    <div class="accordion-inner">
                      <ul class="lista_circulos">
                        <li><a href="<?php echo base_url('sentencia_constitucional'); ?>">Sentencia de Constitucionalidad</a></li>
                        <li><a href="<?php echo base_url('demanda_constitucional'); ?>">Demanda</a></li>
                        <li><a href="<?php echo base_url('comunicados_constitucional'); ?>">Comunicado de prensa</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="accordion-group">
                  <div class="accordion-heading"> <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapse12"> Jurisprudencia de Tutela </a> </div>
                  <div id="collapse12" class="accordion-body collapse">
                    <div class="accordion-inner">
                      <ul class="lista_circulos">
                        <li><a href="<?php echo base_url('sentenciatutela_constitucional'); ?>corte_constitucional">Sentencia</a></li>
                        <li><a href="<?php echo base_url('tutela_constitucional'); ?>">Tutelas</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Comentarios de clasificación Expresión -->
          <div class="cont_gris300 caja_comentarios caja_comentariosinactivo" id="caja_comentarioscontenido">
            <h2 class="float_left">Artículo</h2>
            <a href="#" class="btn float_right bt_regresarcomentario"> <i class="icon-circle-arrow-left icon-white"></i> Regresar </a>
            <div class="clear espacio_en_blancopeque"></div>
            <div class="masc_comentarios cont_scroll">
              <div class="accordion" id="accordion2">
                <?php
                foreach ($comentarios['E'] as $key => $comart) :
                  if (!empty($comart['imagen_path'])) :
                    $image = true;
                    break;
                  else : $image = false;
                  endif;
                endforeach;
                ?>
                <?php if ($image == true) : ?>
                  <div class="accordion-group">
                    <div class="accordion-heading"> <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapse1" id="regresar_btcomentario"> Antecedentes </a> </div>
                    <div id="collapse1" class="accordion-body collapse in">
                      <div class="accordion-inner">
                        <div class="centrar_inline">
                          <?php foreach ($comentarios['E'] as $key => $comart) : ?>
                            <?php if (!empty($comart['imagen_path'])) : ?>
                              <a href="<?php echo base_url('modal_grafico/' . $comart['id']); ?>" class="bt_graficos carga_modalmediana inline"> <img src="<?php echo base_url($comart['imagen_path']); ?>" alt=""> </a>
                            <?php endif; ?>
                          <?php endforeach; ?>
                        </div>
                      </div>
                    </div>
                  </div>
                <?php endif; ?>
                <?php foreach ($comentarios['E'] as $key => $comart) : ?>
                  <?php if (!is_numeric($key)) : ?>
                    <div class="accordion-group">
                      <div class="accordion-heading"> <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapse3"> Concordancias </a> </div>
                      <div id="collapse3" class="accordion-body collapse">
                        <div class="accordion-inner">
                          <p>Art:
                            <?php
                            foreach ($comart as $con) :
                              $tmp = explode(",", $con['cms_concordancias']);
                              $dat = new constitucion();
                              $dat->select("id, cms_articulo");
                              $dat->where_in("id", $tmp)->get();
                              unset($tmp);
                              $datos1 = $dat->all_to_array(array("id", "cms_articulo"));
                              foreach ($datos1 as $dato) :
                                $tmp[] = '<a href="' . base_url("articulos/" . $dato['id']) . '">' . $dato['cms_articulo'] . '</a>';
                              endforeach;
                              echo implode(", ", $tmp);
                            endforeach;
                            ?>
                          </p>
                        </div>
                      </div>
                    </div>
                  <?php elseif ($comart['cms_tipo'] != "I") : ?>
                    <div class="accordion-group">
                      <div class="accordion-heading"> <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapse4"> <?php echo $comart['cms_titulo'] ?> </a> </div>
                      <div id="collapse4" class="accordion-body collapse">
                        <div class="accordion-inner"> <?php echo $comart['cms_comentario'] ?>
                          <div class="clear"></div>
                        </div>
                      </div>
                    </div>
                  <?php endif; ?>
                <?php endforeach; ?>
                <div class="accordion-group">
                  <div class="accordion-heading"> <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapse11"> Jurisprudencia de Constitucionalidad </a> </div>
                  <div id="collapse11" class="accordion-body collapse">
                    <div class="accordion-inner">
                      <ul class="lista_circulos">
                        <li><a href="<?php echo base_url('sentencia_constitucional'); ?>">Sentencia de Constitucionalidad</a></li>
                        <li><a href="<?php echo base_url('demanda_constitucional'); ?>">Demanda</a></li>
                        <li><a href="<?php echo base_url('comunicados_constitucional'); ?>">Comunicado de prensa</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="accordion-group">
                  <div class="accordion-heading"> <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapse12"> Jurisprudencia de Tutela </a> </div>
                  <div id="collapse12" class="accordion-body collapse">
                    <div class="accordion-inner">
                      <ul class="lista_circulos">
                        <li><a href="<?php echo base_url('sentenciatutela_constitucional'); ?>corte_constitucional">Sentencia</a></li>
                        <li><a href="<?php echo base_url('tutela_constitucional'); ?>">Tutelas</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        <?php endif; ?>
      </div>
    </div>
  </div>
</div>
<div class="clear espacio_en_blancofooter"></div>
