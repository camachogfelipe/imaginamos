<?php echo form_open('perfil/editar/save_informacion_profesional') ?>

<div class="bgEncabezado">
  <div class="conEncabezado">
    <div id="txSeccion">
      <div class="encabezado-tit">Información Profesional</div>
      <div class="encabezado-subtit">&nbsp;</div>
    </div>
  </div>
</div>

<div class="contenido edit-perfil-cont">

  <div class="registro-campos">
    <a class="bot-rosa2 cambia-cont" href="<?php echo site_url('perfil') ?>">Volver al perfil</a>
    <div class="clr"></div>
  </div>


  <?php if (!empty($alert_messages)) : ?>
    <div><?php echo $alert_messages ?></div>
  <?php endif; ?>


  <div class="clear"></div>
  <div class="selectores profesional" id="registro">



    <div class="registro-campos">
      <div class="campo-reg-lab">
        <label>Nivel de experiencia</label>
        <div class="selectBox"  id="select-largo2">

          <?php echo form_dropdown('nivel_experiencia', $options['nivel_experiencia'], $datos->nivel_experiencia, 'style="width:314px;" class="comboBox1"') ?>
          <div class="clr"></div>
        </div>
      </div>

      <div class="campo-reg-lab">
        <label>Años de experiencia</label>
        <div class="selectBox"  id="select-largo2">
          <?php echo form_dropdown('anos_experiencia', $options['anos_experiencia'], $datos->anos_experiencia, 'style="width:314px;" class="comboBox1"') ?>
          <div class="clr"></div>
        </div>
      </div>

      <div class="campo-reg-lab">
        <label>Número de conciertos</label>
        <div class="selectBox"  id="select-largo2">
          <?php echo form_dropdown('numero_conciertos', $options['numero_conciertos'], $datos->numero_conciertos, 'style="width:314px;" class="comboBox1"') ?>
          <div class="clr"></div>
        </div>
      </div>

      <div class="clr"></div>
    </div>

    <div class="registro-campos">

      <div class="campo-reg-lab">
        <label>Músico de sesión</label>
        <div class="selectBox"  id="select-largo2">
          <?php echo form_dropdown('musico_sesion', $options['musico_sesion'], $datos->musico_sesion, 'style="width:314px;" class="comboBox1"') ?>
          <div class="clr"></div>
        </div>
      </div>

      <div class="campo-reg-lab">
        <label>Influencias</label>
        <div class="selectBox"  id="select-largo2">
          <input name="influencias" type="text"  class="campo" placeholder="Influencias" value="<?php echo $datos->influencias ?>"  />
        </div>
      </div>

      <div class="campo-reg-lab">
        <label>Necesitas band</label>
        <div class="selectBox"  id="select-largo2">
          <?php echo form_dropdown('necesitas_band', $options['necesitas_band'], $datos->necesitas_band, 'style="width:314px;" class="comboBox1"') ?>
        </div>
      </div>

      <div class="clr"></div>
    </div>

    <div class="registro-campos">

      <div class="campo-reg-lab">
        <label>Sitio web</label>
        <div class="selectBox"  id="select-largo2">
          <input name="sitio_web" type="url" class="campo" placeholder="Sitio web" value="<?php echo $datos->sitio_web ?>" />
        </div>
      </div>

      <div class="campo-reg-lab">
        <label>Ubicación</label>
        <div class="selectBox" id="select-largo2">
          <input name="ubicacion" type="text" class="campo" placeholder="Ubicación" value="<?php echo $datos->ubicacion ?>"  />
        </div>
      </div>

      <div class="campo-reg-lab">
        <label>URL de Facebook</label>
        <div class="selectBox"  id="select-largo2">
          <input name="social_facebook" type="url" class="campo" placeholder="URL de Facebook" value="<?php echo $datos->social_facebook ?>"  />
        </div>
      </div>

      <div class="clr"></div>
    </div>

    <div class="registro-campos">

      <div class="campo-reg-lab">
        <label>URL de Twitter</label>
        <div class="selectBox" id="select-largo2">
          <input name="social_twitter" type="url" class="campo" placeholder="URL de Twitter" value="<?php echo $datos->social_twitter ?>"  />
        </div>
      </div>

      <div class="campo-reg-lab">
        <label>URL de Youtube</label>
        <div class="selectBox"  id="select-largo2">
          <input name="social_youtube" type="url" class="campo" placeholder="URL de Youtube" value="<?php echo $datos->social_youtube ?>"  />
        </div>
      </div>

      <div class="campo-reg-lab">
        <label>URL de AIM</label>
        <div class="selectBox"  id="select-largo2">
          <input name="social_AIM" type="url" class="campo" placeholder="URL de AIM" value="<?php echo $datos->social_AIM ?>"  />
        </div>
      </div>

      <div class="clr"></div>
    </div>


    <div class="registro-campos">

      <div class="campo-reg-lab">
        <label>URL de Blogger</label>
        <div class="selectBox"  id="select-largo2">
          <input name="social_blogger" type="url" class="campo" placeholder="URL de Blogger" value="<?php echo $datos->social_blogger ?>"  />
        </div>
      </div>

      <div class="campo-reg-lab">
        <label>Disquera</label>
        <div class="selectBox"  id="select-largo2">
          <input name="disquera" type="text" class="campo" placeholder="Disquera"  value="<?php echo $datos->disquera ?>" />
        </div>
      </div>

      <div class="campo-reg-lab">
        <label>Manager</label>
        <div class="selectBox"  id="select-largo2">
          <input name="manager" type="text" class="campo" placeholder="Manager" value="<?php echo $datos->manager ?>" />
        </div>
      </div>





      <div class="clr"></div>
    </div>


    <div>
      <div class="lista-check3" style="float:left; width:252px;">
        <div class="select-check-tit">Talentos:</div>
        <?php foreach ($talentos as $talent_category) : ?>
          <div class="elemento-check2 bot-ch">
            <label for="check_01"><div class="b-ch"><span>+ </span><?php echo $talent_category->name ?></div></label>
            
            <div class="pad-check">
            <?php //$ ?>
            <?php foreach ($talent_category->talent as $talento) : ?>
              <div class="elemento-check2 el-ch-cont">
                <input id="talent-<?php echo $talento->id ?>" type="checkbox" name="talentos[]" value="<?php echo $talento->id ?>">
                <label for="talent-<?php echo $talento->id ?>"><?php echo $talento->name ?></label>
              </div>
            <?php endforeach; ?>
          </div>
          
          </div>
          
        <?php endforeach; ?>

        <div class="clear"></div>
      </div>
      <div class="lista-check3" style="float:left;width:740px;">
        <div class="select-check-tit" style="text-align: center;">Géneros musicales:</div>
        <div class="elemento-check2 bot-ch">
            <label for="check_01"><div class="b-ch"  style="text-align: center;"><span>+ </span>Ver todos los géneros</div></label>
				
				<?php foreach ($musical_genders as $musical_gender) : ?>
				  <div class="elemento-check2 el-ch-cont">
					<input id="musical-gender-<?php echo $musical_gender->id ?>" type="checkbox" name="musical_genders[]" value="<?php echo $musical_gender->id ?>">
					<label for="musical-gender-<?php echo $musical_gender->id ?>"><?php echo $musical_gender->name ?></label>
				  </div>
				<?php endforeach; ?>
				
          </div>
        

        <div class="clear"></div>
      </div>
    </div>
    <div class="clear"></div>


  </div>


  <script type="text/javascript">
    var current_talent = <?php echo json_encode($current_talents) ?>;
    $(function(){
    
      if(current_talent && current_talent.length > 0){
        
        $.each(current_talent, function(index, talent_id){
          var input = $('#talent-' +  talent_id);
            
          input.attr('checked', true);
        });
      }
    });
  </script>

  <script type="text/javascript">
    var current_musical_gender = <?php echo json_encode($musical_genders->get_all_from_user($datos->user)) ?>;
    $(function(){
    
      if(current_musical_gender && current_musical_gender.length > 0){
        
        $.each(current_musical_gender, function(index, id){
          var input = $('#musical-gender-' +  id);
            
          input.attr('checked', true);
        });
      }
    });
	
	
  </script>


  <div class="contenido">
    <input type="submit" class="bot-registrar" value="actualizar"/>
  </div>

  <?php echo form_close(); ?>
  
  <script>
  
  $(document).ready(function() {
			$(".b-ch").click(function(){

				if($('span', this).text() == "+ "){
					$('span', this).text("- ");
					
					$('.el-ch-cont',$(this).parent().parent()).css({
						'display':'block'	
					})
					
				}else{
					$('span', this).text("+ ");
					$('.el-ch-cont',$(this).parent().parent()).css({
						'display':'none'	
					})
					
				}
				
				
			})
	})
  </script>
  
 
  
  
  
  
  