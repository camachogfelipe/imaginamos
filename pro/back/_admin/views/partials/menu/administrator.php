<?php if (true === $is_superadmin) : ?>
    <div class="setting">
        <a href="<?php echo cms_url('admin/dashboard') ?>">
            <strong>Administradores</strong>
        </a>
        <img src="//cms.imaginamos.com/images/gear.png" class="gear">
    </div>
<?php endif; ?>

<div class="logout" title="Clic">
    <a href="<?php echo cms_url('login/logout') ?>"><strong>Salir</strong></a>
</div> 

