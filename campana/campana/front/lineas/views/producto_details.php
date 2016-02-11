<?php 

function quitar_tildes($cadena) {
      $no_permitidas= array ("á","é","í","ó","ú","Á","É","Í","Ó","Ú","ñ","À","Ã","Ì","Ò","Ù","Ã™","Ã ","Ã¨","Ã¬","Ã²","Ã¹","ç","Ç","Ã¢","ê","Ã®","Ã´","Ã»","Ã‚","ÃŠ","ÃŽ","Ã”","Ã›","ü","Ã¶","Ã–","Ã¯","Ã¤","«","Ò","Ã","Ã„","Ã‹");
      $permitidas= array ("a","e","i","o","u","A","E","I","O","U","n","N","A","E","I","O","U","a","e","i","o","u","c","C","a","e","i","o","u","A","E","I","O","U","u","o","O","i","a","e","U","I","A","E");
      $texto = str_replace($no_permitidas, $permitidas ,$cadena);
      return $texto;
    }
?>
<div class="cont_940 contenedor_internas clearfix">
	<div class="conttabs_general sec_lineas" style="opacity: 1; height: auto; overflow: visible; padding: 0px;">
    <div class="grillados tit_secciones">
      <h1>lineas</h1>
    </div>
    <div class="clear"></div>
    <?php /*<div class="cont_slidermenulineas">
    	<?php if(!empty($datos['linea'])) : $x = 1; ?>
    	<ul class="slidermenulineas">
      	<?php foreach($datos['linea'] as $linea) : ?>
      	<li<?php if((!isset($datos['migaActual']) and $x == 1) || (isset($datos['migaActual']) and $datos['migaActual'] == $linea->titulo)) : ?> class="activo_sliderlineas"<?php endif; ?>>
          <a href="<?= base_url() . "lineas/?lin=" . $linea->id ?>">
            <div class="cont_tittrabaje">
              <h1><?= $linea->titulo ?></h1>
              <h2><?= $linea->subtitulo ?></h2>
            </div>
          </a>
        </li>
        <?php $x++; endforeach; ?>
      </ul>
      <?php endif; ?>
    </div> */ ?>
    <div class="clear"></div>
    <div class="conttab_generallineas">
      <div class="tab_generallineas tab_generallineas1" style="display:block">
      	<?php if(isset($datos['miga'])) : ?>
        <div class="subcategorias_lineas inline">
	        <?php foreach($datos['miga'] as $miga) : ?>
          <a class="<?php if($miga['nombre'] == $datos['migaActual']) : ?>activosubcategorias_lineas <?php endif; ?>inline" href="<?= base_url() . $miga['link'] ?>" id="subcategoria_lineas1">
            <div class="cont_tittrabaje">
              <h1><?= $miga['nombre'] ?></h1>
            </div>
          </a>
          <?php endforeach; ?>
        </div>
        <?php endif; ?>
        <div class="subcategoria_lineas subcategoria_lineas1 cont_botoneslineas" style="display: block">
        	
          <div class="seccion_emerlineas2" style="top: -1500px;">
            <div class="cont_940 cont_infoemergentes clearfix">          
              <div class="cont_emergentelineas clearfix">
                <div class="izqcont_emergentelineas">
                  <img id="imagen_producto" src="<?= base_url() . $datos['productos']->img ?>" alt="" width="470" height="334">
                </div>
                <div class="dercont_emergentelineas">
                  <div class="cont_tittrabaje">
                    <h1 id="titulo_producto" style="text-align:left"><?= $datos['productos']->titulo ?></h1>
                    <h2 id="subtitulo_producto" style="text-align:left"><?= $datos['productos']->subtitulo ?></h2>
                  </div>
                    <p id="texto_producto" style="text-align:justify"><?= $datos['productos']->texto ?></p>
                    <div class="grilla235 cont_seccionesfooter inline redes_footer" style="width:100%">        
                    <a href="#" onClick="windowopen(this)" data-link="http://twitter.com/home?status=<?= $datos['productos']->titulo ?> - <?= current_url(); ?>"><img src="img/iconos/redes_footer/twiter_white.png" alt=""></a>                
                    <!-- <a href="#" onClick="windowopen(this)" data-link="http://www.facebook.com/sharer.php?u=<?= quitar_tildes(current_url()); ?>"><img src="img/iconos/redes_footer/face_white.png" alt=""></a> -->
                    <a href="#" onClick="windowopen(this)" data-link="http://www.facebook.com/sharer.php?s=100&amp;p[title]=<?php echo urlencode(quitar_tildes($datos['productos']->titulo));?>&amp;p[summary]=<?php echo urlencode(quitar_tildes(strip_tags($datos['productos']->texto))) ?>&amp;p[url]=<?php echo urlencode(quitar_tildes(current_url())); ?>&amp;p[images][0]=<?php echo urlencode(quitar_tildes(base_url().$datos['productos']->img)); ?>"><img src="img/iconos/redes_footer/face_white.png" alt=""></a>
                    
                    <a href="#" onClick="windowopen(this)" data-link="https://plus.google.com/share?url=<?= current_url(); ?>"><img src="img/iconos/redes_footer/google_white.png" alt=""></a>
                    <a href="#" onClick="windowopen(this)" data-link="http://www.linkedin.com/shareArticle?mini=true&url=<?= current_url() ?>&title=<?= $datos['productos']->titulo ?>&summary=<?= $datos['productos']->subtitulo ?>&source=<?= base_url(); ?>"><img src="img/iconos/redes_footer/linkedin_white.png" alt=""></a>
                    <a href="mailto: <?= $datos['footer']->email ?>"><img src="img/iconos/redes_footer/carta-icono2_white.png" alt=""></a>
                    <a id="archivo_producto" class="bt_blanco bt_emergente_lineas float_right inline" href="<?= base_url() . $datos['productos']->file ?>" target="_blank">
                      especificaciones técnicas
                    </a></div>
                </div>
              </div>
          
            </div>
          </div>
          
        </div>
      </div>
    </div>
  </div>
</div>
<!--<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-526fe834697ac22d"></script>  -->
<script type="text/javascript">
function windowopen(a) {
	var enlace = jQuery(a).attr("data-link");
	window.open(enlace, "_blank", "width=650,height=250");
}

</script>