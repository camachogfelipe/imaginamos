<style>
    input[type="checkbox"] {

        margin-right: -18px;
    }
</style>
<div class="selectores-band" id="crea-con">
    <form name="form_crar_concierto" action="<?php echo site_url('build_a_band/save_concierto') ?>" method="post">

        <?php if (!empty($alert_messages)) : ?>
            <div><?php echo $alert_messages ?></div>
        <?php endif; ?>


        <div class="selector-iz" id="crea-con">
            <div class="band-op">
                <div class="band-ico">1</div>
                <div class="band-info">
                    <div class="band-tit">Selecciona estos datos para iniciarlos criterios de búsqueda </div>
                    <div class="band-cont">

                        <div class="calendar">
                            <div class="calendar-tit">Fecha del concierto</div>
                            <input name="fecha" id="basic_example_1" class="date-picker2 campo" placeholder="Fecha y hora del show" value="<?php echo $this->input->post('fecha') ?>" >
                        </div>

						 <div class="campo-reg-lab">
                        	<label style="padding-left: 4px;">Ciudad</label>
                        	<input type="text" class="campo3" name="ciudad" id="city3" value="<?php echo $this->input->post('ciudad') ?>" />
                        </div>
                        
                        <div class="campo-reg-lab">
                        	<label style="padding-left: 4px;">Género musical</label>
                            <div class="selectBox" id="select-largo">
                                <?php echo form_dropdown('genero_musical', $musical_genders, null, 'style="width:386px;"   class="comboBox1" '); ?>
                                <div class="clr"></div>
                            </div>
                        </div>
                        
                        <div class="campo-reg-lab">
                        	<label style="padding-left: 4px;">Características del concierto</label>
                        </div>
                            <div class="selectBox"  id="select-peq" >
                                <select  style="width:122px;"   class="comboBox1" name="tipo"  >
                                    <option selected="selected" value="">Tipo</option>
                                    <option value="público" <?php if($this->input->post('tipo') == 'público'){echo 'selected';} ?>>Público</option>
                                    <option value="privado" <?php if($this->input->post('tipo') == 'privado'){echo 'selected';} ?>>Privado</option>
                                </select>
                                <div class="clr"></div>
                            </div>
                            <div class="selectBox"  id="select-peq">
                                <select  style="width:122px;"   class="comboBox1" name="aire_libre"  >
                                    <option selected="selected" value="">Aire libre</option>
                                    <option value="si" <?php if($this->input->post('aire_libre') == 'si'){echo 'selected';} ?>>Si</option>
                                    <option value="no" <?php if($this->input->post('aire_libre') == 'no'){echo 'selected';} ?>>No</option>
                                </select>
                                <div class="clr"></div>
                            </div>
                            <div class="selectBox"  id="select-peq" style="margin-right:0;">
                                <select  style="width:122px;"   class="comboBox1" name="gratuito"  >
                                    <option value="gratuito" <?php if($this->input->post('gratuito') == 'gratuito'){echo 'selected';} ?>>Gratuito</option>
                                    <option value="pago" <?php if($this->input->post('gratuito') == 'pago'){echo 'selected';} ?>>Pago</option>                                                         
                                </select>
                                <div class="clr"></div>
                            </div>
                        
                        
                        <div class="campo-reg-lab">
                        	<label style="padding-left: 4px;">Boletería</label>
                            <div class="selectBox" id="select-largo">
                                <select  style="width:386px;"   class="comboBox1" name="boleteria"  >
                                    <option selected="selected" value="">Boletería</option>
                                    <option value="virtual" <?php if($this->input->post('boleteria') == 'virtual'){echo 'selected';} ?>>Virtual</option>
                                    <option value="empresa" <?php if($this->input->post('boleteria') == 'empresa'){echo 'selected';} ?>>Empresa</option>
                                    <option value="inshaka" <?php if($this->input->post('boleteria') == 'inshaka'){echo 'selected';} ?>>Quiero que INSHAKA me recomiende</option>
                                    <option value="no" <?php if($this->input->post('boleteria') == 'no'){echo 'selected';} ?>>No</option>
    
                                </select>
                                <div class="clr"></div>
                            </div>
                        </div>
                        
                        <div class="campo-reg-lab">
                        	<label style="padding-left: 4px;">Presupuesto General</label>
                        	<input type="number" class="campo3"  name="presupuesto_general" value="<?php echo $this->input->post('presupuesto_general'); ?>"  />
                        </div>
                    </div>
                </div>
                <div class="clr"></div>
            </div>

            <div class="band-op">
                <div class="band-ico">2</div>
                <div class="band-info">
                    <div class="band-tit">Selecciona las caracterísitcas generales</br>de tu concierto </div>
                    <div class="band-cont">
                    	<div class="campo-reg-lab">
                        	<label style="padding-left: 4px;">Nombre del concierto</label>
                       	    <input type="text" class="campo3" name="nombre_concierto" value="<?php echo $this->input->post('nombre_concierto'); ?>" />
                        </div>
                        
                        <div class="campo-reg-lab">
                        	<label style="padding-left: 4px;">Número de bandas</label>
                            <div class="selectBox" id="select-largo">
                                <select  style="width:386px;"   class="comboBox1" name="numero_bandas" >
                                    <option selected="selected" value="" >Número de bandas</option>
                                    <option value="1" <?php if($this->input->post('numero_bandas') == '1'){echo 'selected';} ?>>1</option>
                                    <option value="2" <?php if($this->input->post('numero_bandas') == '2'){echo 'selected';} ?>>2</option>
                                    <option value="3" <?php if($this->input->post('numero_bandas') == '3'){echo 'selected';} ?>>3</option>
                                    <option value="4" <?php if($this->input->post('numero_bandas') == '4'){echo 'selected';} ?>>4</option>
                                    <option value="5" <?php if($this->input->post('numero_bandas') == '5'){echo 'selected';} ?>>5</option>
                                    <option value="6" <?php if($this->input->post('numero_bandas') == '6'){echo 'selected';} ?>>6</option>
                                    <option value="7" <?php if($this->input->post('numero_bandas') == '7'){echo 'selected';} ?>>7</option>
                                    <option value="8" <?php if($this->input->post('numero_bandas') == '8'){echo 'selected';} ?>>8</option>
                                    <option value="9" <?php if($this->input->post('numero_bandas') == '9'){echo 'selected';} ?>>9</option>
                                    <option value="10" <?php if($this->input->post('numero_bandas') == '10'){echo 'selected';} ?>>10</option>
                                </select>
                                <div class="clr"></div>
                            </div>
                        </div>
                        
                        <div class="campo-reg-lab">
                        	<label style="padding-left: 4px;">Capacidad estimada</label>
                            <div class="selectBox" id="select-largo">
                                <select  style="width:386px;"   class="comboBox1" name="capacidad_estimada"  >
                                    <option value="">Capacidad estimada</option>
                                    <option value='0 - 1000' <?php if($this->input->post('capacidad_estimada') == '0 - 1000'){echo 'selected';} ?>>0 - 1000</option>
                                    <option value="1000 - 3000" <?php if($this->input->post('capacidad_estimada') == '1000 - 3000'){echo 'selected';} ?>>1000 - 3000</option>
                                    <option value="3000 - 5000" <?php if($this->input->post('capacidad_estimada') == '3000 - 5000'){echo 'selected';} ?>>3000 - 5000</option>
                                    <option value="5000 - 10000" <?php if($this->input->post('capacidad_estimada') == '5000 - 10000'){echo 'selected';} ?>>5000 - 10000</option>
                                    <option value="10000 - Más" <?php if($this->input->post('capacidad_estimada') == '10000 - Más'){echo 'selected';} ?>>10000 - Más</option>
                                </select>
                                <div class="clr"></div>
                            </div>
                            <div class="clr"></div>
                         </div>

                    </div>
                </div>
                <div class="clr"></div>
            </div>


            <div class="band-op">
                <div class="band-ico">3</div>
                <div class="band-info">
                    <div class="band-tit">Selecciona las caracterísitcas generales</br>de la producción</div>
                    <div class="band-cont">
                        <div class="lista-check3">
                            <div class="elemento-check2">
                                <input id="check_prim" type="checkbox" name="caracteristicas[]" value="Necesito ubicación">
                                <label for="check_01">Necesito ubicación</label>
                            </div>
                            <div class="clear"></div>
                            <div class="elemento-check2">
                                <input id="check_prim" type="checkbox" name="caracteristicas[]" value="Tengo ubicación">
                                <label for="check_01">Tengo ubicación</label>
                            </div>
                            <div class="elemento-check2">
                                <input id="check_prim" type="checkbox" name="caracteristicas[]" value="Escenario">
                                <label for="check_01">Escenario</label>
                            </div>
                            <div class="elemento-check2">
                                <input id="check_prim" type="checkbox" name="caracteristicas[]" value="Sillas">
                                <label for="check_01">Sillas</label>
                            </div>
                            <div class="elemento-check2">
                                <input id="check_prim" type="checkbox" name="caracteristicas[]" value="Vestidores">
                                <label for="check_01">Vestidores</label>
                            </div>
                            <div class="elemento-check2">
                                <input id="check_prim" type="checkbox" name="caracteristicas[]" value="Luces">
                                <label for="check_01">Luces</label>
                            </div>
                            <div class="elemento-check2">
                                <input id="check_prim" type="checkbox" name="caracteristicas[]" value="Efectos especiales">
                                <label for="check_01">Efectos especiales</label>
                            </div>
                            <div class="elemento-check2">
                                <input id="check_prim" type="checkbox" name="caracteristicas[]" value="Backline">
                                <label for="check_01">Backline</label>
                            </div>
                            <div class="elemento-check2">
                                <input id="check_prim" type="checkbox" name="caracteristicas[]" value="Proyección de video">
                                <label for="check_01">Proyección de video</label>
                            </div>
                            <div class="elemento-check2">
                                <input id="check_prim" type="checkbox" name="caracteristicas[]" value="Ingeniero de sonido">
                                <label for="check_01">Ingeniero de sonido</label>
                            </div>

                            <div class="elemento-check2">
                                <input id="check_prim" type="checkbox" name="caracteristicas[]" value="Barricadas">
                                <label for="check_01">Barricadas</label>
                            </div>
                            <div class="elemento-check2">
                                <input id="check_prim" type="checkbox" name="caracteristicas[]" value="Transporte">
                                <label for="check_01">Transporte</label>
                            </div>
                            <div class="elemento-check2">
                                <input id="check_prim" type="checkbox" name="caracteristicas[]" value="Catering">
                                <label for="check_01">Catering</label>
                            </div>
                            <div class="elemento-check2">
                                <input id="check_prim" type="checkbox" name="caracteristicas[]" value="Seguridad">
                                <label for="check_01">Seguridad</label>
                            </div>
                            <div class="campo-reg-lab">
                        		<label style="padding-left: 4px;">Otros</label>
                            	<input type="text" class="campo3"name="otros"  />
                            </div>
                            <div class="campo-reg-lab">
                        		<label style="padding-left: 4px;">Presupuesto</label>
                            	<input type="text" class="campo3"  name="presupuesto_concierto"  />
                            </div>

                            <div class="clear"></div>
                        </div>

                        <div class="clr"></div>

                    </div>
                </div>
                <div class="clr"></div>
            </div>



        </div>
        <div class="selector-de" style="height:1073px;">

            <div class="band-op">
                <div class="band-ico">4</div>
                <div class="band-info">
                    <div class="band-tit">Selecciona las caracterísitcas</br>de la promoción</div>
                    <div class="band-cont">
                        <div class="lista-check3">
                            <div class="elemento-check2">
                                <input id="check_prim" type="checkbox" name="caracteristicas_promocion[]" value="Aire libre">
                                <label for="check_01">Aire libre</label>
                            </div>
                            <div class="elemento-check2">
                                <input id="check_prim" type="checkbox" name="caracteristicas_promocion[]" value="Impresa">
                                <label for="check_01">Impresa</label>
                            </div>
                            <div class="elemento-check2">
                                <input id="check_prim" type="checkbox" name="caracteristicas_promocion[]" value="Virtual">
                                <label for="check_01">Virtual</label>
                            </div>
                            <div class="elemento-check2">
                                <input id="check_prim" type="checkbox" name="caracteristicas_promocion[]" value="Televisión">
                                <label for="check_01">Televisión</label>
                            </div>
                            <div class="elemento-check2">
                                <input id="check_prim" type="checkbox" name="caracteristicas_promocion[]" value="Radio">
                                <label for="check_01">Radio</label>
                            </div>
                            <div class="elemento-check2">
                                <input id="check_prim" type="checkbox" name="caracteristicas_promocion[]" value="Productos">
                                <label for="check_01">Productos</label>
                            </div>
                        </div>
                        <div class="campo-reg-lab">
                        	<label style="padding-left: 4px;">Presupuesto</label>
                        	<input type="number" class="campo3" name="presupuesto_promocion" />
                        </div>

                        <div class="clr"></div>
                        <div class="lista-check3">
                            <div class="elemento-check">
                                <input id="check_prim" type="radio" name="promocion" value="Quiero que INSHAKA se encargue de hacer la promoción">
                                <label for="check_01">Quiero que INSHAKA se encargue de hacer la promoción </label>
                            </div>
                            <div class="elemento-check">
                                <input id="check_prim" type="radio" name="promocion" value="Me encargo yo mismo" >
                                <label for="check_01">Me encargo yo mismo</label>
                            </div>
                            <div class="clr"></div>
                            <div class="elemento-check">
                                <input id="check_prim" type="checkbox" name="mensaje">
                                <label for="check_01">Enviar un mensaje a las empresas del Directorio especializado INSHAKA</label>
                            </div>

                        </div>
                    </div>
                    <input type="submit" value="crear" class="bot-crear" />
                </div>
                <div class="clr"></div>
            </div>
        </div>

        <div class="clr"></div>
    </form>
</div>

<div class="clr"></div>
</div>