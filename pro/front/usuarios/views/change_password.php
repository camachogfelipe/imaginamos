<?php echo form_open() ?>
<div class="contenido">

    <div class="clear"></div>


    <div class="clear"></div>
    <div class="selectores" id="registro">
        <div class="registro-campos">
        	<a class="bot-rosa2 cambia-cont" href="<?php echo site_url('perfil') ?>">Volver al perfil</a>
            <div class="clr"></div>
            <div class="acotacion-campo2">Cambiar contraseña</div>

            <?php if (!empty($alert_messages)) : ?>
                <div><?php echo $alert_messages ?></div>
            <?php endif; ?>
            <div class="campo-reg-lab">
            	<label>Contraseña actual</label>
                <input name="old" type="password" class="campo" /><div class="clear"></div>
            </div>
            
            <div class="campo-reg-lab">
            	<label>Nueva contraseña</label>
            	<input name="new" type="password" class="campo"  /><div class="clear"></div>
            </div>
            <div class="campo-reg-lab">
            	<label>Repetir nueva contraseña</label>
            	<input name="new_confirm" type="password" class="campo"  style="margin-right:0;" /><div class="clear"></div>
             </div>
            <div class="clr"></div>
        </div>


        <div class="clr"></div>

    </div>


    <div class="clr"></div>


</div>
<div class="contenido">
    <input type="submit" class="bot-psw" value="Cambiar contraseña"/>
    <div class="clr"></div>
</div>
<?php echo form_close() ?>