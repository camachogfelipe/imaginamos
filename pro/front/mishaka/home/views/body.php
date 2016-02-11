<style>
    #scroll1 {
        height: 234px;
        overflow: auto;
    }
    #scroll2 {
        height: 234px;
        overflow: auto;
    }
</style>

<div class="bgEncabezado">
    <div class="conEncabezado">
        <div id="txEncabezado" style="padding: 16px 0;">
            <span class="pEncabezado">Inshaka Music: <span class="pEncabezadoN">Amplifica tu Sonido</span></span>
        </div>
    </div>
</div>

<div class="conDestacados">
    <div class="conDestacadoIzq">

        <div class="conImgDestacados">
            <div class="imgDestacado"><img src="images/destacadoIzq.jpg" alt="" /></div>
            <div class="labelDestacado"><a href="#"><img src="images/labelDestacados.png" alt="" /></a></div>
        </div>

        <div class="titColumnas">
            <span class="titDestacados">AUDICIONES</span><br>
            <span class="subDestacados">Conecta tu sonido</span>
        </div>
        <?php if ($audiciones->exists()) : ?>
            <div id="scroll1">
                <?php foreach ($audiciones as $audicion) : ?>
                    <div class="txLista">
                        <a href="<?php echo sprintf($urls->audicion_detalle, $audicion->id, $audicion->var) ?>"><span class="tLista"><?php echo $audicion->titulo ?></span></a><br>
                        <span class="pLista"><?php echo $audicion->introduccion ?></span>
                    </div>
                <?php endforeach; ?>

            </div>

            <div class="conBtMas">
                <div id="txBtMas"><a href="<?php echo site_url('audiciones') ?>"><span class="verMas">Ver Más</span></a></div>
                <a href="<?php echo site_url('audiciones') ?>"><div id="imgBtMas"></div></a>
            </div>
        <?php endif; ?>

    </div>
    <div class="conDestacadoCen">

        <div class="conImgDestacados">
            <div class="imgDestacado"><img src="images/destacadoCen.jpg" alt="" /></div>
            <div class="labelDestacado"><a href="#"><img src="images/labelDestacados.png" alt="" /></a></div>
        </div>

        <div class="titColumnas">
            <span class="titDestacados">ULTIMAS NOTICIAS</span><br>
            <span class="subDestacados">Vibraciones Inshaka</span>
        </div>
        <?php if ($news->exists()) : ?>
            <div id="scroll2">
                <?php foreach ($news->all as $new) : ?>
                    <div class="txLista">
                        <span class="tLista"><?php echo $new->title ?></span><br>
                        <span class="sLista"><?php echo fecha_spanish_full_short($new->created_on); ?></span><br>
                        <span class="pLista"><?php echo strip_tags($new->content) ?></span>
                    </div>

                <?php endforeach; ?>

            </div>
        <?php endif; ?>

        <div class="conBtMas">
            <div id="txBtMas"><a href="<?php echo site_url('noticias') ?>"><span class="verMas">Ver más</span></a></div>
            <a href="<?php echo site_url('noticias') ?>"><div id="imgBtMas"></div></a>
        </div>

    </div>
    <div class="conDestacadoDer">

        <div class="titColumnas">
            <span class="titDestacados">COMUNIDAD</span><br>
            <span class="subDestacados">Red inshaka</span>
        </div>

        <div class="tabs">
            <h2>CLASIFICADOS</h2>
            <?php if (true): ?>


                <div class="tabbody">  
                    <?php foreach ($clasificados->all as $clasificado): ?>
                        <a href="<?php echo sprintf($urls->clasificado_detalle, $clasificado->id, $clasificado->var) ?>">
                            <div class="tabInfo">
                                <div class="imgTabClasificado" style="background: none;">
                                    <img src="<?php echo!empty($clasificado->imagen) ? uploads_url($clasificado->imagen) : front_asset('images/iconClasificado.png') ?>" alt="Imagen del clasificado: <?php echo $clasificado->titulo ?>" width="45" />

                                </div>
                                <span class="clasificado"><?php echo $clasificado->titulo ?></span><br>
                                <span class="fechaClasificado">Creado el <?php echo fecha_spanish_full_short($clasificado->created_on) ?></span>
                            </div>
                        </a>
                    <?php endforeach; ?>

                </div>
            <?php endif; ?>
            <h2>TWEETS</h2>
                <div id="tweets" class="tabbody" >
                    <script>
                        Modernizr.load(
                        {
                            load: <?php echo json_encode(array(front_asset('tweet/jquery.tweet.css'), front_asset('tweet/jquery.tweet.js'))) ?>,
                            complete: function() {
								
                                $("#tweets").empty().tweet({
                                    username: "inshaka",
                                    wjoin_text: "auto",
                                    avatar_size: 32,
                                    count: 10,
                                    loading_text: "Cargando tweets...",
                                    auto_join_text_default: ", "
                                });
                            }
                        }
                    );
                    </script>
                </div>
        </div>
        <div class="clear"></div>
    </div>
    <div class="clear"></div>
</div>
<div class="clear"></div>