<!---------------
@autor: Brayan Acebo
brayan.acebo@imaginamos.co
Agencia: imaginamos.com
Bogotá, Colombia, 2012
----------------->


<!--------------- Menu para usuarios de rol admin -->
<?php if (TRUE === $menu_superadmin) : ?>
    <li class = "limenu">
        <a href = "<?php echo base_url() ?>cms">
            <img src = "<?php echo back_asset('img/icons/home.png') ?>" style = "margin-right: -20px">
            <span class = "ico gray shadow" ></span><b>Dashboard
            </b>
        </a>
    </li>
    <li class = "limenu">
        <a href = "<?php echo cms_url('admin/administradores') ?>">
            <img src = "<?php echo back_asset('img/icons/administrator.png') ?>" style = "margin-right: -20px">
            <span class = "ico gray shadow" ></span><b>Administradores
            </b>
        </a>
    </li>
<?php endif; ?>
<?php if (FALSE === $menu_superadmin) : ?>
    <!-- Aca el menu del usuario -->
<?php endif; ?>
