<style>
.comboBox1{
	width:160px !important;
}
</style>
<div class="bgEncabezado">
    <div class="conEncabezado">
        <div id="txSeccion">
            <div class="encabezado-tit">Buscar usuarios</div>
            <div class="encabezado-subtit">Encuentra artistas que amplifiquen tu sonido</div>
        </div>
    </div>
</div>

<div class="contenido">

    <div class="tab_container">

        <div class="sebusca-cont">

            <div class="sebusca-selectores">
                <form action="<?php echo site_url('mishaka/buscar') ?>">

                    <div class="clear"></div>
                    <div class="sebusca2">
                        <div class="band-ico2">1</div>
                        <div class="band-tit">Seleccione de los siguientes criterios la opción adecuada para iniciar su búsqueda</div>
                        <div class="campo-reg-lab" style="width: 165px;">
                        	<label style="padding-left: 4px;">Ciudad</label>
                            <div class="selectBox">
                                <input name="city" id="city" class="campo2" placeholder="Ciudad"/>
                                <div class="clr"></div>
                            </div>
                        </div>
                        
                        <div class="campo-reg-lab" style="width: 165px;">
                        	<label style="padding-left: 4px;">Edad</label>
                            <div class="selectBox">
                                <?php echo form_dropdown('edad', $options['rangos_edades'], $this->input->get('edad'), 'style="width:156px;" class="comboBox1"') ?>
                                <div class="clr"></div>
                            </div>
                        </div>
                        
                        <div class="campo-reg-lab" style="width: 165px;">
                        	<label style="padding-left: 4px;">Experiencia</label>
                            <div class="seluectBox s1">
                                <?php echo form_dropdown('anos_experiencia', $options['anos_experiencia_short'], $this->input->get('anos_experiencia'), 'style="width:156px;" class="comboBox1"') ?>
                                <div class="clr"></div>
                            </div>
                        </div>
                        <div class="clear"></div>
                        <div class="campo-reg-lab" style="width: 165px;">
                        	<label style="padding-left: 4px;">Nº de conciertos</label>
                            <div class="selectBox">
                                <?php echo form_dropdown('numero_conciertos', $options['numero_conciertos_short'], $this->input->get('numero_conciertos'), 'style="width:156px;" class="comboBox1"') ?>
                                <div class="clr"></div>
                            </div>
                        </div>
						
                        <div class="campo-reg-lab" style="width: 165px;">
                        	<label style="padding-left: 4px;">Talento</label>
                            <div class="selectBox s1">
                                <?php echo form_dropdown('talent', $talents, $this->input->get('talent'), 'style="width:156px;" class="comboBox1"') ?>
                                <div class="clr"></div>
                            </div>
                        </div>
                        
                        <div class="campo-reg-lab" style="width: 165px;">
                        	<label style="padding-left: 4px;">Género</label>
                            <div class="selectBox s1">
                                <?php echo form_dropdown('gender', array(0 => 'Seleccione...', 'Masculino' => 'Masculino', 'Femenino' => 'Femenino'), $this->input->get('gender'), 'style="width:156px;" class="comboBox1"') ?>
                                <div class="clr"></div>
                            </div>
                        </div>

                        <input type="submit" class="bot-buscar" value="buscar" style=" margin-bottom: 60px; margin-top: 19px; float:left;"/>
                    </div>
                </form>
                <div class="clear"></div>

                <?php if (!empty($datos)): ?>
                    <div class="resultados-perfil">
                        <?php if ($datos->exists()): ?>


                            <div class="resultados">Resultados encontrados <b>(<?php echo $datos->paged->total_rows; ?>)</b> para su busqueda</div>

                            <?php foreach ($datos as $dato): ?>
                                <div class="res-perfil">
                                    <div class="foto-banda">
                                        <a href="<?php echo site_url('perfil/' . $dato->inshaka_url) ?>" style="display:block; height:201px; overflow:hidden;">
                                          
                                          <?php
                                          if($dato->profile_picture =="") { ?>
                                            <img src="<?php echo site_url("assets/images/imagensino.png") ?>" style="width:253px;" >
                                            <?php }
                                            else{ ?>
                                             <img src="<?php echo uploads_url($dato->profile_picture) ?>" style="width:253px;">
                                              <?php }
                                          ?>
                                         </a>
                                        <div class="res-datos">
                                            <div class="res-txt">Ubicación: <b><?php echo $dato->city ?></b></div>
                                            <div class="res-txt">Experiencia: 
                                                <?php if (!empty($dato->users_personal_info->anos_experiencia)): ?>
                                                    <b><?php echo $dato->users_personal_info->anos_experiencia ?> años</b>
                                                <?php else: ?>
                                                    <b>No definida</b>
                                                <?php endif; ?>

                                            </div>
                                            <div class="res-txt">Edad: <b><?php echo calculate_years_old($dato->birthday) ?></b></div>
                                            <div class="res-txt">Género: 
                                                <?php if ($dato->musical_gender->limit(3)->get()->exists()) : ?>
                                                    <b>
                                                        <?php foreach ($dato->musical_gender as $musical_gender) : ?>
                                                            <?php echo $musical_gender->name . (next($dato->musical_gender) == true ? ',' : null) ?>
                                                        <?php endforeach; ?>
                                                    </b>
                                                <?php else: ?>
                                                    <b>No definido(s)</b>
                                                <?php endif; ?>
                                            </div>

                                            <div class="res-txt">Talento: 
                                                <?php if ($dato->talent->limit(3)->get()->exists()) : ?>
                                                    <b>
                                                        <?php foreach ($dato->talent as $talent) : ?>
                                                            <?php echo $talent->talents_category->name, ' ', $talent->name . (next($dato->talent) == true ? ',' : null) ?>
                                                        <?php endforeach; ?>
                                                    </b>
                                                <?php else: ?>
                                                    <b>No definido(s)</b>
                                                <?php endif; ?>
                                            </div>

                                            <div class="res-txt">Talento: <b>Voz, teclado</b></div>
                                            <div class="bot-acc"><a href="<?php echo site_url(array('perfil', $dato->inshaka_url)) ?>">Ver perfil</a></div>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>

                            <div class="clear"></div>

                            <?php if ($datos->paged->total_pages > 1) : ?>
                                <!-- Paginador -->
                                <div class="paginador">
                                    <?php if ($datos->paged->has_previous) : ?>
                                        <a href="<?php echo sprintf($paginator_url, $datos->paged->previous_page) ?>"><div class="pag-prev"></div></a>
                                    <?php endif; ?>

                                    <div class="numeros">
                                        <?php for ($i = 1, $total_pages = $datos->paged->total_pages; $i <= $total_pages; $i++) : ?>
                                            <div class="<?php echo $i == $datos->paged->current_page ? 'numero-act' : 'numero' ?>">
                                                <a href="<?php  echo $i != $datos->paged->current_page ? sprintf($paginator_url, $i) : 'javascript:;' ?>">
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

                        <?php else : ?>
                            <div class="resultados">Su búsqueda no produjo resultados.</div>
                        <?php endif; ?>


                    </div>

                <?php endif; ?>
            </div>
        </div>
    </div>

    <div class="clr"></div>

</div>