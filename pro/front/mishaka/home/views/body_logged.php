<style scope="scope">


    .musicos-cont{
        margin-left: 4px;
        margin-top: 20px;
    }

    .mensaje-tit{
        color: #E82E7C;
        font-family: 'BebasNeueRegular';
        font-size: 36px;
        margin-bottom: 21px;
        text-align: center;
    }
    ul{
        list-style:none;
        font-family:Arial, Helvetica, sans-serif;
        font-size:16px;
        color:#585858;
    }
    li{
        cursor: pointer;
        margin-bottom: 21px;
    }
    input[type="checkbox"] + label {
        height: 13px;
        padding-left: 26px;
        padding-top: 0;
    }
    .musicos{
        margin: 0 auto;
        width: 320px;
    }
    .bot-buscar {

        float: right;

        margin-bottom: 60px;

    }
    .info-banda{
        margin: 0 auto;
        width: 420px;
    }
    .dato-banda{
        color: #505050;
        font-family: 'BebasNeueRegular';
        font-size: 28px;
    }
    .dato-banda b{
        color: #E82E7C;
    }
    .pregunta{
        color: #505050;
        font-family: 'BebasNeueRegular';
        font-size: 20px;
        margin-bottom: 20px;
        margin-top: 20px;
        text-align: center;
    }
    .bots{
        margin: 0 auto;
        padding-left: 49px;
        width: 300px;
    }
    .bot-registro{
        float: left;
        margin-right: 50px;
        padding-left: 0;
        text-align: center;
        width: 98px;
    }

</style>


<div class="bgEncabezado">
    <div class="conEncabezado">
        <div id="txEncabezado" style="padding: 16px 0;">
            <span class="pEncabezado">Inshaka Music: <span class="pEncabezadoN">Amplifica tu Sonido</span></span>
        </div>
    </div>
</div>

<div class="conDestacados2">

    <div class="conDestacadoCen">

        <div class="conImgDestacados">
            <div class="imgDestacado"><img src="images/destacadoBanda.jpg" alt="" /></div>
            <div class="labelDestacado"><a href="<?php echo site_url('perfil/build-a-band') ?>"><img src="images/labelDestacados.png" alt="" /></a></div>
        </div>

        <div class="titColumnas">
            <span class="titDestacados">Mis bandas</span><br>
            <span class="subDestacados">Vibrando con</span>
        </div>

        <?php if ($mis_bandas->exists()): ?>
            <div style="overflow:auto;max-height:260px;">
                <?php foreach ($mis_bandas as $banda): ?>
                    <div class="txLista">
                        <a href="#invitation<?php echo $banda->bands_instrument->band->id ?>" class="invitation-modal"><span class="tLista"><?php echo $banda->bands_instrument->band->name ?></span></a><br>
                        <span class="pLista">&nbsp;</span>

						
            
                        
                        <div id="invitation<?php echo $banda->bands_instrument->band->id ?>" style="display:none;">
                            <div class="musicos-cont">
                                <div class="mensaje-tit">Invitación a Banda</div>
                                <div class="info-banda">
                                    <div class="dato-banda">Nombre de la banda: <b><?php echo $banda->bands_instrument->band->name ?></b></div>
                                    <div class="dato-banda">Ciudad: <b><?php echo $banda->bands_instrument->band->city ?></b></div>
                                    <div class="dato-banda">Género: <b><?php echo $banda->bands_instrument->band->musical_gender->name ?></b></div>
                                    <div class="dato-banda">Integrantes: <b><?php echo $banda->bands_instrument->band->bands_instrument->bands_instruments_user->count() ?></b></div>
                                </div>
                                <div class="pregunta">¿Quieres formar parte de esta banda?</div>
                                <div class="bots">
                                    <a href="<?php echo site_url(array('build-a-band', 'accept-invitation', $banda->invitation_code)) ?>" class="bot-registro">Aceptar</a>
                                    <a href="<?php echo site_url(array('build-a-band', 'decline-invitation', $banda->invitation_code)) ?>" class="bot-registro">Rechazar</a>
                                    <div class="clear"></div>
                                </div>
                            </div>
                        </div>

                    </div>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>



        <div class="conBtMas">
            <div id="txBtMas"><a href="<?php echo site_url('perfil/build-a-band') ?>"><span class="verMas">Ver Más</span></a></div>
            <a href="<?php echo site_url('perfil/build-a-band') ?>"><div id="imgBtMas"></div></a>
        </div>

    </div>
    <div class="conDestacadoIzq">

        <div class="conImgDestacados">
            <div class="imgDestacado"><img src="images/destacadoIzq.jpg" alt="" /></div>
            <div class="labelDestacado"><a href="#"><img src="images/labelDestacados.png" alt="" /></a></div>
        </div>

        <div class="titColumnas">
            <span class="titDestacados">AUDICIONES</span><br>
            <span class="subDestacados">Conecta tu sonido</span>
        </div>

        <?php if ($audiciones->exists()): ?>
            <div style="overflow:auto;max-height:260px;">
                <?php foreach ($audiciones as $audicion): ?>
                    <div class="txLista">
                        <div class="audicion-ico">
                            <img src="images/audicion-ico.png">
                        </div>
                        <div class="mini-audi">
                            <a href="<?php echo sprintf($urls->audicion_detalle, $audicion->id, $audicion->var) ?>"><span class="tLista"><?php echo $audicion->titulo ?></span></a><br>
                            <span class="pLista"><?php echo $audicion->introduccion ?></span>
                        </div>
                        <div class="clear"></div>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>


        <div class="clear"></div>

        <div class="conBtMas">
            <div id="txBtMas"><a href="<?php echo site_url('perfil/audiciones') ?>"><span class="verMas">Ver Más</span></a></div>
            <a href="<?php echo site_url('perfil/audiciones') ?>"><div id="imgBtMas"></div></a>
        </div>

    </div>
    <div class="conDestacadoDer">

        <div class="titColumnas">
            <span class="titDestacados">CLASIFICADOS</span><br>
            <span class="subDestacados">Clasificados según tus gustos</span>
        </div>

        <div class="tabs">
            <h2>CATEGORIAS</h2>
            <div class="tabbody">              

                <?php if ($clasificados_categoria->exists()) : ?>
                    <?php foreach ($clasificados_categoria as $clasificado_categoria) : ?>
                        <a href="<?php echo site_url(array('clasificados', 'categoria', $clasificado_categoria->var)) ?>"> 
                            <div class="tabInfo">
                                <div class="imgTabClasificado1"></div>
                                <div class="clasificado-list-tit"><?php echo $clasificado_categoria->nombre ?></div><br>
                            </div>
                        </a>
                    <?php endforeach; ?>
                <?php endif; ?>

            </div>
            <h2>SUGERENCIAS</h2>
            <div class="tabbody">              

                <?php if ($clasificados->exists()) : ?>
                    <div style="overflow:auto;max-height:260px;">
                        <?php foreach ($clasificados as $clasificado) : ?>
                            <div class="tabInfo">
                                <div class="imgTabClasificado" style="background: url(<?php echo uploads_url($clasificado->imagen)?>);"></div>
                                <span class="clasificado"><?php echo $clasificado->titulo ?></span><br>
                                <span class="fechaClasificado"><?php echo fecha_spanish_full_short($clasificado->created_on) ?></span>
                            </div>
                        <?php endforeach; ?>
                    </div>
                <?php endif; ?>


            </div>
        </div>
    </div>
    <div class="clr"></div>
</div>

<div class="clr"></div>

<div class="conDestacados2">

    <div class="conDestacadoCen">

        <div class="conImgDestacados">
            <div class="imgDestacado"><img src="images/destacadoCen.jpg" alt="" /></div>
            <div class="labelDestacado"><a href="#"><img src="images/labelDestacados.png" alt="" /></a></div>
        </div>

        <div class="titColumnas">
            <span class="titDestacados">ULTIMAS NOTICIAS</span><br>
            <span class="subDestacados">Vibraciones Inshaka</span>
        </div>

        <?php if ($news->exists()): ?>
            <div style="overflow:auto;max-height:260px;">
                <?php foreach ($news->all as $new) : ?>
                    <div class="txLista">
                        <span class="tLista"><?php echo $new->title ?></span><br>
                        <span class="sLista"><?php echo fecha_spanish_full_short($new->created_on); ?></span><br>
                        <span class="pLista"><?php echo strip_tags($new->content) ?></span>
                    </div>
                    <div class="txLista">
                        <span class="tLista"><?php echo $new->title ?></span><br>
                        <span class="sLista"><?php echo fecha_spanish_full_short($new->created_on); ?></span><br>
                        <span class="pLista"><?php echo strip_tags($new->content) ?></span>
                    </div>

                <?php endforeach; ?>
            </div>
        <?php endif; ?>


        <div class="conBtMas">
            <div id="txBtMas"><a href="<?php echo site_url('noticias') ?>"><span class="verMas">Ver Más</span></a></div>
            <a href="<?php echo site_url('noticias') ?>"><div id="imgBtMas"></div></a>
        </div>

    </div>
    <div class="conDestacadoDer" style="margin-left:0;">

        <div class="titColumnas">
            <span class="titDestacados">COMUNIDAD</span><br>
            <span class="subDestacados">Red inshaka</span>
        </div>

            <div id="tweets">

                <script>
                    Modernizr.load(
                    {
                        load: <?php echo json_encode(array(front_asset('tweet/jquery.tweet.css'), front_asset('tweet/jquery.tweet.js'))) ?>,
                        complete: function() {
                            $("#tweets").empty().tweet({
                                username: "inshaka",
                                join_text: "auto",
                                avatar_size: 32,
                                count: 4,
                                loading_text: "Cargando tweets...",
                                auto_join_text_default: ", ",
                            });
                        }
                    }
                );
                </script>
            </div>

        <div class="clr"></div>
    </div>
    <div class="conDestacadoIz">

        <div class="conImgDestacados">
            <div class="imgDestacado"><img src="images/destacadoDirect.jpg" alt="" /></div>
            <div class="labelDestacado"><a href="#"><img src="images/labelDestacados.png" alt="" /></a></div>
        </div>

        <div class="titColumnas">
            <span class="titDestacados">Directorio</span><br>
            <span class="subDestacados">Guía del Músico</span>
        </div>

        <?php if ($directorio->exists()): ?>
            <div style="overflow:auto;max-height:260px;">
                <?php foreach ($directorio as $d): ?>
                    <div class="txLista">
                        <a href="<?php echo sprintf($urls->directorio_detalle, $d->code, seo_name($d->empresa)) ?>"><span class="tLista"><?php echo $d->empresa ?></span></a><br>
                        <span class="sLista"><?php echo fecha_spanish_full_short($d->updated_on) ?></span><br>
                        <span class="pLista"><?php echo character_limiter($d->descripcion, 100) ?></span>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>


        <div class="conBtMas">
            <div id="txBtMas"><a href="<?php echo site_url('perfil/directorios') ?>"><span class="verMas">Ver Más</span></a></div>
            <a href="<?php echo site_url('perfil/directorios') ?>"><div id="imgBtMas"></div></a>
        </div>

    </div>
    <div class="clr"></div>
</div>
<div class="clr"></div>

<script>
    $(function(){
        $('.invitation-modal').fancybox(); 
    });
</script>