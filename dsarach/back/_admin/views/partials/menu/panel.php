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
    print_r($menu_superadmin)
<?php endif; ?>
    <li class = "limenu">
        <a href = "<?php echo base_url() ?>cms/contacto">
            <img src = "<?php echo back_asset('img/icons/administrator.png') ?>" style = "margin-right: -20px">
            <span class = "ico gray shadow" ></span><b>Info. contacto
            </b>
        </a>
    </li>
    <li class = "limenu">
        <a href = "<?php echo cms_url('banner') ?>">
            <img src = "<?php echo back_asset('img/icons/camera.png') ?>" style = "margin-right: -20px">
            <span class = "ico gray shadow" ></span><b>Banner
            </b>
        </a>
    </li>
    <li class = "limenu">
        <a href = "<?php echo cms_url('destacados') ?>">
            <img src = "<?php echo back_asset('img/icons/file.png') ?>" style = "margin-right: -20px">
            <span class = "ico gray shadow" ></span><b>Destacados
            </b>
        </a>
    </li>
    <li class = "limenu">
        <a href = "<?php echo cms_url('multimedia') ?>">
            <img src = "<?php echo back_asset('img/icons/target.png') ?>" style = "margin-right: -20px">
            <span class = "ico gray shadow" ></span><b>Multimedia
            </b>
        </a>
    </li>
    <li class = "limenu">
        <a href = "<?php echo cms_url('empresa') ?>">
            <img src = "<?php echo back_asset('img/icons/group.png') ?>" style = "margin-right: -20px">
            <span class = "ico gray shadow" ></span><b>Empresa
            </b>
        </a>
    </li>
    <li class = "limenu">
        <a href = "<?php echo cms_url('quehacemos') ?>">
            <img src = "<?php echo back_asset('img/icons/certificate.png') ?>" style = "margin-right: -20px">
            <span class = "ico gray shadow" ></span><b>Qué hacemos
            </b>
        </a>
    </li>
    <li class = "limenu">
        <a href = "<?php echo cms_url('comolohacemos') ?>">
            <img src = "<?php echo back_asset('img/icons/compress.png') ?>" style = "margin-right: -20px">
            <span class = "ico gray shadow" ></span><b>Cómo lo hacemos
            </b>
        </a>
    </li>
    <li class = "limenu">
        <a href = "<?php echo cms_url('aplicaciones') ?>">
            <img src = "<?php echo back_asset('img/icons/diskette.png') ?>" style = "margin-right: -20px">
            <span class = "ico gray shadow" ></span><b>Aplicaciones
            </b>
        </a>
    </li>
    <li class = "limenu">
        <a href = "<?php echo cms_url('calidad') ?>">
            <img src = "<?php echo back_asset('img/icons/encrypt.png') ?>" style = "margin-right: -20px">
            <span class = "ico gray shadow" ></span><b>Calidad
            </b>
        </a>
    </li>
    <li class = "limenu">
        <a href = "<?php echo cms_url('beneficios') ?>">
            <img src = "<?php echo back_asset('img/icons/hand_thumbsup.png') ?>" style = "margin-right: -20px">
            <span class = "ico gray shadow" ></span><b>Beneficios
            </b>
        </a>
    </li>