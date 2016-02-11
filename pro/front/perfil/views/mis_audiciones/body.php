
<script type="text/javascript">
    $(document).ready(function() {
        $(".comboBox1").msDropDown().data("dd");


        $("#contenu3").scrollbar(430);
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
    .c3{
        color:#333 !important;	
    }
    .t4{
        display:none !important;		
    }
    .t4-active{
        display:none !important;	
    }
    #contenu3 {
        margin-bottom: 40px;
        width: 990px !important;
        margin-top: 40px;
    }
    #contenu3 #englobe {
        width: 970px !important;
    }
    .nuevas-audiciones {
        margin-top: 0;

    }
</style>


<div class="contenido" id="page-mis-audiciones">
    <div class="mis-audiciones-cont">
        <ul class="tabs">
            <li class="t1 active"><a href="#">Mis Audiciones</a></li>
            <li class="t2"><a href="<?php echo site_url('audiciones/crear') ?>">Crear</a></li>
        </ul>
    </div>

    <div class="clear"></div>
    <div class="tab_container">
        <div id="tab1" class="tab_content">

            <?php if ($datos->exists()) : ?>
                <div class="ordena-lista">
                    <div class="ordena-lista-tit">Ordenar resultados por:</div>
                    <div class="ordena-lista-filtro"><a href="?order=numero_aplicaciones&type=<?php echo $this->input->get('order') == 'numero_aplicaciones' ? ($this->input->get('type') == 'asc' ? 'desc' : 'asc') : 'asc' ?>">No. Aplicaciones</a></div>
                    <div class="ordena-lista-filtro"><a href="?order=ciudad&type=<?php  echo $this->input->get('order') == 'ciudad' ? ($this->input->get('type') == 'asc' ? 'desc' : 'asc') : 'asc' ?>">Ciudad</a></div>
                    <div class="ordena-lista-filtro"><a href="?order=fecha_inicio&type=<?php echo $this->input->get('order') == 'fecha_inicio' ? ($this->input->get('type') == 'asc' ? 'desc' : 'asc') : 'asc' ?>">Fecha de inicio</a></div>
                    <div class="ordena-lista-filtro" style="margin-right:0;"><a href="?order=fecha_cierre&type=<?php echo $this->input->get('order') == 'fecha_cierre' ? ($this->input->get('type') == 'asc' ? 'desc' : 'asc') : 'asc' ?>">Fecha de cierre</a></div>
                    <div class="clear"></div>
                </div>
                <div class="clear"></div>
                <div class="nuevas-audiciones">
                    <div id="contenu3">
                        <?php foreach ($datos as $dato) : ?>
                            <div class="audicion">
                                <div class="audicion-info">
                                    <div class="audicion-ico"><a href="<?php echo sprintf($urls->audicion_detalle, $dato->id, $dato->var) ?>"><img src="<?php echo uploads_url($dato->imagen) ?>" width="41" /></a></div>
                                    <div class="audicion-tit"><a href="<?php echo sprintf($urls->audicion_detalle, $dato->id, $dato->var) ?>"><?php echo $dato->titulo ?></a>
                                        <div class="audicion-post">Creado el <?php echo fecha_spanish_full($dato->created_on) ?></div>
                                    </div>
                                    <div class="audicion-datos">
                                        <div class="num-cupos">No. Aplicaciones
                                            <b>
                                                <?php if ($dato->total_aplicaciones <= $dato->numero_aplicaciones) : ?>
                                                    <?php echo $dato->audiciones_aplicacion->count() ?>/<?php echo $dato->numero_aplicaciones ?>
                                                <?php else: ?>
                                                    Sin cupo
                                                <?php endif; ?>
                                            </b>
                                        </div>
                                        <div class="audicion-lugar">Ciudad </br><b><?php echo $dato->ciudad ?></b></div>
                                        <div class="audicion-fecha1">Fecha de inicio </br><b><?php echo fecha_spanish_full_short($dato->fecha_inicio) ?></b></div>
                                        <div class="audicion-fecha2">Fecha de cierre </br><b><?php echo fecha_spanish_full_short($dato->fecha_cierre) ?></b></div>
                                    </div>
                                </div>
                                <div class="clr"></div>
                                <p style="margin-top:2em;"><em style="opacity:.9;"><?php echo $dato->introduccion ?></em></p>
                                <div class="audicion-txt"><?php echo $dato->intruduccion ?></div>
                                <div class="opciones-ico">
                                    <div class="ver-mas"><a href="<?php echo sprintf($urls->audicion_detalle, $dato->id, $dato->var) ?>">Ver más</a></div>
                                    <a href="<?php echo site_url('perfil/audiciones/eliminar/'.$dato->id) ?>" onclick="return confirm('¿Está seguro de eliminar la audición?')"><div class="borrar">Borrar</div></a>
                                    <a href="<?php echo site_url('audiciones/editar/'.$dato->id) ?>"><div class="editar">Editar</div></a>
                                </div>
                                <div class="clr"></div>
                            </div>
                        <?php endforeach; ?>

                    </div>
                </div>
                <?php if ($datos->paged->total_pages > 1) : ?>
                    <!-- Paginador -->
                    <div class="paginador">
                        <?php if ($datos->paged->has_previous) : ?>
                            <a href="<?php echo sprintf($paginator_url, $datos->paged->previous_page) ?>"><div class="pag-prev"></div></a>
                        <?php endif; ?>

                        <div class="numeros">
                            <?php for ($i = 1, $total_pages = $datos->paged->total_pages; $i <= $total_pages; $i++) : ?>
                                <div class="<?php echo $i == $datos->paged->current_page ? 'numero-act' : 'numero' ?>">
                                    <a href="<?php echo $i != $datos->paged->current_page ? sprintf($paginator_url, $i) : 'javascript:;' ?>">
                                        <?php echo $i ?>
                                    </a>
                                </div>
                            <?php endfor; ?>
                        </div>

                        <?php if ($datos->paged->has_next) : ?>
                            <a href="<?php echo sprintf($paginator_url, $datos->paged->next_page) ?>"><div class="pag-next"></div></a>
                        <?php endif; ?>
                    </div>
                    <!-- // Paginador -->
                <?php endif; ?>

            <?php endif; ?>

            <div class="clr"></div>
        </div>



        <div class="clr"></div>
    </div>
    <div class="clr"></div>
</div>