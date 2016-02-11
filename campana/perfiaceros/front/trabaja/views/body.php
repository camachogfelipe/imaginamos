<div class="cont_940 contenedor_internas clearfix">
  <div class="conttabs_general sec_trabaja" style="opacity: 1; height: auto; overflow: visible; padding: 0px;">  
    <div class="grillados tit_secciones">
      <h1>trabaja con <span>nosotros</span></h1>
      <div class="clear"></div>
      <img src="<?= base_url() . $datos['inicio'][0]->imagen ?>" alt="">
    </div>   
    <div class="grillatres copy_trabaja">
      <p>
        <span>siempre estamos en la búsqueda</span> de personas talentosas, proactivas, emprendedoras, organizadas, creativas y comprometidas con lo que hacen y que puedan ayudarnos en nuestro crecimiento. Buscamos ideas frescas, y nuevas maneras de hacer las cosas. Eres lo que buscamos?
      </p>
    </div>
    

    <div class="clear"></div>
    <div class="centrar_contenido">
    <?php if(!empty($datos['vacantes'])) : ?>
    	<?php $i = $tv = 0; $a = 1; ?>
      <?php $max = count($datos['vacantes']); ?>
    	<?php foreach($datos['vacantes'] as $vacante) : ?>
      	<?php if($i == 0) : ?>
      <div class="cont_abrirsecciones_trabaje">
      	<?php endif; ?>
        <div class="abrirsecciones_trabaje inline" data-id="<?= $vacante->id ?>" data-rel="<?= $a ?>">
        	<?php $titulo = explode(" ", $vacante->nombre); ?>
					<h2 class="inline"><?php
          	echo $titulo[0];
						if(count($titulo) >= 2) :
							echo "<br>";
							unset($titulo[0]);
							echo implode(" ", $titulo);
						endif;
					?></h2>
          <div class="division_seccionestrabaje inline"></div>
          <div class="cont_seccionestrabajep inline">
          	<p class="inline"><?= $vacante->intro_detalle ?></p>
          </div>
          <div class="ico_mas inline"></div>
        </div>
        <?php
        	$i++; $tv++;
					if($i == 3 || $max == $tv) :
						$i = 0;
						?>
			</div>
      <div class="detalle_trabaje clearfix <?= "form".$a ?>" id="detalle_trabaje">
        <a href="#" class="cerrarx cerrarx_trabaje cerrarx_trabajeprin"></a>
        <div class="clear espacio_en_blanco"></div>
        <div class="cont_tittrabaje">
          <h1 id="vacante"></h1>
          <h2 id="subtitulo"></h2>
        </div>
        <div class="parrafo_detalletrabaje parrafo_detalletrabaje50 cont_scroll" id="detalle">
          <p id="#conten_details" >
          </p>
        </div>
        <div class="img_detalletrabaje">
          <img id="imagen" src="img/img_detalletrabaje.jpg" alt="" width="268" height="200">
        </div>
        <div class="clear"></div>
        <div class="inline redes_footer documentos redes_trabaje" style="width: 100%;">
        	<a id="vc_twitter" href="#" onClick="windowopen(this)" data-link=""><img src="img/iconos/redes_footer/twiter_red.png?timestamp=1377556783045" alt=""></a>                
          <a id="vc_facebook" href="#" onClick="windowopen(this)" data-link=""><img src="img/iconos/redes_footer/face_red.png" alt=""></a>
          <a id="vc_google" href="#" onClick="windowopen(this)" data-link="" alt=""><img src="img/iconos/redes_footer/google_red.png?timestamp=1377556783046" alt=""></a>
          <a id="vc_linkedin" href="#" onClick="windowopen(this)" data-link="" alt=""><img src="img/iconos/redes_footer/linkedin_red.png?timestamp=1377556783046" alt=""></a>
          <a href="mailto: <?= $datos['footer']->email ?>"><img src="img/iconos/redes_footer/carta-icono.png?timestamp=1377556783047" alt=""></a>
				</div>
        <a href="#" class="bt_postularme">
          Postularme
          <img src="img/iconos/icono_postularme.png" alt="">
        </a>
        <div class="cont_formpostularse" id="postularme_trabaje">
          <a class="cerrarx cerrarx_trabaje cerrar_formtrabaje" href="#"></a>
          <div class="clear"></div>
          <div class="cont_tittrabaje">
            <h1>Postularme</h1>
            <h2 id="postularme_titulo">lorem ipsum dolor amet</h2>
          </div>
          <form method="post" class="formulario_vacante" action="<?php echo base_url() . "trabaja/postularse"; ?>" id="formulario<?= $a; ?>" enctype="multipart/form-data" onSubmit="verificaArchivos()">
            <fieldset>
              <div class="cont50big">
                <div class="cont50small">
                  <input class="validate[required]" name="nombre" type="text" placeholder="nombre..">
                </div>
                <div class="cont50small margin_left">
                  <input class="validate[required, custom[email]]" name="email" type="text" placeholder="email..">
                </div>
                
                <div class="cont200">
                  <select style="width:100%" id="ciudad<?= $a; ?>" name="ciudad" class="sel-item validate[required]">
                      <option value="">ciudad..</option>
                      <option value="Armenia">Armenia</option>
                      <option value="Barrancabermeja">Barrancabermeja</option>
                      <option value="Barranquilla">Barranquilla</option>
                      <option value="Bello">Bello</option>
                      <option value="Bogota">Bogot&aacute;</option>
                      <option value="Bucaramanga">Bucaramanga</option>
                      <option value="Buenaventura">Buenaventura</option>
                      <option value="Buga">Buga</option>
                      <option value="Cali">Cali</option>
                      <option value="Cartagena">Cartagena</option>
                      <option value="Cartago">Cartago</option>
                      <option value="Cucuta">Cúcuta</option>
                      <option value="Dos_quebradas">Dos Quebradas</option>
                      <option value="Envigado">Envigado</option>
                      <option value="Florencia">Florencia</option>
                      <option value="Floridablanca">Floridablanca</option>
                      <option value="Girardot">Girardot</option>
                      <option value="Giron">Giron</option>
                      <option value="Ibague">Ibagué</option>
                      <option value="Itagui">Itagüí</option>
                      <option value="Maicao">Maicao</option>
                      <option value="Manizales">Manizales</option>
                      <option value="Medellin">Medellín</option>
                      <option value="Monteria">Montería</option>
                      <option value="Neiva">Neiva</option>
                      <option value="Palmira">Palmira</option>
                      <option value="Pasto">Pasto</option>
                      <option value="Pereira">Pereira</option>
                      <option value="Popayan">Popayán</option>
                      <option value="Santa_martha">Santa Marta</option>
                      <option value="Sincelejo">Sincelejo</option>
                      <option value="Soacha">Soacha</option>
                      <option value="Sogamoso">Sogamoso</option>
                      <option value="Soledad">Soledad</option>
                      <option value="Tulua">Tuluá</option>
                      <option value="Tunja">Tunja</option>
                      <option value="Valledupar">Valledupar</option>
                      <option value="Villavicencio">Villavicencio</option>
                  </select>
                </div>
                <div class="cont200 con-tip margin_left">
                	<!--Tooltip adjuntar-->
                  <div class="con-tool">
                    <div class="tool-top"></div>
                    <div class="tool-body">
                      <p>¡Atrévete a enviar un video creativo!</p>
                      <div class="tool-bottom"></div>
                    </div>
                    <div class="tool-sw"></div>
                  </div>
                  <!--Fin tooltip adjuntar-->
                	<select style="width:100%" id="hoja_vida<?= $a; ?>" name="hoja_vida" class="sel-item validate[required] hoja_vida" tabindex="1">
                  	<option value="" selected>Seleccione la hoja de vida</option>
                  	<option value="doc">Documento</option>
                    <option value="vid">Video</option>
                    <option value="doc_vid">Documento y Video</option>
                  </select>
                  <div class="fileupload fileupload-new" data-provides="fileupload">
                    <div class="input-append file_doc">
                      <div class="uneditable-input span3" style="margin-bottom:0;"><span class="fileupload-preview pre1">Adjuntar CV.</span></div>
                      <span class="btn btn-file"><span class="fileupload-new"></span><input type="file" name="ac_pdf" id="file1" /></span>
                    </div>
                  </div>
                  <div class="fileupload fileupload-new" data-provides="fileupload">
                    <div class="input-append file_vid">
                      <div class="uneditable-input span3" style="margin-bottom:0;"><span class="fileupload-preview pre2">Adjuntar Video.</span></div>
                      <span class="btn btn-file"><span class="fileupload-new"></span><input type="file" name="ac_video" id="file2" /></span>
                    </div>
                  </div>
                </div>
                <div class="cont200 margin_left">
                  <input class="validate[required, custom[phone]]" name="telefono" type="text" placeholder="teléfono..">
                </div>
              </div>
              
              <div class="cont50small text_areaboton">
                <div class="texarea_contacto">
                  <textarea class="validate[required]" rows="3" name="comentario" placeholder="comentario..."></textarea>
                </div>
                <input type="hidden" id="vancante_id<?= $a ?>" name="vacante_id" value="" />
                <button class="btn_formcontacto" type="submit"></button>
              </div>
            </fieldset>
          </form>
        </div>
      </div>
            <?php
						$a++;
					endif;
				?>
      <?php endforeach; ?>
     </div>
		<?php endif; ?>
    </div>
  </div>
</div>
<script type="text/javascript">
function windowopen(a) {
	event.preventDefault();
	var enlace = jQuery(a).attr("data-link");
	window.open(enlace, "_blank", "width=650,height=250");
}
</script>
<?php if(isset($datos['mensaje']) and !is_null($datos['mensaje'])) : ?>
<script>
	<?php
		if($datos['mensaje'] == 1) : $msj = "Error al registrar su postulación.\nPor favor intentelo más tarde.";
		else : $msj = "Su postulación quedó registrada con éxito.";
		endif;
	?>
	alert("<?= $msj; ?>");
</script>
<?php endif; ?>