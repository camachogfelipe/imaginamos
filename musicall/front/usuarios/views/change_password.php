<?php echo form_open() ?>
<div class="contenido">

    <div class="clear"></div>


    <div class="clear"></div>
    <div class="selectores" id="registro">
        <div class="registro-campos">
            <div class="acotacion-campo2">Cambiar contraseña</div>

            <?php if (!empty($alert_messages)) : ?>
                <div><?php echo $alert_messages ?></div>
            <?php endif; ?>
                
            <input name="old" type="password" class="campo" placeholder="Contraseña actual"  /><div class="clear"></div>
            <input name="new" type="password" class="campo" placeholder="Nueva contraseña"  /><div class="clear"></div>
            <input name="new_confirm" type="password" class="campo" placeholder="Repetir nueva contraseña"  style="margin-right:0;" /><div class="clear"></div>
            <div class="clr"></div>
        </div>


        <div class="clr"></div>

    </div>


    <div class="clr"></div>


</div>
<div class="contenido">
    <input type="submit" class="bot-registrar" value="Guardar"/>
</div>
<?php echo form_close() ?>