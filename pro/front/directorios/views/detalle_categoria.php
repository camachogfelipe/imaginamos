<div class="bgEncabezado">
    <div class="conEncabezado">
        <div id="txSeccion">
            <div class="encabezado-tit"><?php echo $datos->name ?></div>
            <div class="encabezado-subtit"><?php echo $datos->description ?></div>
        </div>
    </div>
</div>

<div class="contenido">

    <div id="contenu5">
        <?php if ($datos->anuncios->exists()) : ?>
            <?php foreach ($datos->anuncios as $directorio) : ?>
                <div class="resultado">
                    <a href="<?php echo sprintf($urls->directorio_detalle, $directorio->code, seo_name($directorio->empresa)) ?>">
                        <?php if (!empty($directorio->logo)) : ?>
                            <div class="logo-anuncio" style="float:left;">
                                <img src="<?php echo uploads_url($directorio->logo) ?>" alt="Logo de anuncio: <?php echo $directorio->empresa ?>" /> 
                            </div>
                        <?php else: ?>
                            <div class="resultado-ico"></div>
                        <?php endif; ?>
                    </a>
                    <a href="<?php echo sprintf($urls->directorio_detalle, $directorio->code, seo_name($directorio->empresa)) ?>">
                        <div class="resultado-nom">
                            <div class="resultado-empresa"><?php echo $directorio->empresa ?></div>
                            <div class="resultado-calle"><?php echo $directorio->direccion ?></div>
                            <div class="resultado-tel">Tel. <?php echo $directorio->telefono ?></div>
                        </div>
                    </a>
                    <div class="resultado-desc"><?php echo $directorio->descripcion ?></div>

                    <div class="opciones-ico">
                        <div class="ver-mas"><a href="<?php echo sprintf($urls->directorio_detalle, $directorio->code, seo_name($directorio->empresa)) ?>">Ver más</a></div>

                    </div>

                    <div class="resultado-redes" style="display:none;">
                        <div class="resultado-red"><img src="images/logo-face.png" /></div>
                        <div class="resultado-red"><img src="images/logo-twit.png" /></div>
                        <div class="resultado-red"><img src="images/logo-you.png" /></div>
                    </div>
                    <div class="clr"></div>
                </div>
            <?php endforeach; ?>
        <?php else: ?>
            <h4>No hay ningún anuncio disponible para esta categoria, regrese al <a href="<?php echo site_url('directorio') ?>">directorio para seguir navegando.</a></h4>
        <?php endif; ?>
    </div>

    <?php if ($datos->anuncios->exists() && $datos->anuncios->paged->total_rows > 10) : ?>
        <!-- Paginador -->
        <div class="paginador">
            <?php if ($datos->anuncios->paged->has_previous) : ?>
                <a href="<?php echo site_url(array('directorio', 'categoria', 'index', $datos->var,  $datos->anuncios->paged->previous_page )) ?>"><div class="pag-prev"></div></a>
            <?php endif; ?>

            <div class="numeros">
                <?php for ($i = 1, $total_pages = $datos->anuncios->paged->total_pages; $i <= $total_pages; $i++) : ?>
                    <a href="<?php echo site_url(array('directorio', 'categoria', 'index', $datos->var,  $i )) ?>"><div class="numero"><?php echo $i ?></div></a>
                <?php endfor; ?>
            </div>

            <?php if ($datos->anuncios->paged->has_next) : ?>
                <a href="<?php echo site_url(array('directorio', 'categoria', 'index', $datos->var,  $datos->anuncios->paged->next_page )) ?>"><div class="pag-next"></div></a>
            <?php endif; ?>
        </div>
        <!-- // Paginador -->
    <?php endif; ?>

    <div class="clr"></div>
</div>
