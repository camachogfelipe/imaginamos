



<div class="bgEncabezado">
    <div class="conEncabezado">
        <div id="txSeccion">
            <div class="encabezado-tit">Ingresa a Inshaka</div>
            <div class="encabezado-subtit">Con tus datos de registro o con tu cuenta de Facebook</div>
        </div>
    </div>
</div>
<div class="contenido">


    <div class="clear"></div>
    <div class="selectores" id="acceso">

        <div class="login2">
        	<div class="log-iz">
				<?php echo form_open($action_form) ?>
                    <div class="terminos-tit" style="color:#000;">Introduce los datos de acceso a tu perfil:</div>
                    <div>
                        <?php echo !empty($alert_messages) ? $alert_messages : null ?>
                        <div class="clr"></div>
                    </div>
                    
                     <div class="clr"></div>
                    <div class="campos-login">
                    <input name="username" class="textField" type="text" placeholder="Usuario...">
                    <input name="password" class="textPass" type="password" placeholder="Contraseña...">
                    <input class="submit" type="submit" value="">
                    <div class="clr"></div>
                    </div>
                     <div class="clr"></div>
                    
                    <a class="help" href="<?php echo $remember_pass_url ?>">¿Olvido su Contraseña?</a>
                <?php echo form_close() ?>
            </div>
            <div class="log-de">
            	<div class="terminos-tit" style="color:#000;">O conéctate con Facebook:</div>
                <div class="b-facebook">
                    <a href="<?php echo site_url('usuarios/facebook_connect') ?>" ><img src="<?php echo front_asset('images/connect-facebook.gif') ?>" alt="" /></a>
                </div>
            </div>
            <div class="clr"></div>
            
            
        </div>

        <div class="acceso-registro">
            <div class="terminos-tit" style="color:#000;">Si todavía no tienes tu cuenta regístrate:</div>
            <a href="#seleccion-registro" class="registro-modal"><div class="bot-registro2">Regístrate</div></a>
        </div>

    </div>


    <div class="clr"></div>


</div>