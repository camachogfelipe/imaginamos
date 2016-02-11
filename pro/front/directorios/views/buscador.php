<div class="selectores-buscador">
    <form action="<?php echo current_url() ?>" method="get" accept-charset="utf8" style="margin-top:30px;" class="busc-big">
        	<input name="s" class="campo-custom" type="text" value="<?php echo $this->input->get('s') ?>" placeholder="Ingrese su búsqueda. Ej: Actividad, Marca, Empresa"  style="float:left;">
        	<input class="bot-buscar" type="submit" value="buscar" style="float:left;margin-left: 8px;">
        <div class="clr"></div>
</div>
<div class="resultados"></div>
<?php if ($datos->exists()) : ?>
    <div id="contenu3">
        <?php foreach ($datos as $directorio) : ?>
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
                
                <div class="clr"></div>
            </div>
        <?php endforeach; ?>
    </div>

    <?php if ($datos->paged->total_pages > 10) : ?>
        <!-- Paginador -->
        <div class="paginador">
            <?php if ($datos->paged->has_previous) : ?>
                <a href="<?php echo site_url('directorio/buscador/'.$datos->paged->previous_page.'?s=' . $this->input->get('s')) ?>"><div class="pag-prev"></div></a>
            <?php endif; ?>

            <div class="numeros">
                <?php for ($i = 1, $total_pages = $datos->paged->total_pages; $i <= $total_pages; $i++) : ?>
                <a href="<?php echo site_url('directorio/buscador/'.$i.'?s=' . $this->input->get('s')) ?>"><div class="numero"><?php echo $i ?></div></a>
                <?php endfor; ?>
            </div>

            <?php if ($datos->paged->has_next) : ?>
                <a href="<?php echo site_url('directorio/buscador/'.$datos->paged->next_page.'?s=' . $this->input->get('s')) ?>"><div class="pag-next"></div></a>
            <?php endif; ?>
        </div>
        <!-- // Paginador -->
    <?php endif; ?>

<?php else: ?>
    <h4 class="no-result">No hay ningún directorio creado.</h4>
<?php endif; ?>


<div class="clr"></div>
</div>