<?php if ($show_header_perfil) : ?>
    <div class="menu-perfil">
        <ul>
            <a href="<?php echo site_url('perfil') ?>"><li class="c1">Mishaka</li></a>
            <a href="<?php echo site_url('perfil/build-a-band') ?>"><li class="c2">Mi build a band</li></a>
            <a href="<?php echo site_url('perfil/audiciones') ?>"><li class="c3">Mis audiciones</li></a>
            <a href="<?php echo site_url('perfil/directorios') ?>"><li  class="c4">Mis directorios</li></a>
            <a href="<?php echo site_url('perfil/clasificados') ?>"><li class="c5">Mis clasificados</li></a>
            <div class="perfil-tit">perfil privado <?php echo $current_username ?></div>
        </ul>
    </div>
<?php endif; ?>