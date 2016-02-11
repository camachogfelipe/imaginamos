<script src="js/mishaka.js"></script>

<script type="text/javascript">
  $(document).ready(function() {
    /*$(".contactar-m").colorbox({iframe:true, innerWidth:"500", innerHeight:"300"});
 $(".contratar-m").colorbox({iframe:true, innerWidth:"500", innerHeight:"300"});
 $(".valorar-m").colorbox({iframe:true, innerWidth:"500", innerHeight:"500"});*/

    $('.contactar-m').fancybox();
    $('.contratar-m').fancybox();
    $('.valorar-m').fancybox();
    $(function() {
      $('#scroll20').jScrollPane();
    });

    $(function() {
      $('#scroll22').jScrollPane();
    });

  });
  $(function() {
    function log(message) {
      $("<div>").text(message).prependTo("#log");
      $("#log").scrollTop(0);
    }

    $("#city").autocomplete({
      source: function(request, response) {
        $.ajax({
          url: "http://ws.geonames.org/searchJSON",
          dataType: "jsonp",
          data: {
            featureClass: "P",
            style: "full",
            maxRows: 12,
            name_startsWith: request.term
          },
          success: function(data) {
            response($.map(data.geonames, function(item) {
              return {
                label: item.name + (item.adminName1 ? ", " + item.adminName1 : "") + ", " + item.countryName,
                value: item.name
              }
            }));
          }
        });
      },
      minLength: 2,
      select: function(event, ui) {
        log(ui.item ?
          "Selected: " + ui.item.label :
          "Nothing selected, input was " + this.value);
      },
      open: function() {
        $(this).removeClass("ui-corner-all").addClass("ui-corner-top");
      },
      close: function() {
        $(this).removeClass("ui-corner-top").addClass("ui-corner-all");
      }
    });
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
  .c1{
    color:#333 !important;	
  }

  .can-cont{
    height:auto;
  }
  .area-msg {
    border: 1px solid #CCCCCC;
    height: 60px;
    width: 360px;
    color: black;
  }
  .rating-txt{
    color: #666666;
    font-size: 12px;
    width: 470px;
  }
  .rating-nom{
    color: #666;
    font-family: 'BebasNeueRegular';
    font-size: 20px;
    float:left;
  }
  .rating-dato{
    color: #E82E7C;
    font-family: 'BebasNeueRegular';
    font-size: 20px;
  }
  .rating-list{
    margin: 30px auto 0;
    width: 350px;
  }
  .rating-valor{
    height: 22px;
    margin-bottom: 2em;
    clear: both;
    display: block;
  }
  .bot-acc {
    background-color: #666666;
    color: #FFFFFF;
    cursor: pointer;
    float: right;
    font-family: 'BebasNeueRegular';
    font-size: 18px;
    margin-right: 25px;
    margin-top: 30px;
    padding: 3px 10px;
  }
  .form-usuario {
    background-color: transparent;
    border-radius: 10px 10px 10px 10px;
    height: 99px;
    margin-left: 22px;
    padding-left: 17px;
    padding-top: 12px;
    width: 393px;
  }
  .rating-campo{
    float: right;
    margin-right: -10px;
    text-align: center;
    width: 20px;
    display:none;
  }
  .show:hover .borrar{
    display:block;
  }
  .show:hover .editar{
    display:block;
  }
  .borrar{
    width: 30px; margin-top: 5px;background-color: #F3F4F7;
    display:none;
    position: absolute;
    margin-left: 240px;
  }
  .editar{
    width: 30px;margin-right: 8px; margin-top: 5px;background-color: #F3F4F7;
    display:none;
    position: absolute;
    margin-left: 206px;
  }
  .date-picker {
    background-color: transparent;

    border: 0 none;
    height: 30px;
    width: 150px;
  }

  .slider.ui-widget-content{ background: #E93580; }
  .slider .ui-slider-range{ background: #666; }

  .campos-show input[type="text"]{
    background-color: #E5E8E9 !important;
    background-image: none !important;
    border: 1px solid #D0D2D4 !important;
    border-radius: 5px 5px 5px 5px !important;
    color: #585858 !important;
    margin-bottom: 7px;
    padding-left: 10px !important;
    padding-right: 10px !important;
    width: 270px !important;
  }
  .foto-banda img{
    width:250px;	
  }
  .thumb-album-img > img{

  }
</style>

<div class="perfil-cont">
  <div class="perfil-cont-iz">

    <?php if ($is_owner_usuario): ?>
      <div class="lapiz2"><a href="<?php echo site_url('perfil/editar/informacion_personal') ?>"><img src="images/editar.png" /></a></div>
    <?php endif; ?>
    <?php if ($datos->musical_gender->exists()) : ?>
      <div class="genero">
        <b>Género(s):</b> 
        <?php foreach ($datos->musical_gender as $musical_gender) : ?>
          <?php echo $musical_gender->name . (next($datos->musical_gender) == true ? ',' : null) ?>
        <?php endforeach; ?>
      </div>
    <?php endif; ?>
    <div class="foto-banda">
      <?php if (!empty($datos->profile_picture)) { ?>
        <img src="<?php echo uploads_url($datos->profile_picture) ?>" />
      <?php } else { ?>
        <img src="<?php echo site_url("assets/images/imagensino.png") ?>" />
        <?php }
      ?>
    </div>
    <div style="float:left; margin-top:1.5em;"><div class="fb-like" data-send="false" data-layout="button_count" data-width="100" data-show-faces="false"></div></div>
    <div class="rating">
      <?php echo $datos->get_rating(); ?>
    </div>
    <div class="clear"></div>

    <?php if (!$is_owner_usuario): ?>
      <div class="bot-acciones">
        <a href="#contactar-cont" class="contactar-m"><div class="bot-acc2">Contactar</div></a>
        <a href="#contratar-cont" class="contratar-m"><div class="bot-acc2">Contratar</div></a>
        <a href="#rating-cont" class="valorar-m"><div class="bot-acc2">Rating</div></a>
        <div class="clear"></div>
      </div>
    <?php endif; ?>

    <div class="genero"><b>Experiencia:</b> <?php echo!empty($datos->users_personal_info->nivel_experiencia) ? $datos->users_personal_info->nivel_experiencia : 'Sin definir' ?></div>
    <div class="link-perfil">
      <div class="link-perfil-tit">Links de contacto</div>
      <div class="link-perfil-icos">
        <ul>
          <?php if (!empty($datos->users_personal_info->social_facebook)) : ?>
            <li><a href="<?php echo $datos->users_personal_info->social_facebook ?>" target="_blank" class="ico-perfil1"></a></li>
          <?php endif; ?>
          <?php if (!empty($datos->users_personal_info->social_twitter)) : ?>
            <li><a href="<?php echo $datos->users_personal_info->social_twitter ?>" target="_blank"  class="ico-perfil2"></a></li>
          <?php endif; ?>
          <?php if (!empty($datos->users_personal_info->social_youtube)) : ?>
            <li><a href="<?php echo$datos->users_personal_info->social_youtube ?>" target="_blank" class="ico-perfil3"></a></li>
          <?php endif; ?>

          <?php if (!empty($datos->users_personal_info->social_blogger)) : ?>
            <li><a href="<?php echo $datos->users_personal_info->social_blogger ?>" target="_blank" class="ico-perfil4"></a></li>
          <?php endif; ?>
          <?php if (!empty($datos->users_personal_info->social_AIM)) : ?>
            <li><a href="<?php echo $datos->users_personal_info->social_AIM ?>" target="_blank" class="ico-perfil5"></a></li>
          <?php endif; ?>

          <li> <?php echo mailto($datos->email, ' ', array('class' => 'ico-perfil6')); ?> </li>

          <div class="clr"></div>
        </ul>
      </div>

    </div>
    <div class="regis-tit" id="misAlbumes">Mis Álbumes</div>

    <?php if ($is_owner_usuario): ?>
      <div class="lapiz3" style="display: none; ">
         <a href="<?php echo sprintf($urls->current_inshaka_url_format, 'fotos') ?>"><img src="images/editar.png" /></a>
      </div>
    <?php endif; ?>

    <?php if ($datos->users_photo->exists()): ?>

      <div class="thumb-album">
        <div class="regis-subtit">Fotos</div>
        <a href="<?php echo sprintf($urls->current_inshaka_url_format, 'fotos') ?>">
          <div class="thumb-album-img">
            <div class="mas"><img src="images/mas.png" /></div>
            <img src="<?php echo uploads_url($datos->users_photo->thumb) ?>" height="86px" width="115" />

          </div>
        </a>
      </div>

    <?php endif; ?>

    <?php if ($datos->users_video->exists()): $datos->users_video->get_oembed(); ?>

      <div class="thumb-album">
        <div class="regis-subtit">Videos</div>
        <a href="<?php echo sprintf($urls->current_inshaka_url_format, 'videos') ?>">
          <div class="thumb-album-img">
            <div class="mas"><img src="images/mas.png" /></div>
            <img src="<?php echo $datos->users_video->oembed->thumbnail_url ?>"  width="115"/>

          </div>
        </a>
      </div>

    <?php endif; ?>
    <div class="conDestacadoPerfil">    

      <div class="titColumnas">

        <?php if ($is_owner_usuario): ?>
          <div class="lapiz4" style="display: none; ">
            <a href="<?php echo site_url('perfil/editar/informacion_profesional') ?>"><img src="images/editar.png" /></a>
          </div>
        <?php endif; ?>

        <span class="titDestacados"><?php echo $datos->username ?></span><br>
        <span class="subDestacados"><?php echo $datos->first_name, ' ', $datos->last_name ?></span>
      </div>

      <div class="txLista">
        <span class="tLista">Edad: <b><?php echo calculate_years_old($datos->birthday) ?></b></span><br>
      </div>

      <div class="txLista">
        <?php if ($datos->talent->exists()) : ?>
          <span class="tLista">Talentos:</span><br><br>
          <span class="pLista">
            <?php foreach ($datos->talent as $talent) : ?>
              <div><?php echo $talent->talents_category->name, ': ', $talent->name ?></div><br>
            <?php endforeach; ?>
          </span>
        <?php endif; ?>
      </div>
      <div class="txLista">
        <span class="tLista">Años de experiencia: <b><?php echo $datos->users_personal_info->anos_experiencia ?></b></span><br>
      </div>
      <div class="txLista">
        <span class="tLista">No. de conciertos: <b><?php echo $datos->users_personal_info->numero_conciertos ?></b></span><br>
      </div>
	   <div class="txLista">
        <span class="tLista">Influencias: <b><?php echo $datos->users_personal_info->influencias ?></b></span><br>
      </div>
      <div class="txLista">
        <span class="tLista">
          <?php if ($datos->users_personal_info->musico_sesion) : ?>
            Músico de sesión <br>
          <?php endif; ?>
          <?php if ($datos->users_personal_info->necesitas_band) : ?>
            Busco band
          <?php endif; ?>
        </span>
      </div>
      <div class="txLista">
        <?php if ($datos->musical_gender->exists()) : ?>

          <span class="tLista">Género(s):
            <?php foreach ($datos->musical_gender as $musical_gender) : ?>
              <strong><?php echo $musical_gender->name . (next($datos->musical_gender) == true ? ',' : null) ?></strong>
            <?php endforeach; ?>
          <?php endif; ?>
      </div>
	
    </div>
    <div class="clear"></div>
  </div>
  <div class="perfil-cont-de">

    <div class="usuario-tit"><?php echo ($datos->is_banda ? 'Banda ' : null), $datos->first_name, ' ', $datos->last_name ?></div>

    <div class="usuario-subtit close-form" style="position:relative;">

      <div class="edit-profile-status" data-profile-status="inline">

      </div>


      <span id="profile-status">
        <?php if (!empty($datos->status)) : ?>
          <?php echo $datos->status ?>
        <?php else: ?>
          <?php if ($is_owner_usuario) : ?>
            Es un “status” creado por el usuario por lo tanto no es modificable por Inshaka.          
          <?php endif; ?>

        <?php endif; ?>
      </span>


      <?php if ($is_owner_usuario) : ?>



        <?php echo form_open('perfil/ajax/update_status', 'id="profile-status-form" style="display:none;"') ?> 
        <div>
          <?php echo form_textarea(array('name' => 'status', 'required' => 'required', 'maxlength' => 100)) ?>
          <input class="btn-primary" type="submit" value="Actualizar" />
          <a class="cancel" href="#">Cancelar</a>
        </div>
        <?php echo form_close() ?>


        <script>
          var form_status = $('#profile-status-form')
          ,   status_inline = '[data-profile-status="inline"]'
          ,   profile_status = $('#profile-status')
          ,   parent = $('.usuario-subtit');
                      
          $(document).on('click', status_inline, function(){
                          
            var actual_status = profile_status.text();
                          
            profile_status.hide();
            form_status.find('textarea').val(actual_status).end().show();
                          
            parent.removeClass('close-form');
                          
          });
                      
          $('.cancel', form_status).on('click', hide_form);
                      
          $(form_status).on('submit', function(){
            var $this = $(this)
            ,   status_inline_text = $(status_inline).html();
                          
            $.ajax({
              url : $this.attr('action'),
              dataType : 'json',
              type : $this.attr('method'),
              data : $this.serialize(),
                              
              beforeSend : function(){
                $(status_inline).html('Cargando...').show();
              },
                              
              success : function(json){
                if(json.ok === true){
                  profile_status.text($this.find('textarea').val());
                  hide_form();
                }
              },
                              
              complete : function(){
                $(status_inline).html(status_inline_text).removeAttr('style');
              }
            });
                          
            return false;
          });
                      
          function hide_form(){
            profile_status.show();
            form_status.hide();
            parent.addClass('close-form');
          }
                      
        </script>

      <?php endif; ?>

    </div>
    <div class="usaurio-desc"><?php echo $datos->bio ?></div>

    <?php if ($datos->users_image->exists()) : ?>
      <div class="carrusel" style="display:none;">
        <div class="carousel-container">
          <div id="carousel">
            <?php foreach ($datos->users_image->all as $user_image) : ?>

              <div class="carousel-feature">
                <a href="#"><img class="carousel-image" alt="<?php echo $user_image->name, ': ' . SITENAME ?>" src="<?php echo uploads_url($user_image->image) ?>">

                  <div class="album-info2"><?php echo $user_image->name ?></div>
                  <div class="mas2"><img src="<?php echo uploads_url($user_image->image) ?>" /></div>
                </a>
              </div>
            <?php endforeach; ?>

          </div>

          <div id="carousel-left"><img src="images/arrow-left.png" /></div>
          <div id="carousel-right"><img src="images/arrow-right.png" /></div>
        </div>
      </div>
    <?php endif; ?>



    <div class="clr"></div>



    <div class="regis-tit">Canciones</div>
    <?php if ($is_owner_usuario): ?>
      <div class="conBtMas agrCancion">
        <div id="txBtMas">
          <a style="float: right;">
            <span class="verMas ">Agregar canción</span>
          </a>
        </div>
        <a href="#">
          <div id="imgBtMas"></div>
        </a>
      </div>
      <div class="cancionesInputBox" id="agrCancion" style="float: left;margin-top: -21px; display: none">
        <form id="save-song-url-form" action="<?php echo site_url('perfil/ajax/save_song_url') ?>">
          <small style="float:left; font-size:.8em; margin-top:.6em;margin-right: 32px;">URL de la canción en Soundcloud.com: </small><input name="url" type="url" class="campo" placeholder="Ej: http://soundcloud.com/user/song"  required="required" />
          <input class="bot-aceptar" type="submit" value="Guardar">
        </form>
      </div>

      <div id="delete-song-confirm" title="Eliminar canción de soundcloud" style="display:none;">
        <p>¿Estás seguro que quieres eliminar la canción?</p>
      </div>
    <?php endif; ?>
    <div class="clear"></div>
    <div id="songs-url-list" class="can-cont scroll22 no-result" >
      <p>Ninguna canción agregada.</p>
    </div>


    <div class="clear"></div>
    <div class="perfil-extra-iz">
      <div class="regis-tit">Shows</div>

      <div id="shows-list" data-load-url="<?php echo site_url('perfil/' . $datos->inshaka_url . '/load_shows') ?>">
        <p><small>Cargando shows...</small></p>
      </div>

      <?php if ($is_owner_usuario): ?>
        <div class="conBtMas ver-campos-show">
          <div id="txBtMas">
            <a>
              <span class="verMas ">Agregar show</span>
            </a>
          </div>
          <a href="#">
            <div id="imgBtMas"></div>
          </a>
        </div>
        <div class="campos-show" style="display:none;">
          <form id="add-shows-form" action="<?php echo site_url('perfil/ajax/save_show') ?>">

            <div class="messages" style="display:none;"></div>

            <div class="calendar">
              <div class="calendar-tit">Fechas próximos toques</div>
              <input name="date" type="text" id="basic_example_1" class="date-picker campo" placeholder="Fecha y hora del show">
            </div>

            <div class="selectBox"  id="select-largo2">

              <input name="place" type="text" class="campo" placeholder="Lugar del show"  />
            </div>

            <div class="selectBox" id="select-largo2">
              <div class="ui-widget">
                <input name="city" type="text" id="city" class="campo" placeholder="Ciudad"/>
              </div>
            </div>
            <div class="clear"></div>
            <input class="bot-aceptar" type="submit" value="Enviar">
          </form><!-- // Formulario para agregar shows -->
        </div>
      <?php endif; ?>
    </div>

    <div class="perfil-extra-de">
      <div class="regis-tit">Comentarios</div>
      <?php if (!$is_owner_usuario): ?>
        <a class="valorar-m" href="#rating-cont">
          <div class="bot-acc2">Rating</div></a>
        <div class="clear"></div>
      <?php endif; ?>


      <?php if ($datos->comment->exists()): ?>

        <div class="coment-cont" id="scroll20">
          <div class="coment-list">
            <ul>
              <?php foreach ($datos->comment as $comment): ?>
                <li><?php echo $comment->comentario ?></li>
              <?php endforeach; ?>
            </ul>
          </div>
        </div>

      <?php endif; ?>

    </div>
    <div class="clear"></div>

  </div>
  <div class="clr"></div>
</div>


<div id="contactar-cont" style="display:none;">
  <div class="mensaje-tit">Contactar</div>
  <div class="form-usuario">
    <div class="form-top">
      <div class="form-foto"> <?php if ($datos->profile_picture == "") { ?>
          <img src="<?php echo site_url("assets/images/imagensino.png") ?>" width="225px" /></div><br><br>
        <?php } else { ?>            
        <img src="<?php echo uploads_url($datos->profile_picture) ?>"  width="225px" /></div><br><br>
      <?php }
      ?>
    <form action="<?php site_url("front/perfil/mi_shaka_perfil/submit") ?>" method="post" id="envios_form_os1">
      <div class="form-campos">
        
		<div class="campo-msg_SZ" >De:</div>
		<input type="text" id="nombres" class="campo-msg" placeholder="" value="<?php echo $current_username ?>"  />
        <p style="line-height:10px">&nbsp;</p>
		<div class="campo-msg_SZ">Para:</div>
		<textarea id="textos" class="area-msg">Hola Usuario, quiero invitarte a que formes parte de mi banda!</textarea>
      </div>
      <div class="clr"></div>
     
	 <div class="lista-check2">
<!--
        <div class="elemento-check">
          <div class="check-tit">Post to</div>
        </div>
        <div class="elemento-check">
          <input id="check_prim" type="checkbox" name="check_01">
          <label for="check_01">Facebook</label>
        </div>
        <div class="elemento-check">
          <input id="check_prim" type="checkbox" name="check_01">
          <label for="check_01">Twitter </label>
        </div>
		-->
        <input class="bot-enviar"  id="envios_fi1" type="submit" value="enviar">
		
      </div>
	  
    </form>
    <div class="clr"></div>
  </div>
</div>
</div>

</div>

<div id="contratar-cont" style="display:none;">
  <div class="mensaje-tit">Contratar</div>
  <div class="form-usuario">
    <div class="form-top">
      <div class="form-foto"> <?php if ($datos->profile_picture == "") { ?>
          <img src="<?php echo site_url("assets/images/imagensino.png") ?>" width="225px" /></div><br><br>
        <?php } else { ?>            
        <img src="<?php echo uploads_url($datos->profile_picture) ?>"  width="225px" /></div><br><br>
      <?php }
      ?>
    <form action="<?php site_url("front/perfil/mi_shaka_perfil/submit") ?>" method="post" id="envios_form_os">
      <div class="form-campos">
        <div class="campo-msg_SZ" >De:</div>
		<input type="text" id="nombres" class="campo-msg" placeholder="" value="<?php echo $current_username ?>"  />
		 <p style="line-height:10px">&nbsp;</p>
		<div class="campo-msg_SZ">Para:</div>
        <textarea id="textos" class="area-msg">Hola Usuario, quiero invitarte a que formes parte de mi banda!</textarea>
      </div>
      <div class="clr"></div>
      <div class="lista-check2">
<!--
        <div class="elemento-check">
          <div class="check-tit">Post to</div>
        </div>
        <div class="elemento-check">
          <input id="check_prim" type="checkbox" name="check_01">
          <label for="check_01">Facebook</label>
        </div>
        <div class="elemento-check">
          <input id="check_prim" type="checkbox" name="check_01">
          <label for="check_01">Twitter </label>
        </div>
		-->
        <input class="bot-enviar"  id="envios_fi" type="submit" value="enviar">

      </div>
    </form>
    <div class="clr"></div>
  </div>
</div>
</div>
</div>
<script type="text/javascript">
  $('#envios_fi').click(function(){
    alert("Mensaje enviado correctamente");
    $('#envios_form_os').submit();
  });
  $('#envios_fi1').click(function(){
    alert("Mensaje enviado correctamente");
    $('#envios_form_os1').submit();
  });
</script>



<?php if (!$is_owner_usuario): ?>
  <div id="rating-cont" class="rating-cont" style="display:none;">
  <?php echo form_open('perfil/ajax/create_comment', 'id="create-comment-form"', array('ui' => base64_encode($datos->id))) ?>

    <div class="mensaje-tit">Rating</div>
    <div class="rating-txt">Conoces a este artista? Que piensas de él? Lo has visto tocar en Vivo? Dale un Rating o déjale un comentario!</div>

    <div class="clear"></div>
    <div class="rating-list">

      <div class="rating-valor">
        <div class="rating-nom">Sonido: <span class="rating-dato">1</span></div>
        <div class="clear"></div>
        <div class="slider"></div>
        <input name="sonido" type="hidden" value="1" />

        <div class="clear"></div>
      </div>

      <div class="rating-valor">
        <div class="rating-nom">Presentación: <span class="rating-dato">1</span></div>
        <div class="clear"></div>
        <div class="slider"></div>
        <input name="presentacion" type="hidden" value="1" />

        <div class="clear"></div>
      </div>

      <div class="rating-valor">
        <div class="rating-nom">Profesionalismo: <span class="rating-dato">1</span></div>
        <div class="clear"></div>
        <div class="slider"></div>
        <input name="profesionalismo" type="hidden" value="1" />

        <div class="clear"></div>
      </div>

      <div class="rating-valor">
        <div class="rating-nom">Actitud: <span class="rating-dato">1</span></div>
        <div class="clear"></div>
        <div class="slider"></div>
        <input name="actitud" type="hidden" value="1" />

        <div class="clear"></div>
      </div>
    </div>

    <div class="form-usuario">
      <div class="form-top">
        <div class="form-campos">
          <textarea name="comentario" class="area-msg" placeholder="Escribe aquí tu comentario..."></textarea>
        </div>
        <div class="clr"></div>
        <div class="messages"></div>
        <div class="lista-check2">
          <input class="bot-enviar" type="submit" value="enviar">
        </div>
        <div class="clr"></div>
      </div>
    </div>
  <?php echo form_close() ?>
  </div>
  <?php endif; ?>

<!-- Show delete dialog -->
<div id="shows-delete-dialog" style="display:none;">
  <p>Test</p>
</div>

<script>
  var songs_urls = <?php echo json_encode($datos->users_songs->get_songs_urls()) ?>;
</script>

<script defer src="<?php echo front_asset('js/perfil-usuario.js') ?>"></script>

<script>
  $(function() {
    $(".slider").slider({
      range: "max",
      min: 1,
      max: 10,
      value: 1,
      slide: function(event, ui) {
        var parent = $(this).parent();
        return parent.find('input').val(ui.value).end().find('.rating-dato').text(ui.value);
      }
    });
  });
</script>