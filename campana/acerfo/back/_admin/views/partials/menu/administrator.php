<div style="float: left">
    <a href="http://imaginamos.com" target="_blank">
        <img src="<?php echo back_asset('img/logo_admin.png'); ?>" alt="Ver sitio" style="position: relative;top: 2px;float: left;left: -15px" height="40">
    </a>
    <a href="<?php echo base_url() ?>cms">
        <strong title="Perfil">Hola, <?php echo ucwords($this->session->userdata('username')) ?></strong>
    </a>
</div>

<?php if (true === $is_superadmin) : ?>
    <div class="setting">
        <a href="<?php echo cms_url('admin/dashboard') ?>">
            <strong>Administradores</strong>
        </a>
        <img src="//cms.imaginamos.com/images/gear.png" class="gear">
    </div>
<?php endif; ?>

<div title="Ir a mi sitio">
    <a href="<?php echo base_url() ?>" target="_blank"><b>Ver sitio</b></a>
    <img src="<?php echo back_asset('img/icons/home.png') ?>" alt="Ver sitio" style="position: relative;top: -7px">
</div>
<div class="logout" title="Clic">
    <a href="<?php echo cms_url('login/logout') ?>"><strong>Salir</strong></a>
</div> 

