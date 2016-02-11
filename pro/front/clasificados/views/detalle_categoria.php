<div class="categoria-tit"><?php echo $datos->clasificados_categoria->nombre ?></div>
<?php if ($datos->exists()) : ?>
    <div id="contenu5">
        <?php foreach ($datos as $dato) : ?>
            <a href="<?php echo sprintf($urls->clasificado_detalle, $dato->id, $dato->var) ?>"><div class="resultado">
                    <div class="audicion-info">
                        <div class="resultado-tit"><?php echo $dato->titulo ?></div>
                        <div class="audicion-datos">

                            <div class="audicion-lugar">Ciudad </br><b><?php echo $dato->ciudad ?></b></div>
                            <div class="audicion-fecha1">Fecha de inicio </br><b><?php echo fecha_spanish_full_short($dato->created_on) ?></b></div>
                            <div class="audicion-fecha2">Fecha de cierre </br><b><?php echo fecha_spanish_full_short($dato->fecha_cierre) ?></b></div>
                        </div>
                        <div class="clear"></div>
                    </div>

                    <div class="clr"></div>
                    <div class="resultado-desc2"><b><?php echo $dato->introduccion ?></div>


                    <a href="<?php echo sprintf($urls->clasificado_detalle, $dato->id, $dato->var) ?>"><div class="ver-mas">Ver más</div></a>
                   <div style="margin-top:2em;">
                         <div class="fb-like" data-href="<?php echo sprintf($urls->clasificado_detalle, $dato->id, $dato->var) ?>" data-send="false" data-layout="button_count" data-width="100" data-show-faces="false"></div>
                    </div>
                    <div class="clr"></div>
                </div></a>
        <?php endforeach; ?>
    </div>

    <?php if ($datos->paged->total_pages > 1) : ?>
        <!-- Paginador -->
        <div class="paginador">
            <?php if ($datos->paged->has_previous) : ?>
                <a href="<?php echo sprintf($paginator_url , $datos->paged->previous_page) ?>"><div class="pag-prev"></div></a>
            <?php endif; ?>

            <div class="numeros">
                <?php for ($i = 1, $total_pages = $datos->paged->total_pages; $i <= $total_pages; $i++) : ?>
                    <div class="<?php echo $i == $datos->paged->current_page ? 'numero-act' : 'numero' ?>">
                        <a href="<?php echo $i != $datos->paged->current_page ? sprintf($paginator_url , $i) : 'javascript:;' ?>">
                            <?php echo $i ?>
                        </a>
                    </div>
                <?php endfor; ?>
            </div>

            <?php if ($datos->paged->has_next) : ?>
                <a href="<?php echo sprintf($paginator_url , $datos->paged->next_page) ?>"><div class="pag-next"></div></a>
            <?php endif; ?>
        </div>
        <!-- // Paginador -->
    <?php endif; ?>

<?php else: ?>
    <h4>No hay ningún clasificado creado.</h4>
<?php endif; ?>