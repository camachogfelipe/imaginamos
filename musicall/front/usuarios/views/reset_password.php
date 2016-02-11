
<?php echo form_open($action_form, null, $form_idden) ?>
<div class="contenido">

    <div class="clear"></div>
    <div class="selectores" id="registro">
        <div class="registro-campos">
            <div class="acotacion-campo2">Crear nueva contraseña</div>
            
            <h5 style="margin:0 0 1em .8em;">Ingresa tu nueva contraseña para poder acceder nuevamente.</h5>
            <div class="clear"></div>
            <?php if (!empty($alert_messages)) : ?>
                <div><?php echo $alert_messages ?></div>
            <?php endif; ?>
                
            <?php echo form_input($new_password_input) ?>  <div class="clear"></div>
             <?php echo form_input($new_password_confirm_input) ?>  <div class="clear"></div>
        
            <div class="clr"></div>
        </div>


        <div class="clr"></div>

    </div>


    <div class="clr"></div>


</div>
<div class="contenido">
    <input type="submit" class="bot-registrar" value="Crear"/>
</div>
<?php echo form_close() ?>