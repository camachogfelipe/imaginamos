



<div class="bgEncabezado">
    <div class="conEncabezado">
        <div id="txSeccion">
            <div class="encabezado-tit">Recordar contraseña</div>
          
        </div>
    </div>
</div>
<div class="contenido">


    <div class="clear"></div>
    <div class="selectores" id="acceso">

        <div class="login2">
            <?php echo form_open($action_form) ?>
                <div class="acotacion6">Introduce tu correo electrónico:</div>
                <div>
                    <?php echo !empty($alert_messages) ? $alert_messages : null ?>
                </div>
                
                 <div class="clr"></div>
                
                 <input name="email" class="textField" type="email" placeholder="E-mail..." value="<?php echo set_value('email') ?>" required="true">
                    <input class="submit" type="submit" value="">
                
                 <div class="clr"></div>
                
                <a class="help" href="<?php echo site_url('usuarios/login') ?>">Ingresar a Inshaka</a>
            <?php echo form_close() ?>
        </div>


    </div>


    <div class="clr"></div>


</div>