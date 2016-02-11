

<div class="buscador">
    <div class="letras">
        <?php foreach (range('A', 'Z') as $letter) : ?>
            <a href="<?php echo site_url('directorio/a_z/' . $letter) ?>">
                <?php echo $letter ?>
            </a>
        <?php endforeach; ?>
    </div>

</div>
<div class="clr"></div>
<div class="resultados"><b><?php echo $datos->result_count() ?></b> Resultados encontrados para la letra <b><?php echo $letter_active ?></b></div>

<?php if ($datos->exists()) : ?>
    <div id="contenu4">
        <?php foreach ($datos as $directorio) : ?>
            <a href="detalle-directorio.php" target="_blank">
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
            </a>
        <?php endforeach; ?>
    </div>
<?php endif; ?>
<?php if ($datos->exists() && $datos->paged->total_rows > 10) : ?>
    <!-- Paginador -->
    <div class="paginador">
        <?php if ($datos->paged->has_previous) : ?>
            <a href="<?php echo site_url(array('directorio', 'a_z', $letter_active, $datos->paged->previous_page)) ?>"><div class="pag-prev"></div></a>
        <?php endif; ?>

        <div class="numeros">
            <?php for ($i = 1, $total_pages = $datos->paged->total_pages; $i <= $total_pages; $i++) : ?>
                <a href="<?php echo site_url(array('directorio', 'a_z',  $letter_active, $i)) ?>"><div class="numero"><?php echo $i ?></div></a>
            <?php endfor; ?>
        </div>

        <?php if ($datos->paged->has_next) : ?>
            <a href="<?php echo site_url(array('directorio', 'a_z',  $letter_active, $datos->paged->next_page)) ?>"><div class="pag-next"></div></a>
        <?php endif; ?>
    </div>
    <!-- // Paginador -->
<?php endif; ?>

<div class="clr"></div>
