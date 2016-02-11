<div class="bgEncabezado">
    <div class="conEncabezado">
        <div id="txSeccion">
            <div class="encabezado-tit">Información personal</div>
            <div class="encabezado-subtit">&nbsp;</div>
        </div>
    </div>
</div>
<div class="contenido">
     <div class="registro-campos">
            <a class="bot-rosa2 cambia-cont" href="<?php echo site_url('perfil') ?>">Volver al perfil</a>
            <?php if(isset($_GET['val'])){
              $val=$_GET['val'];
              if($val!=1){ ?>
                <a class="bot-rosa2 cambia-cont" href="<?php echo site_url('usuarios/change-password') ?>">Cambiar contraseña</a>
                <?php
              }              
              }?>
            <a class="bot-rosa2 cambia-cont" href="<?php echo sprintf($urls->current_inshaka_url_format, 'fotos') ?>">Editar album de fotos</a>
            <a class="bot-rosa2 cambia-cont" href="<?php echo sprintf($urls->current_inshaka_url_format, 'videos') ?>">Editar album de videos</a>
            <div class="clr"></div>
        </div>
    
    <?php echo form_open_multipart('perfil/editar/save_informacion_personal', null) ?>
    
    <?php if (!empty($alert_messages)) : ?>
        <div><?php echo $alert_messages ?></div>
    <?php endif; ?>
        
    <div class="carga-img">
        <div class="carga-tit">
        	<h3 >Imagen de perfil</h3>
        </div>
        
        <div style="margin-bottom: 2em;">
            <?php if (!empty($datos->profile_picture)): ?>
            <div><img src="<?php echo uploads_url($datos->profile_picture) ?>" width="253" alt="" /></div>
            <?php endif; ?>
            <small style="font-size: .6em">Tamaño máximo de 1MB. JPG, GIF, PNG.</small><br>
            <input type="file" name="profile_picture" />
        </div>
    
        <div class="clear"></div>
    </div>
    <div class="selectores" id="registro">

        <div class="registro-campos">
        	<div class="campo-reg-lab">
            	<label>Nombre</label>
            	<input type="text" class="campo" value="<?php echo $datos->first_name ?>"  />
            </div>
            <div class="campo-reg-lab">
            	<label>Apellido</label>
            	<input type="text" class="campo" value="<?php echo $datos->last_name ?>"  />
			</div>
            
             <div class="campo-reg-lab">
            	<label>E-mail</label>
            	<input type="text" class="campo" style="margin-right:0;" value="<?php echo $datos->email ?>" />
             </div>
            <div class="clr"></div>
        </div>

        <div class="registro-campos" >
        	<div class="campo-reg-lab" >
            	<label>Ciudad</label>
                <div class="selectBox" id="select-largo2">
                    <div class="ui-widget">
                        <input id="city" class="campo"  value="<?php echo $datos->city ?>"  />
                    </div>
                </div>
            </div>
            <div class="campo-reg-lab" style="width:190px;margin-left: 10px;">
            	<label>Fecha de nacimiento</label>
            	<input type="text" name="birthday" class="campo date-picker" value="<?php echo $datos->birthday ?>"  autocomplete="off" readonly="true" style="margin:0;"/>
            </div>
			
            <div class="campo-reg-lab" style="margin-left: -6px; width: 128px;">
            	<label>Sexo</label>
                <div class="selectBox"  id="select-peq2" style="margin-left: 6px;">
                    <?php echo form_dropdown('gender', array(0 => 'Sexo', 'Masculino' => 'Masculino', 'Femenino' => 'Femenino'), (!empty($datos->gender) ? $datos->gender : 0), 'style="width:122px;" class="comboBox1"') ?>
                    <div class="clr"></div>
                </div>
            </div>
            <div class="campo-reg-lab">
            	<label>Teléfono</label>
            	<input type="text" class="campo"  value="<?php echo $datos->phone ?>"  style="float:left;"/>
            	<div class="clr"></div>
            </div>
        </div>
        <div class="registro-campos">
            
            <div class="clr"></div>
        </div>
        <div class="registro-campos">
        	<div class="campo-reg-lab">
            	<label>Biografía</label>
            	<textarea name="bio" id="" cols="30" rows="10" placeholder="Biografía..." style="width:939px;"><?php echo $datos->bio ?></textarea>
            </div>
            <div class="clr"></div>
        </div>
       
    </div>


    <div class="clr"></div>


</div>
<div class="contenido">
    <input type="submit" class="bot-registrar" value="actualizar"/>
</div>