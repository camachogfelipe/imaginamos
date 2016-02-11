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
    
    <?php
foreach ($menu_panel as $item) :
    $ban = false;
    ?>
    <li class="limenu">
        <a href="<?php echo (isset($item['url']) ? site_url($item['url']) : '#') ?>">
            <span class="ico gray shadow home"></span>
            <strong><?php echo ($item['title']) ?></strong>
        </a>

        <?php
        if (isset($item['id'])) {
            $this->load->model('_admin/submenu');
            $datos_submenu = new SubMenu();
            $data = array('idmenu' => $item['id']);
            if ($datos_submenu->get_where($data)->exists()) {
                echo "<ul>";
                foreach ($datos_submenu->all as $subitem) {
                    ?>
                <li>
                    <a href="<?php echo base_url() ?><?php echo $subitem->url ?>">
                        <span></span><b><?php echo $subitem->title ?></b>
                    </a>
                </li>

                <?php
            }
            echo "</ul>";
        }
    }
    ?>
    <?php
    ?>

    </li>
<?php endforeach; ?>

    
<?php endif; ?>
