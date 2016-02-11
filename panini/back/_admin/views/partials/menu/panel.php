
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
    
<!--    <li class = "limenu">
        <a href = ""><img src = "<?php echo back_asset('img/icons/sphere.png') ?>" style = "margin-right: -20px"><span class = "ico gray shadow" ></span><b>Home</b></a>
        <ul>
            <li><a href = "<?php echo cms_url('banner') ?>">Banner</a></li>
            <li><a href = "<?php echo cms_url('destacado') ?>">Destacados</a></li>
        </ul>
    </li>-->
    
    <li class = "limenu"><a href = "<?php echo cms_url('registro') ?>"><img src = "<?php echo back_asset('img/icons/sphere.png') ?>" style = "margin-right: -20px"><span class = "ico gray shadow" ></span><b>Registro</b></a></li>
    
    
   





<?php endif; ?>
