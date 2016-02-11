<?php 

function quitar_tildes($cadena) {
      $no_permitidas= array ("á","é","í","ó","ú","Á","É","Í","Ó","Ú","ñ","À","Ã","Ì","Ò","Ù","Ã™","Ã ","Ã¨","Ã¬","Ã²","Ã¹","ç","Ç","Ã¢","ê","Ã®","Ã´","Ã»","Ã‚","ÃŠ","ÃŽ","Ã”","Ã›","ü","Ã¶","Ã–","Ã¯","Ã¤","«","Ò","Ã","Ã„","Ã‹");
      $permitidas= array ("a","e","i","o","u","A","E","I","O","U","n","N","A","E","I","O","U","a","e","i","o","u","c","C","a","e","i","o","u","A","E","I","O","U","u","o","O","i","a","e","U","I","A","E");
      $texto = str_replace($no_permitidas, $permitidas ,$cadena);
      return $texto;
    }
?>
<div class="seccion_emerlineas" style="top: -1500px;">
  <div class="cont_940 cont_infoemergentes clearfix">
    <div class="cont_titemergentes">
      <div class="logo_internas"><img src="img/logos/la_campana_basico.png" alt=""></div>
      <h1 class="inline midle"></h1>
    </div>
    <div class="clear espacio_en_blanco"></div>

    <div class="cont_emergentelineas clearfix">
      <div class="izqcont_emergentelineas">
        <img id="imagen_producto" src="" alt="">
      </div>
      <div class="dercont_emergentelineas">
        <div class="cont_tittrabaje">
          <h1 id="titulo_producto"></h1>
          <h2 id="subtitulo_producto"></h2>
        </div>
          <p id="texto_producto" ></p>
          <div class="grilla235 cont_seccionesfooter inline redes_footer" style="width:100%">
      <a href="https://twitter.com/lacampana_acero"><img src="img/iconos/redes_footer/twiter_white.png" alt=""></a>
      <a href="http://www.facebook.com/pages/la-campana/151565408220649"><img src="img/iconos/redes_footer/face_white.png" alt=""></a>
      <a href="https://plus.google.com/u/0/112856535283529764048/posts"><img src="img/iconos/redes_footer/google_white.png" alt=""></a>
      <a href="http://www.linkedin.com/company/la-campana-servicios-de-acero-s-a-?trk=hb_tab_compy_id_2327778"><img src="img/iconos/redes_footer/linkedin_white.png" alt=""></a>
      <a href="#mail"><img src="img/iconos/redes_footer/carta-icono2_white.png" alt=""></a>
    
          <a id="archivo_producto" class="bt_blanco bt_emergente_lineas float_right inline" href="" target="_blank">
            especificaciones técnicas
          </a></div>
      </div>
    </div>

  </div>

  <a href="#" id="cerrar_seccion_emerlineas"></a>
</div>

<div class="cont_940 contenedor_internas clearfix">
  <div class="conttabs_general sec_lineas" style="opacity: 1; height: auto; overflow: visible; padding: 0px;">
    <div class="grillados tit_secciones">
      <h1>lineas</h1>
    </div>
    <div class="clear"></div>
    <div class="cont_slidermenulineas">
      <?php if(!empty($datos['linea'])) : $x = 1; ?>
      <ul class="slidermenulineas">
        <?php foreach($datos['linea'] as $linea) : ?>
        <li<?php if((!isset($datos['migaActual']) and $x == 1) || (isset($datos['migaActual']) and $datos['migaActual'] == $linea->titulo)) : ?> class="activo_sliderlineas"<?php endif; ?>>
          <a href="<?= base_url() . "lineas/" . $linea->id ?>">
            <div class="cont_tittrabaje">
              <h1><?= $linea->titulo ?></h1>
              <h2><?= $linea->subtitulo ?></h2>
            </div>
          </a>
        </li>
        <?php $x++; endforeach; ?>
      </ul>
      <?php endif; ?>
    </div>
    <div class="clear"></div>
    <div class="conttab_generallineas">
      <div class="tab_generallineas tab_generallineas1" style="display:block">
        <?php if(isset($datos['miga'])) : ?>
        <div class="subcategorias_lineas inline">
          <?php foreach($datos['miga'] as $miga) : ?>
          <a class="<?php if($miga['nombre'] == $datos['migaActual']) : ?>activosubcategorias_lineas <?php endif; ?>inline" href="<?= base_url() . "lineas/" . $miga['link'] ?>" id="subcategoria_lineas1">
            <div class="cont_tittrabaje">
              <h1><?= $miga['nombre'] ?></h1>
            </div>
          </a>
          <?php endforeach; ?>
        </div>
        <?php endif; ?>
        <div class="subcategoria_lineas subcategoria_lineas1 cont_botoneslineas" style="display: block">
        <?php if(isset($datos['categoria']) and !isset($datos['scateg'])) : ?>
          <?php foreach($datos['categoria'] as $categoria) : ?>
          <div class="botoneslineas inline">
            <a href="<?=
                quitar_tildes(base_url() . "lineas/" . $categoria->cms_linea_id . "/" . $categoria->id);
              ?>">
            <img src="<?= base_url() . $categoria->img ?>" alt="">
            <div class="cont_titblanco inline tit_carruselenterate tit_internoblanco">
              <h1><?= $categoria->titulo ?></h1>
              <h2><?= $categoria->subtitulo ?></h2>
            </div>
            <div class="hover_botoneslineas">
              <div class="cont_titblanco inline tit_carruselenterate">
                <h1><?= $categoria->titulo ?></h1>
                <h2><?= $categoria->subtitulo ?></h2>
              </div>
              <p><?= $categoria->texto ?></p>
              <div class="bt_blanco bt_mas inline float_right" href="<?=
                quitar_tildes(base_url() . "lineas/" . $categoria->cms_linea_id . "/" . $categoria->id)
              ?>">ver más</div>
            </div>
            </a>
          </div>
          <?php endforeach; ?>
        <?php elseif(isset($datos['categoria']) and isset($datos['scateg']) and !empty($datos['scateg']) and !isset($datos['productos'])) : ?>
          <?php foreach($datos['scateg'] as $scategoria) : ?>
          <div class="botoneslineas inline">
            <a href="<?=
                quitar_tildes(base_url() . "lineas/" . $scategoria->cms_linea_id . "/" . $scategoria->cat_id . "/" . $scategoria->id)
              ?>">
            <img src="<?= base_url() . $scategoria->img ?>" alt="">
            <div class="cont_titblanco inline tit_carruselenterate tit_internoblanco">
              <h1><?= $scategoria->titulo ?></h1>
              <h2><?= $scategoria->subtitulo ?></h2>
            </div>
            <div class="hover_botoneslineas">
              <div class="cont_titblanco inline tit_carruselenterate">
                <h1><?= $scategoria->titulo ?></h1>
                <h2><?= $scategoria->subtitulo ?></h2>
              </div>
              <p><?= $scategoria->texto ?></p>
              <div class="bt_blanco bt_mas inline float_right" href="<?=
                quitar_tildes(base_url() . "lineas/" . $scategoria->cms_linea_id . "/" . $scategoria->cat_id . "/" . $scategoria->id)
              ?>">ver más</div>
            </div>
            </a>
          </div>
          <?php endforeach; ?>
        <?php elseif(isset($datos['categoria']) and isset($datos['scateg']) and isset($datos['productos'])) : ?>
          <?php foreach($datos['productos'] as $producto) : ?>
          <div class="botoneslineas botoneslineas2 inline">
          	<a href="<?php //print_r($producto);
                if(!empty($producto->scategoria)) :
	                echo quitar_tildes(current_url() . "/producto/" . $producto->id . "-" . str_replace(" ", "-", $producto->titulo));
								else :
									echo quitar_tildes(current_url() . "/producto/" . $producto->id . "-" . str_replace(" ", "-", $producto->titulo));
								endif;
              ?>">
              <img src="<?= base_url() . $producto->img ?>" alt="">
              <div class="cont_titblanco inline tit_carruselenterate tit_internoblanco">
                <h1><?= $producto->titulo ?></h1>
                <h2><?= $producto->subtitulo ?></h2>
              </div>
              <div class="hover_botoneslineas">
                <div class="cont_titblanco inline tit_carruselenterate">
                  <h1><?= $producto->titulo ?></h1>
                  <h2><?= $producto->subtitulo ?></h2>
                </div>
                <p><?= $producto->intro_text ?></p>
                <div class="bt_blanco bt_mas inline float_right" href="<?php
								if(!empty($producto->scategoria)) :
	                echo quitar_tildes(current_url() . "/producto/" . $producto->id . "-" . str_replace(" ", "-", $producto->titulo));
								else :
									echo quitar_tildes(current_url() . "/producto/" . $producto->id . "-" . str_replace(" ", "-", $producto->titulo));
								endif;
              ?>">ver más</div>
              </div>
            </a>
          </div>
          <?php endforeach; ?>
        <?php endif; ?>
        </div>
      </div>
    </div>
  </div>
</div>