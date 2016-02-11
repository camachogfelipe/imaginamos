<style type="text/css">.main_p {float:left; height:232px; margin:0; width:300px;} .main_p ul, .main_p ol {padding:0 0 0 18px;} .main_p ul li {list-style-type:disc;} .main_p ol li {list-style-type:decimal;} h2.bold.title {height:70px; overflow:hidden;}</style>

<div class="content_940 content_home">
    <div class="linea_home" style="margin-bottom:35px;">
        <h1 class="title_dest bold">Vacantes</h1>
    </div>
    <div class="clearfix">
        <?php $i = 1; ?>
      <?php foreach ($vacantes as $key) { ?>
        <div class="item_vacante left" <?php if($i == 3){echo "style=\"margin-right:0\"";$i = 1;}else{ $i++; } ?> >
            <h2 style="height:52px; overflow:hidden;"><?php echo $key->title; ?></h2>
            <img src="<?php echo base_url(); ?>files/large/<?php echo $key->image; ?>" width="278" height="232"  /><!-- -->
            <a href="javascript:abrirVacante('<?php echo $key->id; ?>');" class="btn_vermas">Ver más <span></span></a>
        </div>
      <?php } ?>
    </div>

</div>

<?php foreach ($vacantes as $vacante) { ?>
<div class="popup_vacante<?= $vacante->id; ?> popup1">
    <div class="bg_popup"></div>
    <div class="content_popup1">
        <a href="javascript:cerrarPopup();" class="btn_cerrar"></a>
        <div class="contenido_popup">
            <h2 class="bold title"><?= $vacante->title; ?></h2>
            <div class="clearfix">
            
                <div style="float:left; padding:0 0 15px; width:100%;">
                  <a onclick="javascript:new_window('http://www.facebook.com/sharer.php?s=100&amp;p[title]=<?php echo urlencode($vacante->title);?>&amp;p[summary]=<?php echo urlencode(strip_tags($vacante->description)) ?>&amp;p[url]=<?php echo urlencode(current_url()); ?>&amp;p[images][0]=<?php echo urlencode(base_url()."files/large/".$vacante->image); ?>',700,380);" href="#"><div class="fb-share"></div></a>
								</div>
                <div class="texto_vacante clearfix">
                    <img class="right" src="<?= base_url(); ?>files/large/<?= $vacante->image; ?>" width="230" height="192"/>
                    <div class="main_p description scroll_pane">
                    	<div style="width:96%;"><?= $vacante->description; ?></div>
                    </div>
                </div>
                <a data-id="" id="" href="javascript:aplicarVacante('<?= $vacante->title; ?>', '<?= $vacante->id; ?>');" class="btn_vermas2 popup_vacante_id_<?= $vacante->id; ?>" style="margin-top:0; margin-right:0;">Aplicar  <span></span></a>
            </div>
        </div>
    </div>
</div>
<?php } ?>



<div class="popup_aplicar popup1">
  <div class="bg_popup"></div>
  <div class="content_popup1">
    <a href="javascript:cerrarPopup();" class="btn_cerrar"></a>
    <div class="contenido_popup">
      <h2 class="bold">Formulario de Aplicación</h2>
     <form class="form_vacante" id='formAplicar' action="{{url:site}}vacantes/aplicar" method="post" enctype="multipart/form-data">
        <div class="clearfix">
          <input type="text" name="nombre" class="input2 validate[required] left" placeholder="Nombre" />
          <input type="text" name="doc" class="input2 validate[required] right" placeholder="No. de cédula" />
        </div>
        <div class="clearfix">
          <input type="text" name="email" class="input2 validate[required] left" placeholder="Correo electrónico" />
          <input type="text" name="tel" class="input2 validate[required] right" placeholder="Teléfono" />
        </div>
        <div class="clearfix">
          <input type="text" name="cel" class="input2 validate[required] left" placeholder="Celular" />
          <input type="text" name="exp" class="input2 validate[required] right" placeholder="Años de experiencia" />
        </div>
        <div class="clearfix">
          <select name="profe" class="select1 left" id="estudios"></select>
          <input type="text"  name="otros"  class="input2 validate[required] right" placeholder="Otros estudios" />
        </div>
        
        <div class="clearfix">
          <input type="text" name="cual" class="input2 validate[required] left" id="input_pro" placeholder="Escriba cuál" />
        </div>
        <input type="file" name="archivo" class="file" value="Adjuntar archivo" />
        <textarea class="textarea3" name="coment" placeholder="Comentario"></textarea>
        <input type="hidden" name="vacante" id="vacante" value="" />
        <input type="hidden" name="vacante_id" id="vacante_id" value="" />
        <input type="submit" class="submit" value="Enviar" />
      </form>
    </div>
  </div>
</div>