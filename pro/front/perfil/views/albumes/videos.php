


<div class="bgEncabezado2" >
    <div class="conEncabezado2">
        <div class="ico-seccion"><img src="images/ico-seccion1.png" /></div>
        <div id="txSeccion2">
            <div class="encabezado-tit2">Álbum de videos de <?php echo $datos->username ?></div>
            <div class="encabezado-subtit2">Ingresa el link de tus videos (youtube o vimeo) y agrégalos a tu álbum</div>
        </div>
    </div>
</div>




<div class="perfil-cont" >
    <div class="perfil-cont-iz2" id="perfil-cont-iz">
        <a class="bot-rosa2 cambia-cont" href="<?php echo site_url('perfil') ?>" style="margin-left: 0;margin-bottom: 20px;">Volver al perfil</a>
        <div class="clr"></div>
        <?php if ($is_owner_usuario) : ?>
            <div class="clr"></div>
            <div style="margin-bottom: 2em;">
                <?php echo form_open('perfil/actions/add_users_video', 'id="form"', array('continue_url' => current_url())) ?>
                <input type="url" name="video_url" class="campo3" placeholder="URL del video en Youtube o Vimeo" required="required" />
                <input type="submit" class="btn-primary mini" value="Agregar video" style="margin-left:30px;"/>
                <?php echo form_close() ?>
                <div class="clr"></div>
            </div>

        <?php endif; ?>

        <?php if ($datos->users_video->exists()) : ?>

            <div class="album-cont">
                <div id="contenu">
                    <div class="albumes">
                        <?php foreach ($datos->users_video as $user_video) : $user_video->get_oembed() ?>
                            <div class="album">
                                <a href="<?php echo site_url('perfil/actions/remove_users_video/' . $user_video->id . '?next=' . uri_string()) ?>" class="b_cerrar" style="display: none;margin-left: 170px;margin-right: 0;margin-top: -9px;position: absolute;z-index: 9999;"></a>
                                <a class="group iframe" href="<?php echo $user_video->oembed->url ?>" rel="fancy-gallery-iframe">
                                    <img src="<?php echo $user_video->oembed->thumbnail_url ?>" />
                                    <div class="mas" style=" margin-left: 136px; margin-top: -45px;"><img src="images/mas.png" /></div>
                                </a>

                            </div>
                        <?php endforeach; ?>
                        <div class="clr"></div>
                    </div>
                </div>
            </div>

        <?php endif; ?>

    </div>
    <div class="clr"></div>
</div>


<div class="clr"></div>


<?php if ($is_owner_usuario) : ?>
    <script>
        $(document).ready(function() {

            $(".album").hover(function(){
    				
                $(".b_cerrar", this).css({
    					
                    'display':'block'	
                })
    				
            },function(){
                $(".b_cerrar", this).css({
                    'display':'none'	
                })
            });
                            
            /* Delete */
            $('.album .b_cerrar').click(function(){
                return confirm('¿Seguro que quieres eliminar el video?');
            });
        });
    </script>
<?php endif; ?>