<?php if ($show_principal_banner) : ?>

    <div class="bgSlider">

        <?php if ($principal_banner->exists()) : ?>
            <div class="conSlider">
                <div id="slides">
                    <div class="slides_container">
                        <?php foreach ($principal_banner as $banner) : ?>
                            <a href="#"><img src="<?php echo uploads_url($banner->image) ?>" alt=""></a>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        <?php endif; ?>

        <?php if (!$is_usuario) : ?>
            <div class="login">  
                <?php echo form_open('usuarios/login?do', 'autocomplete="off"') ?>
                <input name="username" type="text" class="textField" placeholder="Usuario..."/>
                <input name="password" type="password" class="textPass" placeholder="Contraseña..." />
                <input type="submit" class="submit" value="" />
                <a href="<?php echo site_url('usuarios/forgot-password') ?>" class="help">¿Olvido su Contraseña?</a>
                <?php echo form_close() ?>
                <a href="<?php echo site_url('usuarios/facebook_connect') ?>"><img src="<?php echo front_asset('images/connect-facebook.gif') ?>" alt="" /></a>
            </div>
        <?php endif; ?>
    </div>

<?php endif; ?>