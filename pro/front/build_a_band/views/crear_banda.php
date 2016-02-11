<style>
    #scroll4 .jspContainer .jspVerticalBar{
        visibility:hidden !important;
        display:none !important;
        height:0 !important;
        filter:alpha(opacity=1) !important;
        -moz-opacity:1 !important;
        -khtml-opacity: 1 !important;
        opacity: 0.01 !important;
        overflow:hidden;
    }
</style>
<div class="selectores-band">
    <?php echo form_open('build-a-band/ajax/save_band/' . (!empty($datos->band->id) ? $datos->band->id : null), 'id="save-band-form"') ?>

    <div class="messages"></div><div class="clr"></div>

    <div class="selector-iz">
        <div class="band-op">
            <div class="band-ico">1</div>
            <div class="band-info">
                <div class="band-tit">Selecciona estos datos para iniciarlos criterios de búsqueda </div>
                <div class="band-cont">
                    <div class="campo-reg-lab">
                        <label style="padding-left: 4px;">Nombre de la Banda</label>
                        <input name="name" type="text" class="campo3" value="<?php echo (!empty($datos->band->name) ? $datos->band->name : null) ?>" />
                    </div>
                    <div class="campo-reg-lab">
                        <label style="padding-left: 4px;">Ciudad</label>
                        <input name="city" id="city" class="campo3" value="<?php echo (!empty($datos->band->city) ? $datos->band->city : null) ?>" />
                    </div>


                    <div class="campo-reg-lab">
                        <label style="padding-left: 4px;">Género musical</label>
                        <div class="selectBox" id="select-largo">
                            <?php echo form_dropdown('musical_gender_id', $datos->genders, (!empty($datos->band->musical_gender_id) ? $datos->band->musical_gender_id : null), 'style="width:386px;"   class="comboBox1"') ?>
                            <div class="clr"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="clr"></div>
        </div>

        <div class="band-op">
            <div class="band-ico">2</div>
            <div class="band-info">
                <div class="band-tit">Selecciona un escenario para tu banda </div>
                <div class="band-cont" id="scroll1">
                    <div class="escenarios" data-stage="thumbs">

                        <?php foreach ($datos->stages->all as $stage) : ?>
                            <div class="escenario">
                                <img src="<?php echo uploads_url($stage->thumb) ?>" data-stage-large="<?php echo uploads_url($stage->image) ?>" data-stage-id="<?php echo $stage->id ?>">
                            </div>
                        <?php endforeach; ?>

                        <input type="hidden" name="stage_id" value="<?php echo $datos->stages->id ?>" />
                        <div class="clr"></div>
                    </div>
                </div>
            </div>
            <div class="clr"></div>
        </div>

        <div class="band-op">
            <div class="band-ico">3</div>
            <div class="band-info">
                <div class="band-tit">Selecciona los instrumentos que formaran la</br>banda, para luego buscar integrantes</div>
                <div class="band-cont" id="scroll2">
                    <div class="instrumentos" data-instruments="thumbs">
                        <?php foreach ($datos->instruments->all as $instrument) : ?>
                            <div class="instrumento" style="background-image: url('<?php echo uploads_url($instrument->image) ?>');" title="<?php echo $instrument->name ?>" data-instrument-id="<?php echo $instrument->id ?>" data-instruments="select"></div>
                        <?php endforeach; ?>
                        <div class="clr"></div>
                    </div>
                </div>
            </div>
            <div class="clr"></div>
        </div>

    </div>
    <div class="selector-de">
        <div class="band-op">
            <div class="band-ico">4</div>
            <div class="band-info">
                <div class="band-tit">Selecciona el perfil del músico que <br> estas buscando</div>

                <div class="img-resultado" data-stage="background">
                    <?php if (!empty($datos->band->stage->image)) : ?>
                        <img class="background-stage" src="<?php echo uploads_url($datos->band->stage->image) ?>" />
                    <?php else: ?>
                        <img class="background-stage" src="<?php echo uploads_url($datos->stages->image) ?>" />
                    <?php endif; ?>

                </div>
                <div class="cont-sup">
                    <div class="sel-inst" id="scroll4" data-instruments="wrapper-scroll">
                        <div class="sel-inst-cont" data-instruments="list"> 
                            <?php
                            if (!empty($datos->band)) :
                                foreach ($datos->band->bands_instrument as $band_instrument) :
                                    ?>
                                    <div class="instrumento" style="background-image: url('<?php echo uploads_url($band_instrument->instrument->image) ?>');" title="<?php echo $band_instrument->instrument->name ?>" data-instrument-id="<?php echo $band_instrument->instrument->id ?>" data-instruments="select"><span class="b_cerrar"></span></div>
                                    <?php
                                endforeach;
                            endif;
                            ?>
                        </div>
                    </div>
                </div>
                <div class="acota-click">Haz click en los instrumentos seleccionados e invita a otros músicos</div>
                <div class="filtros-inst-cont" style="display:none;">
                    <div class="band-tit">¿Qué quieres hacer con este instrumento?</div>

                    <a href="#musicos-cont" class="elegir-m" data-action="show-search-users-dialog"><div class="bot-buscar" id="buscar-m">Buscar</div></a>
                    <div class="clr"></div>

                    <div id="musicos">
                        <?php
                        if (!empty($datos->band)) :
                            foreach ($datos->band->bands_instrument as $band_instrument) :
                                ?>
                                <div class="lista-musicos" data-instrument-id="<?php echo $band_instrument->instrument->id ?>" data-build-a-band="lista-musicos" style="display:none;">
                                    <div class="lista-musicos-tit">Músicos Seleccionados</div>
                                    <div class="musicos2 users">
                                        <?php foreach ($band_instrument->bands_instruments_user as $band_instrument_user) : ?>
                                            <div class="musico2 user"  data-user-id="<?php echo $band_instrument_user->user->id ?>">
                                                <div class="mus-sel2">
                                                    <div class="m-nombre2 name-user"><?php echo $band_instrument_user->user->first_name, ' ', $band_instrument_user->user->last_name ?></div>
                                                </div>
                                                <div class="ver-mas-musico">
                                                    <a class="url-user" href="<?php echo sprintf($urls->inshaka_url, $band_instrument_user->user->inshaka_url) ?>" target="_blank">Ver más</a>
                                                </div>
                                                <div data-action="eliminar-musico-lista-musicos" class="eliminar-musico">Eliminar</div>
                                                <input type="hidden" name="users[<?php $band_instrument->instrument->id ?>][]" value="<?php echo $band_instrument_user->user->id ?>" />
                                            </div>
                                            <?php
                                        endforeach;
                                        ?>
                                    </div>
                                </div>

                                <?php
                            endforeach;
                        endif;
                        ?>
                    </div>

                    <div class="clr"></div>
                </div>
            </div>

            <textarea name="message" id="" cols="30" rows="10" style="background:#E4E7E7; border-color: #C7C9CA; width: 100%;" placeholder="Mensaje de la invitación...">Envía un mensaje a los músicos seleccionados y empieza tu nueva banda!</textarea>

            <input type="submit" value="crear" class="bot-crear" />
        </div>
        <div class="clr"></div>
    </div>
    <div class="clr"></div>
    <?php echo form_close(); ?>
    <div class="clr"></div>
</div>

<div class="clr"></div>
</div>



<div id="musicos-cont" style="display:none;width:970px;">
    <form id="search-users-form" action="<?php echo site_url('build-a-band/ajax/search_users') ?>">

        <div class="mensaje-tit">Buscar músicos</div>
        <!--<a id="avanzada-button" href="#" class="busc-av">Búsqueda avanzada</a>-->
        <div class="busc-big" id="busqueda-general">
          <!--<input  name="s" class="campo-custom" type="text" placeholder="Ingrese su búsqueda, ej: Ciudad, Conciertos, Talento, Género, Usuario, E-mail..." style="margin-left:30px;">-->
          <!--<input class="bot-buscar" type="submit" value="buscar" style="margin-bottom: 60px; float:left; margin-left: 8px;">-->
        </div>
        <div class="clr"></div>

        <div class="musicos-cont" id="busqueda-avanzada" style="display:none;">
            <div>
                <input class="campo" name="city" id="city2" type="text" placeholder="Ciudad" style="margin-right: 4px;">
                <div class="selectBox select-xlarge">
                    <select  style="width:312px;" class="comboBox1" name="num_conciertos" >
                        <option selected="selected" value="0">Número de conciertos</option>
                        <option value="0-10">0-10</option>
                        <option value="10-30">10-30</option>
                        <option value="30-50">30-50</option>
                        <option value="50-100">50-100</option>
                        <option value="100+">100 o más</option>
                    </select>
                </div>
                <div class="selectBox select-xlarge">
                    <?php echo form_dropdown('talent_id', $datos->talents, 0, 'style="width:312px;" class="comboBox1"') ?>
                </div>
                <div class="clr"></div>
                <div class="sep-mus"></div>
                <div class="selectBox select-xlarge">
                    <?php echo form_dropdown('musical_gender_id', $datos->genders, 0, 'style="width:312px;"  class="comboBox1"') ?>
                </div>
                <div class="selectBox select-xlarge">
                    <select  style="width:312px;"   class="comboBox1" name="experience" >
                        <option selected="selected" value="Sin definir">Experiencia</option>
                        <option value="principiante">Principiante</option>
                        <option value="intermedio">Intermedio</option>
                        <option value="avanzado">Avanzado</option>                       
                    </select>
                </div>
                <input name="username" type="text" class="campo" placeholder="Usuario" style="margin-right: 4px;" />
                <div class="clr"></div>
                <div class="sep-mus"></div>

                <input name="email" type="email" class="campo" placeholder="Correo electrónico"  style="margin-right: 4px;"/>
                <input name="first_name" type="text" class="campo" placeholder="Nombre"  style="margin-right: 4px;"/>
                <input name="last_name" type="text" class="campo" placeholder="Apellido"  style="margin-right: 4px;"/>

                <input type="submit" class="bot-aceptar" value="Buscar" style="margin-right: 12px;"/>
            </div>

            <div class="clr"></div>
            <div class="sep-mus"></div>

        </div>
    </form>

    <div id="search-users-result">
        <div class="mensaje-tit">Resultados</div>

        <table style="width: 476px;">
            <tbody>
                <tr style="display:none;">
                    <td style="text-align:left;"><span class="name-user" style="float:none;">Ricardo Mollo</span></td>
                    <td style="text-align:right;">
                        <a id="avanzada-button1" style="/*background-image: url('../images/ver-mas.png');*/
                           background-position: right top;background-repeat: no-repeat;color: #666666;cursor: pointer;
                           font-size: 13px;height: 31px;margin-right: 10px;margin-top: -2px;padding-bottom: 10px;
                           padding-right: 38px;padding-top: 9px;text-transform: uppercase;width: 147px;color: #E82E7C;"
                           href="#">Ver más
                        </a>
                    </td>
                    <td style="text-align:right;"><a class="add-user" href="#">Agregar</a></td>
                </tr>
                <tr id="saber">
                    <td style="text-align:left;">P hola</td>
                    <td style="text-align:right;">2 hola</td>
                    <td style="text-align:right;">3 hola</td>
                </tr>
            </tbody>
        </table>

        <div id="non-results" style="display:none;">
            <small>No hay resultados para la búsqueda.</small>
        </div>

        <div id="error-result" style="display:none;">
            <small>Hubo un error en la búsqueda, por favor inténtalo de nuevo.</small>
        </div>
    </div>
</div>

<div id="lista-musicos-base" class="lista-musicos" style="display:none;">
    <div class="lista-musicos-tit">Músicos Seleccionados</div>
    <div class="musicos2 users">

        <div id="lista-musicos-user-base" class="musico2 user" style="display:none;">
            <div class="mus-sel2">
                <div class="m-nombre2 name-user"></div>
            </div>
            <div class="ver-mas-musico">
                <a class="url-user" href="#" target="_blank">Ver más</a>
            </div>
            <div data-action="eliminar-musico-lista-musicos" class="eliminar-musico">Eliminar</div>
        </div>
    </div>
</div>

<!-- Base del músico que va dentro de la lista -->
<div id="lista-musicos-user-base" class="musico2 user" style="display:none;">
    <div class="mus-sel2">
        <div class="m-nombre2 name-user"></div>
    </div>
    <div class="ver-mas-musico">
        <a class="url-user" href="#" target="_blank">Ver más</a>
    </div>
    <div data-action="eliminar-musico-lista-musicos" class="eliminar-musico">Eliminar</div>
</div>

<style>
    .jspHorizontalBar .jspTrack {
        margin-left: 16px;
        margin-right: 16px;
        width: 360px !important;
    }
    .jspHorizontalBar {
        width: 93% !important;
    }
    .jspHorizontalBar .jspDrag {
        margin-left: -14px !important;
    }
</style>

<script>
    $(function(){
        var $this = $(this), sText = $this.html();
        $('#avanzada-button').ready(function(){			
            $('#busqueda-avanzada').toggle().parents('form')[0].reset();
        });
        $('#avanzada-button1').click(function(){			
            $('#cambiotabla').toggle().parents('table')[0].reset();
        });
    });
</script>