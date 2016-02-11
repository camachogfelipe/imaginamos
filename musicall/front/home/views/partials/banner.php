<?php if ($show_principal_banner) : ?>

    <div class="bgSlider">
        <div class="conSlider">
            <div id="slides">
                <div class="slides_container">
                    <a href="#"><img src="images/slide1.png" alt=""></a>
                    <a href="<?php echo site_url('usuarios/forgot-password') ?>"><img src="images/slide2.png" alt=""></a>
                </div>
            </div>
        </div>

        <?php if (!$is_usuario) : ?>
            <div class="login">  
                <?php echo form_open('usuarios/login?do') ?>
                <input name="username" type="text" class="textField" placeholder="Usuario..."/>
                <input name="password" type="password" class="textPass" placeholder="Contraseña..." />
                <input type="submit" class="submit" value="" />
                <a href="<?php echo site_url('usuarios/forgot-password') ?>" class="help">¿Olvido su Contraseña?</a>
                <?php echo form_close() ?>
            </div>
        <?php endif; ?>
    </div>

<?php endif; ?>