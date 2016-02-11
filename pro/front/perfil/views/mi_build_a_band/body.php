<script src="js/mi-build-a-band.js"></script>
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
    .c2{
        color:#333 !important;	
    }
    input[type="checkbox"] + label {
        background: url("images/fondo-check.png") no-repeat scroll 0 0 transparent;
        height: 14px;
        margin-top: -14px;
        padding-left: 26px;
        padding-top: 3px;
    }
    input[type="checkbox"] {
        cursor: pointer;
        left: 0;
        margin-bottom: -10px;
        margin-right: 20px;
        opacity: 0.01;
    }
    .ver-mas{
        margin-top:0;
    }
    .bot-buscar {
        float:right;
        margin-top:30px;
        margin-bottom:50px;
    }
    .m-nombre {

        padding-left: 0;
    }
    .integrantes-modal, .musicos{
        width:1000px;
        display:block;
    }
    .musicos{
        width:980px;
    }
</style>

<div class="contenido">

    <div class="mi-clasificado-cont">
        <ul class="tabs">
            <li class="t6"><a href="#">Mis Bandas</a></li>
            <li class="t8"><a href="<?php echo site_url('build-a-band/crear-banda') ?>">Crear Banda</a></li>
        </ul>
    </div>

    <div class="clear"></div>
    <div class="tab_container">

        <div id="tab1" class="tab_content">
            <?php if ($datos->exists()) : ?>

                <div class="resultados"></div>
                <div id="contenu3">

                    <?php foreach ($datos as $dato) : ?>

                        <div class="bandas">
                            <div class="banda-nom"><a href="<?php echo site_url(array('build-a-band', 'editar', $dato->id, $dato->var)) ?>"><?php echo $dato->name ?></a></div>

                            <div class="opciones-ico">
                                <div class="borrar"><a href="<?php echo site_url('perfil/build-a-band/eliminar/' . $dato->id) ?>" onclick="return confirm('¿Está seguro de eliminar la banda?');">Borrar</a></div>
                                <a href="<?php echo site_url(array('build-a-band', 'editar', $dato->id, $dato->var)) ?>"><div class="editar">Editar</div></a>
                                <a href="#integrantes-<?php echo $dato->var ?>" class="fancybox-modal"><div class="miembros">Integrantes</div></a>
                            </div>

                            <div class="integrantes-modal" id="integrantes-<?php echo $dato->var ?>" style="display:none;">
                                <div class="musicos-cont">
                                    <div class="mensaje-tit">Banda <?php echo $dato->name ?>  -  Integrantes</div>

                                    <div class="musicos">
                                        <?php if ($dato->bands_instrument->bands_instruments_user->exists()) : ?>
                                            <?php foreach ($dato->bands_instrument->bands_instruments_user as $member) : ?>
                                                <div class="musico">
                                                    <div class="estado-ico">
                                                        <?php if ($member->is_invited) : ?>
                                                            <img src="images/ico-reloj.png" />
                                                        <?php else : ?>
                                                            <?php if ($member->invitation_accepted) : ?>
                                                                <img src="images/ico-aceptar.png" />
                                                            <?php else : ?>
                                                                <img src="images/ico-rechazar.png" />
                                                            <?php endif; ?>
                                                        <?php endif; ?>
                                                    </div>
                                                    <div class="mus-sel">
                                                        <label for="check_01" class="m-nombre"><?php echo $member->user->first_name, ' ', $member->user->last_name ?></label>
                                                    </div>
                                                    <div class="m-dato"><b><?php echo calculate_years_old($member->user->birthday) ?></b></div>
                                                    <div class="m-dato"><?php echo!empty($member->user->gender) ? $member->user->gender : 'Sin definir' ?></div>
                                                    <div class="m-dato"><?php echo $member->city ?></div>

                                                    <?php $user_instruments_on_band = $member->user->get_instruments_on_band($dato->id); ?>

                                                    <?php if ($user_instruments_on_band->exists()) : ?>
                                                        <div class="m-exp">
                                                            <?php 
                                                            $count = 1;
                                                            foreach ($user_instruments_on_band as $instrument_user) : 
                                                                ?>
                                                                <b><?php echo $instrument_user->bands_instrument->instrument->name, $count < $user_instruments_on_band->result_count() ? ',' : null ?></b>
                                                            <?php 
                                                            $count++;
                                                            endforeach; 
                                                            ?>
                                                        </div>

                                                    <?php endif; ?>


                                                    <a href="<?php echo site_url('perfil/' . $member->user->inshaka_url) ?>"><div class="ver-mas">Ver más</div></a>
                                                </div>
                                            <?php endforeach; ?>
                                        <?php else: ?>
                                            <strong>Sin integrantes</strong>
                                        <?php endif; ?>

                                    </div>

                                </div>
                            </div>

                            <div class="clr"></div>
                        </div>

                    <?php endforeach; ?>

                </div>

            <?php else: ?>

                <div><p>No tienes ninguna banda creada. Crea el primero dando <a href="<?php echo site_url('build-a-band/crear-banda') ?>">click acá.</a></p></div>

            <?php endif; ?>

            <div class="clr"></div>
        </div>


    </div>

</div>